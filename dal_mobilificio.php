<?php
    include('config.php');
    function db_connect()
    {
        $conn= new mysqli(SERVER,USER,PASS,DB);
    
        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }
        return $conn;
    }

    function productsAll(){
        $conn=db_connect();
        $sql="SELECT * FROM prodotto ORDER BY idProdotto";
        $result=$conn->query($sql);
        $rows=$result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        $conn->close();
        return $rows;
    }