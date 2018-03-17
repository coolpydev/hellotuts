<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <ul>
        <?php foreach ($intro as $value) : ?>
        <li> {{ $value }} </li>
        <?php endforeach ?>
    </ul>
</body>
</html>