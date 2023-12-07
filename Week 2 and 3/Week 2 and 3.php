<!DOCTYPE html>
<html>
<head>
    <title> THE Z4 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ss.css">
</head>
<body>
    <header>
        <h1 class="name" href="MB.php"> BMW </h1>
        <nav class="navi">
            <a href="#" class="navi-item"> Models </a>    
            <a href="fb.php" class="navi-item"> Find & Buy </a>
            <a href="#" class="navi-item"> Owners </a>
            <a href="#" class="navi-item"> Discover </a>
        </nav>
    </header> 

    <div class="c">
        <h1 class="mb10">THE Z4 ROADSTER</h1>
    </div>
    <div class="co">
        <fieldset>
            <legend>MODELS</legend>
            <div class="model">
                <div class="imgCo">
                    <img class="white" src="/ama/img/white1.webp">
                    <figcaption> BMW Z4 s20i M Sport </figcaption>
                    
            </div>
            <div class="model">
                <div class="imgCo">
                    <img class="white" src="/ama/img/red.webp">
                    <figcaption> BMW Z4 m40i Roadster </figcaption>
            </div>
        </fieldset>

        <div class="you">
             
            <h1 class="m10"> Your Order </h1>
            <form method="POST">
                <div class="m10">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                </div>

                <div class="m10">
                <label for="type">Model:</label>
                <select id="type" name="type" required>
                <option value="Z4 s20i M Sport">BMW Z4 s20i M Sport - ₱3,990,000</option>
                <option value="Z4 m40i Roadster">BMW Z4 m40i Roadster - ₱5,890,000</option>
                </select>
                </div>

                <div class="input-group m10">
                <label>Color:<br></label>
                <input type="radio" id="MBM" name="color" value="Mediterranean Blue metallic" required>
                <label for="MBM">Mediterranean Blue metallic: + ₱0<br></label>

                <input type="radio" id="SFR" name="color" value="San Francisco Red">
                <label for="SFR">San Francisco Red: + ₱50,000<br></label>

                <input type="radio" id="BSM" name="color" value="Black Sapphire metallic">
                <label for="BSM">Black Sapphire metallic: + ₱80,000</label>
            </div>

            <div class="input-group m10">
                <label for="extras">Upholstery:<br></label>
                <input type="checkbox" id="BlueB" name="extras[]" value="Leather 'Vernasca'/Alcantara combination Blue | Black">
                <label for="BlueB">Leather 'Vernasca'/Alcantara combination Blue | Black: + ₱0<br></label>

                <input type="checkbox" id="B" name="extras[]" value="Leather 'Vernasca' Black decor stitching | Black">
                <label for="B">Leather 'Vernasca' Black decor stitching | Black: + ₱30,000<br></label>

                <input type="checkbox" id="RedB" name="extras[]" value="Leather 'Vernasca' Magma Red decor stitching | Black">
                <label for="RedB">Leather 'Vernasca' Magma Red decor stitching | Black: + ₱35,000</label>
            </div>

            <div class="m10">
            <label for="instructions">Special Instructions:</label>
            </div>
            <div class="m10">
            <textarea id="instructions" name="instructions" rows="4"></textarea>
            </div>  

            <div class="m10">
            <button type="submit">Place Order</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo "<div class='summary'>";
            echo "<h2>📝 Order Summary</h2>";

            $car_prices = [
                "Z4 s20i M Sport" => 3990000,
                "Z4 m40i Roadster" => 5890000,
            ];

            $color_prices = [
                "Mediterranean Blue metallic" => 0,
                "San Francisco Red" => 50000,
                "Black Sapphire metallic" => 80000,
            ];

            $extras_prices = [
                "Leather 'Vernasca'/Alcantara combination Blue | Black" => 0,
                "Leather 'Vernasca' Black decor stitching | Black" => 30000,
                "Leather 'Vernasca' Magma Red decor stitching | Black" => 35000,
            ];

            $car_type = $_POST["type"];
            $color = $_POST["color"];
            $instructions = $_POST["instructions"];

            $extras = isset($_POST["extras"]) ? $_POST["extras"] : [];
            $total_price = $car_prices[$car_type] + $color_prices[$color];
            foreach ($extras as $extra) {
                $total_price += $extras_prices[$extra];
            }

        
            echo "<table>";
            echo "<tr><td>Name</td><td>" . htmlspecialchars($_POST["name"]) . "</td></tr>";
            echo "<tr><td>Model</td><td>" . htmlspecialchars($_POST["type"]) . " (₱" . number_format($car_prices[$car_type], 2) . ")</td></tr>";

            echo "<tr><td>Color</td><td>" . htmlspecialchars($_POST["color"]) . " (₱" . number_format($color_prices[$color], 2) . ")</td></tr>";

            
            if (!empty($extras)) {
                echo "<tr><td>Upholstery:</td><td>" . implode(", ", $extras) . " (₱" . number_format(array_sum(array_intersect_key($extras_prices, array_flip($extras))), 2) . ")</td></tr>";
            }

            
            echo "<tr><td>Total Price</td><td>₱" . number_format($total_price, 2) . "</td></tr>";
            if (!empty($instructions)) {
                echo "<tr><td>Special Instructions</td><td>" . htmlspecialchars($_POST["instructions"]) . "</td></tr>";
            } else {
                
            }
            
            echo "</table>";

            if ($car_type !== "Z4 s20i M Sport") {
                echo "Hey, " . htmlspecialchars($_POST["name"]) . "!";
                echo "<p>Nice choice</p>";
            }

            if ($total_price > 3000000 && $total_price < 4000000) {
                echo "<p>Thank you for purchasing $car_type!</p>";
            } elseif ($total_price >= 4000000) {
                echo "<p>Thank you for purchasing $car_type! Wishing you all the best!</p>";
            }

            echo "</div>";
        }

        ?>
    </div>

              






    </div>

    <footer class="foot">
        <p>&copy; BMW by JMS 2023</p>
    </footer>
</body>
