<?php
/*
* Template name: test
*/
// get_header('falah');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Border</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/test.css">
</head>
<body>
    <main>
        <form action="#" class="searchForm">
            <div class="border">
                <div class="trail"></div>
                <div class="trail trail-opposite"></div>
            </div>
            <div class="content">
                <input type="text">
            </div>
        </form>
    </main>
</body>
</html>