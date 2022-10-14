<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 1</title>
</head>

<body>
    
    <h3>Client Address</h3>
    <form method= "POST" action ="exer1.php">
        <input id = "field" placeholder = "Name" type = "text" name = "name"><br>
        <input id = "field" placeholder = "Address" type = "text" name = "address"><br>
        <input id = "field" placeholder = "City" type = "text" name = "city"><br>
        <input id = "field" placeholder = "Zipcode" type = "text" name = "zipcode"><br>
        <input id = "submit" type = "submit">
</form>


<hr>

<h3>Client email</h3>
<form method = "POST" action ="exer2.php">
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email"> 
<input id = "submit" type = "submit">
</form>
<hr>

<h3>Client TVA</h3>
<form method="POST" action = "exer3.php">
<input type="text" name="prixht"><br>
<input type="text" name= "tva">
<input type="submit">
</form>


   <script src ="index.js"></script>
</body>
</html>