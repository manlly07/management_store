<?php
    define('SERVER', '127.0.0.1');
    define('DB_NAME', 'quanlikhohang');
    define('DB_USER_NAME', 'root');
    define('DB_PASSWORD', '');

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods:  *");

    error_reporting(0);
    ini_set('display_errors', '0');

    function db() {
        $connection_string = "mysql:host=" . SERVER;
        $connection = null;
        try {
            $connection = new PDO(
                $connection_string,
                DB_USER_NAME,
                DB_PASSWORD
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            if ($connection->query("USE " . DB_NAME)) {
                // echo "Create DB successfully<br>";
                
            } else {
                echo "Create DB failed<br>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connection;
    }

    function Query($sql, $connection)
    {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $data = $statement->fetchAll();
        return $data;
    }

    function QueryGetId($sql, $connection)
    {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $data = $statement->fetchAll();
        return $connection->lastInsertId();
    }
?>