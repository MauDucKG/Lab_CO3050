<?php
setcookie("user1", "Duc1", time() + 3600);
setcookie("user2", "Duc2", time() + 3600);
setcookie("user3", "Duc3", time() + 3600);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div id="container" class="container"></div>
    <div class="container">
        <form action="" class="my-2">
            Name: <input type="text" id="name" name="name" class="form-control my-1"> <br>
            Value: <input type="text" id="value" name="value" class="form-control my-1"> <br>
        </form>
        <button class="add btn btn-primary" onclick="setCookie()">Add</button>
        <button class="show btn btn-success" onclick="show()">Show</button>
        <button class="update btn btn-info" onclick="setCookie()">Update</button>
        <button class="delete btn btn-danger" onclick="removeCookie()">Delete</button>
    </div>
    <script src="index.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>