<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_md');
	}

	// get mdengine reseller
	public function reseller(){
		$data = array(
				'datalist' => $this->m_md->getAll('reseller', 'kode_reseller', 'ASC')
			);
		
		$this->template->set('contentHead', 'Daftar Reseller');
		$this->template->load('layouts/main','Md/listing_reseller', $data);
	}

	// get mdengine transaction
	public function transaksi(){
		$data = array(
				'datalist' => $this->m_md->getAll('transaksi', 'date(datetime_transaksi)', 'DESC')
			);
		
		$this->template->set('contentHead', 'History Transaksi');
		$this->template->load('layouts/main','Md/listing_transaksi', $data);
	}

	// get mdengine list produk
	public function produk(){
		$data = array(
				'datalist' => $this->m_md->getAll('produk', 'kode_produk', 'DESC')
			);

		$this->template->set('contentHead', 'Daftar Produk');
		$this->template->load('layouts/main','Md/listing_product', $data);
	}

}

/* End of file Md.php */
/* Location: ./application/modules/Md/controllers/Md.php */