<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	private $table_format = "Formato";

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->model('formatos_model');

		$this->user = $this->ion_auth->user()->row();
	}

	function reporte_visitas()
	{
		$this->parameters['title'] = "Visitas a Locales de Aplicación";
		$this->parameters['description'] = "Reporte de Visitas a Locales de Aplicacion";
		$this->parameters['main_content'] = "reportes/formato_visitas";
		$this->parameters['order'] = 2;
		$this->parameters['user'] = $this->user;

		$this->load->view('frontend/template', $this->parameters);
	}

	function view_visitas_sede()
	{
		$CCDD = $this->input->get('depa');
		$Cod_Sede = $this->input->get('sede');

		$query = "SELECT Nombre, Accesibilidad, Disponibilidad, Tamanio, Mobiliario, Puertas, Servicios_Higienicos, Infraestructura, Especificaciones_Tecnicas FROM Formato WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
		$visitas_data = $this->formatos_model->only_query( $query );

		// $this->parameters['sEcho'] = 3;
		$this->parameters['aaData'] = $this->convert_utf8->convert_result( $visitas_data );

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}

?>