<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Main Category</li>
            <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
        </ol>
    </nav>
    <div class="row">
        <?php
        if (isset($_GET['id'])) {
            require_once('db_connnection.php');

            $conn = OpenCon();
            $query = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";

            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // OUTPUT DATA OF EACH ROW
                while ($row = $result->fetch_assoc()) {
                    // echo "<h5 class='card-title'>" . $row["name"] . "</h5>";
        ?>
                    <div class="col mx-2">
                        <div class="row mt-4 mb-2">
                            <img src="<?php echo $row["image"] ?>" class="p-1 img-thumbnail" alt="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="./defaul.png" class="p-1 img-thumbnail" alt="">
                            </div>
                            <div class="col">
                                <img src="./defaul.png" class="p-1 img-thumbnail" alt="">
                            </div>
                            <div class="col">
                                <img src="./defaul.png" class="p-1 img-thumbnail" alt="">
                            </div>
                            <div class="col">
                                <img src="./defaul.png" class="p-1 img-thumbnail" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <h1><?php echo $row['name'] ?></h1>
                        <h4>Summary</h4>
                        <p><?php echo $row['description'] ?></p>
                        <div class="text-center">
                            <button class="btn btn-lg btn-secondary">
                                Buy Now
                            </button>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
    <hr>
    <h3>Description:</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus metus, consequat</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus metus, consequat</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus metus, consequat</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lectus metus, consequat</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>