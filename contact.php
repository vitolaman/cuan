<?php 
if(isset($_POST['submit'])){
    $to = "info@itnesia.id"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $message = $_POST['isi'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
        if(mail($to,$subject,$message,$headers)) {
            echo "Email terkirim ke: ".$to."<br>";
        }
        else {
            echo "Email tidak terkirim";
        }
    }
?>
