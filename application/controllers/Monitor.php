<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('monitor_model');
    $this->load->library('navbar');
    $this->load->library('script');
  }

  public function index()
  {
    $data = $this->common("home");
    $this->load->view('monitor/index',$data);
  }

  public function form()
  {
    $data = $this->common("Crear Monitor");
    $this->load->view('monitor/createmonitor',$data);

  }

  public function create()
  {
    $data = array(
      'firsts_names'        => $this->input->post('firsts_names'),
      'last_name'           => $this->input->post('last_name'),
      'academic_program'    => $this->input->post('academic_program'),
      'semester'            => $this->input->post('semester'),
      'identification_card' => $this->input->post('identification_card'),
      'email'               => $this->input->post('email'),
      'phone'               => $this->input->post('phone')
    );

    if($this->monitor_model->SaveMonitor($data)){
        echo "true";
      }else{
        echo "false";
      }
  }

  public function findall()
	{
    $result = $this->monitor_model->FindallMonitor();
    echo json_encode($result);
	}

  public function find()
  {
    $data = array('id' => $this->input->post('id'));
    $result = $this->monitor_model->FindMonitor($data);
    echo json_encode($result);
  }

  public function update()
  {
    $data = array(
      'id'                  => $this->input->post('id'),
      'firsts_names'        => $this->input->post('firsts_names'),
      'last_name'           => $this->input->post('last_name'),
      'academic_program'    => $this->input->post('academic_program'),
      'semester'            => $this->input->post('semester'),
      'identification_card' => $this->input->post('identification_card'),
      'email'               => $this->input->post('email'),
      'phone'               => $this->input->post('phone')
    );

    if($this->monitor_model->UpdateMonitoria($data)){
      echo "true";
    }else{
      echo "false";
    }
  }

  public function delete()
  {
    $id = $this->input->post('id');
    $this->monitor_model->DeleteMonitor($id);
    if($this->monitor_model->DeleteMonitor($id)){
      echo "true";
    }else{
      echo "false";
    }
  }

  public function common($title)
  {
    $data = [
    "title" => $title,
    "navbar" => $this->navbar->navbar(),
    "script" => $this->script->script()
    ];
    $this->load->view('monitor/header',$data);
    return $data;
  }
}
