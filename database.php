<?php

    // Global variables 
    $database = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "name" => "company"
    ];

    // Functions
    function select_SQL($sql){
        global $database;

        $connection = mysqli_connect(
            $database["host"],
            $database["user"],
            $database["password"],
            $database["name"]
        );

        $search = mysqli_query($connection, $sql);
        $results = mysqli_fetch_all($search, MYSQLI_ASSOC);

        mysqli_close($connection);

        return $results;
    }

    function select_one_SQL($sql){
        global $database;

        $connection = mysqli_connect(
            $database["host"],
            $database["user"],
            $database["password"],
            $database["name"]
        );

        $search = mysqli_query($connection, $sql);
        $results = mysqli_fetch_assoc($search);

        mysqli_close($connection);

        return $results;
    }

?>