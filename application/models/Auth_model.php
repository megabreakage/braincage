<?php
class Auth_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function login_user(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $query = $this->db->get_where('users',array(
      'username' => $username,
      'password' => $password
    ));
    $user = $query->row(); //used to select infor from a single row
    return $user;
  }

  public function reg_standard(){
    // create an array to contain data from user
    $user_data = array(
      'fname' => $this->input->post('fname'),
      'lname' => $this->input->post('lname'),
      'id_num' => $this->input->post('id_num'),
      'country' => $this->input->post('country'),
      'code' => $this->input->post('code'),
      'cell' => $this->input->post('cell'),
      'dob' => $this->input->post('dob'),
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'date_created' => date('Y-m-d')
    );

    $query = $this->db->insert('users', $user_data);
  }

  public function fetch_data(){
    $query = $this->db->get_where("occupation");
    return $query->row_array();
  }

} ?>
