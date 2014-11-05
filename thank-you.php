<?php include 'ca-sax-header.php' ?>
<section id="body">
	<div class="jumbotron">
  <h1>About Our Little Village</h1>
  <p>live || eat || play || shop || stay || learn || saturdays in saxapahaw</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
<p>Thank you for your message! We'll be in touch soon.</p>
<?php 
$name = $_POST['InputName'];
$email = $_POST['InputEmail'];
$message = $_POST['InputMessage'];

var_dump($name, $email, $message);
?>
</section>
<?php 
include 'ca-sax-footer.php';
?>