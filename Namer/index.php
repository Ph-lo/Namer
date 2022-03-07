<?php


    function randomName() {
        $first_name = file_get_contents("firstnames.json");
        $first_name_a = json_decode($first_name,true);

        return $first_name_a[rand(0, count($first_name_a) -1)];
        
    }

    function randomPrefixe() {
        $prefixes = file_get_contents("prefixes.json");
        $prefixes_a = json_decode($prefixes,true);

        return $prefixes_a[rand(0, count($prefixes_a) -1)];

    }

    function randomLastname() {
        $last_names = file_get_contents("lastnames.json");
        $last_names_a = json_decode($last_names,true);

        return $last_names_a[rand(0, count($last_names_a) -1)];
    }

    function randomSuffixe() {
        $suffixes = file_get_contents("suffixes.json");
        $suffixes_a = json_decode($suffixes,true);

        return $suffixes_a[rand(0, count($suffixes_a) -1)];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="utf-8" />
    <title>Namer</title>
</head>
<body>
    <div id="bloc_page">
        <header>
            <h2>Random Namer</h2>
        </header>
        <section>
            <div id="form">
                <p>Get a random name : <a href="index.php?req=1"><button id="get_name_button" type="button">X</button></a></p>
            </div>
            <div id="result">
                <?php
                    if(isset($_GET['req']) && $_GET['req'] == 1)
                    {
                ?>
                <p><?php print randomName(); ?> <?php print randomPrefixe(); print ucwords(strtolower(randomLastname())); print strtolower(randomSuffixe()); ?></p>
                        
                <?php
                    }
                ?>
            </div>
        </section>
    </div>
</body>
</html>