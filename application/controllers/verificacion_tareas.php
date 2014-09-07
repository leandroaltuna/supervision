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

	function get_local()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');

		$query = "SELECT Id, CCDD, Cod_Sede, Nombre, Direccion FROM ".$this->locales." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."' ORDER BY id ASC";
		$this->parameters['detalle'] = $this->tareas_model->only_query( $query )->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
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

	function save_detalle_verificacion()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');
		$codigo = $this->input->post('codigo');

		$this->table = 'DETALLE_VERIFICACION';
		$this->conditional = "Id_Local = '".$codigo."' AND CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //

		$this->num_entries = $this->tareas_model->count_result( $this->conditional, $this->table ); // Consulto la cantidad de registros //

		// array de campos que se excluiran del foreach de grabado //
		$this->array_excluded = ['CCDD', 'Cod_Sede', 'Id_Local'];
		
		
		// data especifica //
		$this->table_data['CCDD'] = $CCDD;
		$this->table_data['Cod_Sede'] = $Cod_Sede;
		$this->table_data['Id_Local'] = $codigo;
		// $this->table_data['username'] = $this->user->username;
		$fecha = date('d/m/Y H:i:s');

		$this->operation();
	}

	function save_seccion_5()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');

		$this->table = 'LOCALES_CAPACITACION_PRESELECCION';
		$this->conditional = "CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //

		$this->num_entries = $this->tareas_model->count_result( $this->conditional, $this->table ); // Consulto la cantidad de registros //

		// array de campos que se excluiran del foreach de grabado //
		$this->array_excluded = ['CCDD', 'Cod_Sede'];
		
		
		// data especifica //
		$this->table_data['CCDD'] = $CCDD;
		$this->table_data['Cod_Sede'] = $Cod_Sede;
		// $this->table_data['username'] = $this->user->username;
		$fecha = date('d/m/Y H:i:s');

		$this->operation();
	}

	function save_examen_pre()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');
		$seccion = $this->input->post('seccion');

		$this->table = 'V_EXAMEN_PRE';
		$this->conditional = "CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //

		$this->num_entries = $this->tareas_model->count_result( $this->conditional, $this->table ); // Consulto la cantidad de registros //

		// array de campos que se excluiran del foreach de grabado //
		if ( $seccion == 1 )
		{
			$this->array_excluded = ['CCDD', 'Cod_Sede', 'N3_7_1_TOTAL', 'N3_7_1_T_APLI', 'N3_7_1_T_ORIE', 'N3_7_1_T_OBS', 'N3_7_2_TOTAL', 'N3_7_2_T_APLI', 'N3_7_2_T_ORIE', 'N3_7_2_T_OBS', 'N3_7_3_SINO', 'N3_7_3_OBS', 'N3_7_4_SINO', 'N3_7_4_OBS', 'N3_7_5_SINO', 'N3_7_5_OBS'];
		}
		else if ( $seccion == 2 )
		{
			$this->array_excluded = ['CCDD', 'Cod_Sede', 'N2_6_1_TOTAL', 'N2_6_1_T_CORD', 'N2_6_1_T_ACL', 'N2_6_1_OBS', 'N2_6_2_TOTAL', 'N2_6_2_T_CORD', 'N2_6_2_T_ACL', 'N2_6_2_OBS', 'N2_6_3_SINO', 'N2_6_3_OBS', 'N2_6_4_SINO', 'N2_6_4_OBS', 'N2_6_5_SINO', 'N2_6_5_OBS'];
		}
		
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
		$this->parameters['LOCALES_CAPACITACION_PRESELECCION'] = $this->tareas_model->select_data( 'LOCALES_CAPACITACION_PRESELECCION', $this->conditional )->row();
		$this->parameters['V_EXAMEN_PRE'] = $this->tareas_model->select_data( 'V_EXAMEN_PRE', $this->conditional )->row();
		

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function view_detalle_iv()
	{
		$CCDD = $this->input->post('depa');
		$Cod_Sede = $this->input->post('sede');
		$codigo = $this->input->post('codigo');

		// consulta //
		$query = "SELECT lc.Id, lc.CCDD, lc.Cod_Sede, lc.Nombre, lc.Direccion, dv.C_4_1_TOTAL, dv.C_4_1_OBS, dv.C_4_2_TOTAL, dv.C_4_2_OBS, dv.C_4_3_TOTAL, dv.C_4_3_OBS_V, dv.C_4_3_OBS_M, dv.C_4_4_TOTAL, dv.C_4_4_OBS_V, dv.C_4_4_OBS_M, dv.C_4_5_TOTAL, dv.C_4_5_OBS, dv.C_4_6_SINO, dv.C_4_6_OBS, dv.C_4_7_TOTAL, dv.C_4_7_OBS, dv.C_4_8_SINO, dv.C_4_8_OBS, dv.C_4_9_SINO, dv.C_4_9_OBS, dv.C_4_10_SINO, dv.C_4_10_OBS, dv.C_4_11_TOTAL, dv.C_4_11_OBS, dv.C_4_12_SINO, dv.C_4_12, dv.C_4_13_SINO, dv.C_4_13, dv.C_4_14_SINO, dv.C_4_14 FROM Locales lc LEFT JOIN DETALLE_VERIFICACION dv ON lc.Id = dv.Id_Local AND lc.CCDD = dv.CCDD AND lc.Cod_Sede = dv.Cod_Sede WHERE lc.Id = '".$codigo."' AND lc.CCDD = '".$CCDD."' AND lc.Cod_Sede = '".$Cod_Sede."';";
		
		$this->parameters['DetalleIV'] = $this->tareas_model->only_query( $query )->row();

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

}

?>