<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>

    <style>
        body {
            text-align: center;
            margin: 100px auto;
            width: 600px;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }

        form {
            padding: 20px 0px;
        }

        input[type="number"] {
            width: 70%;
            height: 20px;
            margin-bottom: 20px;
            padding: 8px;
        }

        button {
            padding: 7px 42px;
            background-color: white;
            border-radius: 10px;
        }

        h3 {
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        h2 {
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        span {
            color: white;
            font-size: 20px;
        }

        .temperature_converter {
            padding: 20px;
            box-shadow: 0px 0px 10px #8080ff;
        }

        select {
            padding: 7px;
            font-size: 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }
    </style>
</head>

<body>

    <div class="temperature_converter">

        <h2>Temperature Converter</h2>


        <form action="" method="post">
            <input type="number" name="num1" placeholder="Type Frist Test Number" require> </br>
            <select name="operation" id="">
                <option value="CelToFahr">Celsius to Fahrenheit</option>
                <option value="FahrTCel"> Fahrenheit to Celsius</option>
            </select> </br>

            <button type="submit" value="">Convert</button>



        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp = $_POST["num1"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "CelToFahr";
                    $result = (($temp * 9) / 5) + 32;
                    echo "<h3>Temperature {$temp} in Fahrenheit is: $result</h3>";

                    break;

                case "FahrTCel";
                    $result = (($temp - 32) * 5) / 9;
                    echo "<h3>Temperature {$temp} in celsius is: $result </h3>";
                    break;
                default:

                    echo "<h2>Result: Enter a correct value</h2>";
                    break;
            }
        }





        ?>

    </div>
</body>

</html>