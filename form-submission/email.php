<html>
<body>
<?php

    $to = "vanblerkh@gmail.com";

    $subject = "Client Enquiry";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $province = $_POST["province"];
    $message = $_POST["message"];

    //Sanitise input data
    //Email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $fullMessage = "
    <html>
        <head>
            <title>Client Enquiry</title>
        </head>
        <body>
            <h3>Client Details</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <td>$name</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>$number</td>
                </tr>
                <tr>
                    <th>Province</th>
                    <td>$province</td>
                </tr>                
            </table>
            <h3>Message:</h3>
            <p>$message</p>
        </body>
     </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//    $headers .= "From: " . $email . "\r\n";

    mail($to, $subject, $fullMessage, $headers);

    header('Location: '. 'form-submission-success.html');
?>

</body>
</html>
