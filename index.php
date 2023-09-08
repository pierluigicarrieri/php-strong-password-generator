<?php

$lengthOfPw = (isset($_GET['pwLength']) ? $_GET['pwLength'] : 0);

function passwordGenerator ($length) {
    $password = substr(str_shuffle(str_repeat("0987654321abcdefghijklmnnopqrstuvxxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", $length)), 1, $length);
    return $password;
};

$generatedPassword = passwordGenerator($lengthOfPw);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>

<body>

    <div class="container">

        <h1 class="mt-5 text-center text-danger">PHP PASSWORD GENERATOR</h1>

        <form action="index.php" method="GET">
            <div class="w-25 m-5 m-auto">
                <label for="pwLength" class="form-label mb-4">Please enter the desired length of password (max 100 characters)</label>
                <input type="number" class="form-control" id="pwLength" name="pwLength" placeholder="Number of characters (max 100)" min="1" max="100">
            </div>
            <div class="d-flex justify-content-center pt-4">
                <button class="btn btn-danger" type="submit">Generate</button>
            </div>
        </form>

        <h3 class="mt-5 mb-5 text-center text-danger">Your password is:</h3>

        <p class="w-75 m-auto text-center"><?php echo $generatedPassword  ?></p>

    </div>

</body>

</html>