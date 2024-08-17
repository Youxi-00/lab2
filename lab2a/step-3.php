<?php

require "helpers/helper-functions.php";

session_start();

$_SESSION['program'] = $_POST['program'];
$_SESSION['address'] = $_POST['address'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Registration (Step 3/3)
        </h1>
      </div>
      <div class="p-section--shallow">


        <form action="thank-you.php" method="POST">

        <fieldset>
            <label>Email Address</label>
            <input type="email" name="email" placeholder="example@canonical.com" autocomplete="email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="******" autocomplete="current-password" required>

            <label>
              <input type="checkbox" name="agree" required>
              I agree to the terms and conditions...
            </label>

            <input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']; ?>">
            <input type="hidden" name="birthdate" value="<?php echo $_SESSION['birthdate']; ?>">
            <input type="hidden" name="contact_number" value="<?php echo $_SESSION['contact_number']; ?>">
            <input type="hidden" name="sex" value="<?php echo $_SESSION['sex']; ?>">
            <input type="hidden" name="program" value="<?php echo $_SESSION['program']; ?>">
            <input type="hidden" name="address" value="<?php echo $_SESSION['address']; ?>">

            <button type="submit" class="p-button--positive">Finish</button>
          </fieldset>

        </form>


      </div>

    </div>

    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>

  </div>
</section>

</body>
</html>
