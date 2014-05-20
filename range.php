<html>
<head>
    <title>range</title>
    </head>
<body>
    <form action="range.php" method="post">
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
                 for($i=$starting_number; $i<=$ending_number; $i++){
                 if($_POST['output_type']=='even'){
                     if($i%2==0){

                 
                     echo $i."<br/>";
                 }
                 }
                  if($_POST['output_type']=='odd'){
                     if($i%2!=0){


                     echo $i."<br/>";
                 }
                 }
                 }

                 }
                 else{
                      for($i=$starting_number; $i>=$ending_number; $i--)
                 if($_POST['output_type']=='even'){
                     if($i%2==0){


                     echo $i."<br/>";
                 }
                 }
                  if($_POST['output_type']=='odd'){
                     if($i%2!=0){


                     echo $i."<br/>";
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