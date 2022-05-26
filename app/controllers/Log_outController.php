<?php



  class log_outController{
      public function index(){
        session_destroy();
        header('location:'.BURL.'home');
      }
  }