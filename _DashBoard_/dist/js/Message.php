<?php
    class Message{
        public $id;
        public $name;
        public $addmail;
        public $content;
        public $phone;
        public $response;
        public $date;
     function __construct($id,$name,$addmail,$phone,$content,$response,$date){
        $this->id = $id;
        $this->name = $name;
        $this->addmail = $addmail;
        $this->content = $content;
        $this->phone = $phone;
        $this->date = $date;
        $this->response = $response;
     }   
    }
?>