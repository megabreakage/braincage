<!-- controller -->
<?php /**
 *
 */
class Profile_edit extends CI_Controller
{

  public function view()
  {

    //call the method that extracts all the data
    $data['bio'] = $this->profile_model->get_bio();
    // $data['query_xp'] = $this->profile_model->get_xp();
    // $data['query_ed'] = $this->profile_model->get_ed();

    // call the model methods
    if(isset($POST['update_bio'])){
      //call the model method to update fields
      $this->profile_model->update_bio();
      redirect("profile_edit/edit_profile", "refresh");
    }
    //validate entries for experience
    if(isset($POST['update_xp'])){
      //call the model method to update fields
    }
    //validate enteries for education
    if(isset($POST['update_ed'])){
      //call the model method to update fields
    }

    $this->load->view('templates/header', $data);
    $this->load->view('edit/edit_profile', $data);
    $this->load->view('templates/footer', $data);
  }
}
 ?>
