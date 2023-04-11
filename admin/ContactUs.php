<?php
session_start();

$pagetitle='Members';

if(isset($_SESSION['name']))
    {
    
            include 'init.php';
            $do= isset($_GET['do']) ? $do= $_GET['do'] : 'manage' ;
           
            $stmt =$con->prepare("SELECT * FROM contact_us ORDER BY ContactUs_id DESC ");
            //execute the statment
            $stmt->execute();
            //Assign to variabl
            $rows =$stmt->fetchall();
            if($do=='manage')
            {
?>
            <h1 style="font-weight:bold;margin:auto;color:white; padding-top: 25px; padding-bottom: 25px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold;margin:auto;color:white; ">User Messages</h1>
                <div class="hrading" style="display:flex; ">
            <div class="outer-wrapper">
                <div class="table-wrapper"style="max-height:550px;overflow-y:scroll;margin:20px;border:1px solid white">
                    <table style="border:1px solid white; color:white;  width: 1856px; ">
                            <tr>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">#ID</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Username</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Phone</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Email</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Massage</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">user_id</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">contrl</td>
                            </tr>
                            <?php
                                foreach($rows as $row)
                                {
                                    echo'<tr>';
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['ContactUs_id'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['UserName'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Phone'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Email'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Massage'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['user_id'] . "</td>" ;
                                        echo"<td><a href='ContactUS.php?do=Delete&userid=" . $row["user_id"] . "' class='btn btn-danger confirm text-center align-content-center w-25  m-auto d-flex justify-content-center align-items-center' style='border: 1px solid white;'><b>Delete</b></a></td>" ;
                                    echo'</tr>';
                                }
                            ?>
                        </table>
                    </div>
                    </div>
                    </div>
<?php
            }
            else if($do=='Delete')
            {
                echo "<h1 class='text-center'>Delete massage</h1>";
                $userid=isset($_GET['userid'])&& is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;

                $stmt = $con->prepare("SELECT
                                             *
                                        FROM  
                                            contact_us 
                                        WHERE
                                        User_id = ? 
                                        LIMIT 1");

             //select all data depend on this id

                $check=checkitem('User_id', 'contact_us', $userid);

                if($check > 0)
                {     
                    $stmt = $con->prepare("DELETE FROM contact_us WHERE user_id = :zuser");
                    $stmt->bindParam(":zuser" , $userid);
                    $stmt->execute();

                    $themsg = "<div class='alert alert-success'>" . 
                    $stmt->rowCount() . ' record Deleted</div>';
                    redirecthome($themsg);
                    echo"</div>";
                }else
                {
                    echo "<div class='container'>";
                    $themsg = '<div class="alert alert-danger"> this id not exist</div>';
                    redirecthome($themsg);
                    echo"</div>";
                }
            }
            include $tpl . "footer.php";
    }
    else
    {
        header('location: index.php');
        exit();
    }
?>