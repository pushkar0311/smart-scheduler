<?php
include('connectiondb.php');

if(isset($_GET['email'])) {
    $email = $_GET['email'];

    $sql = "SELECT * FROM employee WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .banner {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('https://besthqwallpapers.com/Uploads/22-12-2019/116978/thumb2-gray-stone-wall-4k-decorative-rock-gray-brickwall-stone-textures.jpg');
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #ffffff; /* Change to a light color for better contrast */
    background: #333333; /* Change to a dark color that complements the background image */

   
}



        .navbar {
          width: 85%;
          margin: auto;
          padding: 35px 0;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .logo {

    width: 120px;
    cursor: pointer;
    position: absolute;
    top: -70px; 
    left: 10px; 
}

.navbar {
    text-align: center;
}

.navbar ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
a {
    margin-left: 120px;
}

.navbar ul li {
    display: inline-block;
    margin: 0 20px;
    position: relative;
}

.navbar ul li a {
    text-decoration: none;
    color: purple;
    text-transform: uppercase;
}

.navbar ul li::after {
    content: '';
    height: 3px;
    width: 0%;
    background:#8FBC8F;
    
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.2s;
}

.navbar ul li:hover::after {
    width: 100%;
}


       
        img {
    display: block;
    margin: 80px auto;

}

    .footer {
        background-color: #DDA0DD;
        color: #ffffff;
        text-align: center;
        padding: 20px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .footer a {
        color: #ffffff;
        text-decoration: none;
    }



h1 {
    font-size: 3em;
    text-align: center;
    line-height: 10;
    margin-bottom: 0;
}


    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="https://thumbs.dreamstime.com/z/timetable-vector-icon-symbol-creative-sign-education-icons-collection-filled-flat-computer-mobile-illustration-logo-155759684.jpg" class="logo">
        <ul>
        <li> <a href="index.php">Timetable</a></li>
        <li> <a href="roombooking.php">Room Booking</a></li>
        <li> <a href="details.php?email=<?php echo $email; ?>">Details</a></li>
        <li> <a href="front.php">Logout</a></li>
</ul>
    </div>
    <div class="content">
    <h1> <p>Welcome <?php echo $name; ?>!!</p></h1>
    
    </div>
<div class="footer">
    <p>&copy; 2023 Timetable. All rights reserved.</p>
    <p><a href="#">Privacy Policy</a>|<a href="#">Terms of Service</a></p>
</div>

</div>


</body>
</html>
<?php
    } else {
        echo "Employee details not found.";
    }
} else {
    echo "Employee ID not provided.";
}
$conn->close();
?>