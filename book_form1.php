<?php

   $connection = mysqli_connect('localhost','root','','book_db1');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $start = $_POST['start date'];
      $end = $_POST['end date'];

    $to = "ompimple04@gmail.com"; // Replace with your mobile email address
    $subject = "New Booking Request";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nLocation: $location\nGuests: $guests\nStart Date: $start_date\nEnd Date: $end_date";
    $headers = "From: ompimple04@gmail.com"; // Replace with your website email address

    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['success_message'] = "Your booking request has been sent successfully!";
    } else {
        $_SESSION['success_message'] = "Failed to send your booking request. Please try again.";
    }

      $request = " insert into book_form2(name, email, phone, address, location, guests, start date, end date) values('$name','$email','$phone','$address','$location','$guests','$start','$end') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "package confirmed";
      header('location:book.php'); 
      echo 'Package Confirmed Successfully';

   }else{
      echo 'something went wrong please try again!';
   }

?>