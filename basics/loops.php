<?php
$title = "foreach loop";

$fruits = [
    "Apple",
    "Mango",
    "Avocado",
    "Banana",
    "Lemon"
];

# Assocaitive arrays

$users = [ 
    [
    "id" => 1,
    "name" => "Demis",
    "email" => "demisgech@gmail.com"
    ],
    [
    "id" => 2,
    "name" => "Dejen",
    "email" => "dejen@gmail.com"
    ],
    [
    "id" => 3,
    "name" => "Haile",
    "email" => "haile@gmail.com"
    ],
];

foreach ($users as $key => $value) {
    # code...
}
for ($i=0; $i < 10 ; $i++) { 
    # code...
    break;
}

$a = 1;
while ($a <= 10) {
    # code...
    break;
}

do {
    # code...
    break;
} while ($a <= 10);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $title ?></title>

    <style>
        ul {
            margin:4rem;
            padding:1rem;
            background:#e61;
            border-radius:10px;
        }
        
        li:nth-of-type(odd)  {
            background:#fff;
        }

        li {
            padding:1rem 2rem;
            font-size:1.8rem;
            list-style: none;
        }

        table {
            border:collapse;
            border-collapse:collapse;
        }
        tr {
        }

        td,th {
            padding:5px 6px;
            font-size:1.6rem;
            color:white;
        }

        tr:nth-of-type(even) {
            background:green;
        }

        tr:nth-of-type(odd) {
            background:dodgerblue;
        }
    </style>
</head>
<body>
    <!-- One way of using foreach loop -->
    <ul>
        <?php foreach($fruits as $fruit) {
            echo ("<li>$fruit </li>");
         }
        ?>
    </ul>
    <!-- Another and recommended way -->
    <ul>
        <?php foreach($fruits as $fruit): ?>
            <li><?php echo $fruit ?> </li>
        <?php endforeach ?>
    </ul>

    <h2>Users List</h2>
    
    <table>
        <?php foreach ($users as $user ): ?>
            <tr>
                <?php foreach ($user as $key ): ?>
                    <td> <?php echo $key; ?> </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
                    
    <h2>Users List</h2>
    <table>
        <?php foreach ($users as $user ): ?>
            <tr>
            <?php foreach ($user as $key=>$value ): ?>
                <td> <?php echo $key; ?> </td>
                <td> <?php echo $value; ?> </td>
            <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>

    <h2>For Loop</h2>
    <ul>
        <?php for ($i=0; $i < 10 ; $i++): ?>
            <li> <?php echo $i ?></li>
        <?php endfor ?>

        <?php for ($i=0; $i < count($users); $i++): ?>
            $user = $users[$i];
            <?php foreach ($user as $key => $value): ?>
                <li> <?php echo $value ?></li>
            <?php endforeach ?>
        <?php endfor ?>
    </ul>
    <h2>While Loop</h2>
    <ul>
        <?php $i=0; while ($i < 10): ?>
            <li> <?php $i++; echo $i ?></li>
        <?php endwhile ?>

        <?php $i = 0; while( $i < count($users)) : ?>
            $user = $users[$i];
            <?php $i++; foreach ($user as $key => $value): ?>
                <li> <?php echo $value ?></li>
            <?php endforeach ?>
        <?php endwhile ?>
    </ul>
</body>
</html>