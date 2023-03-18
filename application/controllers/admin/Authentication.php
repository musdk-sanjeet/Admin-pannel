<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller{

	public function index(){
		$data['meta_title']="Login Page";
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/login');
		$this->load->view('admin/includes/footer2');
	}

	public function signup(){
		$data['meta_title']="Registeration Page";
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/register');
		$this->load->view('admin/includes/footer2');
	}

	public function fPassword(){
		$data['meta_title']="forgot password";
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/includes/fpassword');
		$this->load->view('admin/includes/footer2');
	}




} 