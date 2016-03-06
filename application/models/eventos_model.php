<?php
class Eventos_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
public function contar_registros() {
        return $this->db->count_all("eventos");
    }
 public function get_eventos($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->from("eventos");
        $this->db->order_by("id_eventos", "desc"); 
        $query=$this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_eventos_cat($limit, $start,$cat) {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("eventos",array('id_categoriaEventos' => $cat));

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_categorias() {
        
        $query = $this->db->get("categoriaEventos");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_fotos($id) {
        
       $query = $this->db->get_where("galeriaEventos",array('id_evento' => $id));

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function name_cat($id){
   	$query = $this->db->get_where("categoriaEventos",array('id_categoriaEventos' => $id));
   foreach ($query->result() as $row)
{
  return $row->nombre;
}
   }
   public function name_post($id){
    $query = $this->db->get_where("eventos",array('id_eventos' => $id));
   foreach ($query->result() as $row)
{
   return $row->nombre;
}
   }
   public function get_post($id){
    $query = $this->db->get_where("eventos",array('id_eventos' => $id));
    if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	

}