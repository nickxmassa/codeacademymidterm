<?php

// SET PAGER VARIABLES

$perPage = 5;

$pagenum = 1;
if(isset($_GET['page'])) {
	$pagenum = intval($_GET['page']);
}

$offset = ($perPage*($pagenum - 1));

$row_count = mysqli_query($link, "SELECT id FROM articles");
$totalRows = mysqli_num_rows($row_count);

$totalPages = ceil($totalRows / $perPage);

//PREV BUTTON

if($pagenum > 1 && $pagenum <= $totalPages) {
	$prev = $pagenum - 1;
	echo "<a style='margin: 0 auto; display: table;'class='btn btn-primary btn-lg' href='?page=$prev'>Previous</a>";
}

//NEXT BUTTON

if($pagenum < $totalPages) {
	$next = $pagenum + 1;
	echo "<a style='margin: 0 auto; display: table;'class='btn btn-primary btn-lg' href='?page=$next'>Next</a>";
}

?>