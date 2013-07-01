<?php $this->load->view('components/page_head'); ?>
  <body class="login">
    <div class="container">
      <div class="row">
       <div class="offset4 span4">
        <!-- Set up attributes for the CI Form Helper -->
        <?php $f_attributes = array('class' => 'form-signin'); ?>

        <!-- Start form using CI Form Helper -->
        <?php echo form_open('login/submit', $f_attributes);?>

          <h2 class="form-signin-heading">Please sign in</h2>
          <?php $i_attributes = array('name' => 'userID', 'placeholder' => 'Preceda #', 'class' => 'input-block-level'); ?>
          <?php echo form_input($i_attributes); ?></td>
          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary"'); ?>

        <!-- Return any form validation errors -->  
        <?php echo '<p>'.validation_errors().'</p>' ?>

        <!-- End CI Form -->
        <?php echo form_close();?> 
        </div>
    </div>
  </div> <!-- /container -->
  </body>
<?php $this->load->view('components/page_tail'); ?>


  
