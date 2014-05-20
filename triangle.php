<html>
<head><title>triangle</title></head>
<body>
    <form action="triangle.php" method="post">
    <table border="2" align="center">
    <tr>
        <td>length number</td>
        <td><input type="text" name="length_number" ></td>
    </tr>


    <tr>

        <td colspan="2" align="center"><input type="submit" name="btn" value="click"></td>
    </tr>
    <tr>

        <td colspan="2">

             <?php
            if(isset($_POST['btn']))
                {
                $length_number = $_POST['length_number'];
               for($r = 1; $r <= $length_number; $r++){
                   for($c = 1; $c <= $r; $c++){
                       echo $c . " ";
                   }
                   echo "<br />";
               }

                }
            ?>
        </td>
    </tr>

</table>
    </form>
</body>
</html>