<?php
function apakah_sudah_masuk()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id_petugas') AND !$ci->session->userdata('login')) {
        $ci->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Login Dahulu !</div>');
        redirect('login');
    }
}