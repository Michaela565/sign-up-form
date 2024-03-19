<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Sign up now!</title>
  <script src="js/script.js" defer></script>
</head>

<body>

  <div class="picture">
    <img src="png/logo.png" class="logo" />
  </div>
  <div class="main">
    <div class="upper-text holder">
      <?php

      function userData($firstName, $lastName, $email, $phoneNum, $password)
      {
        file_put_contents("data.txt", "First name: " . $firstName . "\r\n", FILE_APPEND);
        file_put_contents("data.txt", "Last name: " . $lastName . "\r\n", FILE_APPEND);
        file_put_contents("data.txt", "Email: " . $email . "\r\n", FILE_APPEND);
        file_put_contents("data.txt", "Phone Number: " . $phoneNum . "\r\n", FILE_APPEND);
        file_put_contents("data.txt", "Password: " . $password . "\r\n", FILE_APPEND);
        file_put_contents("data.txt", "\r\n", FILE_APPEND);
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = $_REQUEST['first-name'];
        $lastName = $_REQUEST['last-name'];
        $email = $_REQUEST['email'];
        $phoneNum = $_REQUEST['phone-number'];
        $password = $_REQUEST['password'];
        userData($firstName, $lastName, $email, $phoneNum, $password);
        echo "<p>Hello <strong>$firstName $lastName</strong></p>";
        echo "<p><strong>We recorded your request, thank you!</strong></p>";
        file_put_contents('file.json', json_encode($_POST), FILE_APPEND);
        $arr = json_decode(file_get_contents('file.json'), true);
        echo $arr["last-name"];
      }
      ?>
      <div class="bigger">
        This is not a real online service! Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Nulla at felis sapien. Aenean placerat
        euismod neque, at commodo sapien efficitur nec. Mauris elementum dolor
        at neque tempus
      </div>
      <div>This is <em>not</em> a real online service!</div>
    </div>
    <div class="form-holder holder">
      <div class="form-header">Get something!</div>
      <form action="index.php" method="post">
        <fieldset>
          <div class="input-holder">
            <label for="first-name">FIRST NAME</label>
            <input type="text" name="first-name" id="first-name" required />
          </div>

          <div class="input-holder">
            <label for="last-name">LAST NAME</label>
            <input type="text" name="last-name" id="last-name" required />
          </div>
        </fieldset>
        <fieldset>
          <div class="input-holder">
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email" required />
          </div>

          <div class="input-holder">
            <label for="phone-number">PHONE NUMBER</label>
            <input type="tel" name="phone-number" id="phone-number" required />
          </div>
        </fieldset>
        <fieldset>
          <div class="input-holder">
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password" minlength="8" required />
          </div>

          <div class="input-holder">
            <label for="confirm-password">CONFIRM PASSWORD</label>
            <input type="password" name="confirm-password" id="confirm-password" minlength="8" onkeyup="passCheck()" required />
            <div class="error invisible">Passwords do not match!</div>
          </div>
        </fieldset>
        <button type="submit" class="submit-button" value="Submit">Create Account</button>
      </form>
    </div>
    <div class="log-in-text holder">
      Already have an account? <a href="#"><b>Log in</b></a>
    </div>
  </div>
</body>

</html>