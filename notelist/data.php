
<?php
function getDataBase() {
  $db_host = 'localhost';
  $db_user = 'root';
  $password = "";
  $db_db = 'notebook';
  
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $password, 
    $db_db
  );
    
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    exit();
  }

  return $mysqli;
};

