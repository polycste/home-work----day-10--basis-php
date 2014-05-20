<?php
function reverse($sentence){
    strrev ($_POST['sentence']);   
    return $strrev;
}

 ?>
 
<html>
    <head>
        <title>Search Text</title>
    </head>
    <body>
        <form action="reverse.php" method="post">
            <table border="1" align="center">
                <tr>
                    <td>write sentence</td>
                    <td>
                        <input type="text" name= "sentence">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="rbtn" value="reverse">
                    </td>
                </tr>
                <tr>
                    <td>Only consonants</td>
                    <td>
                        <?php 
                        if (isset($_POST['rbtn']))
                        {
                            echo strrev($_POST['sentence']);
                            
                        }
                        
                        ?>
                    </td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>