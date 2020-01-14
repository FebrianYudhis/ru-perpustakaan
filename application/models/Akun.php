<?php

class Akun extends CI_Model
{
    public function cekLogin(){
        $id = $this->input->post('id_petugas');
        $password = $this->input->post('password');
        $user = $this->db->get_where('petugas',['id_petugas'=> $id])->row_array();
        if($user){
            if($user['password']==$password){
                $data = [
                    'id_petugas' => $user['id_petugas'],
                    'login' => 'ya'
                ];
                $this->session->set_userdata($data);
                redirect('kelola');
            }else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('Login');
            }
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">ID Petugas Tidak Ada</div>');
            redirect('Login');
        }
    }
}