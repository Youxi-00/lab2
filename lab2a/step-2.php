<?php

require "helpers/helper-functions.php";

session_start();

$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['birthdate'] = $_POST['birthdate'];
$_SESSION['contact_number'] = $_POST['contact_number'];
$_SESSION['sex'] = $_POST['sex'];
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
          Registration (Step 2/3)
        </h1>
      </div>
      <div class="p-section--shallow">


        <form action="step-3.php" method="POST">

        <fieldset>
            <label>Program</label>
            <select name="program" required>
              <option disabled="disabled" selected>Select an option</option>
              <option value="cs">Computer Science</option>
              <option value="it">Information Technology</option>
              <option value="is">Information Systems</option>
              <option value="se">Software Engineering</option>
              <option value="ds">Data Science</option>
            </select>

            <label>Complete Address</label>
            <textarea name="address" rows="3" required></textarea>

            <input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']; ?>">
            <input type="hidden" name="birthdate" value="<?php echo $_SESSION['birthdate']; ?>">
            <input type="hidden" name="contact_number" value="<?php echo $_SESSION['contact_number']; ?>">
            <input type="hidden" name="sex" value="<?php echo $_SESSION['sex']; ?>">

            <button type="submit">Next</button>
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
