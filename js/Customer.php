<?php 

class Customer
{
      public $id;	
      public $fstName;
      public $lstName;
      public $addMail;
      public $phoneNumber;
      
     function __construct($id,$fstName,$lstName,$addMail,$phoneNumber)
     {
         $this->fstName = $fstName;
         $this->lstName = $lstName;
         $this->addMail = $addMail;
         $this->phoneNumber = $phoneNumber;
         $this->id = $id;
     }

     function get_fstName(){return $this->fstName;}
     function get_lastName(){return $this->lstName;}
     function get_addMail(){return $this->addMail;}
     function get_phoneNum(){return $this->phoneNumber;}
     function get_id(){return $this->id;}
    // -------------------------------------------------- //
}
?>