<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 23:13
 */
class Picture_Model extends CI_Model{
    function get_picture($pid){
        $query =  $this->db->from('picture')->where('pid',$pid)->get();
        $result = $query->result_array();
        return $result[0];
    }

    function insert($addr,$uid){
        $data = array(
            'addr' => $addr
        );
        $this->db->insert('picture',$data);
        $query = $this->db->select('pid')->from('picture')->where('addr',$addr)->get();
        $res = $query->result_array()[0];

//        $this->db->where('uid', $uid);
        $this->db->update('user', $res,array('uid'=>$uid));
    }
}