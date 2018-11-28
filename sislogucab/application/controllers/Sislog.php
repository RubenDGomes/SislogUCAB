<?php
  /**
   *
   */
  class Sislog extends CI_Controller
  {

    public function register()
    {
      try {
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
      } catch (Exception $e) {
        echo $e->getMessage();
        redirect('home');
      }


    }

    public function login()
    {
      try {
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header_css');
            $this->load->view('Sislog/login', $data);
            $this->load->view('templates/footer');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));


            // $user_id = $this->sislog_model->login($email, $password);
            // $result = pg_fetch_object($user_id);
            // print_r($result);
            // echo '<br>';
            // $result2 = json_decode(json_encode($result));
            // echo '<br>';
            // var_dump(($result2));
            // $result3 = $result2->usuario_login;
            // echo '<br>'. $result3;
            // $result4 = json_decode($result3);
            // echo '<br>';
            // var_dump(($result4));
            // echo '<br>';
            // echo $result4->codigo;

            // $email = 'admin';
            //
            // $password = md5('admin');
            // $resl_login = $this->sislog_model->login('admin', 'admin');
            // var_dump($resl_login);

        }
        else {
          //Get Ci and Password
          // $email = $this->input->post('email');
          // $password = md5($this->input->post('password'));
          //
          // $resl_login = $this->sislog_model->login($email, $password);
          // if($resl_login->codigo == 1) {
          //   $user_data = array(
          //     'logged_in' => true,
          //   );
          //
          //   $this->session->set_userdata($user_data);
          //     redirect('sislog/dashboard');
          //
          //
          //   $name; $last_name;
          //   $user_data = array (
          //     'user_id' => $user_id,
          //     'name' => $name,
          //     'last_name' => $last_name,
          //     'logged_in' => true
          //   );
          //   echo $password;
          //   $this->session->set_userdata($user_data);
          //
          //   $this->session->set_flashdata('login_success', 'Ahora estas ingresado');
          //   redirect('sislog/dashboard');
          // }
          // else {
          //     $this->session->set_flashdata('login_failed', $resl_login->resultado);
          //     redirect('sislog/login');
          // }

        }
      } catch (Exception $e) {
        echo $e->getMessage();
        redirect('home');
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

    public function dashboard()
    {

      try {
        $data['title'] = 'Paquetes';
        $this->load->view('templates/header_dashboard');
        $this->load->view('sislog/dashboard', $data);
        $this->load->view('templates/footer_dashboard');
        //$conn = pg_pgconnect("dbname=db");

      //  $insert = pg_query("SELECT insert_usuario('admin', 'admin')");
        //
        // $values = pg_fetch_object($insert);
        // print_r($values);
      } catch (Exception $e) {
        echo $e->getMessage();
        redirect('home');
      }


    }

    public function pago()
    {
      try {
        $data['title'] = 'Pago';
        $this->load->view('templates/header_dashboard');
        $this->load->view('sislog/pago', $data);
        $this->load->view('templates/footer_dashboard');
      } catch (Exception $e) {
        echo $e->getMessage();
      }


    }

    public function balance()
    {
      try {
        $data['title'] = 'Balance';
        $this->load->view('templates/header_dashboard');
        $this->load->view('sislog/balance', $data);
        $this->load->view('templates/footer_dashboard');
      } catch (Exception $e) {
        echo $e->getMessage();
        redirect('home');
      }


    }

    public function historico()
    {
      try {
        $data['title'] = 'Balance';
        $this->load->view('templates/header_dashboard');
        $this->load->view('sislog/historico', $data);
        $this->load->view('templates/footer_dashboard');
      } catch (Exception $e) {
        echo $e->getMessage();
        redirect('home');
      }


    }


    public function FunctionName($value='')
    {
      // code...
    }


  }
