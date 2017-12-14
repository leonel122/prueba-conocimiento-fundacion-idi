<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Monitor_model extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function SaveMonitor($data)
    {
      $this->db->set($data);
      $response = $this->db->insert('monitors', $this, array('firsts_names'         => $data['firsts_names'],
                                                              'last_name'           => $data['last_name'],
                                                              'academic_program'    => $data['academic_program'],
                                                              'semester'            => $data['semester'],
                                                              'identification_card' => $data['identification_card'],
                                                              'email'               => $data['email'],
                                                              'phone'               => $data['phone']));
      if($response){
        return "true";
      }else {
        return "false";
      }
    }

    public function FindallMonitor()
    {
      $query = $this->db->get('monitors');
      return $query->result();
    }

    public function FindMonitor($data)
    {
      $query = $this->db->get_where('monitors', $data);
      return $query->result();
    }

    public function UpdateMonitor($data)
    {
      $this->db->where('id', $data['id']);
      $response = $this->db->update('monitors', $data);
      if($response){
        return "true";
      }else {
        return "false";
      }
    }

    public function DeleteMonitor($id)
    {
      $this->db->where('id', $id);
      $response = $this->db->delete('monitors');

      if ($response) {
        return "true";
      }else {
        return "false";
      }
    }
  }

?>
