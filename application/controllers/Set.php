<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 8:04
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Set extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $this->load->model('admin_model');
        $this->load->model('picture_model');
    }


    public function head(){
        $data['error'] = "";
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['star_num'] = $this->admin_model->getStarNum($data['user']['uid']);
        $data['follower_num'] = $this->admin_model->getFollowerNum($data['user']['uid']);
        $this->load->view('setting_head',$data);
    }

    public function basis(){
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user'] = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['star_num'] = $this->admin_model->getStarNum($data['user']['uid']);
        $data['follower_num'] = $this->admin_model->getFollowerNum($data['user']['uid']);
        $this->load->view('setting',$data);
    }



}