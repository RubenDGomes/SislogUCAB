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

      public function login($ci, $password)
      {
        $this->db->where('ci', $ci);
        $this->db->where('password', $password);

        $result = $this->db->get('user');

        if ($result->num_rows() == 1 ) {
            //return $result->row(0)->ci;
            return true;
        }
        else {
          return false;
        }
      }

  }


 ?>
