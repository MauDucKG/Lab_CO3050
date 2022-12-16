<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        $days_in_month = array("1"=>"31","2"=>"28","3"=>"31","4"=>"30","5"=>"31","6"=>"30","7"=>"31","8"=>"31","9"=>"30","10"=>"31","11"=>"30","12"=>"31");

        $fname = $lname = $email = $password = $year = $month = $day = $gender = $country = $about = "";
        $fnameErr = $lnameErr = $emailErr = $passwordErr = $birthErr = $genderErr = $aboutErr = "";
        
        if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["send"] == "Send") {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $year = $_POST["year"];
                $month = $_POST["month"];
                $day = $_POST["day"];
                $gender = $_POST["gender"];
                $country = $_POST["country"];
                $about = $_POST["about"];
    
                if (!preg_match("/[a-zA-z-']{2,30}/", $fname)) {
                    $fnameErr = "Nhap sai First Name";
                }
                if (!preg_match("/[a-zA-z-']{2,30}/", $lname)) {
                    $lnameErr = "Nhap sai Last Name";
                }
                if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
                    $emailErr = "Nhap sai Email";
                }
                if (!preg_match("/^\S*(?=\S{2,30})\S*$/", $password)) {
                    $passwordErr = "Nhap sai Password";
                }
                if ($year =="year" or $month == "month" or $day = "day") {
                    $birthErr ="Hay chon Birthday";
                }
                if (!preg_match("/[a-zA-z-']{2,30}/", $lname)) {
                    $lnameErr = "Nhap sai Last Name";
                }
                if (empty($gender)) {
                    $genderErr = "Hay chon gender";
                }
                if (strlen($about) > 10000) {
                    $aboutErr = "Nhap gioi han 10000 ki tu";
                }
            }

            if ($_POST["send"] == "Reset") {
                $fname = $lname = $email = $password = $year = $month = $day = $gender = $country = $about = "";
                $fnameErr = $lnameErr = $emailErr = $passwordErr = $genderErr = $aboutErr = "";
            }
        }

    ?>

    <div class="container">
        <h1>Register Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <label  class="pe-3">First Name: </label><input type="text" name="fname" value=<?php echo $fname ?>> <span class="text-danger"><?php echo $fnameErr?></span> <br>
            <label  class="pe-3">Last Name: </label><input type="text" name="lname" value=<?php echo $lname ?>> <span class="text-danger"><?php echo $lnameErr?></span> <br>
            <label  class="pe-3">Email: </label><input type="text" name="email" value=<?php echo $email ?>> <span class="text-danger"><?php echo $emailErr?></span> <br>
            <label  class="pe-3">Password: </label><input type="password" name="password" value=<?php echo $password ?>> <span class="text-danger"><?php echo $passwordErr?></span> <br>
            <label  class="pe-3">Birthday: </label>
            <select name="year">
                <option value="year">Year</option>
                <?php 
                    $i = 2022;
                    while ($i >= 1970) {
                        echo "<option value='$i'>$i</option>";
                        $i--;
                    }
                ?>
            </select>
            <select name="month">
                <option value="month">Month</option>
                <?php 
                    foreach ($days_in_month as $monthp => $dayp) {
                        echo "<option value='$monthp'>$monthp</option>";
                    }
                ?>
            </select>
            <select name="day">
                <option value="day">Day</option>
                <?php 
                    for ($i = 1; $i <32; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <span class="text-danger"><?php echo $birthErr?> </span> <br>
            <label  class="pe-3">Gender:</label>
            <input type="radio" name="gender" value="Nam" id="nam"> <label for="nam">Nam</label>
            <input type="radio" name="gender" value="Nu" id="nu"> <label for="nu">Nu</label> 
            <input type="radio" name="gender" value="Khongxacdinh" id="Khongxacdinh"> <label for="Khongxacdinh">Khong xac dinh</label> 
            <span class="text-danger"><?php echo $genderErr?> </span> <br>
            <label  class="pe-3">Country:</label>
            <select name="country">
                <option value="Vietnam">Vietnam</option>
                <option value="Australia">Australia</option>
                <option value="United States">United States</option>
                <option value="India">India</option>
                <option value="Other">Other</option>
            </select> <br>
            <label  class="pe-3">About:</label> <br>
            <textarea name="about" id="" cols="30" rows="10"></textarea> <br>
            <span class="text-danger"><?php echo $aboutErr?> </span> <br>
            <input type="submit" name="send" value="Send">
            <input type="submit" name="reset" value="Reset">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>