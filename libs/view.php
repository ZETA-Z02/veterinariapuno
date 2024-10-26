<?php

class View
{
  public $mensaje;
  public $data;
  public $response;

  function __construct()
  {
    #echo "<h1>View Base</h1>";
  }

  function Render($nombre)
  {
    require 'views/' . $nombre . '.php';
  }
}
