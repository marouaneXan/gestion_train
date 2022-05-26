<?php


 class Sign_inController{
     public function index(){
        $data=[
            'title'=>'Login Page',
            'error'=>''
        ];
        if($_SERVER['REQUEST_METHOD']=='POST'){
                $data=[
                    'title'=>'Login Page',
                    'email'=>trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'success'=>''
                ];
                $sign_in=new Login();
                $login=$sign_in->sign_in($data['email'],$data['password']);
                if($login){
                    $Selected_client_id=$sign_in->Get_id($data['email'],$data['password']);
                    $_SESSION['client_id']=$Selected_client_id[0];
                    $_SESSION['client_email']=$data['email'];
                    header('location:'.BURL.'home');
                    View::load('component/home',$data);
                }else{
                    $data['error']='Password or email is incorrect. Please try again';
                    View::load('component/sign_in',$data);
                }
        }else{
            View::load('component/sign_in',$data);
        }
     }
 }