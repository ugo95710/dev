<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    

<?php 
    echo "C'est un script PHP!\n" 
?>

<div class="bla">

    <form action="inscription.php" method="post">
        <div>
            <label for="name">Prenom :</label>
            <input type="text" id="name" name="first_name">
        </div>

        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="last_name">
        </div>

        <div>
            <label for="mail">e-mail:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        
        <div>
            <label for="mail">mot de passe:</label>
            <input type="mot de passe" id="mot de passe" name="user_account">
        </div>

        <input type="submit" value="je m'inscris"><br>

    </form>

</div>



</body>
</html>