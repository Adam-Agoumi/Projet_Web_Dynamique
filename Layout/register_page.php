<?php
    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:webdynamiquegroupe3.database.windows.net,1433; Database = User", "Guillaume", "{RootRoot3}");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print("Connection reussie.");
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "Guillaume", "pwd" => "{RootRoot3}", "Database" => "User", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:webdynamiquegroupe3.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);


    //recuperer les donnees du form
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $psw = isset($_POST["psw"])?$_POST["psw"]:"";

    $sql = "INSERT INTO User(Username, FirstName, LastName, Birthdate, Email, Password, Approved)
            VALUES('Coco', 'Colin', 'Joubert', '2001-01-01', '$email', '$psw', '0')";


?>