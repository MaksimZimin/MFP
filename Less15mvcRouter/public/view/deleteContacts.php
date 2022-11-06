<<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Contacts</h1>
<?php foreach ($people as $currentPeople) : ?>
    <ul>
        <form action="#" method="POST">
            <li><?php print_r($currentPeople); ?></li>
            <button type="submit" >delete</button>
        </form>
    </ul>
<?php endforeach ?>
</body>

</html>