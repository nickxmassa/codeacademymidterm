<?php include 'ca-sax-header.php' ?>

	<div id="featured-content">

		<div class="jumbotron">
			<h1>Saxapahaw Rivermill</h1>
			<p>live || eat || play || shop || stay || learn || saturdays in saxapahaw</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>

	</div>

<section class="body">

	<div id="recent-posts" style="float: left; display:inline-block;">

		<h2>Recent News</h2>

		<?php 
		$perPage = 2;
		$pagenum = 1;
		if(isset($_GET['page'])) {
			$pagenum = intval($_GET['page']);
		}
		$offset = ($perPage * ($pagenum - 1));
		include 'articles.php';
		include 'pager.php';

		?>

	</div>

	<div id="recent-tweets">
		<a class="twitter-timeline" href="https://twitter.com/Saxapahaw" data-widget-id="527473634038665216">Tweets by @Saxapahaw</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

</section>

<?php include 'ca-sax-footer.php'; ?>