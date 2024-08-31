<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Alumno_model');
    }

    public function index() {
        $data['alumnos'] = $this->Alumno_model->get_alumnos();
        $this->load->view('alumnos/index', $data);
    }

    public function create() {
        $this->load->view('alumnos/create');
    }

    public function store() {
        $this->Alumno_model->insert_alumno();
        redirect('alumnos');
    }

    public function edit($id) {
        $data['alumno'] = $this->Alumno_model->get_alumno_by_id($id);
        $this->load->view('alumnos/edit', $data);
    }

    public function update($id) {
        $this->Alumno_model->update_alumno($id);
        redirect('alumnos');
    }
    public function delete($id) {
        $this->Alumno_model->delete_alumno($id);
        redirect('alumnos');
    }
    
}
