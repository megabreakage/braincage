<!-- START -->
<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
  <div class="container">
    <div class="title">
      <h2 class="h1 text-white">Register</h2>
      <ul class="breadcrumb text-gray ff--primary">
          <li><a href="<?php echo base_url() ?>auth/account" class="btn-link">Account type</a></li>
          <li class="active"><span class="text-primary">Sponsor</span></li>
      </ul>
    </div>
  </div>
</div>
    <!-- add minors -->
<div class="container pt--30 pb--30">
  <form  action="" method="post">
    <div class="container">
      <div class="col-md-5">
        <div class="col-md-12 form-group">
          <input class="form-control" type="text" name="username" placeholder="Username">
        </div>
        <div class="col-md-12 form-group">
          <input class="form-control" type="text" name="fname" placeholder="Occupation">
        </div>
        <div class="col-md-3 form-group">
          <input class="form-control" type="number" name="phone_code" placeholder="+254">
        </div>
        <div class="col-md-9 form-group">
          <input class="form-control" type="number" name="phone_number" placeholder="Phone Number">
        </div>
        <div class="col-md-12 form-group">
          <input class="form-control" type="email" name="email" placeholder="email">
        </div>
        <div class="col-md-12 form-group">
          <input class="form-control" type="password" name="password" placeholder="password">
        </div>
      </div>
      <!-- photos -->
      <div class="col-md-7">
        <div class="col-md-6">
          passport
        </div>
        <div class="col-md-6">
          Front Full
        </div>
      </div>
      <div class="container pb--30">
        <table class="table table-striped table-editable table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <th></th>
              <th>Minor's Name</th>
              <th>D.O.B</th>
              <th>Residence(Constituency)</th>
              <th>Talent</th>
              <th>Guardian/Parent Name</th>
              <th>Contacts</th>
              <th>Attach Pic</th>
            </tr>
          </thead>
          <tbody>
            <?php if($fetch_data->num_rows() > 0) {
              foreach ($fetch_data->result() as $row) {
             ?>
             <tr>
               <th scope="row">1</th>
               <td contenteditable="true"><?php echo row->name; ?></td>
               <td contenteditable="true"><?php echo row->dob; ?></td>
               <td contenteditable="true"><?php echo row->residence; ?></td>
               <td contenteditable="true"><?php echo row->talent; ?></td>
               <td contenteditable="true"><?php echo row->guardian_name; ?></td>
               <td contenteditable="true"><?php echo row->contacts; ?></td>
               <td contenteditable="true"><?php echo row->ppic; ?></td>
             </tr>
              }
            <?php
              }
            }
            else {
            ?>
              <tr>
                <td colspan="3">No data Found</td>
              </tr>
            <?php
            } ?>

          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12 text-center">
      <input class="btn btn-primary" type="submit" name="Register">
    </div>
  </form>
</div>
