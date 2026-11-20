<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
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
        $name = "Adam bin Abu";
        $matric = "AI220001";
        $course = "BIK - Web Development";
        $year = "Year 2";
        $address = "Parit Raja, Batu Pahat, Johor";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo $matric; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo $year; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
</body>
</html>
