<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>

    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>

<div class="container mt-5">

<h2>Inserted Records</h2>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['contactno']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['address']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>