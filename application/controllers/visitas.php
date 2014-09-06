<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Visitas extends CI_Controller {

	private $master_table = "Formato_Visita";
	private $departamento = "Departamento";
	private $sede = "Sede";
	private $locales = "Locales";

	private $master_table_fields;
	private $master_table_excluded_fields;
	private $locales_table_fields;
	private $locales_table_excluded_fields;

	private $result;
	private $errors = array();

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('visitas_model');

		$this->user = $this->ion_auth->user()->row();
	}

	function index( $CCDD, $Cod_Sede )
	{
		$this->parameters['title'] = "Formatos de Visita";
		$this->parameters['description'] = "Formato de Visitas a Locales de Aplicacion";
		$this->parameters['order'] = 1;
		$this->parameters['main_content'] = "visitas/lista";
		$this->parameters['user'] = $this->user;

		$this->parameters['departament'] = $this->get_departament( $CCDD );
		$this->parameters['headquarters'] = $this->get_headquarters( $CCDD, $Cod_Sede);

		$this->load->view('frontend/template', $this->parameters);
	}

	function view_all()
	{
		$CCDD = $this->input->get('dep');
		$Cod_Sede = $this->input->get('sede');

		$this->parameters['aaData'] = $this->get_data( $CCDD, $Cod_Sede );

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function get_data( $CCDD, $Cod_Sede )
	{
		$query = "SELECT id, CCDD, Cod_Sede, Nombre, Direccion FROM ".$this->locales." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."' ORDER BY id ASC";
		// $this->data = $this->convert_utf8->convert_result( $this->visitas_model->only_query( $query ) );
		$this->data = $this->visitas_model->only_query( $query )->result();

		return $this->data;
	}

	
	function formulario( $CCDD, $Cod_Sede, $Cod_Formato = null )
	{
		$this->parameters['title'] = "Formato de Visitas";
		$this->parameters['description'] = "Formato de Visitas a Locales de Aplicacion";
		$this->parameters['order'] = 1;
		$this->parameters['main_content'] = "visitas/formulario";
		$this->parameters['user'] = $this->user;

		$this->parameters['departament'] = $CCDD;
		$this->parameters['headquarters'] = $Cod_Sede;

		$Cod_Formato = ( is_null($Cod_Formato) ) ? 0 : $Cod_Formato;
		$this->parameters['Cod_Formato'] = $Cod_Formato;

		$this->load->view('frontend/template', $this->parameters);
	}


	function view()
	{
		$Cod_Formato = $this->input->post('id');
		$CCDD = $this->input->post('CCDD');
		$Cod_Sede = $this->input->post('Cod_Sede');

		$this->parameters['departament'] = $this->get_departament( $CCDD );
		$this->parameters['headquarters'] = $this->get_headquarters( $CCDD, $Cod_Sede );

		$this->conditional = "id = '".$Cod_Formato."' AND CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
		// $this->parameters['local'] = $this->convert_utf8->convert_row( $this->visitas_model->select_data( $this->locales, $this->conditional ) );
		$this->parameters['local'] = $this->visitas_model->select_data( $this->locales, $this->conditional )->row();
		// $this->parameters['contenido'] = $this->convert_utf8->convert_row( $this->visitas_model->select_data( $this->master_table, $this->conditional ) );
		$this->parameters['contenido'] = $this->visitas_model->select_data( $this->master_table, $this->conditional )->row();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function get_departament( $CCDD )
	{

		$query = "SELECT CCDD, Departamento FROM ".$this->departamento." WHERE CCDD = '".$CCDD."'";
		$departament_data = $this->visitas_model->only_query( $query )->row();

		// return $this->convert_utf8->convert_row( $departament_data );
		return $departament_data;

	}

	function get_headquarters( $CCDD, $Cod_Sede )
	{
		$query = "SELECT Cod_Sede, Nombre_Sede, CCDD FROM ".$this->sede." WHERE CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'";
		$sede_data = $this->visitas_model->only_query( $query )->row();

		// return $this->convert_utf8->convert_row( $sede_data );
		return $sede_data;
	}


	function save()
	{
		$nro_aplicacion = $this->input->post('nro_aplicacion');
		$CCDD = $this->input->post('CCDD');
		$Cod_Sede = $this->input->post('Cod_Sede');

		// configuracion de la libreria upload
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'png|jpg';
		$config['max_size'] = '2048';
		$config['max_width'] = 0;
		$config['max_height'] = 0;

		$this->load->library('upload',$config);
		//--

		$this->conditional = "Id = '".$nro_aplicacion."' AND CCDD = '".$CCDD."' AND Cod_Sede = '".$Cod_Sede."'"; // condicional //
		$exist = $this->visitas_model->count_result( $this->conditional, $this->master_table ); // Consulto la cantidad de registros //

		$this->master_table_fields = $this->visitas_model->get_fields( $this->master_table ); // obtengo los campos de la tabla //
		$this->locales_table_fields = $this->visitas_model->get_fields( $this->locales ); // obtengo los campos de la tabla //

		// array de campos que se excluiran del foreach de grabado //
		$this->master_table_excluded_fields = array( 'Id', 'Imagen', 'username', 'fecha_visita', 'fecha_update', 'estado' ); 
		$this->locales_table_excluded_fields = array( 'Id', 'CCDD', 'Cod_Sede' );
		//--

		// data especifica formato_visita //
		$this->master_data['Id'] = $nro_aplicacion;
		$this->master_data['username'] = $this->user->username;
		$fecha = date('Y/m/d H:i:s');
		$this->master_data['estado'] = 1;
		//--


		// data formato_visita
		foreach ($this->master_table_fields as $key => $field_name)
		{
			if ( !in_array( $field_name, $this->master_table_excluded_fields ) )
			{
				// $this->master_data[$field_name] = ($this->input->post($field_name) == '') ? null : utf8_decode($this->input->post($field_name));
				$this->master_data[$field_name] = ($this->input->post($field_name) == '') ? null : $this->input->post($field_name);
			}
		}

		// data locales
		foreach ($this->locales_table_fields as $key => $field_name)
		{
			if ( !in_array( $field_name, $this->locales_table_excluded_fields ) )
			{
				// $this->locales_data[$field_name] = ($this->input->post($field_name) == '') ? null : utf8_decode($this->input->post($field_name));
				$this->locales_data[$field_name] = ($this->input->post($field_name) == '') ? null : $this->input->post($field_name);
			}
		}

		// subida de imagen
		if (!$this->upload->do_upload('Imagen'))
		{
			$this->errors = array('error' => $this->upload->display_errors());
			$this->result = 0;
		}
		//--

		if ( $exist == 0)
		{
			if ( count($this->errors) == 0 )
			{
				$this->master_data['fecha_visita'] = $fecha;

				$imagen = $this->upload->data();
				$this->master_data['Imagen'] = $imagen['file_name'];

				$this->result = $this->visitas_model->insert_data( $this->master_data, $this->master_table );
			}
		}
		else if ( $exist > 0 )
		{
			$this->master_data['fecha_update'] = $fecha;

			$imagen = $this->upload->data();
			if ( $imagen['file_name'] != '' )
			{
				$this->master_data['Imagen'] = $imagen['file_name'];
			}

			$this->result = $this->visitas_model->update_data( $this->master_data, $this->master_table, $this->conditional );
		}


		$this->visitas_model->update_data( $this->locales_data, $this->locales, $this->conditional );// actualiza nombre y direccion del local.
		

		if ( $this->result > 0 )
		{
			$this->message = "Se envio los datos satisfactoriamente!";
			$this->class_alert = "alert-success";
		}
		else
		{
			$this->message = "Se ha producido un error, verifique y vuelvalo a intentar.";
			$this->class_alert = "alert-danger";
		}

		// $this->parameters['title'] = "Formato de Visitas";
		// $this->parameters['description'] = "Formato de Visitas a Locales de Aplicacion";
		// $this->parameters['order'] = 1;
		// $this->parameters['main_content'] = "visitas/message";
		// $this->parameters['user'] = $this->user;

		$this->parameters['departament'] = $CCDD;
		$this->parameters['headquarters'] = $Cod_Sede;

		$this->parameters['msg'] = $this->message;
		// $this->parameters['class_alert'] = $this->class_alert;

		// $this->load->view('frontend/template', $this->parameters);


		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);

	}

}

?>