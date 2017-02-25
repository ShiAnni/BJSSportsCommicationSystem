<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 10:51
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $this->load->model('activity_model');
        $this->load->model('picture_model');
        $this->load->model('admin_model');
        $this->load->model('join_model');
        $this->load->helper('url_helper');
    }

    /*public function join_act(){

    }*/

    public function view(){
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['in'] = true;
        $data['activities'] = $this->activity_model->get_activities();
        $data['aids'] = $this->activity_model->get_joined_act($data['user']['uid']);
        $this->load->view('activity',$data);
    }

    public function putup(){
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $this->load->view('establish',$data);
    }

    public function joinactivity(){
        $aid=$this->input->post('aid');
        $uid  = $this->input->post('uid');
        $this->join_model->join_act($aid,$uid);
    }

    public function establish(){
        $type=$this->input->post('type');
        $type=($type==='单人运动')?1:2;
        $modify_data = array(
            'aname'=>$this->input->post('aname'),
            'description'=>$this->input->post('description'),
            'stime'=>$this->input->post('stime'),
            'etime'=>$this->input->post('etime'),
            'type'=>$type,
            'uid'=>$this->input->post('uid'),
        );
        $res = $this->activity_model->add_new_activity($modify_data);
    }
}