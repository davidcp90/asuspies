<?php
class Reflexiones_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
public function contar_registros() {
        return $this->db->count_all("reflexiones");
    }
 public function get_reflexiones($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("reflexiones");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_reflexiones_cat($limit, $start,$cat) {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("reflexiones",array('id_categoriaReflexiones' => $cat));

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function get_categorias() {
        
        $query = $this->db->get("categoriaReflexiones");

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
    echo $row->nombre;
}
   }
    public function name_post($id){
    $query = $this->db->get_where("reflexiones",array('id_reflexion' => $id));
   foreach ($query->result() as $row)
{
   return $row->titulo;
}
   }
   public function get_post($id){
    $query = $this->db->get_where("reflexiones",array('id_reflexion' => $id));
    if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	

}