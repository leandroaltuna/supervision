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

	function view_visitas_nacional()
	{

		$query = "SELECT dep.Departamento, count(lc.id) as Total_Locales, ".
				"(select count(*) from Formato_Visita fv where fv.CCDD = dep.CCDD)  as Total_Visitados, ".
				"fn_indicadores_porcentaje(0, 0, dep.CCDD) as Total_P_Visitados, ".
				"fn_indicadores(1, 1, dep.CCDD) as  Accesibilidad_1,".
				"fn_indicadores_porcentaje(1, 1, dep.CCDD) as Accesibilidad_P_1, ".
				"fn_indicadores(1, 2, dep.CCDD)as  Accesibilidad_2,".
				"fn_indicadores_porcentaje(1, 2, dep.CCDD) as Accesibilidad_P_2, ".
				"fn_indicadores(1, 3, dep.CCDD) as  Accesibilidad_3,".
				"fn_indicadores_porcentaje(1, 3, dep.CCDD) as Accesibilidad_P_3, ".
				"fn_indicadores(2, 1, dep.CCDD) as  Disponibilidad_1,".
				"fn_indicadores_porcentaje(2, 1, dep.CCDD) as Disponibilidad_P_1, ".
				"fn_indicadores(2, 2, dep.CCDD) as  Disponibilidad_2,".
				"fn_indicadores_porcentaje(2, 2, dep.CCDD) as Disponibilidad_P_2, ".
				"fn_indicadores(2, 3, dep.CCDD) as  Disponibilidad_3,".
				"fn_indicadores_porcentaje(2, 3, dep.CCDD) as Disponibilidad_P_3, ".
				"fn_indicadores(3, 1, dep.CCDD) as  Tamanio_1, ".
				"fn_indicadores_porcentaje(3, 1, dep.CCDD) as Tamanio_P_1, ".
				"fn_indicadores(3, 2, dep.CCDD) as  Tamanio_2, ".
				"fn_indicadores_porcentaje(3, 2, dep.CCDD) as Tamanio_P_2, ".
				"fn_indicadores(4, 1, dep.CCDD) as  Mobiliario_1, ".
				"fn_indicadores_porcentaje(4, 1, dep.CCDD) as Mobiliario_P_1, ".
				"fn_indicadores(4, 2, dep.CCDD) as  Mobiliario_2, ".
				"fn_indicadores_porcentaje(4, 2, dep.CCDD) as Mobiliario_P_2, ".
				"fn_indicadores(4, 3, dep.CCDD) as  Mobiliario_3, ".
				"fn_indicadores_porcentaje(4, 3, dep.CCDD) as Mobiliario_P_3, ".
				"fn_indicadores(5, 1, dep.CCDD) as  Puertas_1, ".
				"fn_indicadores_porcentaje(5, 1, dep.CCDD) as Puertas_P_1, ".
				"fn_indicadores(5, 2, dep.CCDD) as  Puertas_2, ".
				"fn_indicadores_porcentaje(5, 2, dep.CCDD) as Puertas_P_2, ".
				"fn_indicadores(5, 3, dep.CCDD) as  Puertas_3, ".
				"fn_indicadores_porcentaje(5, 3, dep.CCDD) as Puertas_P_3, ".
				"fn_indicadores(6, 1, dep.CCDD) as  SSHH_1, ".
				"fn_indicadores_porcentaje(6, 1, dep.CCDD) as SSHH_P_1, ".
				"fn_indicadores(6, 2, dep.CCDD) as  SSHH_2, ".
				"fn_indicadores_porcentaje(6, 2, dep.CCDD) as SSHH_P_2, ".
				"fn_indicadores(7, 1, dep.CCDD) as  Infraestructura_1, ".
				"fn_indicadores_porcentaje(7, 1, dep.CCDD) as Infraestructura_P_1, ".
				"fn_indicadores(7, 2, dep.CCDD) as  Infraestructura_2, ".
				"fn_indicadores_porcentaje(7, 2, dep.CCDD) as Infraestructura_P_2, ".
				"fn_indicadores(7, 3, dep.CCDD) as  Infraestructura_3, ".
				"fn_indicadores_porcentaje(7, 3, dep.CCDD) as Infraestructura_P_3, ".
				"fn_indicadores(8, 1, dep.CCDD) as  Especificaciones_1, ".
				"fn_indicadores_porcentaje(8, 1, dep.CCDD) as Especificaciones_P_1, ".
				"fn_indicadores(8, 2, dep.CCDD) as  Especificaciones_2, ".
				"fn_indicadores_porcentaje(8, 2, dep.CCDD) as Especificaciones_P_2 ".
				"FROM Departamento dep ".
				"INNER JOIN Locales lc ON dep.CCDD = lc.CCDD ".
				"GROUP BY dep.CCDD;";
		$nacional_data = $this->visitas_model->only_query( $query );

		$this->parameters['aaData'] = $nacional_data->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}


}

?>