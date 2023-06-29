<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lectures extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function announcement(){
        $data['title'] = 'Announcement';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Courses_model','courses');
        
        $this->load->library('pagination');
        
        $config['base_url'] = 'http://localhost/2022/University/lectures/announcement';
        $config['total_rows'] = $this->courses->countAllCourses();
        $config['per_page'] = 10;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['courses'] = $this->courses->getCourses($config['per_page'],$data['start']);
        
        if (isset($_POST["submit"])) {
            $id = $_POST['id'];
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lectures/announcement', $data);
        $this->load->view('templates/footer');

    }
    
    public function edit_announcement($id){
        $data['title'] = 'New Announcement';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Courses_model','courses');

        $data['announcements'] = $this->courses->getCoursesById($id);

        $this->form_validation->set_rules('announcement', 'Descriptions', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lectures/edit_announcement', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->courses->editAnnouncement();
            $this->session->set_flashdata('announcement','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your announcement has been sent!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('lectures/announcement');   
        }

    }

    public function delete_announcement($id){
            $this->courses->deleteAnnouncement($id);
            redirect('lectures/announcement');   
        }

    public function edit_material($id){
        $data['title'] = 'New Material or Assignment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Courses_model','courses');

        $data['announcements'] = $this->courses->getCoursesById($id);

        $this->form_validation->set_rules('material', 'Material', 'required|trim');
        $this->form_validation->set_rules('assignment', 'Assignment', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lectures/edit_material', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->courses->editMaterial();
            $this->session->set_flashdata('edit_material','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your courses has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('lectures/courses');   
        }
    }


    public function courses(){
        $data['title'] = 'Courses';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Courses_model','courses');
        
        $this->load->library('pagination');
        
        $config['base_url'] = 'http://localhost/2022/University/lectures/announcement';
        $config['total_rows'] = $this->courses->countAllCourses();
        $config['per_page'] = 10;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['courses'] = $this->courses->getCourses($config['per_page'],$data['start']);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lectures/courses', $data);
        $this->load->view('templates/footer');
    }

}