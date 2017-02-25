<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/30
 * Time: 19:23
 */
class Sports_Model extends CI_Model{
    function getSportsData($uid){
        $query = $this->db->select('date')->select_sum('mile')->where('uid',$uid)->from('sports')->group_by('date')->get();
        return $query->result_array();
    }

    function insert_rest($data){
        $this->db->insert('sports',$data);
    }

    function getMiles($uid){
        $query = $this->db->select_sum('mile')->from('sports')->where('uid',$uid)->get();
        return $query->result_array()[0];
    }

    function getDay($uid){
        $query = $this->db->distinct()->select('date')->from('sports')->where('uid',$uid)->get();
        return $query->num_rows();
    }
}