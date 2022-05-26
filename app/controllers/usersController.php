<?php  



   class UsersController{
       public function index(){
           $u=new Users();
           $data=[
               'title'=>'View All Users',
               'users'=>$u->get_all_users()
           ];
            View::load('component/admin/users',$data);
       }
    //    public function deleteUser($id){
    //     $u=new users();
    //     if($u->deleteUser($id)){
    //         header('location:'.BURL.'users');
    //     }
    //    }
   }