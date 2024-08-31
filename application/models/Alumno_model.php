<?php
class Alumno_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_alumnos() {
        $query = $this->db->get('alumnos');
        return $query->result_array();
    }

    public function get_alumno_by_id($id) {
        $query = $this->db->get_where('alumnos', array('id' => $id));
        return $query->row_array();
    }

    public function insert_alumno() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'edad' => $this->input->post('edad'),
            'email' => $this->input->post('email')
        );
        return $this->db->insert('alumnos', $data);
    }

    public function update_alumno($id) {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'edad' => $this->input->post('edad'),
            'email' => $this->input->post('email')
        );
        $this->db->where('id', $id);
        return $this->db->update('alumnos', $data);
    }

    public function delete_alumno($id) {
        $this->db->where('id', $id);
        return $this->db->delete('alumnos');
    }
}
