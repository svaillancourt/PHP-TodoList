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
            <li class="item">
                <span>Review Warrens PHP Video</span>
                <a href="#" class="done-button"> Mark as done</a>
            </li>
            <li class="item">
                <span>20 push ups...</span>
            </li>
            <li class="item">
                <span>Send group reflection video to techc</span>
            </li>

            <li class="item">
                <span>fix local basketball net</span>
            </li>
            <li class="item-done">
                <span>shoot 20 free throws</span>
            </li>
        </ul>

        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder=" Type a new item here." class="input" autocomplete="off">
            <input type="submit" value="Add Item to List" class="submit">
        </form>

    </div>

</body>

</html>