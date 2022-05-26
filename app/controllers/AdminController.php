<?php


class AdminController{
    
    public function index(){
        $data=[
          'title'=>'Admin Login',
          'error'=>''
      ];
      
      if($_SERVER['REQUEST_METHOD']=='POST'){
              $data=[
                  'title'=>'Admin Page',
                  'email'=>trim($_POST['email']),
                  'password'=>trim($_POST['password']),
                  'success'=>''
              ];
              $sign_in=new Admin();
              $login=$sign_in->sign_in($data['email'],$data['password']);
              if($login){
                  $_SESSION['admin_email']=$data['email'];
                  header('location:'.BURL.'home');
                  View::load('component/home',$data);
              }else{
                  $data['error']='Password or email is incorrect. Please try again';
                  View::load('component/admin/sign_in',$data);
              }
      }else{
          View::load('component/admin/sign_in',$data);
      }
      }
}