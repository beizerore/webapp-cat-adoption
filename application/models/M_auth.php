<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function validate($post)
    {
        return $this->db->get_where('users', array('username' => $post['username']));
    }

    public function addUsers()
    {
        $level    = $this->input->post('level', true);
        $email    = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $pass     = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'email'    => $email,
            'username' => $username,
            'password' => $pass,
            'level'    => $level
        );

        $this->db->insert('users', $data);
    }
}
