
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone-number"];
    $booking_date = $_POST["booking-date"];
    $booking_time = $_POST["booking-time"];
    $Ctype = $_POST["Ctype"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking`(`name`, `email`, `phone_number`, `booking_date`, `booking_time`, `Ctype`)
     VALUES ('$name','$email','$phone_number','$booking_date','$booking_time','$Ctype')";

     if($conn->query($sql) === TRUE){
        echo "Booking Successfully";
        exit();
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>

<!DOCTYPE html1>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Counselling Booking</title>
  <link rel="stylesheet" href="css/Style.css">
</head>
<body1>
    <div class="background">
        <div class="booking-form">
            <h2>Book Your Appointment!</h2>
            <form action="booking-form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
 
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
           
                <label for="phone-number">Phone Number</label>
                <input type="text" name="phone-number" id="phone-number" required>

                <!-- Added room selection dropdown -->
                <label for="room-selection">Select you favourite workshop!</label>
                <select id="room-selection" name="Ctype" required>
                    <option value="Face-To-Face">Face-To-Face</option>
                    <option value="Online Counselling">Online Counselling</option>
                </select>
           
                <label for="booking-date">Date:</label>
                <input type="date" name="booking-date" id="booking-date" required>
               
                <label for="booking-time">Time:</label>
                <input type="time" name="booking-time" id="booking-time" required>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>
</body1>
</html1>