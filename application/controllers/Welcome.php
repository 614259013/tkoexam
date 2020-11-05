<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('train','TN');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$result['TN'] = $this->TN->select_all();
		$this->load->view('add_data',$result);
	}
	
	public  function add_train()
	{
		$train_data = array(
			't_id'=> $this->input->post("train_box"),
			'ton_id' => $this->input->post("ton_id"),
			'huyrach_id' => $this->input->post("huyrach_id"),
			'pray_id' => $this->input->post("pray_id"),
			'status' => $this->input->post("status"),
		);
		$ton_data = array(
			'ton_id' => $this->input->post("ton_id"),
			'st_name' => $this->input->post("ton_Station"),
			'time_at' => $this->input->post("ton_timeout"),
		);
		$huyrach_data = array(
			'huyrach_id' => $this->input->post("huyrach_id"),
			'at_time' => $this->input->post("at_complase"),
			'timeout' => $this->input->post("h_timeout"),
		);
		$pray_data = array(
			'pray_id'=> $this->input->post("pray_id"),
			'pray_name' => $this->input->post("pray_Station"),
			'timeOut' => $this->input->post("time_complase"),
		);
		
		if($this->input->post("ton_id")!= "" && $this->input->post("ton_Station")!== ""){
			$this->TN->ton_insert($ton_data);
			$this->TN->huyrach_insert($huyrach_data);
			$this->TN->pray_insert($pray_data);
			$this->TN->train_insert($train_data);
			$result['TN'] = $this->TN->select_all();
			$this->load->view('showdata',$result);
			
		}else {
			echo "ไม่สามารถสมัครสมาชิกได้";
		}
	}

	public function showall()
	{
		$result['TN'] = $this->TN->select_all();
		$this->load->view('showdata',$result);
	}
}
