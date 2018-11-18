<?php
  /**
   *
   */
  class Sislog extends CI_Controller
  {

    public function register()
    {
      $data['title'] = 'Sign Up';

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('last_name', 'Last Name', 'required');
      //callback_check_ci_exists
      $this->form_validation->set_rules('ci', 'Cedula', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('templates/header');
          $this->load->view('Sislog/register', $data);
          $this->load->view('templates/footer');
      }
      else {
        $enc_password = md5($this->input->post('password'));
        $this->sislog_model->register($enc_password);
        $this->session->set_flashdata('user_registred', 'Registro Completo. Ahora puedes ingresas');

        redirect('home');
      }
    }

    public function login()
    {
      $data['title'] = 'Sign In';

      $this->form_validation->set_rules('ci', 'Cedula', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('templates/header_css');
          $this->load->view('Sislog/login', $data);
          $this->load->view('templates/footer');
      }
      else {
        //Get Ci and Password
        $ci = $this->input->post('ci');
        $password = md5($this->input->post('password'));

        $user_id = $this->sislog_model->login($ci, $password);

        if($user_id) {
          $name; $last_name;
          $user_data = array (
            'user_id' => $user_id,
            'name' => $name,
            'last_name' => $last_name,
            'logged_in' => true
          );

          $this->session->set_userdata($user_data);

          $this->session->set_flashdata('login_success', 'Ahora estas ingresado');
          redirect('home');
        }
        else {
            $this->session->set_flashdata('login_failed', 'Erro al ingresar.');
            redirect('sislog/login');
        }

      }
    }

    public function logout()
    {
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('name');
      $this->session->unset_userdata('last_name');

      redirect('sislog/login');
    }

    public function check_ci_exists($ci)
    {
        $this->form_validation->message('check_ci_exists', 'Esta cedula ya existe. Ya esta registrado.');
        if($this->sislog_model->check_ci_exists($ci)) {
          return true;
        }
        else {
          return false;
        }
    }

  }
