<?php
//Tugas 1 
    for ($i=0; $i < 9 ; $i++) {
        for ($j=0; $j <= $i ; $j++) { 
            echo "$j";
        } 
        echo "<br>";
    }
    echo "<br";
?>

<!-- Tugas 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <table border="1">
        <tr style="background-color: cyan; align-items: center;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        <tr>

        <?php
        $count = 10;
        for ($i=1; $i <=10 ; $i++) { 
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>Nama ke <?php echo $i; ?></td>
                <td>Kelas <?php
                echo "$count"; $count--;
                
                ?>
                </td>
            </tr>
        <?php
        }
        ?>


    </table>
    
</body>
</html>

