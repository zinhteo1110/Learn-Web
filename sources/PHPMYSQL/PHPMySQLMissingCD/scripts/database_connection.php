<<<<<<< HEAD
<?php
  require_once 'app_config.php';

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or handle_error("there was a problem connecting to the database that holds the information we need to get you connected.",
                     mysql_error());

  mysql_select_db(DATABASE_NAME)
    or handle_error("there's a configuration problem with our database.",
                     mysql_error());
?>
=======
<?php
  require_once 'app_config.php';

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or handle_error("there was a problem connecting to the database that holds the information we need to get you connected.",
                     mysql_error());

  mysql_select_db(DATABASE_NAME)
    or handle_error("there's a configuration problem with our database.",
                     mysql_error());
?>
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
