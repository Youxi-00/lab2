<?php

require "helpers/helper-functions.php";

session_start();

$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];
$sex = $_POST['sex'];
$program = $_POST['program'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$agree = isset($_POST['agree']) ? 'Yes' : 'No';

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

function calculateAge($birthdate) {
    $birthDate = new DateTime($birthdate);
    $currentDate = new DateTime();
    $age = $birthDate->diff($currentDate)->y;
    return $age;
}

$age = calculateAge($birthdate);

$_SESSION['fullname'] = $fullname;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['contact_number'] = $contact_number;
$_SESSION['sex'] = $sex;
$_SESSION['program'] = $program;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['age'] = $age;

$csvFilePath = '../lab2b/registrant.csv';


$file = fopen($csvFilePath, 'a');

fputcsv($file, [
    $fullname,
    $birthdate,
    $age,
    $contact_number,
    $sex,
    $program,
    $address,
    $email
]);

fclose($file);

session_destroy();
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
          Thank You Page
        </h1>
      </div>
      <div class="p-section--shallow">
      
        <table aria-label="Session Data">
            <thead>
                <tr>
                    <th></th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($form_data as $key => $val):
            ?>
                <tr>
                    <th><?php echo $key; ?></th>
                    <td>
                      <?php echo $val; ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
      

      </div>
    </div>
  </div>
</section>

</body>
</html>