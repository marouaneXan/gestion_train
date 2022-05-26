<?php


  class Login extends DB{
      public function sign_up($data){
          $sql="INSERT INTO client (nom, prenom, date_naissance, email, password) VALUES(?,?,?,?,?)";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($data['nom'],$data['prenom'],$data['date_naissance'],$data['email'],$data['password']))){
              return 1;
          }return 0;
      }
      public function sign_in($email,$password){
          $sql="SELECT * FROM client where email = ? and password = ?";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($email,$password))){
              if($sql->rowCount()>0)
                {
                    return 1;
                }
          }else{
              return 0;
          }
      }
      public function Get_id($email,$password){
        $sql="SELECT id FROM client where email = ? and password = ?";
        $sql=$this->connect()->prepare($sql);
        if($sql->execute(array($email,$password))){
            if($sql->rowCount()>0)
              {
                  return $sql->fetch();
              }
        }else{
            return 0;
        }
    }

      public function already_exist($email){
          $sql="SELECT * FROM client where email= ?";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($email))){
              if($sql->rowCount()>0)
              {
                return 1;
            }
          }return 0;
      }
  }//$nom,$prenom,$date_naissance,,$email,$password
