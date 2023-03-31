<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>my Bubble Tea</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter your name">
    <br>
    <input type="text" name="price" placeholder="10 €">
    <br>
    <input type="text" name="quantity" placeholder="2">
    <br>
    <input type="text" name="category" placeholder="basket">
    <br>
    <input type="text" name="gallery" placeholder="https//url...">
    <br>
    <input type="text" name="description" placeholder="gout fraise ...">
    <br>
    <button type="submit">submit data</button>
</form>


<!--création d'un formulaire de recherche -->
<form id="form" method="POST" action="submit">
    @csrf
   <div>
        <label for="product">Produits</label>
        <input type="text" name="product">
   </div>
   <div>
        <label for="tea">Tea</label>
        <input type="text" name="tea">
   </div>
   <button type="submit">envoyer</button>
</form>
</body>
</html>