<?php
class Djapp_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

 public function get_boys() {
  $this->db->from("dj_users");
  $this->db->where("sex_id","1");
  $this->db->order_by("nuevo", "desc"); 
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  return false;
}
public function get_girls() {
  $this->db->from("dj_users");
  $this->db->where("sex_id","2");
  $this->db->order_by("nuevo", "desc"); 
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  return false;
}




}