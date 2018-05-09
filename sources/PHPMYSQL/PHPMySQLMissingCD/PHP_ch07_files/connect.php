<<<<<<< HEAD
<?php                                                                                               

  require '../scripts/app_config.php';

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, "foo")
    or handle_error("there was a problem connecting to the database that holds the information we need to get you connected.",
                     mysql_error());
  

  echo "<p>Connected to MySQL!</p>";

  mysql_select_db(DATABASE_NAME)
    or die("<p>Error selecting the database " . DATABASE_NAME . mysql_error() . "</p>");

  echo "<p>Connected to MySQL, using database " . DATABASE_NAME . ".</p>";

  $result = mysql_query("SHOW TABLES;");

  if (!$result) {
    die("<p>Error in listing tables: " . mysql_error() . "</p>");
  }

  echo "<p>Tables in database:</p>";
  echo "<ul>";
  while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
  }
  echo "</ul>";
 
?> 
=======
<?php                                                                                               

  require '../scripts/app_config.php';

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, "foo")
    or handle_error("there was a problem connecting to the database that holds the information we need to get you connected.",
                     mysql_error());
  

  echo "<p>Connected to MySQL!</p>";

  mysql_select_db(DATABASE_NAME)
    or die("<p>Error selecting the database " . DATABASE_NAME . mysql_error() . "</p>");

  echo "<p>Connected to MySQL, using database " . DATABASE_NAME . ".</p>";

  $result = mysql_query("SHOW TABLES;");

  if (!$result) {
    die("<p>Error in listing tables: " . mysql_error() . "</p>");
  }

  echo "<p>Tables in database:</p>";
  echo "<ul>";
  while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
  }
  echo "</ul>";
 
?> 
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
