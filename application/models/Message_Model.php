<?php
class Message_model extends CI_Model {

    public function getMessages($uid){
        $raw_array = $this->db
            ->select('starid')
            ->from('focus')
            ->where('followerid',$uid)
            ->get()->result_array();
        $array = Array();
        foreach ($raw_array as $single){
            array_push($array,$single['starid']);
        }
        print_r($array);
        $query = $this->db
            ->select('message.*,username,addr')
            ->from('message')
            ->join('user','user.uid=message.uid')
            ->join('picture','picture.pid=user.pid')
            ->where('user.uid',$uid)
            ->or_where_in('user.uid',$array)
            ->order_by('createtime',"DESC")
            ->get();

        $result = $query->result_array();
        return $result;
    }

    function add_new($text,$uid,$time){
        $data = Array(
            "content"=>$text,
            "uid"=>$uid,
            "createtime"=>$time,
        );
        $this->db->insert('message',$data);
    }
}