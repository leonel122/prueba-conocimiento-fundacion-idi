<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoria extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('monitoria_model');
    $this->load->library('navbar');
    $this->load->library('script');
  }

  public function form()
  {
    $data = $this->common("Crear Monitoria");
    $this->load->view('monitorias/createmonitoria',$data);
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
    $data = $this->common("Todos las Monitorias");
    $data += [ "result" => json_encode($result)];
    $this->load->view('monitorias/findall',$data);
	}

  public function find($id)
  {
    $data = array('id' => $id);
    $result = $this->monitoria_model->FindMonitoria($data);
    $data = $this->common("Monitoria");
    $data += [ "result" => json_encode($result[0])];
    $this->load->view('monitorias/find',$data);
  }

  public function edit($id)
  {
    $data = array('id' => $id);
    $result = $this->monitoria_model->FindMonitoria($data);
    $data = $this->common("Editar");
    $data += [ "result" => json_encode($result[0])];
    $this->load->view('monitorias/edit',$data);
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
      $this->find($data["id"]);
    }else{
      echo "false";
    }
  }

  public function delete($id)
  {
    if($this->monitoria_model->DeleteMonitoria($id)){
      $this->findall();
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
