<?php
require __DIR__ . "/function.php";
require __DIR__ . "/arrays.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gotta find Jake!</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
</head>

<body class="index">
    <div class="card">
        <img class="worried-finn" src="../img/finn-worried.png" />
        <div class="dialogue-index">
            <header>
                <h1>OH NO!</h1>
                <h2>Jake has gone missing!</h2>
            </header>
            <p>
                Help Finn the human find his friend Jake by asking <br />around in the
                neighborhood.
            </p>
            <p>
                Who saw him last and where could he be? <br />Let's start by asking
                our next door neighbour Tree Trunks.
            </p>
        </div>
    </div>
    <div>
        <a href="../html/treetrunks.html"><input class="arrow-button" type="submit" value="" /></a>
    </div>
</body>

</html>
