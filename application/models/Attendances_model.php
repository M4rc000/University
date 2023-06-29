<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Attendances_model extends CI_Model
{
    public function editAttendancesOne()
    {
        if($this->input->post('action',true) == 1){
            $result = 10;
        }
        else{
            $result = 0;
        }

        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "date" => $this->input->post('date',true),
            "score" => $result,
            "action" => $this->input->post('actions',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_point_01',$data);
    }
    public function editAttendancesTwo()
    {
        if($this->input->post('action',true) == 1){
            $result = 10;
        }
        else{
            $result = 0;
        }

        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "date" => $this->input->post('date',true),
            "score" => $result,
            "action" => $this->input->post('actions',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_point_02',$data);
    }
    public function editAttendancesThree()
    {
        if($this->input->post('action',true) == 1){
            $result = 10;
        }
        else{
            $result = 0;
        }

        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "date" => $this->input->post('date',true),
            "score" => $result,
            "action" => $this->input->post('actions',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_point_03',$data);
    }
    public function editAttendancesFour()
    {
        if($this->input->post('action',true) == 1){
            $result = 10;
        }
        else{
            $result = 0;
        }

        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "date" => $this->input->post('date',true),
            "score" => $result,
            "action" => $this->input->post('actions',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_point_04',$data);
    }
    public function editAttendancesFive()
    {
        if($this->input->post('action',true) == 1){
            $result = 10;
        }
        else{
            $result = 0;
        }

        $data = [
            "id" => $this->input->post('id',true),
            "week" => $this->input->post('week',true),
            "course" => $this->input->post('course',true),
            "date" => $this->input->post('date',true),
            "score" => $result,
            "action" => $this->input->post('actions',true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_point_05',$data);
    }

    public function getAttendancesOneById($id)
    {
        return $this->db->get_where('user_point_01',['id' => $id, 'action' => 0 ])->row_array();
    }

    public function getAttendancesTwoById($id)
    {
        return $this->db->get_where('user_point_02',['id' => $id, 'action' => 0 ])->row_array();
    }

    public function getAttendancesThreeById($id)
    {
        return $this->db->get_where('user_point_03',['id' => $id, 'action' => 0 ])->row_array();
    }

    public function getAttendancesFourById($id)
    {
        return $this->db->get_where('user_point_04',['id' => $id, 'action' => 0 ])->row_array();
    }

    public function getAttendancesFiveById($id)
    {
        return $this->db->get_where('user_point_05',['id' => $id, 'action' => 0 ])->row_array();
    }    
}
