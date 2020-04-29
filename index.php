<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list!</title>
</head>

<body>
    <div class="list">
        <h1 class="header">To do</h1>

        <ul>
            <li>
                <span class="item">Review PHP Video</span>
                <span class="item">20 Push ups</span>
                <span class="item done"></span>
            </li>
        </ul>

        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Type a new item here." class="input">
            <input type="submit" value="add" class="submit">


        </form>

    </div>

</body>

</html>