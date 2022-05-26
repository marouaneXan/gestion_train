<?php
class BasketController
{
    public function index()
    {
        $b = new Booking();
        $data = [
            'booking' => $b->get_res_client($_SESSION['client_id'])
        ];
        View::load('component/basket', $data);
    }
    //     public function annuller_res($id){
    //         $u=new booking();
    //         if($u->Cancel_res($id)){

    //         }
    //         header('location:'.BURL.'basket');
    //    }
    public function annuller_res($id, $heure_voyage, $date)
    {

        $u = new booking();
        date_default_timezone_set("Africa/Casablanca");
        $date_now = date("Y-m-d");
        $heureNow = date("H:i:s");
        $dateTimeObject1 = date_create($heure_voyage);
        $dateTimeObject2 = date_create($heureNow);
        $difference = date_diff($dateTimeObject2, $dateTimeObject1);
        $sec = $difference->h * 3600;
        $sec += $difference->i * 60;
        $sec += $difference->s;
        if ($sec > 3600 || $date > $date_now) {
            $u->Cancel_res($id);
        }
        header('location:' . BURL . 'basket');
    }
}
