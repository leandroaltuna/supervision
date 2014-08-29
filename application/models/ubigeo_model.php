<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Ubigeo_model extends Base_model
	{
		function ubigeo_by_users( $table, $field, $array_in )
		{
			$this->db->where_in( $field, $array_in );
			$query = $this->db->get( $table );
			return $query;
		}
	}
?>