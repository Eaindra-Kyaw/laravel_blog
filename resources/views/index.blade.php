<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <ul>
        <?php foreach($articles as $article): ?>
        <li><?php echo $article['item']; ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>
