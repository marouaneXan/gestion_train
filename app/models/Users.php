<?php 


  class Users extends DB{
    public function get_all_users(){
        $sql='SELECT * FROM user';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
            return $sql->fetchAll();
        }return 0;
      }
      public function get_all_clients(){
        $sql='SELECT * FROM client';
        $sql=$this->connect()->prepare($sql);
        if($sql->execute()){
            return $sql->fetchAll();
        }return 0;
      }
      // public function deleteUser($id){
      //   $sql='DELETE FROM user WHERE id like ?';
      //   $sql=$this->connect()->prepare($sql);
      //   if($sql->execute(array($id)))
      //      return 1;
      //   return 0;
      // }
      // public function deleteClient($id){
      //   $sql='DELETE FROM client WHERE id like ?';
      //   $sql=$this->connect()->prepare($sql);
      //   if($sql->execute(array($id)))
      //      return 1;
      //   return 0;
      // }
  }