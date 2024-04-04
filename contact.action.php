<?php
        include_once './dbc.php';

        $usr1 = $_POST['namec'];
        $email1 = $_POST['email'];
        $no = $_POST['subject'];
        $msg = $_POST['message'];

        $sql3 = "INSERT INTO contact_messages	 (name, email, subject, message) VALUES ('$usr1','$no' ,'$email1', '$msg')"; 
        

        if (mysqli_query($connect, $sql3)) {
            echo '<script type="text/javascript"> 
                    alert("Message Sent!");
                    window.location = "index.php?signup=success";
                  </script>';
            exit;
        } else {
            echo '<script type="text/javascript"> 
                    alert("Try again!");
                    window.location = "index.php?error=registration_failed";
                  </script>';
            exit;
        }
