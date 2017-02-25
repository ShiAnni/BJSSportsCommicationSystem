<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/28
 * Time: 22:16
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('picture_model');
    }
    public function index($message=NULL){
        $data['message'] = $message;
        $data['title'] = "登录";
//        if($message)
        $this->load->view('login',$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->index();
    }

    public function login(){
        if ($this->session->has_userdata('username')) {
            //$data['text'] = "重定向";
            //$this->load->view('alert',$data);
            redirect('welcome');
        }


        $res = $this->admin_model->verify_users(
            $this->input->post('username'),
            $this->input->post('password')
        );

        if($res !== false){
            print_r($res);
            $this->session->set_userdata('username',$res['username']);
            $this->session->set_userdata('password',$res['password']);
            if($res['type']==='manager')
                redirect('admin/manager');
            else
                redirect('welcome');
        }else{
            $message="用户名不存在或密码错误";
//            redirect('admin/index/'.$message);
            $this->index($message);
        }
    }

    public function signup(){
        $this->admin_model->add_new_user(
            $this->input->post('username'),
            $this->input->post('email'),
            $this->input->post('password')
        );
        $this->index();
    }

    public function edit(){
        $modify_data = array(
            'username'=>$this->input->post('username'),
            'sex'=>$this->input->post('sex'),
            'description'=>$this->input->post('description')
        );
        $id = array('uid'=>$this->input->post('uid'));
        $res = $this->admin_model->modify($modify_data,$id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($res));
    }

    public function manager(){
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $data['fans'] = $this->admin_model->getAll();
        $this->load->view('manage',$data);
    }

    public function delete_u(){
        $uid = $this->input->post('uid');
        $this->admin_model->delete($uid);
    }

    public function focus(){
        $starid = $this->input->post('starid');
        $followerid = $this->input->post('followerid');
        $this->admin_model->addStarPair($starid,$followerid);


    }


}