<?php



   class BookingUsersController{
       public function index(){
           $b=new Admin();
           $data['title']='View All Booking Users';
           $data['booking_users']=$b->get_all_booking_users();
           View::load('component/Admin/BookingUsers',$data);
       }
   }