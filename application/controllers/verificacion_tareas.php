<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Verificacion_tareas extends CI_Controller {

	private $departamento = "Departamento";
	private $sede = "Sede";
	private $locales = "Locales";

	private $table;
	private $table_fields;
	private $table_data;
	private $table_excluded_fields = array( 'CCDD', 'Cod_Sede', 'username', 'fecha_visita', 'fecha_update');
	
	private $conditional;
	private $num_entries;
	private $array_excluded;


	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('tareas_model');

		$this->user = $this->ion_auth->user()->row();
	}

	function index( $CCDD, $Cod_Sede )
	{
		$this->parameters['title'] = "Formatos de Verificación de Tareas";
		$this->parameters['description'] = "Verificación de Tareas del Supervisor Nacional";
		$this->parameters['order'] = 1;
		$this->parameters['main_content'] = "tareas/formulario";
		$this->parameters['user'] = $this->user;

		$this->parameters['departament'] = $this->get_departament( $CCDD );
		$this->parameters['headquarters'] = $this->get_headquarters( $CCDD, $Cod_Sede );

		$this->load->view('frontend/template', $this->parameters);
	}

	function view_detalle()
	{
		$CCDD = $this->input->post('dep');
		$Cod_Sede = $this->input->post('sede');

		$this->parameters['detalle'] = $this->get_data( $CCDD, $Cod_Sede );

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function get_data( $CCDD, $Cod_Sede )
	{
		$query = "SELECT id, CCDD, Cod_Sede, Nombre, Direccion FROM ".$this->locales." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."' ORDER BY id ASC";
		$this->data = $this->convert_utf8->convert_result( $this->tareas_model->only_query( $query ) );

		return $this->data;
	}

	function get_departament( $CCDD )
	{

		$query = "SELECT CCDD, Departamento FROM ".$this->departamento." WHERE CCDD = '".$CCDD."'";
		$departament_data = $this->tareas_model->only_query( $query )->row();

		// return $this->convert_utf8->convert_row( $departament_data );
		return $departament_data;

	}

	function get_headquarters( $CCDD, $Cod_Sede )
	{
		$query = "SELECT Cod_Sede, Nombre_Sede, CCDD FROM ".$this->sede." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
		$sede_data = $this->tareas_model->only_query( $query )->row();

		// return $this->convert_utf8->convert_row( $sede_data );
		return $sede_data;
	}

	function save_actividad()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');
		$seccion = $this->input->post('seccion');

		$this->table = 'ACTIVIDAD';
		$this->conditional = "CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //

		$this->num_entries = $this->tareas_model->count_result( $this->conditional, $this->table ); // Consulto la cantidad de registros //

		// array de campos que se excluiran del foreach de grabado //
		if ( $seccion == 1)
		{
			$this->array_excluded = ['A2_2_1_SINO', 'A2_2_1_OBS', 'A2_2_2_TOTAL', 'A2_2_2_OBS', 'A2_2_3_TOTAL', 'A2_2_3_OBS', 'A2_2_4_SINO', 'A2_2_4_OBS', 'A2_2_5_SINO', 'A2_2_5_OBS', 'A2_2_6_SINO', 'A2_2_6_OBS', 'A2_2_7_SINO', 'A2_2_7_TOTAL', 'A2_2_7_OBS', 'A2_2_8_TOTAL', 'A2_2_8_OBS', 'A2_2_9_SINO', 'A2_2_9_OBS', 'A2_2_10_TOTAL', 'A2_2_10_OBS', 'A2_2_11_SINO', 'A2_2_11_TOTAL', 'A2_2_11_OBS', 'A2_2_12_SINO', 'A2_2_12_OBS', 'A2_2_13_SINO', 'A2_2_13_OBS', 'A2_2_14_SINO', 'A2_2_14_OBS', 'A2_2_15_SINO', 'A2_2_15_OBS' ];
		}
		else if ( $seccion == 2 )
		{
			$this->array_excluded = ['A1_1_1_SINO', 'A1_1_1__OBS', 'A1_1_2_SINO', 'A1_1_2_OBS', 'A1_1_3_SINO', 'A1_1_3_OBS', 'A1_1_4_SINO', 'A1_1_4_OBS', 'A1_1_5_SINO', 'A1_1_5_OBS' ];
		}
		
		
		// data especifica //
		$this->table_data['CCDD'] = $CCDD;
		$this->table_data['Cod_Sede'] = $Cod_Sede;
		// $this->table_data['username'] = $this->user->username;
		$fecha = date('d/m/Y H:i:s');

		$this->operation();
		
	}

	function save_avance_personal()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');

		$this->table = 'AVANCE_SEL_PERSONAL';
		$this->conditional = "CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //

		$this->num_entries = $this->tareas_model->count_result( $this->conditional, $this->table ); // Consulto la cantidad de registros //

		// array de campos que se excluiran del foreach de grabado //
		$this->array_excluded = [];
		
		
		// data especifica //
		$this->table_data['CCDD'] = $CCDD;
		$this->table_data['Cod_Sede'] = $Cod_Sede;
		// $this->table_data['username'] = $this->user->username;
		$fecha = date('d/m/Y H:i:s');

		$this->operation();
	}

	function view()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');

		$this->conditional = "CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //
		
		$this->parameters['ACTIVIDAD'] = $this->tareas_model->select_data( 'ACTIVIDAD', $this->conditional )->row();
		$this->parameters['AVANCE_PERSONAL'] = $this->tareas_model->select_data( 'AVANCE_SEL_PERSONAL', $this->conditional )->row();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function operation()
	{

		$this->table_fields = $this->tareas_model->get_fields( $this->table ); // obtengo los campos de la tabla //

		// array de campos que se excluiran del foreach de grabado //
		foreach ($this->array_excluded as $value)
		{
			array_push( $this->table_excluded_fields, $value );
		}

		// data asignacion //
		foreach ($this->table_fields as $key => $field_name)
		{
			if ( !in_array( $field_name, $this->table_excluded_fields ) )
			{
				$this->table_data[$field_name] = ($this->input->post($field_name) == '') ? null : $this->input->post($field_name);
			}
		}

		// save data //
		if ( $this->num_entries == 0)
		{
			$affected_rows = $this->tareas_model->insert_data( $this->table_data, $this->table );
		}
		else if ( $this->num_entries > 0 )
		{
			$affected_rows = $this->tareas_model->update_data( $this->table_data, $this->table, $this->conditional );
		}

		// result operation //
		if ( $affected_rows > 0 )
		{
			$message = "Se envio los datos satisfactoriamente!";
			$estado = TRUE;
		}
		else
		{
			$message = "Se ha producido un error, verifique y vuelvalo a intentar.";
			$estado = FALSE;
		}


		$this->parameters['msg'] = $message;
		$this->parameters['estado'] = $estado;
		$data['datos'] = $this->parameters;

		$this->load->view('frontend/json/json_view', $data);
	}


	// function view()
	// {
	// 	$Cod_Formato = $this->input->post('id');
	// 	$CCDD = $this->input->post('CCDD');
	// 	$Cod_Sede = $this->input->post('Cod_Sede');

	// 	$this->parameters['departament'] = $this->get_departament( $CCDD );
	// 	$this->parameters['headquarters'] = $this->get_headquarters( $CCDD, $Cod_Sede );

	// 	$this->conditional = "id = '".$Cod_Formato."' AND CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
	// 	$this->parameters['local'] = $this->convert_utf8->convert_row( $this->formatos_model->select_data( $this->locales, $this->conditional ) );
	// 	$this->parameters['contenido'] = $this->convert_utf8->convert_row( $this->formatos_model->select_data( $this->master_table, $this->conditional ) );

	// 	$data['datos'] = $this->parameters;
	// 	$this->load->view('frontend/json/json_view', $data);
	// }

	// function get_departament( $CCDD )
	// {

	// 	$query = "SELECT CCDD, Departamento FROM ".$this->departamento." WHERE CCDD = '".$CCDD."'";
	// 	$departament_data = $this->formatos_model->only_query( $query );

	// 	return $this->convert_utf8->convert_row( $departament_data );

	// }

	// function get_headquarters( $CCDD, $Cod_Sede )
	// {
	// 	$query = "SELECT Cod_Sede, Nombre_Sede, CCDD FROM ".$this->sede." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
	// 	$sede_data = $this->formatos_model->only_query( $query );

	// 	return $this->convert_utf8->convert_row( $sede_data );
	// }


	// function save()
	// {
	// 	$nro_aplicacion = $this->input->post('nro_aplicacion');
	// 	$CCDD = $this->input->post('CCDD');
	// 	$Cod_Sede = $this->input->post('Cod_Sede');

	// 	// configuracion de la libreria upload
	// 	$config['upload_path'] = './uploads/';
	// 	$config['allowed_types'] = 'png|jpg';
	// 	$config['max_size'] = '2048';
	// 	$config['max_width'] = 0;
	// 	$config['max_height'] = 0;

	// 	$this->load->library('upload',$config);
	// 	//--

	// 	$this->conditional = "Id = '".$nro_aplicacion."' AND CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //
	// 	$exist = $this->formatos_model->count_result( $this->conditional, $this->master_table ); // Consulto la cantidad de registros //

	// 	$this->master_table_fields = $this->formatos_model->get_fields( $this->master_table ); // obtengo los campos de la tabla //
	// 	$this->locales_table_fields = $this->formatos_model->get_fields( $this->locales ); // obtengo los campos de la tabla //

	// 	// array de campos que se excluiran del foreach de grabado //
	// 	$this->master_table_excluded_fields = array( 'Id', 'Imagen', 'username', 'fecha_visita', 'fecha_update', 'estado' ); 
	// 	$this->locales_table_excluded_fields = array( 'Id', 'CCDD', 'Cod_Sede' );
	// 	//--

	// 	// data especifica formato_visita //
	// 	$this->master_data['Id'] = $nro_aplicacion;
	// 	$this->master_data['username'] = $this->user->username;
	// 	$fecha = date('d/m/Y H:i:s');
	// 	$this->master_data['estado'] = 1;
	// 	//--


	// 	// data formato_visita
	// 	foreach ($this->master_table_fields as $key => $field_name)
	// 	{
	// 		if ( !in_array( $field_name, $this->master_table_excluded_fields ) )
	// 		{
	// 			$this->master_data[$field_name] = ($this->input->post($field_name) == '') ? null : utf8_decode($this->input->post($field_name));
	// 		}
	// 	}

	// 	// data locales
	// 	foreach ($this->locales_table_fields as $key => $field_name)
	// 	{
	// 		if ( !in_array( $field_name, $this->locales_table_excluded_fields ) )
	// 		{
	// 			$this->locales_data[$field_name] = ($this->input->post($field_name) == '') ? null : utf8_decode($this->input->post($field_name));
	// 		}
	// 	}

	// 	// subida de imagen
	// 	if (!$this->upload->do_upload('Imagen'))
	// 	{
	// 		$this->errors = array('error' => $this->upload->display_errors());
	// 		$this->result = 0;
	// 	}
	// 	//--

	// 	if ( $exist == 0)
	// 	{
	// 		if ( count($this->errors) == 0 )
	// 		{
	// 			$this->master_data['fecha_visita'] = $fecha;

	// 			$imagen = $this->upload->data();
	// 			$this->master_data['Imagen'] = $imagen['file_name'];

	// 			$this->result = $this->formatos_model->insert_data( $this->master_data, $this->master_table );
	// 		}
	// 	}
	// 	else if ( $exist > 0 )
	// 	{
	// 		$this->master_data['fecha_update'] = $fecha;

	// 		$imagen = $this->upload->data();
	// 		if ( $imagen['file_name'] != '' )
	// 		{
	// 			$this->master_data['Imagen'] = $imagen['file_name'];
	// 		}

	// 		$this->result = $this->formatos_model->update_data( $this->master_data, $this->master_table, $this->conditional );
	// 	}


	// 	$this->result = $this->formatos_model->update_data( $this->locales_data, $this->locales, $this->conditional );// actualiza nombre y direccion del local.


	// 	if ( $this->result > 0 )
	// 	{
	// 		$this->message = "Se envio los datos satisfactoriamente!";
	// 		$this->class_alert = "alert-success";
	// 	}
	// 	else
	// 	{
	// 		$this->message = "Se ha producido un error, verifique y vuelvalo a intentar.";
	// 		$this->class_alert = "alert-danger";
	// 	}

	// 	$this->parameters['title'] = "Formato de Visitas";
	// 	$this->parameters['description'] = "Formato de Visitas a Locales de Aplicacion";
	// 	$this->parameters['order'] = 1;
	// 	$this->parameters['main_content'] = "visitas/message";
	// 	$this->parameters['user'] = $this->user;

	// 	$this->parameters['departament'] = $CCDD;
	// 	$this->parameters['headquarters'] = $Cod_Sede;

	// 	$this->parameters['msg'] = $this->message;
	// 	$this->parameters['class_alert'] = $this->class_alert;

	// 	$this->load->view('frontend/template', $this->parameters);

	// }

}

?>