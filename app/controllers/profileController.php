<?php



  class ProfileController{
      public function index(){
          $b=new booking();
          $data=[
              'title'=>'Informations',
              'info'=>$b->get_client($_SESSION['client_email'])
          ];
          View::load('component/profile',$data);
      }
  }