<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function login() {
        $this->anti_login();
        $this->load->view('auth/login');
    }

    public function anti_login() {
        if ($this->session->userdata('level') != NULL) {
            redirect('home', 'refresh');
        }
    }

    public function login_process()
    {
        $this->anti_login();
        $post = $this->input->post();

        if(isset($post['login'])) {

            $query = $this->M_auth->validate($post);
            if($query->num_rows() > 0) {
                $data = $query->row();

                if(password_verify($post['password'], $data->password)) {
                    $arr = array(
                        'id_users' => $data->id_users,
                        'username' => $data->username,
                        'level'    => $data->level
                    );
                $this->session->set_userdata($arr);
                redirect('home');
                }
                else {
                    echo "<script>
                            alert('Password / Ussername Salah, Silahkan Login Ulang');
                          </script>";
                    redirect('auth/login', 'refresh');
                }
            }
            else {
                echo "<script>
                       alert('Akun tidak terdaftar!');
                      </script>";
                redirect('auth/login', 'refresh');
            }
        }
    }

    public function signup()
    {
        $this->anti_login();
        $this->load->library('form_validation');

        $valid = $this->form_validation;
                 $valid->set_rules('email',         'email', 'trim|required');
                 $valid->set_rules('username',   'username', 'trim|required');
        $pass  = $valid->set_rules('password',   'password', 'trim|required');
        $cpass = $valid->set_rules('cpassword', 'cpassword', 'trim|required|matches[password]');

        if($valid->run() == FALSE) {
            $this->load->view('auth/signup', 'refresh');
        }
        else {
            $this->M_auth->addUsers();
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_users');
        $this->session->unset_userdata('level');
        $this->session->sess_destroy();
        echo "<script>
                alert('Logout Berhasil');
              </script>";
        redirect('auth/login', 'refresh');
    }
}
