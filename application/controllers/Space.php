<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 9:25
 */
class Space extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $this->load->model('admin_model');
        $this->load->model('picture_model');
        $this->load->model('message_model');
        $this->load->model('sports_model');
        $this->load->helper('url_helper');
    }


    public function view($userID = NULL){
        $data['title'] = 'mySpace';
        $data['test_user_id'] = $userID;
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['messages'] = $this->message_model->getMessages($data['user']['uid']);
        $data['star_num'] = $this->admin_model->getStarNum($data['user']['uid']);
        $data['follower_num'] = $this->admin_model->getFollowerNum($data['user']['uid']);
        $mile = $this->sports_model->getMiles($data['user']['uid']);
        $data['miles'] = round($mile['mile']/1000*100)/100;
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $this->load->view('space',$data);
    }

    public function following(){
        $data['title'] = 'mySpace';
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
//        echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['stars'] = $this->admin_model->getStars($data['user']['uid']);
        $data['star_num'] = $this->admin_model->getStarNum($data['user']['uid']);
        $data['follower_num'] = $this->admin_model->getFollowerNum($data['user']['uid']);
//        print_r($data['stars']);
        $this->load->view('following',$data);
    }

    public function fan(){
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
//        echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['fans'] = $this->admin_model->getFollowers($data['user']['uid']);
        $data['star_num'] = $this->admin_model->getStarNum($data['user']['uid']);
        $data['follower_num'] = $this->admin_model->getFollowerNum($data['user']['uid']);
//        print_r($data['stars']);
        $this->load->view('fans',$data);
    }

    public function news(){
        $text = $this->input->post('text');
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $uid  = $this->admin_model->verify_users($username,$password)['uid'];
        $time = date("Y/m/d H:i", time());
        $this->message_model->add_new($text,$uid,$time);
    }

}