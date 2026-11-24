<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lab 6 Q2</title>
  <style>
    /* Adding basic CSS to make it look exactly like the image */
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px 10px;
      text-align: left;
    }
    th {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <?php
  // 1. Create the associative array exactly as shown in the image
  $students = [
      [
          'name' => 'Alice',
          'program' => 'BIP',
          'age' => 21,
      ],
      [
          'name' => 'Bob',
          'program' => 'BIS',
          'age' => 20,
      ],
      [
          'name' => 'Raju',
          'program' => 'BIT',
          'age' => 22,
      ]
  ];
  ?>

  <table>
 
    <tr>
      <th>Name</th>
      <th>Program</th>
      <th>Age</th>
    </tr>

    <?php
    
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['program'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>

  </table>

</body>
</html>