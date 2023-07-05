<!DOCTYPE html>
<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Register</title>
    <style>
      body {
        margin-top: 100px;
        margin-bottom: 100px;
        margin-right: 150px;
        margin-left: 80px;
        background-color: azure;
        color: palevioletred;
        font-family: verdana;
        font-size: 100%;
      }
      h1 {
        color: indigo;
        font-family: verdana;
        font-size: 100%;
      }
      h3 {
        color: indigo;
        font-family: verdana;
        font-size: 100%;
      }
      .form-control {
        width: 60% !important;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND mysqli</h1>
    </center>
    <center>
      <p>
        <a href="register.php"
          ><button type="button" class="btn btn-primary">Register</button></a
        >
        |
        <a href="login.php"
          ><button type="button" class="btn btn-success">Login</button></a
        >
      </p>
    </center>
    <center><h3 class="fs-3">Registration Form</h3></center>
    <center>
      <form class="w-50" action="" method="POST">
        <legend>
          <fieldset>
            <!-- Username: <input type="text" name="user" /><br />
              Password: <input type="password" name="pass" /><br />
              <input type="submit" value="Register" name="submit" /> -->

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Username</label
              >
              <input
                type="text"
                name="user"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                name="pass"
                class="form-control"
                id="exampleInputPassword1"
              />
            </div>

            <button type="submit" name="submit" class="btn btn-primary">
              Submit
            </button>
          </fieldset>
        </legend>
      </form>
    </center>
    <?php
if (isset($_POST["submit"])) {
    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        // $con = mysqli_connect('localhost', 'root', '', "user-registration") or die(mysqli_error());
        $con = mysqli_connect('localhost', 'root', '');
        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_select_db($con, 'user-registration') or die("cannot select DB");

        $query = mysqli_query($con, "SELECT * FROM login WHERE username='" . $user . "'");
        $numrows = mysqli_num_rows($query);
        if ($numrows == 0) {
            $sql = "INSERT INTO login(username,password) VALUES('$user','$pass')";

            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "Account Successfully Created";
            } else {
                echo "Failure!";
            }

        } else {
            echo "That username already exists! Please try again with another.";
        }

    } else {
        echo "All fields are required!";
    }
}
?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
