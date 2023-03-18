<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
class Dashboard extends CI_Controller{

	
// ------------------Display the Dashboared----------------------------------------
	public function index(){
		$data['meta_title']="Dashboard";
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/side-bar');
		$this->load->view('admin/dashbaord');
		$this->load->view('admin/includes/footer1');
		$this->load->view('admin/includes/footer2');

	}

}
