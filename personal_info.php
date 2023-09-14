<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
 
    <style>
        body {
            text-align: center;
            padding: 20px;
            margin: auto;

        }

        .personal_info {
            text-align: center;
            width: 900px;
            margin: auto;
            padding: 5px 20px 20px 20px;
            /* border: 1px solid black; */
            /* box-shadow: 1px 2px; */
            box-shadow: 0 3px 10px rgb(0 0 0 / .3);
        }

        h3 {
            background-color: red;
            color: white;
        }
    </style>

</head>

<body>

    <div class="personal_info">


        <?php
        $name = "Ayon";
        $age = 23;
        $contry = "Bangladesh";
        $distric = "Dhaka";
        $portfolio = "developerayon.me";


        echo "<h3> This is Ayon Personal Information </h3>";

        echo "Hi i am $name from $distric,$contry. My passion and expertise is WordPress. Many people know about WordPress. WordPress is a CMS (Content Management System) now 70%+ websites are built with WordPress every day. I am working as WordPress expert since 3 years. And in the meantime I have done a lot of work inside and outside the country. Check out my portfolio if you need more information about me. portfolio: $portfolio";


        ?>
    </div>


</body>

</html>