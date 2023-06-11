<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register car </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

    <div id="wrap">
        <div id="search">

            <img src="img/logoauto1.jpg" width="500px">

            
            <a href="insert.php"> <img src="img/addcar1.jpg" height="50px" title="Add new car"></a>
            <a href="remove.php"> <img src="img/removecar1.jpg" height="50px" title="Remove car"> </a>

            <form action="#" method="GET">
                <input type="text" placeholder="Search car" name="criteria">
                <input type="submit" value="Search"> <br>
            </form>

        </div>

        <?php

        include("inc/getResults.php");

        ?>


    </div>

</body>

</html>