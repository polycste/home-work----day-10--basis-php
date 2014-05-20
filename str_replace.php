<?php
function replace($sentence){
$vowels=array("a","e","i","o","u","A","E","I","O","U");
$onlyconsonants=str_replace($vowels, "*", $sentence);
return $onlyconsonants;
}
?>


<html>
    <head>
        <title>search text</title>
    </head>
    <body>
        <form action="str_replace.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>write sentence</td>
                <td>
                    <input type="text" name="sentence">
                </td>
            </tr>


            <tr>

                <td colspan="2" align="center">
                    <input type="submit" name="cbtn" value="convert">

                </td>
            </tr>

            <tr>
                <td>only consonants</td>
                <td>
                     <?php

                if(isset($_POST['cbtn']))
                {
                 echo replace($_POST['sentence']);
                }

            ?>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>

