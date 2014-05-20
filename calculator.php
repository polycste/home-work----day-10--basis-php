<html>
    <head>
        <title>
           CALCULATOR
        </title>
    </head>
    <body>
        <form action="calculator.php" method="post">
            <table border="2" align="center">
                <tr>
                    <td>
                        FIRST NUMBER
                    </td>
                    <td>
                        <input type="text" name="first_number" value="<?php 
                        if (isset ($_POST['first_number']))
                        echo $_POST ['first_number'];?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        SECOND NUMBER
                    </td>
                    <td>
                        <input type="text" name="second_number" value="<?php 
                        if (isset ($_POST['second_number']))
                        echo $_POST ['second_number'];?>" />
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btn" value="+" />
                        <input type="submit" name="btn" value="-" />
                        <input type="submit" name="btn" value="*" />
                        <input type="submit" name="btn" value="/" />
                        <input type="submit" name="btn" value="%" />
                    </td>
                </tr>
                
                <?php
                  
                 if(isset($_POST['btn']))
                 {
                         if($_POST['btn']=='+')
                         {
                             $result=$_POST['first_number']+ $_POST['second_number'];
                            
                         }
                         
                         if($_POST['btn']=='-')
                         {
                             $result=$_POST['first_number']- $_POST['second_number'];
                            
                         }
                         
                         if($_POST['btn']=='*')
                         {
                             $result=$_POST['first_number']* $_POST['second_number'];
                            
                         }
                     
                     
                         if($_POST['btn']=='/')
                         {
                             if ($_POST['second_number']==0){
                                 $result="error";
                             }
                         
else
                         {
                             $result=$_POST['first_number']/ $_POST['second_number'];
                            
                         }
                         }
                         
                         if($_POST['btn']=='%')
                         
                         {
                             if ($_POST['second_number']==0){
                                 $result="error";
                             }
                         
                             
                         
                         {
                             $result=$_POST['first_number']% $_POST['second_number'];
                            
                         }
                         }
                     
                 }
                 ?>
                 <tr>
                     <td>RESULT</td>
                     <td>
                         <input type="text" value= "<?php 
                         echo $result; ?>""
                     </td>
                 </tr>
                
            </table>
        </form>
    </body>
</html>