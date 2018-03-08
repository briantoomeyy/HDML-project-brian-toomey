<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
                <style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
body {
    background-image: url("http://80skiparty.com/wp-content/uploads/2017/12/new-homepage-background-subtle-circs-blue-website-background-homepage-background.jpg");
}


        h1  {
    text-shadow: 2px 2px green;
}
.button {
    background: linear-gradient(green, yellow, green);
    border: none;
    color: Black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 5px 30px;
    cursor: pointer;
    border-radius: 10px;
}

</style>

        
    </head>
    <body>
        
                 <ul>
  <li><a class="active" href="homepage.html">Home</a></li>
  <li><a href="cv_page1.html">CV</a></li>
  <li><a href="sports.html">Sport</a></li>
  <li><a href="travel.html">Travel</a></li>
  <li><a href="cloud_services.html">Cloud Services</a></li>
  <li><a href="cloudproducts.html">View Products</a></li>
  <li><a href= "contact.html">Contact Us </a></li>
</ul>
    
     <img src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/cloud-circle-blue-512.png" alt="cloud" width="120" height="100" align="left">
    <img src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/cloud-circle-blue-512.png" alt="cloud" width="120" height="100" align="right">
    <h1 class="mainheading"> <center>TOOMEY CLOUD STORE</center></h1>
    <br>
        
    </head>
    <body>
        <h4>RECEIPT</h4>
        Name <?php echo $_POST["CardholderName"]; ?><br>
        E-mail <?php echo $_POST["email"]; ?><br>
        User PIN <?php echo $_POST["user_pin"]; ?><br>
                <br><br><br>
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>