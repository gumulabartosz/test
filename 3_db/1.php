<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
    </head>
    <body>

    <?php
        require_once "../3.php";
        $result = $conn->query("SELECT firstname, lastname, created_at as data_utworzenia FROM `users`;");
        //$user = $result->fetch_assoc();
        //print_r($user);
        //echo $user['firstname'];

        while( $user = $result->fetch_assoc()){
            echo <<< USER
                Imię i nazwisko: $user[firstname] $user[lastname]
                <br>
                Data utworzenia: $user[data_utworzenia]
                <br>
                <hr>
            USER;
        }




    ?>

        
    </body>
</html>