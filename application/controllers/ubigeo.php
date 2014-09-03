<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ubigeo extends CI_Controller {

	private $table_departament = "Departamento";
	private $table_headquarters = "Sede";
	private $table_user_departament = "users_departamento";
	private $user;
	private $conditional = '';

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->model('ubigeo_model');

		$this->user = $this->ion_auth->user()->row();

	}

	function user_departamento()
	{
		$this->conditional = "id = '".$this->user->id."'";

		$departament_user_list = $this->ubigeo_model->select_data( $this->table_user_departament, $this->conditional )->result();

		$departament_array = array();

		foreach ($departament_user_list as $row)
		{
			$departament_array[] = $row->CCDD;
		}

		$departament_data = $this->ubigeo_model->ubigeo_by_users( $this->table_departament, 'CCDD', $departament_array );
		$headquarters_data = $this->ubigeo_model->ubigeo_by_users( $this->table_headquarters, 'CCDD', $departament_array );

		// $this->parameters['departament'] = $this->convert_utf8->convert_result( $departament_data );
		// $this->parameters['headquarters'] = $this->convert_utf8->convert_result( $headquarters_data );
		$this->parameters['departament'] = $departament_data->result();
		$this->parameters['headquarters'] = $headquarters_data->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);

	}

	function all_departament()
	{
		$query = "SELECT CCDD, Departamento FROM ".$this->table_departament." ORDER BY CCDD asc";
		$departament_data = $this->ubigeo_model->only_query( $query );

		// $this->parameters['departament'] = $this->convert_utf8->convert_result( $departament_data );
		$this->parameters['departament'] = $departament_data->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	function headquarters_by_departament()
	{
		$CCDD = $this->input->post('codigo');

		$query = "SELECT Cod_Sede, Nombre_Sede, CCDD FROM ".$this->table_headquarters." WHERE CCDD = '".$CCDD."' ORDER BY Nombre_Sede asc";
		$headquarters_data = $this->ubigeo_model->only_query( $query );

		// $this->parameters['headquarters'] = $this->convert_utf8->convert_result( $headquarters_data );
		$this->parameters['headquarters'] = $headquarters_data->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}

?>