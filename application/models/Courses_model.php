<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Courses_model extends CI_Model
{
    public function getAllCourses()
    {
        return $this->db->get('user_courses')->result_array();
    }

    public function getCourses($limit,$start)
    {
        return $this->db->get('user_courses',$limit,$start)->result_array();
    }

    public function countAllCourses()
    {
        return $this->db->get('user_courses')->num_rows();
    }

    public function getCoursesById($id)
    {
        return $this->db->get_where('user_courses',['id' => $id])->row_array();
        
    }

    public function getAttendanceById($id)
    {
        return $this->db->get_where('user_attendance',['id' => $id])->row_array();
        
    }

    public function editAnnouncement()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "announcement" => $this->input->post('announcement',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }
    
    public function deleteAnnouncement($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user_courses');
    }

    public function editMaterial()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "material" => $this->input->post('material',true),
            "assignment" => $this->input->post('assignment',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }

    public function editCourses()
    {
        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "submit_assignment" => $this->input->post('submit_assignment',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_courses',$data);
    }




}
