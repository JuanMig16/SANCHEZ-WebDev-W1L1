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
                <option value="espresso">BMW Z4 s20i M Sport - ₱3,990,000</option>
                <option value="latte">BMW Z4 m40i Roadster - ₱5,890,000</option>
                </select>
                </div>

                <div class="m10">
                <label for="type">Color:</label>
                <select id="type" name="type" required>
                <option value="espresso">Mediterranean Blue metallic: + ₱0</option>
                <option value="latte">San Francisco Red: + ₱50,000</option>
                <option value="black">Black Sapphire metallic: + ₱80,000
                </select>
                </div>

                <div class="m10">
                <label for="type">Upholstery:</label>
                <select id="type" name="type" required>
                <option value="espresso">Leather 'Vernasca'/Alcantara combination Blue | Black: + ₱0</option>
                <option value="latte">Leather 'Vernasca' Black decor stitching | Black: + ₱30,000</option>
                <option value="black">Leather 'Vernasca' Magma Red decor stitching | Black: + ₱35,000
                </select>
                </div>

                <div class="m10">
                <label for="extras">Upholstery:</label>
                <input type="checkbox" id="sugar" name="extras[]" value="sugar">
                <label for="sugar">Leather 'Vernasca'/Alcantara combination Black/contrast stitching Blue | Blackgar: + ₱0</label>
                <input type="checkbox" id="cream" name="extras[]" value="cream">
                <label for="cream">Leather 'Vernasca' Black decor stitching | Black: + ₱30,000</label>
                <input type="checkbox" id="cream" name="extras[]" value="red">
                <label for="cream">Leather 'Vernasca' Magma Red decor stitching | Black: + ₱35,000</label>
                </div>

                <!-- <div class="input-group">
                <label>Color:</label>
                <input type="radio" id="small" name="size" value="small" required>
                <label for="small">Mediterranean Blue metallic: +₱0</label>

                <input type="radio" id="medium" name="size" value="medium">
                <label for="medium">San Francisco Red: + ₱ 50,000</label>

                <input type="radio" id="large" name="size" value="large">
                <label for="large">Black Sapphire metallic: +₱80,000</label>
                </div> -->














    </div>

    <footer class="foot">
        <p>&copy; BMW by JMS 2023</p>
    </footer>
</body>
