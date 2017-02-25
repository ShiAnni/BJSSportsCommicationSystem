<?php
/**
 * Created by PhpStorm.
 * User: shino
 * Date: 2016/11/29
 * Time: 20:16
 */
class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('picture_model');
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']      = './public/uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 1024;
        $config['max_width']        = 1024;
        $config['max_height']       = 1024;
        $config['encrypt_name']     = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("state"=>false,"message"=>$error)));

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $username = $this->session->userdata('username');
            $password = $this->session->userdata('password');
            $user  = $this->admin_model->verify_users($username,$password);
            $uid = $user['uid'];
            $res = $this->picture_model->insert($data['upload_data']['file_name'],$uid);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("state"=>true)));


        }
    }
}