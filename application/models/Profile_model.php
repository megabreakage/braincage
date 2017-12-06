<!-- model -->

<?php
class Profile_model extends CI_Model{

  public function __construct(){
    parent:: __construct();
  }

  public function get_bio(){
    // get data from all the tables involved with the profile data
    $query = $this->db->get_where('users');
    $bio = $query->row_array();
    return $bio;
  }
  public function get_xp(){
    //get xp data
    $query = $this->db->get_where('experience', 1);
    $xp = $query->row_array();
    return $xp;
  }
  public function get_ed(){
    //get ed data
    $query = $this->db->get_where('education', 1);
    return $ed;
  }

  public function update_bio(){
    // collect user inputs
    $fname = $this->input->post('fname');
    $lname = $this->input->post('lname');
    $occupation = $this->input->post('occupation');
    $skills = $this->input->post('skills');
    $dob = $this->input->post('dob');
    $bio = $this->input->post('bio');

    $data = array(
      'id' => 1,
      'fname' => $fname,
      'lname' => $lname,
      'occupation' => $occupation,
      'skills' => $dob,
      'bio' => $bio
    );

    // $this->db->where('id', 1);
    $this->db->update('users', $data);
  }

  public function update_xp(){
    // collect user inputs
  }

  public function update_ed(){
    // collect user inputs
  }

} ?>
