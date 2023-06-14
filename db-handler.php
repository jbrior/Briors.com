<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = intval($_GET['phone']);
    $comment = $_GET['comm'];

    require('config.php');

    $sql = "INSERT INTO contactForm (name, email, phone_number, comment)
    VALUES ('$name', '$email', $phone, '$comment')";

    if ($conn->query($sql) === TRUE) {
        $msg = "Name: ".$name."\nEmail: ".$email."\nPhone Number: ".$phone."\nComment: ".$comment;
        mail("jbrior@briors.com, briorj@gmail.com", "Briors.com - Contact Submission", $msg);
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>