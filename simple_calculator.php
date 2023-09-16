<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            text-align: center;
            margin: 100px auto;
            width: 600px;
            background: rgb(2, 0, 36);
            background: radial-gradient(circle, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }
 
        h2 {
            color: white;
        }

        .calcluter {
            margin: 50px auto;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px white;
            text-align: center;
            background-color: #bbb;
        }

        input[type="number"],
        select {
            width: 92%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="calcluter">
        <div class="calcluter2">
            <h2>Simple Calculator</h2>
            <form action="" method="POST">
                <input type="number" name="num1" placeholder="Enter Your Frist Number" Required> </br>
                <input type="number" name="num2" placeholder="Enter Your secound Number" Required> </br>
                <select name="Oparetion" id="">
                    <option value="Add">Addition</option>
                    <option value="Subtract">Subtract</option>
                    <option value="Maltiply">Maltiply</option>
                    <option value="divide">division</option>
                    <option value="Binary">Binary Conversion</option>
                    <option value="Octal">Octal Conversion</option>
                    <option value="Hexa">Hexadecimal Conversion</option>
                </select> </br> </br>
                <Button type="submit">Calculate</Button> </br> </br>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $oparetion = $_POST["Oparetion"];

                switch($oparetion){
                case "Add";
                    $result = $num1 + $num2;
                    echo "Results: $result";
                    break;

                case "Subtract";
                    $result = $num1 - $num2;
                    echo "Results: $result";
                    break;

                case "Maltiply";
                    $result = $num1 * $num2;
                    echo "Results: $result";
                    break;

                case "divide";
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo  "Results: $result";
                    } else {
                        echo "Cannot Devide By zero";
                    }
                    break;

                case "Binary";
                    echo "binary" . decbin($num1);
                    break;

                case "Octal";
                    echo "Octal" . decoct($num1);
                    break;

                case "Hexa";
                    echo  "Hexa" . dechex($num1);
                    break;
            }
            }

            


            ?>

        </div>
    </div>
</body>

</html>
