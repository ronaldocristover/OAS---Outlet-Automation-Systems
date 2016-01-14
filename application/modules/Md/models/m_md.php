<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_md extends CI_Model {

	public function __contruct(){
		parent::__contruct();
	}

	public function getAll($tableName, $orderKey =  "", $orderBy = 'DESC'){
		$db = $this->load->database('db_md', TRUE);

		$db->select('*');
		$db->from($tableName);
		
		if ($orderKey) {
			$db->order_by($orderKey, $orderBy);
		}

		return $db->get()->result();
	}

}

/* End of file m_md.php */
/* Location: ./application/modules/Md/models/m_md.php */