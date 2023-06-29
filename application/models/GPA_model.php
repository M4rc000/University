<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class GPA_model extends CI_Model
{
    public function getGpa()
    {
        $result['ds'] = $this->db->get('user_point_01')->result_array();
        $result['oop'] = $this->db->get('user_point_02')->result_array();
        $result['ccp'] = $this->db->get('user_point_03')->result_array();
        $result['cn'] = $this->db->get('user_point_04')->result_array();
        $result['ssip'] = $this->db->get('user_point_05')->result_array();

        return $result;
    }
}
