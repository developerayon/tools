<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
 
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

        span {
            color: white;
            font-size: 20px;
        }

        .grade_calculator {
            padding: 20px;
            box-shadow: 0px 0px 10px #8080ff;
        }
    </style>
</head>

<body>

    <div class="grade_calculator">

        <h2>Grade Calculator</h2>


        <form action="" method="post">
            <input type="number" name="num1" placeholder="Type Frist Test Number" require> </br>
            <input type="number" name="num2" placeholder="Type Second Test Number" require> </br>
            <input type="number" name="num3" placeholder="Type Thrid Test Number" require> </br>

            <button type="submit" value="calculate">Calculate</button>



        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["num1"];
            $score2 = $_POST["num2"];
            $score3 = $_POST["num3"];

            $avarage = ($score1 + $score2 + $score3) / 3;

            $grade = "";

            if ($avarage >= 80) {
                $grade = "A";
            } elseif ($avarage >= 70) {
                $grade = "B";
            } elseif ($avarage >= 50) {
                $grade = "C";
            } elseif ($avarage >= 50 || $avarage >= 33) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            echo "<span>Avarage Score Is: $avarage</span> </br>";
            echo "<span>Letter Grade Is: $grade </span>";
        }
        ?>

    </div>
</body>

</html>