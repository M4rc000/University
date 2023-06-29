<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Academic extends CI_Controller
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
        
        $config['base_url'] = 'http://localhost/2022/University/academic/courses';
        $config['total_rows'] = $this->courses->countAllCourses();
        $config['per_page'] = 10;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['courses'] = $this->courses->getCourses($config['per_page'],$data['start']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('academic/announcement', $data);
        $this->load->view('templates/footer');
    }

    public function courses(){
        $data['title'] = 'Courses';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Courses_model','courses');
        
        $this->load->library('pagination');
        
        $config['base_url'] = 'http://localhost/2022/University/academic/courses';
        $config['total_rows'] = $this->courses->countAllCourses();
        $config['per_page'] = 10;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['courses'] = $this->courses->getCourses($config['per_page'],$data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('academic/courses', $data);
        $this->load->view('templates/footer');
    }

    public function attendance(){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['one'] = $this->db->get('user_point_01')->result_array();
        $data['two'] = $this->db->get('user_point_02')->result_array();
        $data['three'] = $this->db->get('user_point_03')->result_array();
        $data['four'] = $this->db->get('user_point_04')->result_array();
        $data['five'] = $this->db->get('user_point_05')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('academic/attendance', $data);
        $this->load->view('templates/footer');
    }

    public function editone($id){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Attendances_model','attendance');

        $data['attendances'] = $this->attendance->getAttendancesOneById($id);

        $this->form_validation->set_rules('action', 'action', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/editone', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->attendance->editAttendancesOne();
            $this->session->set_flashdata('edit_attendance','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/attendance');
        }
    }

    public function edittwo($id){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Attendances_model','attendance');

        $data['attendances'] = $this->attendance->getAttendancesTwoById($id);
        $this->form_validation->set_rules('action', 'action', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/edittwo', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->attendance->editAttendancesTwo();
            $this->session->set_flashdata('edit_attendance','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/attendance');   
        }
    }

    public function editthree($id){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Attendances_model','attendance');

        $data['attendances'] = $this->attendance->getAttendancesThreeById($id);
        $this->form_validation->set_rules('action', 'action', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/editthree', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->attendance->editAttendancesThree();
            $this->session->set_flashdata('edit_attendance','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/attendance');   
        }
    }

    public function editfour($id){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Attendances_model','attendance');

        $data['attendances'] = $this->attendance->getAttendancesFourById($id);
        $this->form_validation->set_rules('action', 'action', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/editfour', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->attendance->editAttendancesFour();
            $this->session->set_flashdata('edit_attendance','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/attendance');   
        }
    }

    public function editfive($id){
        $data['title'] = 'Attendance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Attendances_model','attendance');

        $data['attendances'] = $this->attendance->getAttendancesFiveById($id);
        $this->form_validation->set_rules('action', 'action', 'required|trim');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/editfive', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->attendance->editAttendancesFive();
            $this->session->set_flashdata('edit_attendance','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/attendance');   
        }
    }

    public function edit_courses($id){
        $data['title'] = 'Edit Courses';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Courses_model','courses');

        $data['courses'] = $this->courses->getCoursesById($id);

        $this->form_validation->set_rules('submit_assignment', 'submit_assignment', 'required|trim');
        
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('academic/edit_courses', $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->courses->editCourses();
            $this->session->set_flashdata('edit_courses','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your assingment has been sent!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('academic/courses');   
        }

    }

    public function gpa(){
        $data['title'] = 'Grade Point Average';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ds'] = $this->db->get('user_point_01')->result_array();
        $data['oop'] = $this->db->get('user_point_02')->result_array();
        $data['ccp'] = $this->db->get('user_point_03')->result_array();
        $data['cn'] = $this->db->get('user_point_04')->result_array();
        $data['ssip'] = $this->db->get('user_point_05')->result_array();

        $data['gpa'] = $this->db->get('user_attendance')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('academic/gpa', $data);
        $this->load->view('templates/footer');
    }
}
