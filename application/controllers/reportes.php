<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	private $visitas_table = "Formato_Visita";
	private $locales_table = "Locales";

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->model('visitas_model');

		$this->user = $this->ion_auth->user()->row();
	}

	function reporte_visitas()
	{
		$this->parameters['title'] = "Visitas a Locales de Aplicación";
		$this->parameters['description'] = "Reporte de Visitas a Locales de Aplicacion";
		$this->parameters['main_content'] = "reportes/visitas_ubigeo";
		$this->parameters['order'] = 2;
		$this->parameters['user'] = $this->user;

		$this->load->view('frontend/template', $this->parameters);
	}

	function view_visitas_sede()
	{
		$CCDD = $this->input->get('depa');
		$Cod_Sede = $this->input->get('sede');

		// $query = "SELECT Nombre, Accesibilidad, Disponibilidad, Tamanio, Mobiliario, Puertas, Servicios_Higienicos, Infraestructura, Especificaciones_Tecnicas,  CONVERT(char, ISNULL( fecha_update, (select fecha_visita from ".$this->visitas_table." where CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."' ) ), 103 ) as Fecha_Visita FROM ".$this->visitas_table." fv INNER JOIN ".$this->locales_table." lc ON fv.Id = lc.Id AND fv.CCDD = lc.CCDD AND fv.Cod_Sede = lc.Cod_Sede WHERE lc.CCDD = '".$CCDD."' AND lc.Cod_Sede = '".$Cod_Sede."'";
		$query = "SELECT Nombre, Accesibilidad, Disponibilidad, Tamanio, Mobiliario, Puertas, Servicios_Higienicos, Infraestructura, Especificaciones_Tecnicas, DATE_FORMAT( IFNULL( fecha_update, fecha_visita ) , '%d/%m/%Y' ) as Fecha_Visita FROM Formato_Visita fv INNER JOIN Locales lc ON fv.Id = lc.Id AND fv.CCDD = lc.CCDD AND fv.Cod_Sede = lc.Cod_Sede WHERE lc.CCDD = '".$CCDD."' AND lc.Cod_Sede = '".$Cod_Sede."'";
		$visitas_data = $this->visitas_model->only_query( $query );

		// $this->parameters['aaData'] = $this->convert_utf8->convert_result( $visitas_data );
		$this->parameters['aaData'] = $visitas_data->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}

?>