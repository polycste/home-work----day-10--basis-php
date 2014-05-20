<html>
<head><title>while_loop</title></head>
<body>
    <form action="while_loop.php" method="post">
    <table border="2" align="center">
    <tr>
        <td>starting number</td>
        <td><input type="text" name="starting_number" ></td>
    </tr>
    <tr>
        <td>ending number</td>
        <td><input type="text" name="ending_number"></td>
    </tr>
    <tr>

        <td colspan="2" align="center"><input type="radio" name="output_type" value="odd">odd
          <input type="radio" name="output_type" value="even">even</td>
    </tr>
    <tr>

        <td colspan="2" align="center"><input type="submit" name="btn" value="click"></td>
    </tr>
    <tr>

        <td colspan="2">

            <?php
            if(isset($_POST['btn']))
                {
                $starting_number=$_POST['starting_number'];
                 $ending_number=$_POST['ending_number'];
                 if($starting_number<$ending_number){
                 $i=$starting_number;
                   while($i<=$ending_number)  {
                 if($_POST['output_type']=='even'){
                     if($i%2==0){
                     echo $i."<br/>";
                     $i++;
                 }
                 }
                  if($_POST['output_type']=='odd'){
                     if($i%2!=0){
                     echo $i."<br/>";
                     $i++;
                 }
                 }
                 }

                 }
                 else{
                       $i=$starting_number;
                     while($i>=$ending_number){
                 if($_POST['output_type']=='even'){
                     if($i%2==0){


                     echo $i."<br/>";
                     $i--;
                 }
                 }
                  if($_POST['output_type']=='odd'){
                     if($i%2!=0){


                     echo $i."<br/>";
                     $i--;
                 }
                 }
                 }

                }
                }
            ?>
        </td>
    </tr>

</table>
    </form>
</body>
</html>