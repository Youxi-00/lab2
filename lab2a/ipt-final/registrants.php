<?php
$csvFilePath = 'registrant.csv';

if (!file_exists($csvFilePath)) {
    die('File not found');
}

$file = fopen($csvFilePath, 'r');

$data = [];
while (($row = fgetcsv($file)) !== false) {
    $data[] = $row;
}

fclose($file);

if (empty($data)) {
    echo 'No data available';
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrants List</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>Registrants List</h1>
      </div>
      <div class="p-section--shallow">
        <table aria-label="Registrants Data">
            <thead>
                <tr>
                    <th>Complete Name</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Sex</th>
                    <th>Program</th>
                    <th>Complete Address</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row[0]); ?></td>
                    <td><?php echo htmlspecialchars($row[1]); ?></td>
                    <td><?php echo htmlspecialchars($row[2]); ?></td>
                    <td><?php echo htmlspecialchars($row[3]); ?></td>
                    <td><?php echo htmlspecialchars($row[4]); ?></td>
                    <td><?php echo htmlspecialchars($row[5]); ?></td>
                    <td><?php echo htmlspecialchars($row[6]); ?></td>
                    <td><?php echo htmlspecialchars($row[7]); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

</body>
</html>