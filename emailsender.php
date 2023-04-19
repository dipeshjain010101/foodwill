 <?php
    $myemail = 'shrishantinathfoundationbhinde@gmail.com';
       
    $name = $_POST['cf-name'];
    $email_address = $_POST['cf-email'];
    $phone = $_POST['cf-phone'];
    $amount = $_POST['cf-amount'];
    $tid = $_POST['cf-tid'];
    $dat = $_POST['cf-date'];


    $to = $myemail;
    $email_subject = "Donation details of: $name";
    $email_body = "Donation details are. ".
    " Here are the details:\n Name: $name \n ".
    "Email: $email_address\n Phone: $cf-phone\n".
    "Donation Amount: $cf-amount\n Transaction ID: $cf-tid\n".
    "Donation date: $cf-date\n" ;
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: donate.html');
    
    ?>