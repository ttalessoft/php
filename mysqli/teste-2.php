<?php

    $conn = new mysqli('localhost', 'root', '', 'dbphp7');

    if ($conn->connect_error) {
        echo "error: " . $conn->connect_error;
    }else{
        echo ">>conectou <br>";
    }

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $data = array();

    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        //var_dump($row);
        array_push($data, $row);
    }

    echo json_encode($data);


    