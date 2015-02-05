<?php

session_start();

require './database/Database.php';
require './models/battles-model.php';

$Db = Database::getInstance();
$battles = new Battles($Db);

require './controllers/MapController.php';

$mapController = new Controller\Map($battles);

if(isset($_GET['page'])) {
  $page = $_GET['page'];
}

else {
  $page = 'map';
}

if(isset($_GET['json'])) {
  $resource = $_GET['json'];

  switch($resource) {
    case 'battles':
      $mapController->battlesDataAsJSON();
    break;
  }
}

switch($page) {
  case 'map':
    $mapController->mapHomePage();
  break;
  default:
    $mapController->pageNotFound();
  die();
}