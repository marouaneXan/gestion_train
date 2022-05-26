<?php


   class HomeController{
       public function index(){
            $s=new Admin();
            $data['number_trips']=$s->get_number_trips();
            $data['number_users']=$s->get_number_users();
            $data['number_clients']=$s->get_number_clients();
            $data['number_booking_users']=$s->get_number_booking_users();
            $data['number_booking_clients']=$s->get_number_booking_clients();
            View::load('component/home',$data);
       }
   }