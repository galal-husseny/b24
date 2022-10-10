<?php 

class mail {
    public $mailTo;
    public $body;
    public $subject;
    public function __construct ($mailTo,$body,$subject) {
        // $this->mailTo = $mailTo;
        // $this->body = $body;
        // $this->subject = $subject;
    }
}

$mail = new mail("glal@gmail.com","https://github.com/mina","mina");
// print_r($mail);
