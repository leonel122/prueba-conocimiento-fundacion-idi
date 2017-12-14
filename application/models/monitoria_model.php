<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Monitoria_model extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function SaveMonitoria($data)
    {
      $this->db->set($data);
      $response = $this->db->insert('monitorias', $this, array('id_monitor' => $data['id_monitor'],
                                                              'matter'      => $data['matter'],
                                                              'date'        => $data['date'],
                                                              'lounge'      => $data['lounge']));
      if($response){
        return "true";
      }else {
        return "false";
      }
    }

    public function FindallMonitoria()
    {
      $query = $this->db->get('monitorias');
      return $query->result();
    }

    public function FindMonitoria($data)
    {
      $query = $this->db->get_where('monitorias', $data);
      return $query->result();
    }

    public function UpdateMonitoria($data)
    {
      $this->db->where('id', $data['id']);
      $response = $this->db->update('monitorias', $data);
      if($response){
        return "true";
      }else {
        return "false";
      }
    }

    public function DeleteMonitoria($id)
    {
      $this->db->where('id', $id);
      $response = $this->db->delete('monitorias');

      if ($response) {
        return "true";
      }else {
        return "false";
      }
    }
  }

?>
