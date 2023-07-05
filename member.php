<?php
session_start();
if (!isset($_SESSION["sess_user"])) {
    header("location:login.php");
} else {
    ?>
<!doctype html>
<html>
<head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
<title>Welcome</title>
    <style>
        body{

    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: azure ;
    color: palevioletred;
    font-family: verdana;
    font-size: 100%

        }
            h2 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
        h1 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}


    </style>
</head>
<body>
    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1>

<h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2>
<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
<p>
WE DO IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP AND MYSQL
</p>
</center>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>
<?php
}
?>
