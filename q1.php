<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 8 Q1</title>
</head>
<body>
    <?php
        $name = "SITI NUR NADHIRAH BINTI MOHD SHAHRUL";
        $matric = "CI230021";
        $course = "BIP";
        $year = "3";
        $address = "Parit Raja, Batu Pahat";
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>
