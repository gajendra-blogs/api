<?php
  
   class Connect extends PDO{
       public function _construct()
       {
           parent::__construct("mysql:host=localhost:3307;dbname=api",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        }
   }

?>