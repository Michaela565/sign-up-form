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

      function userData()
      {
        $file_name = 'accounts' . '.json';
        if (file_exists($file_name)) { // If file exists
          $current_data = file_get_contents($file_name);
          $array_data = json_decode($current_data, true);

          $extra = array(
            'first_name' => $_POST['first-name'],
            'last_name' => $_POST['last-name'],
            'email' => $_POST['email'],
            'phone_number' => $_POST['phone-number'],
            'password' => $_POST['password'],
          );
          $array_data[] = $extra;
          return json_encode($array_data);
        } else { // If file doesnt exist
          $datae = array();
          $datae[] = array(
            'first_name' => $_POST['first-name'],
            'last_name' => $_POST['last-name'],
            'email' => $_POST['email'],
            'phone_number' => $_POST['phone-number'],
            'password' => $_POST['password'],
          );
          return json_encode($datae);
        }
      }
      $file_name = 'accounts' . '.json';
      if (file_put_contents($file_name, userData())) {
        echo "<p>Your registration was successful</p>";
      } else {
        echo "<p>An error occured processing your registration. Please try again.</p>";
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