<html>
    <head><title>pyramid</title></head>
    <body>
        <form action="pyramid.php" method="post"">
        <table border="2" align="center">
            <tr>
                <td>number of rows</td>
                <td><input type="text" name="pyramid_number" value="<?php if (isset($_POST['level'])) {
                        echo $_POST['level'];}?>"></td>
                   
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btn" value="click">
                </td>
            </tr>
            
            
            <tr>
                <td colspan="2">
                    <?php 
                    
                    if(isset($_POST['btn'])) {
                        
                        $k=1;
                        for ($i=1; $i<=$_POST['level'];$i++){
                            $tmp= $_POST['level'] - $i;
                            for ($j=0; $j< $tmp;$j++)
                            {
                                echo'&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;';
                            }
                            
                            for ($j= 1; $j<= $i; $j++){
                                
                                if ($k<=9){
                                    
                                    echo "&nbsp; &nbsp;";
                                    
                                }
                                 echo $k++ . '&nbsp; &nbsp; &nbsp; &nbsp;';
                                
                            }
                                                    echo '<br/>';
                            
                        }
                    }
                    
                    ?>
                </td>
            </tr>
        </table>
        </form>
        
    </body>
</html>