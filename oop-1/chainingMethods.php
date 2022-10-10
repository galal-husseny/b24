<?php

class chat {
    public $text;

    public function open()
    {
        echo "open chat <br>";
        return $this;
    }

    public function send()
    {
        echo $this->text;
        return $this;
    }

    public function close()
    {
        echo "close chat <br>";
        return $this;
    }
}

$firstMessage = new chat;
$firstMessage->text = "my github has been updated successfully <br>";
$firstMessage->open()->send()->close()->open();



