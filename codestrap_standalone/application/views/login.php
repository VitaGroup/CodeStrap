<!-- Load global page head -->
<?php $this->load->view('components/page_head.php') ?>

  <body class="login">

    <div class="container">

        <!-- Set up attributes for CI form helper -->
        <?php $f_attributes = array('class' => 'form-login'); ?>

        <!-- Start form using CI Form Helper -->
        <?php echo form_open('login/submit', $f_attributes);?>

          <h2 class="form-login-heading">Please sign in</h2>

          <!-- Set up attributes for input field -->
          <?php $i_attributes = array('name' => 'userID', 'placeholder' => 'Preceda #', 'class' => 'input-block-level'); ?>

          <!-- Form inputs are added using CI Form Helper -->
          <?php echo form_input($i_attributes); ?></td>
          <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary"'); ?>

        <!-- Return any form validation errors -->  
        <?php if(validation_errors()): ?>

          <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Woops!</strong><?php echo validation_errors() ?>
          </div>

        <?php endif; ?>

        <p class="loginFooter">Vita CodeStrap 2013</p>

        <!-- End CI Form -->
        <?php echo form_close();?> 

    </div> <!-- End .container -->

<!-- Load global page foot -->
<?php $this->load->view('components/page_tail.php') ?>

