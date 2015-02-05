<?php

namespace Controller;

class Base 
{
  /**
   * Render header method
   */
  public function renderHeader()
  {
    include 'view/templates/head.php';
  }
  /**
   * Render header method
   */
  public function renderFooter()
  {
    include 'view/templates/footer.php';
  }
}