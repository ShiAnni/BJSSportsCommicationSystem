<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 23:13
 */
class Join_Model extends CI_Model{
    function join_act($aid,$uid){
        $data = array(
            'aid' => $aid,
            'uid' => $uid,
        );
        $this->db->insert('join',$data);
    }
}