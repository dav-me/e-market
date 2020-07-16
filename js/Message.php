<?php 
  class Message{
      public $id;
      public $mess_client;
      public $mess_ass;
      public $mess_date;
      public $mess_pending;

     function __construct($id,$mess_client,$mess_ass,$mess_date,$mess_pending){
         $this->id = $id;
         $this->mess_client = $mess_client;
         $this->mess_ass = $mess_ass;
         $this->mess_date = $mess_date;
         $this->mess_pending = $mess_pending;
     }
  }


?>