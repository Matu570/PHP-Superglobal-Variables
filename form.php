<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Form</title>
</head>

<body>
    <!-- <h1>Form 1 in PHP</h1> -->
    <!--To our form we will indicate what metod we will use-->
    <!--In the case of the get parameter, these are seen in the url as follows: ?name=value&
    The action attribute shows us to what page we will submit some content-->
    <!-- <form method="GET" action="recibe.php"> -->
        <!-- Now we will create the page where we will submit the datas: form.php -->
        <!-- <p><label>Name: <input type="text" name="name"></label></p>
        <p><label>Last Name: <input type="text" name="last-name"></label></p>
        <p><input type="submit" value="Submit"></p> -->
        <!--When we press the submit button, the data will be sent to recibe.php-->
        <!-- In order to receive this information sent to the user, we must go to recibe.php...-->


        <!-- But the problem of the get metod is what the user information is visible in the URL. 
        So let's use the POST method-->
    <!-- </form> -->

    <h2>Form 2 in PHP</h2>

    <form action="recibe.php" method="post">
        <p><label>Name: <input type="text" name="name"></label></p>
        <p><label>Last Name: <input type="text" name="last-name"></label></p>
        <p><input type="submit" value="Submit"></p>
    </form>

</body>

</html>