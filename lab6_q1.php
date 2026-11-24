<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
  <style>
   
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 8px;
    }
  </style>
</head>
<body>
  <?php
  
  $name = "Nur Athirah Nadhirah";
  $matric = "A1250079"; 
  $course = "BIC21203 Web Development";
  $semester = "Semester 1 2026/2027";
  $university = "Universiti Tun Hussein Onn Malaysia (UTHM)";
  ?>
  
  <h2>Student Details</h2>
  
  <table>
    <tr>
      <td><strong>Name</strong></td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td><strong>Matric No</strong></td>
      <td><?php echo "$matric"; ?></td>
    </tr>
    <tr>
      <td><strong>Course</strong></td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td><strong>Semester</strong></td>
      <td><?php echo "$semester"; ?></td>
    </tr>
    <tr>
      <td><strong>University</strong></td>
      <td><?php echo "$university"; ?></td>
    </tr>
  </table>
  
</body>
</html>