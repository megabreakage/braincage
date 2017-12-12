<?php
class Auth_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function login_user(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $membership = $this->input->post('membership');

    $query = $this->db->get_where('users',array(
      'username' => $username,
      'password' => $password,
      'membership' => $membership
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
      'membership' =>  $this->input->post('membership'),
      'date_created' => date('Y-m-d')
    );

    $query = $this->db->insert('users', $user_data);
  }

  public function get_profile(){
    $query = $this->db->query(
      'SELECT fname, lname, cell, monthname(dob) as month, year(dob) as year, username,
      email, occupation, skills, bio FROM users WHERE id = ?', $this->session->userdata('user_id'));
    return $query->row_array();
  }

// for char START
  public function add_message($message, $nickname, $guid){
		$data = array(
			'message'	=> (string) $message,
			'nickname'	=> (string) $nickname,
			'guid'		=> (string)	$guid,
			'timestamp'	=> time(),
		);

		$this->db->insert('messages', $data);
	}

	public function get_messages($timestamp){
		$this->db->where('timestamp >', $timestamp);
		$this->db->order_by('timestamp', 'DESC');
		$this->db->limit(10);
		$query = $this->db->get('messages');

		return array_reverse($query->result_array());
	}
// chat END

  public function get_products(){
    $query = $this->db->query(
      'SELECT a.category, b.product_name, b.price, b.product_name, b.rating,
       b.description, b.category_id
       FROM categories a
       INNER JOIN products b ON a.category_id = b.category_id');
    $products = $query->result_array();
    return $products;
  }

  public function get_product($product_id){
    // $this->db-get_where('products', $product_id);
  }

} ?>
