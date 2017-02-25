<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 18:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Sports extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('admin_model');
        $this->load->model('picture_model');
        $this->load->model('sports_model');
    }
    public function view(){
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $this->load->view('sports',$data);
    }

    public function statistics(){
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        $data['user']  = $this->admin_model->verify_users($username,$password);
        $data['pic'] = $this->picture_model->get_picture($data['user']['pid']);
        $mile = $this->sports_model->getMiles($data['user']['uid']);
        $data['miles'] = round($mile['mile']/1000*100)/100;
        $data['day'] = $this->sports_model->getDay($data['user']['uid']);
        $ka = $mile['mile']/9*655/1000;
        $data['ka'] = round($ka*1000)/100;
        $data['round'] = round($mile['mile']/4)/100;
        $data['kg'] = round($ka/6)/100;
        $data['volumn'] = round($ka*4/60)/10;
        $data['time'] = round($ka*17/6)/100;
        $this->load->view('statistic',$data);
    }

    public function getSportsData(){
        if(!$this->session->has_userdata('username'))
            redirect('admin');
        $uid = $this->input->post('uid');
        $res = $this->sports_model->getSportsData($uid);
        $result = Array();
        foreach ($res as $single){
            array_push($result,array_values($single));
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

    public function insert(){
        $result=json_decode($this->input->raw_input_stream,true);
        /*echo 123;
        $len = count($result);*/
        foreach ($result as $item) {
            $this->sports_model->insert_rest($item);
        }

    }
}