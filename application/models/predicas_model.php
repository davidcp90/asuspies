<?php
class Predicas_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
public function contar_registros() {
        return $this->db->count_all("predicas");
    }
 public function get_predicas($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->from("predicas");
$this->db->order_by("id_predicas", "desc"); 
$query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_predicas_cat($limit, $start,$cat) {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("predicas",array('id_categoriaPredicas' => $cat));

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_categ_name($cat) {
       
        $query = $this->db->get_where("categoriaPredica",array('id_categoriaPredicas' => $cat));

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_categorias() {
        
        $query = $this->db->get("categoriaPredica");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function name_cat($id){
   	$query = $this->db->get_where("categoriaPredica",array('id_categoriaPredicas' => $id));
   foreach ($query->result() as $row)
{
  return $row->nombre;
}
   }
   public function name_post($id){
    $query = $this->db->get_where("predicas",array('id_predicas' => $id));
   foreach ($query->result() as $row)
{
   return $row->nombre;
}
   }
   public function get_post($id){
    $query = $this->db->get_where("predicas",array('id_predicas' => $id));
    if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	

}