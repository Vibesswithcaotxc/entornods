<?php

require_once "user.php";

  class Controller{
    // Recupera todos los usuarios.
    // Invoca a vista con todos los usuarios
    public function index(){
        $arrusers = User::all();
        require "views/index.php";
    }

    public function show() {
        $id = $_GET['id'];
        $user = User::find($id);
        require 'views/show.php';
        
    }
  }