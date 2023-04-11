<?php
/*
    ====================================================================
    == Manage News Control page
    ==You can  Add | Edit | Delete Membersfrom Here
    ====================================================================
    */

session_start();
$pagetitle = 'News';
if (isset($_SESSION['name'])) {
    include 'init.php';
    $do = isset($_GET['do']) ? $do = $_GET['do'] : 'manage';

    //start manage page
    if ($do == 'manage') {
        $stmt = $con->prepare("SELECT * FROM news ORDER BY News_id DESC");
        $stmt->execute();
        $rows = $stmt->fetchall();
?>
        <h1 style="padding-top: 25px; padding-bottom: 25px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold;margin:auto;color:white; font-family: 'Montserrat', sans-serif; line-height: 2; ">Manage News</h1>
        <div class="hrading" style="display:flex; ">
            <div class="outer-wrapper" style="width: 100% !important;">
                <div class="table-wrapper" style="max-height:550px; overflow-y:scroll; margin:20px; border:1px solid white">
                    <table style=" border:1px solid white; color:white;">
                        <tr>
                            <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">#ID</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">type</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">title</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">Brief</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">photo</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">new</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">Author</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;">user id</td>
                            <td style="position:static;top:0px;border:1px solid white; padding: 5px; text-align: center;"></td>
                        </tr>
                        <?php
                        foreach ($rows as $row) {
                            echo '<tr>';
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['News_id'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['Type'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['Title'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['Brief'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['Photo'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; '>" . $row['New'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;'>" . $row['Name_Author'] . "</td>";
                            echo "<td style='position:static;top:0px;border:1px solid white; padding: 25px; text-align: center;'>" . $row['user_id'] . "</td>";
                            echo "<td style='position:static;top:0px;border:0PX solid white;  border-bottom: 1px solid WHITE;  border-top: 1px solid WHITE; padding: 10px; text-align: center; align-items: center; display: flex;  padding-bottom: px !important;'><a href='NewsControl.php?do=Edit&newsid=" . $row["News_id"] . "'  class='btn btn-info  p-3 m-3 d-flex' ><b>Edit</b></a>
                                <a  href='?do=Delete&newsid=" . $row["News_id"] . "' class='btn btn-danger confirm p-3 m-3 d-flex' style='padding:5px;'><b>Delete</b></a></td>";
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <br /><a href="?do=Add" class="btn btn-primary" style=" padding: 15px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold; color:white; width: 200px; margin: auto;"><b>Add New </b></a>

    <?php
    } else if ($do == 'Add') { //Add membar page 
    ?>

        <h1 class="text-center text-white">Add new</h1>
        <div class="container bg-dark" style="max-height:650px;overflow-y:scroll;border:1px solid white">
            <form class="form-horizontal  " action="?do=Insert" method="POST">
                <!--start Type field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for="">Type</label>
                    <select name="Type" style="width:425px" class="form-control" autocomplete="off" required="required">
                        <option>event</option>
                        <option>sport</option>
                        <option>economy</option>
                        <option>policy</option>
                        <option>trend</option>
                    </select>
                </div>
                <!--start Title field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Title </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Title" class="form-control" required="required" placeholder="">
                    </div>
                </div>
                <!--start Brief field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Brief </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Brief" class="form-control" required="required" placeholder="">
                    </div>
                </div>
                <!--start Photo field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Photo</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Photo" class="form-control" required="required" placeholder="">
                    </div>
                </div>
                <!--start name Author field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Author</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Author" class="form-control" required="required" placeholder="">
                    </div>
                </div>
                <!--start Article field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for="">Article</label>
                    <div class="col-sm-10 col-md-4">
                        <textarea name="New" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <!--start submit field-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 ">
                        <input type="submit" value="Add new" class="btn btn-info bg-outline-dark w-25 m-2">
                    </div>
                </div>
            </form>
        </div>
        <?php   } else if ($do == 'Insert') { //Insert new membar

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Get variables from the form

            $Type    = $_POST['Type'];
            $Title   = $_POST['Title'];
            $Brief   = $_POST['Brief'];
            $Photo   = $_POST['Photo'];
            $Author  = $_POST['Author'];
            $New     = $_POST['New'];
            $uid     = $_SESSION['ID'];

            //validate the form
            $formError = array();
            if ($Type != 'sport' && $Type != 'event' && $Type != 'economy' && $Type != 'policy' && $Type != 'trend') {
                $formError[] = 'type can only be sport or event or economy or policy or trend';
            }
            if (empty($Title)) {
                $formError[] = 'Title cant Be Empty';
            }
            if (empty($Brief)) {
                $formError[] = 'Title cant Be Empty';
            }
            if (empty($Photo)) {
                $formError[] = 'Photo cant Be Empty';
            }
            if (empty($Author)) {
                $formError[] = 'Author cant Be Empty';
            }
            if (empty($New)) {
                $formError[] = 'New cant Be Empty';
            }
            foreach ($formError as $error) {
                echo $error . '<br/>';
            }
            //check if theres no errors proceed the update operation

            if (empty($formError)) {
                // check if user ezist in databases
                $check = checkitem("Title", "news", $Title);

                if ($check == 1) {
                    echo "<div class='container'>";
                    $themsg = "<div class='alert alert-danger'> Sorry this new is exist </div>";
                    redirecthome($themsg, 'back');
                    echo "</div>";
                } else {
                    //Insert userinfo in database
                    $stmt = $con->prepare("INSERT INTO 
                                                        news (Type , Title ,Brief, Photo , New , Name_Author ,user_id)
                                                        VALUES(:aType , :Title ,:Brief , :Photo , :New , :Name_Author,:auid)");
                    $stmt->execute(array(
                        'aType'  => $Type,
                        'Title'  => $Title,
                        'Brief'  => $Brief,
                        'Photo'  => $Photo,
                        'New'    => $New,
                        'Name_Author' => $Author,
                        'auid'   => $uid,
                    ));

                    // echo success message
                    echo "<div class='container'>";
                    $themsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' record INSERT </div>';
                    redirecthome($themsg, 'back');
                    echo "</div>";
                }
            }
        } else {
            echo "<div class='Container'";
            $themsg = '<div class="alert alert-danger">Sorry you cant browsernthis page directly</div>';
            redirecthome($themsg, 'back');
            echo "</div>";
        }
    } else if ($do == 'Edit') {
        $newid = isset($_GET['newsid']) ? intval($_GET['newsid']) : 0;
        $stmt = $con->prepare("SELECT
                                                *
                                            FROM  
                                                news 
                                            WHERE
                                            News_id = ? 
                                            LIMIT 1");
        $stmt->execute(array($newid));
        $row = $stmt->fetch();
        $count = $stmt->rowcount();
        if ($count > 0) {   ?>

            <h1 class="text-center text-white">Edit New</h1>
            <div class="container bg-dark" style="max-height:700px;overflow-y:scroll;border:1px solid white">
                <form class="form-horizontal m-5  justify-content-center align-content-center pt-4 pb-4 " action="?do=update" method="POST">
                    <input type="hidden" name="newid" value="<?php echo $newid; ?>" />
                    <!--start Type field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for="">type</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="type" class="form-control" value="<?php echo $row['Type'] ?>" autocomplete="off" required="required">
                        </div>
                    </div>
                    <!--start Title field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for=""> title</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="title" class="form-control" value="<?php echo $row['Title'] ?>" required="required">
                        </div>
                    </div>
                    <!--start Brief  field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for=""> Brief </label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="Brief" class="form-control" value="<?php echo $row['Brief'] ?>" required="required">
                        </div>
                    </div>
                    <!--start Photo field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for=""> Photo</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="Photo" class="form-control" value="<?php echo $row['Photo'] ?>" required="required">
                        </div>
                    </div>
                    <!--start name Autor field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for=""> Autor</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="Author" class="form-control" value="<?php echo $row['Name_Author'] ?>" required="required">
                        </div>
                    </div>
                    <!--start New field-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-white" for="">New</label>
                        <div class="col-sm-10 col-md-4">
                            <textarea name="New" cols="30" rows="10" class="form-control"><?php echo $row['New'] ?></textarea>
                        </div>
                    </div>
                    <!--start submit field-->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 ">
                            <input type="submit" value="Save" class="btn btn-info bg-outline-dark w-25 m-2">
                        </div>
                    </div>
                </form>
            </div>
        <?php   } else {
            echo "<div class='container'>";
            $themsg = '<div class="alert alert-danger"> theres no such id </div>';
            redirecthome($themsg);
            echo "</div>";
        }
    } elseif ($do == 'update') { // update page 

        echo "<h1 class='text-center'>update new</h1>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Get variables from the form
            $newsid = $_POST['newid'];
            $type   = $_POST['type'];
            $title  = $_POST['title'];
            $Brief  = $_POST['Brief'];
            $Photo  = $_POST['Photo'];
            $Author = $_POST['Author'];
            $New    = $_POST['New'];

            //validate the form
            $formError = array();
            if ($type != 'sport' && $type != 'event' && $type != 'economy' && $type != 'policy' && $type != 'trend') {
                $formError[] = 'type can only be sport or event or economy or policy or trend ';
            }
            if (empty($title)) {
                $formError[] = 'title cant Be Empty';
            }
            if (empty($Brief)) {
                $formError[] = 'Brief cant Be Empty';
            }
            if (empty($Photo)) {
                $formError[] = 'photo cant Be Empty';
            }
            if (empty($Author)) {
                $formError[] = 'author cant Be Empty';
            }
            if (empty($New)) {
                $formError[] = 'new cant Be Empty';
            }
            foreach ($formError as $error) {
                echo $error . '<br/>';
            }
            //check if theres no errors proceed the update operation

            if (empty($formError)) {

                //update the database

                $stmt = $con->prepare(" UPDATE news SET  Type= ? , Title= ? ,Brief= ? , Photo= ? , New= ? , Name_Author= ? WHERE  News_id= ? ");
                $stmt->execute(array($type, $title, $Brief, $Photo, $New, $Author, $newsid));

                // echo success message

                $themsg = "<div class='alert alert-success'>"  . $stmt->rowCount() . ' record updated  </div>';
                redirecthome($themsg, 'back');
            }
        } else {
            echo "<div class='container'>";
            $themsg = '<div class="alert alert-danger"> sorry you cant browse this page directly</div>';
            redirecthome($themsg);
            echo "</div>";
        }
        ?>

<?php

    } elseif ($do == 'Delete') { // Delete Membar page

        echo "<h1 class='text-center'>Delete new</h1>";

        $newid = isset($_GET['newsid']) ? intval($_GET['newsid']) : 0;
        $stmt = $con->prepare("SELECT
                                                *
                                            FROM  
                                                news 
                                            WHERE
                                            News_id = ? 
                                            LIMIT 1");
        $stmt->execute(array($newid));
        $row = $stmt->fetch();
        $count = $stmt->rowcount();
        //select all data depend on this id

        $check = checkitem('News_id', 'news', $newid);

        if ($check > 0) {
            $stmt = $con->prepare("DELETE FROM news WHERE News_id =? ");
            $stmt->execute(array($newid));
            $themsg = "<div class='alert alert-success'>" .
                $stmt->rowCount() . ' record Deleted</div>';
            redirecthome($themsg);
        } else {
            echo "<div class='container'>";
            $themsg = '<div class="alert alert-danger"> this id not exist</div>';
            redirecthome($themsg);
            echo "</div>";
        }
    }
    include $tpl . "footer.php";
} else {
    header('location:index.php');
    exit();
}

?>