<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>

    <style>
        body {
            text-align: center;
            margin: 100px auto;
            width: 600px;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 36%, rgba(49, 121, 135, 1) 100%);
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

        .weather_report {
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

    <div class="weather_report">

        <h2>Weather Report</h2>


        <form action="" method="post">
            <input type="number" name="num1" placeholder="let's See weather condition" require> </br>


            <button type="submit" value="">Check Weather</button>



        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["num1"];

            if ($value <= 14) {
                echo "<span>Temperture is Now {$value}&deg;C. Its freezing!</span>";
            } elseif ($value > 14 && $value <= 25) {
                echo "<span>Temperture is Now {$value}&deg;C. It's cool!</span>";
            } else {
                echo "<span></M>Temperture is Now {$value}&deg;C. It's warm!</span>";
            }
        }





        ?>

    </div>
</body>

</html>