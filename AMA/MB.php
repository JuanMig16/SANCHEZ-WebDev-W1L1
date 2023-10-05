<!DOCTYPE html>
<html>
<head>
    <title>THE Z4 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1 class="name">BMW<h1>
        <nav class="navi">
            <a href="#" class="navi-item"> Models </a>    
            <a href="#" class="navi-item"> Find & Buy </a>
            <a href="#" class="navi-item"> Owners </a>
            <a href="#" class="navi-item"> Discover </a>
        </nav>
    </header>

    <section>
        <!-- <img src="1.jpg" alt="Flowers in Chania"> -->
        <?php 
        // initial details
        $model = "BMW Z4";
        $Model = "BMW Z4 ROADSTER";
        $unitModel1 = "Z4 sDrive20i M Sport";
        $unitModel2 = "Z4 M40i Roadster";
       

        // Data Types
        $availableColors = "Black Sapphire metallic, <span style='color:#ED2939'>San Francisco Red, </span> <span style='color: #218DB1'>Mediterranean Blue metallic </span>"; // String
        $unitTypes = 2; // Integer
        $acceleration = 7.6-6.8; //Float
        $edit = true; // Boolean

        // String Concatenation
        $colors = "Design the color of your <b> BMW Z4 ROADSTER </b> with colors like <b>  $availableColors. </b>";
        $averageAcceleration = "On average, the <b> BMW Z4 </b> can accelerate up to  $acceleration km/h in s.";
        $editInfo = "Can I request for a test drive? " . ($edit ? "YES" : "NO");

        // Print the Information
        print "<h1> CHECK OUT THE DETAIL FEATURES OF <br> THE $model </br> </h1>";
        echo "<h2> THE $Model.</h2>";
        echo "<h1>There are no more limits to driving pleasure in the BMW Z4 </h1>";
        echo "<p> $colors </p>";
        echo "<p> $averageAcceleration </p>";
        echo "<p> $editInfo </p>";

        ?>    

    </section> 
    
    <footer class="foot">
        <p>&copy; BMW by JMS 2023</p>
    </footer>
        