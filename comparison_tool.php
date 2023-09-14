<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison tool</title>
 
    <style>
        body {
            text-align: center;
            margin: 100px auto;
            width: 600px;
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(218, 122, 19, 1) 86%);
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
        }

        .comprision_tool {
            padding: 20px;
            box-shadow: 0px 0px 10px #8080ff;
        }
    </style>
</head>

<body>

    <div class="comprision_tool">

        <h2>Comparison Tool</h2>


        <form action="" method="post">
            <input type="number" name="num1" placeholder="Type Frist Number" require> </br>
            <input type="number" name="num2" placeholder="Type second Number" require> </br>

            <button type="submit" value="calculate">Calculate</button>



        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
         if ($num1 > $num2) {
         echo "<h2>large Number is: $num1</h2>";
        } elseif ($num2 > $num1) {
            echo "<h2>large Number is: $num2</h2>";
        } elseif ($num1 = $num2) {
            echo "Numbers are equal";
        } else {
            echo "";
        }
        }

       
        ?>
    </div>
</body>

</html>