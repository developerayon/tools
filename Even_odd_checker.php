<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Or Odd Checker Tool</title>
 
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

        h2 {
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        .Even_odd_checker {
            padding: 20px;
            box-shadow: 0px 0px 10px #8080ff;
        }
    </style>
</head>

<body>

    <div class="Even_odd_checker">

        <h2>Even Or Odd Checker Tool</h2>


        <form action="" method="post">
            <input type="number" name="num1" placeholder="Type Frist Number" require> </br>

            <button type="submit" value="calculate">Calculate</button>



        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num1"];

            if ($num % 2 == 0) {
                echo "<h2>Number $num Is Even</h2>";
            } else {
                echo "<h2>Number $num Is Odd</h2>";
            }
        }


        ?>

    </div>
</body>

</html>