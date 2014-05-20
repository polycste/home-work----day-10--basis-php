<?php
function search($search_text){
$data=array("poly","jannat","khadiza","naima","jerin","mahi","momo","dhiman","srijan","irfan","rafsan","rohan","kakon","shaki");
if(in_array($search_text, $data)){
    return "found";
}
else{
    return "not found";
}
}
?>
<html>
    <head>
        <title>search text</title>
    </head>
    <body>
        <form action="search_text.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>write text</td>
                <td>
                    <input type="text" name="search_text">
                </td>
            </tr>
            <tr>

                <td colspan="2" align="center">
                    <input type="submit" name="sbtn" value="search">

                </td>
            </tr>
           
            <tr>
                <td>result</td>
                <td>
                     <?php
             
                if(isset($_POST['sbtn']))
                {
                 echo search($_POST['search_text']);
                }
                exp
            ?>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>
