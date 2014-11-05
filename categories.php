<?php include 'ca-sax-header.php';

$category = $_GET['category'];
$query = "SELECT id, image, title, datePub, category, teaser FROM articles WHERE category = '$category' ORDER BY datePub DESC";
if ($result = mysqli_query($link, $query)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_row($result)) {
		printf ("<div class='news_item'><img style='height: 250px; width: 250px;' class='teaser' src='%s' /><br /><h1 class='teaser'><a href='viewArticle.php?articleId=$row[0]'>%s</a></h1><br />%s<h2 class='teaser'><a href='categories.php?category=$row[4]'>%s</a></h2><br />%s&nbsp;<a href='viewArticle.php?articleId=$row[0]'>Read more &raquo;</a><div style='clear: both;'></div></div>\n", $row[1],$row[2],$row[3],$row[4],$row[5]);
		
	}

	mysqli_free_result($result);
}
?>
      <p><a href="./">Return to Homepage</a></p>

<?php include 'ca-sax-footer.php' ?>

