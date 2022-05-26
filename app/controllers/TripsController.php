<?php



  class TripsController{
      public function index(){
        $a=new Admin();
        $data=[
            'title'=>'View All trips',
            'trips'=>$a->get_all_trips(),
            'trains'=>$a->get_all_trains(),
            'ville_depart'=>'',
            'ville_arrivee'=>'',
            'heure_depart'=>'',
            'n_train'=>'',
            'price'=>'',
            'statut'=>''
        ];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                    'ville_depart'=>trim($_POST['ville_depart']),
                    'ville_arrivee'=>trim($_POST['ville_arrivee']),
                    'heure_depart'=>trim($_POST['heure_depart']),
                    'n_train'=>trim($_POST['n_train']),
                    'price'=>trim($_POST['price']),
                    'statut'=>trim($_POST['statut'])
                ];
                if($a->addTrip($data)){
                    header('location:'.BURL.'trips');
                }else{
                    echo 'error';
                }
        }else{
            View::load('component/admin/trips',$data);
        }
      }
      public function deleteTrip($id){
            $a=new Admin();
            $a->deleteTrip($id);
            header('location:'.BURL.'trips');
        }
      public function updateTrip($id){
        $a=new Admin();
        $data=[
            'title'=>'Update Trip',
            'train'=>$a->get_all_trains()
            
        ];
        if($a->get_trip_by_id($id)){
            $data['row']=$a->get_trip_by_id($id);
            View::load('component/admin/updateTrip',$data);
        }
        
      }
      public function edit($id){
        $a=new Admin();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'title'=>'View All trips',
                'ville_depart'=>trim($_POST['ville_depart']),
                'ville_arrivee'=>trim($_POST['ville_arrivee']),
                'heure_depart'=>trim($_POST['heure_depart']),
                'n_train'=>trim($_POST['n_train']),
                'price'=>trim($_POST['price']),
                'statut'=>trim($_POST['statut']),
                'trips'=>$a->get_all_trips(),
                'trains'=>$a->get_all_trains()
            ];
            if($a->updateTrip($data,$id)){
                header('location:'.BURL.'trips');
            }else{
                echo 'error';
            }
        }else{
            View::load('component/admin/updateTrip');
        }
      }
  }