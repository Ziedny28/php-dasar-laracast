<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin:0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php
$books = [
    [
        'name' => 'Do Androids Dreams of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com',
    ],
];

    function filter($items,$key,$value)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$filteredBooks = filter($books,'releaseYear',2011);
?>
        <ul>
        <?php foreach ( $filteredBooks as $book): ?>
            <li>
                <a href="<?=$book['purchaseUrl']?>">
                    <?=$book['name']?>(<?=$book['releaseYear']?>)
                </a>
            </li>
        <?php endforeach?>
        </ul>
</body>
</html>