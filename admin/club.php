<?php
session_start();

$pagetitle='club';

if(isset($_SESSION['name']))
    {
    
            include 'init.php';
            
            $do= isset($_GET['do']) ? $do= $_GET['do'] : 'manage' ;

            $stmt =$con->prepare("SELECT * FROM club ORDER BY club_id DESC ");
            //execute the statment
            $stmt->execute();
            //Assign to variabl
            $rows =$stmt->fetchall();
            if($do=='manage')
            {
?>
            <h1 style="font-weight:bold;margin:auto;color:white; padding-top: 25px; padding-bottom: 25px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold;margin:auto;color:white;">User player</h1>
                <div class="hrading" style="display:flex; ">
            <div class="outer-wrapper">
                <div class="table-wrapper"style="max-height:550px;overflow-y:scroll;margin:20px;border:1px solid white">
                    <table style="border:1px solid white; color:white; width: 1856px;">
                            <tr>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">#ID</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">player name</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">birth</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">address</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">nationality</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">phone</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">player position</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">control</td>
                            </tr>
                            <?php
                                foreach($rows as $row)
                                {
                                    echo'<tr>';
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['club_id'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['player_name'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['birth'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['address'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['nationality'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['phone'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['player_position'] . "</td>" ;
                                        echo"<td><a href='club.php?do=Delete&clubid=" . $row["club_id"] . "' class='btn btn-danger confirm' style='padding: 7px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold; color:dark; width: 100px; margin: auto;'><b>Delete</b></a></td>" ;
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
                echo "<h1 class='text-center'>Delete player</h1>";
                $clubid=isset($_GET['clubid'])&& is_numeric($_GET['clubid']) ? intval($_GET['clubid']) : 0;

                $stmt = $con->prepare("SELECT
                                             *
                                        FROM  
                                            club_us 
                                        WHERE
                                            club_id = ? 
                                        LIMIT 1");

             //select all data depend on this id


                if($clubid > 0)
                {     
                    $stmt = $con->prepare("DELETE FROM club WHERE club_id = :zuser");
                    $stmt->bindParam(":zuser" , $clubid);
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