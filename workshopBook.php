<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "advoBooking";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone-number"];
    $workshop = $_POST["workshop"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `workbook`(`name`, `email`, `phone_number`, `workshop`)
     VALUES ('$name','$email','$phone_number','$workshop')";

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
            <form action="workshopBook.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
 
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
           
                <label for="phone-number">Phone Number:</label>
                <input type="text" name="phone-number" id="phone-number" required>
        
                <!-- Added room selection dropdown -->
                <label for="room-selection">Select you favourite workshop!</label>
                <select id="room-selection" name="workshop" required>
                    <option value="Virtual Mental">Virtual Mental</option>
                    <option value="Healthy Living">Healthy Living</option>
                    <option value="Increase Mental Health Awareness">Increase Mental Health Awareness</option>
                </select>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>
</body1>
</html1>
