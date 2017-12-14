<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoria extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('monitoria_model');
  }

  public function create()
  {
    $data = array(
      'id_monitor' => $this->input->post('id_monitor'),
      'matter'     => $this->input->post('matter'),
      'date'       => $this->input->post('date'),
      'lounge'     => $this->input->post('lounge')
    );

    if($this->monitoria_model->SaveMonitoria($data)){
        echo "true";
      }else{
        echo "false";
      }
  }

  public function findall()
	{
    $result = $this->monitoria_model->FindallMonitoria();
    echo json_encode($result);
	}

  public function find()
  {
    $data = array('id' => $this->input->post('id'));
    $result = $this->monitoria_model->FindMonitoria($data);
    echo json_encode($result);
  }

  public function update()
  {
    $data = array(
      'id'         => $this->input->post('id'),
      'id_monitor' => $this->input->post('id_monitor'),
      'matter'     => $this->input->post('matter'),
      'date'       => $this->input->post('date'),
      'lounge'     => $this->input->post('lounge')
    );

    if($this->monitoria_model->UpdateMonitoria($data)){
      echo "true";
    }else{
      echo "false";
    }
  }

  public function delete()
  {
    $id = $this->input->post('id');
    if($this->monitoria_model->DeleteMonitoria($id)){
      echo "true";
    }else{
      echo "false";
    }
  }
}
