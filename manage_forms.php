<?php
include_once("connection.php");
if(isset($_POST['contact_us']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $city = $_POST['city'];
    $message = $_POST['message'];
    $query = "INSERT INTO `contactus`(`name`, `email`, `phonenumber`, `city`, `message`) VALUES ('$name','$email','$phonenumber','$city','$message')";
    mysqli_query($conn,$query);
    echo "<script>alert('Message Sent Successfully');window.location.href = 'index.php';</script>";
}

if(isset($_POST['book_now']))
{
    $start = $_POST['start'];
    $end = $_POST['end'];
    $date = $_POST['date'];
    $car_class = $_POST['car_class'];
    $phonenumber = $_POST['phonenumber'];
    $query1 = "INSERT INTO `bookings`(`start`, `end`, `date`, `car_class`, `phonenumber`) VALUES ('$start','$end','$date','$car_class','$phonenumber')";
    mysqli_query($conn,$query1);
    echo "<script>alert('Message Sent Successfully');window.location.href = 'index.php';</script>";
}
if(isset($_POST['comment']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment_msg = $_POST['comment_msg'];
    $post_id = $_POST['post_id'];
    $query2 = "INSERT INTO `comments`(`post_id`, `name`, `email`, `comment_msg`) VALUES ('$post_id','$name','$email','$comment_msg')";
    mysqli_query($conn,$query2);
    echo "<script>alert('Message Sent Successfully');window.location.href = 'our_news.php';</script>";
}

?>