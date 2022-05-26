<?php



   class BookingClientsController{
       public function index(){
           $b=new Admin();
           $data['title']='View All Booking Clients';
           $data['booking_clients']=$b->get_all_booking_clients();
           View::load('component/Admin/BookingClients',$data);
       }
   }