<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>To do list!</title>
</head>

<body>
    <div class="list">
        <h1 class="header">PHP - To do list</h1>

        <ul>
            <li>
                <span class="item">Review Warrens PHP Video</span>
            </li>
            <li>
                <span class="item">20 push ups...</span>
            </li>
            <li>
                <span class="item">Send group reflection video to techc</span>
            </li>

            <li>
                <span class="item">fix local basketball net</span>
            </li>
            <span class="item done"></span>
        </ul>

        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off">
            <input type="submit" value="add" class="submit">


        </form>

    </div>

</body>

</html>