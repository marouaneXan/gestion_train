<?php

class Booking extends DB
{

  public function search_trip($ville_depart, $ville_arrivee)
  {
    $sql = 'SELECT v.id,v.ville_depart,v.ville_arrivee,v.heure_depart,t.nom,t.nbr_place,v.price,v.statut FROM voyage v,train t where v.id_train=t.id and v.ville_depart=? and v.ville_arrivee=?';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($ville_depart, $ville_arrivee)))
      return $sql->fetchAll();
    return 0;
  }
  public function get_trip_by_id($id)
  {
    $sql = 'SELECT * from voyage where id like ?';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($id))) {
      return $sql->fetch();
    }
    return 0;
  }
  public function insert_user($nom, $prenom, $date_naissance, $email)
  {
    $sql = 'INSERT INTO `user` (`nom`, `prenom`, `date_naissance`, `email`) VALUES (?, ?, ?,?)';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($nom, $prenom, $date_naissance, $email)))
      return 1;
    return 0;
  }
  public function get_user_id($email)
  {
    $sql = 'SELECT * FROM user where email like ?';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($email)))
      return $sql->fetch();
    return 0;
  }
  public function get_client($email)
  {
    $sql = 'SELECT * FROM client where email like ?';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($email)))
      return $sql->fetch();
    return 0;
  }
  public function get_res_client($id)
  {
    $sql = "SELECT  panierclient.id,panierclient.date_voyage,C.nom , V.ville_depart , V.ville_arrivee , V.heure_depart ,T.nom as Nom_Train, V.price FROM train T , client C, voyage V, `panierclient` WHERE panierclient.id_client=C.id and panierclient.id_voyage=V.id and V.id_train=T.id and C.id=?";
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($id)))
      return $sql->fetchAll();
    return 0;
  }
  public function insert_res_user($id_user, $id_voyage)
  {
    $sql = "INSERT INTO `panieruser` (`id_user`, `id_voyage`) VALUES (?,?)";
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($id_user, $id_voyage)))
      return 1;
    return 0;
  }
  public function insert_res_client($id_client, $id_voyage, $date)
  {
    $sql = "INSERT INTO `panierclient` (`id_client`, `id_voyage`,`date_voyage`) VALUES (?,?,?)";
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($id_client, $id_voyage, $date)))
      return 1;
    return 0;
  }
  public function Cancel_res($id)
  {
    $sql = 'DELETE FROM panierclient WHERE id = ?';
    $sql = $this->connect()->prepare($sql);
    if ($sql->execute(array($id)))
      return 1;
    return 0;
  }
}
