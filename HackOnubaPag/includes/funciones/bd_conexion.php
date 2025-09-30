<?php
    $conn = new mysqli('localhost', 'root', 'root', 'hackonuba');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }

?>