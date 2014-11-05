<?php include 'ca-sax-header.php' ?>
  <div class="jumbotron">
  <h1>Contact Us</h1>
  <p>We'd love to hear from you!</p>
</div>
<script src="js/form-validation.js"></script>
<section class="body">
	<div class="container">
<div class="row">
  <form action="thank-you.php" method="post" name="main-contact"  onsubmit="return(validateForm());">
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
      <div class="form-group">
        <label for="InputName">Your Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input type="text" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group">
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
      <input type="reset" name="reset" id="reset" value="Clear Form">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
</div>

</div>
</section>
<?php include 'ca-sax-footer.php';?>