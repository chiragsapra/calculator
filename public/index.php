<?php

if(!isset($_GET['opt'])){
  
  include "../controller/Controller.php";

  $controller = new Controller;

  $controller->invoke();

} else {

  include "../controller/calcController.php";

  $calcController = new calcController;

  $calcController->calc();

}
