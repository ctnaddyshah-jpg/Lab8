<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 8 Q2</title>
</head>
<body>

<?php
$students = [ [
'name' => 'Naddy', 'program' => 'BIP', 'age' => 23
], [
'name' => 'Qila', 'program' => 'BIS', 'age' => 20
], [
'name' => 'Syira', 'program' => 'BIT', 'age' => 20
]
];
?>

<table border="1" cellpadding="5">
<tr>
<th>Name</th>
<th>Program</th>
<th>Age</th>
</tr>

<?php foreach ($students as $student) { ?>
<tr>
<td><?php echo $student['name']; ?></td>
<td><?php echo $student['program']; ?></td>
<td><?php echo $student['age']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
