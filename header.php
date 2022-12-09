
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['Hospital_Name'];?></title>
    <link rel="stylesheet" href="css/stylehome.css">
</head>
<script src="script.js"></script>

</head>

<body>
    <div class="navbar">
        <div class="nav-titel"><a href="index.php"><h1><?php echo $_SESSION['Hospital_Name'];?></h1></a> </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="nav-list">
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="#@">About</a></li>
                <li><a href="#*">Contact</a></li>
                <li><a href="#$">Terms and policy</a></li>
            </ul>
        </div>
