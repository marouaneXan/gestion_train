
<?php


  class Sign_upController{
    
      public function index(){
        $data=array(
          'title'=>'Sign Up'
        );
           if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
              'title'=>'Sign Up',
              'nom'=>trim($_POST['nom']),
              'prenom'=>trim($_POST['prenom']),
              'date_naissance'=>trim($_POST['date_naissance']),
              'email'=>trim($_POST['email']),
              'password'=>trim($_POST['password'])
            ];
            $sign_up=new Login();     
            if($sign_up->already_exist($data['email'])){
              $data['errorEmail']='This email is already exist';
              View::load('component/sign_up',$data);
            }elseif( $sign_up->sign_up($data)){
              $data['success']='Your account is created successfuly';
              View::load('component/sign_up',$data);
            }
          }else{
            View::load('component/sign_up',$data);
          }
      }
  }

  //$nom,$prenom,$date_naissance,,$email,$password