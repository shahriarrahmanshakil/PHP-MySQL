<?php
    require 'first.php';
    require 'second.php';

    $mymessage = new first\test();
    $mymessage->message();

    $mymassage2 = new second\test();
    $mymassage2->message();
?>