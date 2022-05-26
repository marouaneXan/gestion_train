<?php  



   class ClientsController{
       public function index(){
           $c=new Users();
           $data=[
               'title'=>'View All Clients',
               'clients'=>$c->get_all_clients()
           ];
            View::load('component/admin/clients',$data);
       }
    //    public function deleteClient($id){
    //     $u=new Users();
    //     if($u->deleteClient($id)){
    //         header('location:'.BURL.'clients');
    //     }
    //    }
   }