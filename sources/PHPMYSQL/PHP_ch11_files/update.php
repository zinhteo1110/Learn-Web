<<<<<<< HEAD
<?php

require_once "../scripts/database_connection.php";

$update = "UPDATE users SET password = '" . crypt("greenfield", "mgreenf") . "' " .
          " WHERE user_id = 49";

$result = mysql_query($update);

?>
=======
<?php

require_once "../scripts/database_connection.php";

$update = "UPDATE users SET password = '" . crypt("greenfield", "mgreenf") . "' " .
          " WHERE user_id = 49";

$result = mysql_query($update);

?>
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
