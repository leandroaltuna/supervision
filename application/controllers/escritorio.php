<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

	private $table_departament = "Departamento";
	private $table_headquarters = "Sede";
	private $table_user_departament = "users_departamento";
	private $user;

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

		$this->load->model('escritorio_model');

		$this->user = $this->ion_auth->user()->row();
	}

	function index()
	{
		$this->parameters['title'] = "Escritorio";
		$this->parameters['description'] = "Panel de Control";
		$this->parameters['order'] = 1;
		$this->parameters['main_content'] = "escritorio/escritorio";
		$this->parameters['user'] = $this->user;

		$this->load->view('frontend/template', $this->parameters);
	}

	function opciones( $CCDD, $Cod_Sede )
	{
		$this->parameters['title'] = "Menu";
		$this->parameters['description'] = "Panel de Control";
		$this->parameters['order'] = 1;
		$this->parameters['main_content'] = "escritorio/opciones";
		$this->parameters['user'] = $this->user;

		$this->parameters['departament'] = $CCDD;
		$this->parameters['headquarters'] = $Cod_Sede;

		$this->load->view('frontend/template', $this->parameters);
	}

}

?>