<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 23:45
 */
class Admin_Model extends CI_Model{

    function verify_users($username, $password){
//        echo $username, $password;
        $query = $this->db->select('*')->from('user')
            ->where('username', $username)
//            ->where('password', sha1($password))
            ->where('password', $password)
            ->get();

        if($query->num_rows() > 0){
            $res = $query->result_array();
            return $res[0];
        }
        return false;
    }

    function add_new_user($username,$email,$password){
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('user',$data);
    }

    function modify($data,$uid){
        $this->db->update('user',$data,$uid);
    }

    function delete($uid){
        $this->db->delete('user',Array('uid'=>$uid));
    }

    function getAll(){
        $query = $this->db->select('user.*,addr')->from('user')
            ->join('picture','picture.pid=user.pid')->where('type',"user")->get();
        return $query->result_array();
    }

    function getFollowers($uid){
        $query = $this->db->select('user.*,addr')->from('focus')->join('user','followerid=uid')
        ->join('picture','picture.pid=user.pid')->where('starid',$uid)->get();
        return $query->result_array();

    }
    function getStars($uid){
        $query = $this->db->select('user.*,addr')->from('focus')->join('user','starid=uid')
            ->join('picture','picture.pid=user.pid')->where('followerid',$uid)->get();
        return $query->result_array();

    }
    function getFollowerNum($uid){
        $query = $this->db->select('*')->from('focus')
            ->where('starid',$uid)->get();
        return $query->num_rows();
    }

    function getStarNum($uid){
        $query = $this->db->select('*')->from('focus')
            ->where('followerid',$uid)->get();
        return $query->num_rows();
    }

    function getUserInfo($uid){
        $query = $this->db->select('*')->from('user')->where('uid',$uid)->get();
        return $query->result_array()[0];
    }
    function addStarPair($starid,$followerid){
        $data = Array(
            'starid'=>$starid,
            'followerid'=>$followerid
        );
        $this->db->insert('focus',$data);
    }

}