<?php

class BookingController
{

  public function index()
  {
    $b = new Booking();
    $data = [
      'title' => 'Search For Trip',
      'ville_depart' => '',
      'ville_arrivee' => '',
      'heure_depart' => ''
    ];
    // $date_now = date("Y-m-d");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'title' => 'Search For Trip',
        'ville_depart' => trim($_POST['ville_depart']),
        'ville_arrivee' => trim($_POST['ville_arrivee']),
        'heure_depart' => trim($_POST['date_depart']),
        'result' => ''
      ];
      date_default_timezone_set("Africa/Casablanca");
      $date_now = date("Y-m-d");
      $_SESSION['date_depart'] = $data['heure_depart'];
      $time_now = strtotime(date('H:i'));
      if ($b->search_trip($data['ville_depart'], $data['ville_arrivee'])) {
        $data['result'] = $b->search_trip($data['ville_depart'], $data['ville_arrivee']);
        $count=count($data['result']);
        for ($i = 0; $i < $count; $i++) {
          $timestr = strtotime($data['result'][$i]['heure_depart']);
          if ($time_now >=$timestr  && $date_now >= $data['heure_depart']) {
            unset($data['result'][$i]);
          }
        }
        if (empty($data["result"])) {
          $data['warning'] = 'There is no travel available for this Trip';
          View::load('component/booking/index', $data);
        } else {
          View::load('component/booking/search_trip', $data);
        }
      } else {
        $data['warning'] = 'There is no travel available for this Trip';
        View::load('component/booking/index', $data);
      }
    } else {
      View::load('component/booking/index', $data);
    }
  }


  public function book_now($id)
  {
    $b = new booking();
    $data = [
      'title' => 'Booking Now',
      'trip' => $b->get_trip_by_id($id)
    ];
    if (isset($_SESSION['client_email'])) {
      $data['client'] = $b->get_client($_SESSION['client_email']);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'nom' => trim($_POST['nom']),
        'prenom' => trim($_POST['prenom']),
        'date_naissance' => trim($_POST['date_naissance']),
        'email' => trim($_POST['email'])
      ];
      // check if user not exist in bd then insert user information in user table and insert booking user
      if ($b->get_user_id($_POST['email']) == 0 && !isset($_SESSION['client_email'])) {
        $b->insert_user($data['nom'], $data['prenom'], $data['date_naissance'], $data['email']);
        $data['user'] = $b->get_user_id($_POST['email']);
        $data['id_user'] = $data['user']['id'];
        $b->insert_res_user($data['id_user'], $id);
        header('location:' . BURL . 'home');
      } elseif ($b->get_user_id($_POST['email']) && !isset($_SESSION['client_email'])) {
        $data['user'] = $b->get_user_id($_POST['email']);
        $data['id_user'] = $data['user']['id'];
        $b->insert_res_user($data['id_user'], $id);
        header('location:' . BURL . 'home');
      } elseif (isset($_SESSION['client_email'])) {
        $data['client'] = $b->get_client($_SESSION['client_email']);
        $data['id_client'] = $data['client']['id'];
        $b->insert_res_client($data['id_client'], $id, $_SESSION['date_depart']);
        echo $_SESSION['date_depart'];
        unset($_SESSION['date_depart']);
        header('location:' . BURL . 'basket');
      }
    } else {
      View::load('component/booking/bookNow', $data);
    }
  }
}
