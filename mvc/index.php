<?php 
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_get['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  } else {
    $controller = 'pages';
    $action = 'home';
  }

  require_once('views/layout.php');
 ?>