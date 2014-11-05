<?php include 'ca-sax-header.php' ?>

<div class="jumbotron">
  	<h1>News Blog</h1>
  	<p>Subtitle</p>
</div>

<section class="body">

<?php
	$perPage = 5;
	$pagenum = 1;
	if(isset($_GET['page'])) {
		$pagenum = intval($_GET['page']);
	}
	$offset = ($perPage * ($pagenum - 1));

	include 'articles.php';	
?>

<div id="pager-buttons">
	<?php include "pager.php" ?>
</div>

</section>

<?php include 'ca-sax-footer.php'; ?>