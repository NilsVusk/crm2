<?php
    $client_id = $_GET['client_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $occupation = $_POST['occupation'];
    $description = $_POST['description'];
    $lastSentAdDate = $_POST['lastSentAdDate'];


    if(isset($_GET['deleteID'])) {
           $query = "DELETE FROM klienti WHERE client_id='".$_GET['deleteID']."'";
 
           if ($conn->query($query) === TRUE) {
            echo "record deleted successfully";
            header("Location:?news");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

   

    if($_GET['client_id']) {
        
        $client_title = "Reģidēt klientu";
        $inputQuery = "UPDATE klienti SET `firstName` = '". $firstName ."', `lastName` = '". $lastName ."', `email` = '". $email ."', `phone` = '". $phone ."', `occupation` = '". $occupation ."', `description` = '". $description ."', `lastSentAdDate` = '". $lastSentAdDate ."' WHERE client_id = '". $client_id ."'";

        $sqlKlienti = "SELECT `firstName`, `lastName`, `email`, `phone`, `occupation`, `description`, `lastSentAdDate` FROM klienti WHERE client_id='".$client_id."'";
        $resultsKlienti = $conn->query($sqlKlienti);
        $klienti = mysqli_fetch_array($resultsKlienti);
        // var_dump($firstName);
    }else {
        // var_dump("insert");
        $client_title = "Pievienot";
        $inputQuery = "INSERT INTO klienti (`firstName`, `lastName`, `email`, `phone`, `occupation`, `description`, `lastSentAdDate`) VALUES ('". $firstName ."', '". $lastName ."', '". $email ."', '". $phone ."', '". $occupation ."','". $description ."','". $lastSentAdDate ."')";
    }

    if(isset($_POST['submit-klientiEditForm'])) {
        // var_dump($_POST);die();
        if ($conn->query($inputQuery) === TRUE) {
            echo "record inserted successfully";
            header("Location:?klienti");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
    }
?>