<?php


   class View{
       public static function load($view_name,$view_data=[]){
           $file=VIEWS.$view_name.'.php';
           if(file_exists($file)){
            extract($view_data);
            ob_start();
            require VIEWS.'includes/header.php';
            require_once $file;
            require VIEWS.'includes/footer.php';
            ob_end_flush();
           } 
       }
   }
