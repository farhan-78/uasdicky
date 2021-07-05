<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'userrole');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }
    public function daftar()
    {
        $this->load->view('template/header');
        $this->load->view('auth/daftar');
        $this->load->view('template/footer');
    }
    public function delete()
    {
        $this->load->view('template/header');
        $this->load->view('auth/delete');
        $this->load->view('template/footer');
    }
    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['username' => $username])->row_array();
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role'],
                        'id' => $user['id'],
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role'] == 'Admin') {
                        redirect('home');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">username Belum Terdaftar</div>');
                redirect('auth');
            }
        }
    }
    public function register()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('auth/daftar');
            $this->load->view('template/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => "User",
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
            redirect('auth');
        }
    }

    public function hapus($id){
        $this->userrole->delete($id);
        redirect('auth/delete');
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
        redirect('auth');
    }
   
}
