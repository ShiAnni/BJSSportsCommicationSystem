<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 10:20
 */
class Activity_Model extends CI_Model{
    public function add_new_activity($data){
        $this->db->insert('activity',$data);
        $aid = $this->db->select_max('aid')->from('activity')->get()->result_array()[0]['aid'];
        $uid = $data['uid'];
        $this->db->insert('join',Array('aid'=>$aid,'uid'=>$uid));
    }

    public function get_activities(){
        $query = $this->db
            ->select('activity.*,addr')
            ->from('activity')
            ->join('user','user.uid=activity.uid')
            ->join('picture','user.pid=picture.pid')
            ->get();
        $res = $query->result_array();
        foreach ($res as &$value){
            $value['joiners'] = $this->getJoiners($value['aid']);
            foreach ($value['joiners'] as &$joiner){
                $mile = $this->getMile($joiner['uid'],$value['stime'],$value['etime'])['mile'];
                $joiner['mile'] = $mile?$mile:0;
            }
        }
        return $res;
    }
    public function getMile($uid,$stime,$etime){
        $svalue = explode(' ',$stime);
        $evalue = explode(' ',$etime);
//        $time = '2016/11/30';
//        $hour = 21;
//        $bool1 = $svalue[0]<$time ||($svalue[0]===$time && intval(explode(':',$svalue[1])[0])<=$hour);
//        $bool2 = $evalue[0]>$time ||($evalue[0]===$time && intval(explode(':',$evalue[1])[0])>=$hour);
        $query = $this->db
            ->select_sum('mile')
            ->from('sports')
            ->where('uid',$uid)
            ->where($svalue[0]."<date OR ("."$svalue[0]"."=date AND ".intval(explode(':',$svalue[1])[0])."<=time_part)")
            ->where($evalue[0].">date OR ("."$evalue[0]"."=date AND ".intval(explode(':',$evalue[1])[0]).">=time_part)")
            ->get();
        return $query->result_array()[0];
    }
    public function getJoiners($aid){

        $query = $this->db
            ->select('user.uid,addr')
            ->from('join')
            ->join('user','user.uid=join.uid')
            ->join('picture','user.pid=picture.pid')
            ->where('aid',$aid)
            ->get();

        return $query->result_array();

    }

    public function get_joined_act($uid){
        $query = $this->db->select('aid')->from('join')->where('uid',$uid)->get();
        return $query->result_array();
    }
}