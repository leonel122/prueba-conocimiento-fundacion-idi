<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class navbar extends CI_Controller {

    public function __construct()
    {
    }
    function navbar()
    {
      $ret_menu = '
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitor/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monitores
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitor/form">Crear Monitor </a>
                <a class="dropdown-item" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitor/findall">Ver Monitores</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monitores
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitoria/form">Crear Monitor </a>
                <a class="dropdown-item" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitoria/findall">Ver Monitores</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      ';
      return $ret_menu;
    }
  }
?>
