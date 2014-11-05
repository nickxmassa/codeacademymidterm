<?php include 'ca-sax-header.php';

$query = "SELECT * FROM articles WHERE id = $_GET[articleId]";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_row($result)) {
        printf ("<img src='%s' /><h1>%s</h1><br /><strong>%s</strong><br /><em>%s</em><br /><p>%s</p>\n", $row[1],$row[2],$row[3],$row[4],$row[6]);
    }
    mysqli_free_result($result);
}
?>
      <p><a href="./">Return to Homepage</a></p>

<?php include 'ca-sax-footer.php' ?>

