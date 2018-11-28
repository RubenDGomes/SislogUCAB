<?php
  /**
   *
   */
  class Sislog_model extends CI_Model
  {

      public function register($enc_password)
      {
        $data = array(
          'ci' => $this->input->post('ci'),
          'name' => $this->input->post('name'),
          'last_name' => $this->input->post('last_name'),
          'username' => $this->input->post('username'),
          'password' => $enc_password,
          'email' => $this->input->post('email')
        );

          return ($this->db->insert('user', $data));

      }

      public function check_ci_exists($ci)
      {
        $query = $this->db->get_where('user', array('ci' => $ci));
        if(empty($query->row_array())) {
          return true;
        }
        else {
          return false;
        }
      }

      public function login($email, $password)
      {

        // $json = pg_query("SELECT usuario_login($email, $password)");
        try {
        //  $conn = $this->db->conn_id();
          // $json = $this->db->call_function('usuario_login', 'admin', 'admin');
          //
          // $query = $this->db->query("SELECT usuario_login($email,$password)");
          // print_r($query->result_id());
          // print_r($json);



          // $json_obj = pg_fetch_object($json);
          // $result = json_decode(json_encode($json_obj));
          // return json_decode($result->usuario_login);

        } catch (Exception $e) {
          echo $e->getMessage();
        }






        // $this->db->where('correo_usuario', $email);
        // $this->db->where('contrasena_usuario', $password);
        //
        // $result = $this->db->get('tbl_usuario');
        //
        // if ($result->num_rows() == 1 ) {
        //     //return $result->row(0)->ci;
        //     return true;
        // }
        // else {
        //   return false;
        //}
      }

  }


 ?>
