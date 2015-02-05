<?php

namespace Controller;

//BlogController requires BaseController to render views
require 'BaseController.php';

class Map extends Base
{
  // $battles property for injecting battles model
  public $battles;

  /**
   * Controller takes battles model as object and assigns it to controller property battles
   * @param [object] $battles
   */
  function __construct($battles)
  {
    $this->battles = $battles;
  }

  /**
   * Controller method for map homepage, query $db, fetch array, create view
   */
  public function mapHomePage()
  {
    // calls blog objects getPosts method
    $battles = $this->battles->getBattles();
    $this->renderHeader();
    include 'view/templates/map.php';
    $this->renderFooter();
  }

  public function battlesDataAsJSON()
  {
    $battles = $this->battles->getBattles();
    echo(json_encode($battles));
  }

  /**
   * Controller for 404 view
   */
  public function pageNotFound()
  {
    $this->renderHeader();
    include 'view/templates/404.php';
  }
}