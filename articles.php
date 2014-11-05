<?php

$query = "SELECT id, image, title, category, teaser FROM articles ORDER by ID DESC LIMIT $perPage OFFSET $offset";

if ($result = mysqli_query($link, $query)) {

	/* fetch associative array */
	while ($row = mysqli_fetch_row($result)) {
		printf ("<div class='news_item'><img style='height: 250px; width: 250px;' class='teaser' src='%s' /><br /><h1 class='teaser'><a href='viewArticle.php?articleId=$row[0]'>%s</a></h1><br /><h2 class='teaser'><a href='categories.php?category=$row[3]'>%s</a></h2><br />%s&nbsp;<a href='viewArticle.php?articleId=$row[0]'>Read more &raquo;</a><div style='clear: both;'></div></div>\n", $row[1],$row[2],$row[3],$row[4]);
	}

	mysqli_free_result($result);
}

?>