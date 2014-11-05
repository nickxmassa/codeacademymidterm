  <?php 
  $link = mysqli_connect("localhost", "root", "root", "ca-sax"); 
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  $query = "SELECT title, category FROM articles INNER JOIN categories on id = article_category";

  if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_row($result)) {
        printf ("%s %s\n", $row[0],$row[1]);
    }
    mysqli_free_result($result);
}
?>