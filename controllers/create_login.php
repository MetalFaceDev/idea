<?php
/**
* Controller script responsible for handling user login and the creation of a
* new user.
* @author Delvison Castillo delvisoncastillo@gmail.com
*/

  include $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';

  $action = $_POST['action'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($action == 'create_user')
  {
    $email = $_POST['email'];
    $date = date("Y-m-d H:i:s");

    echo $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';

    create_user($username, $password, $email, $date);

    // TODO: Redirect appropriately
  }

  if ($action == 'login')
  {
    // TODO: Write login function
  }
?>
