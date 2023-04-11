<?php
/*
    ====================================================================
    == Manage News Control page
    ==You can  Add | Edit | Delete Membersfrom Here
    ====================================================================
    */
    
    session_start();
    $pagetitle='advert';
    if(isset($_SESSION['name'])){
    include 'init.php';
    $do= isset($_GET['do']) ? $do= $_GET['do'] : 'manage' ;
    //start manage page
    if($do=='manage')
    {
        $stmt =$con->prepare("SELECT * FROM advert ORDER BY Advert_id DESC");
        $stmt->execute();
        $rows =$stmt->fetchall();
        ?>
            <h1 style="font-weight:bold;margin:auto;color:white; font-weight:bold;margin:auto;color:white; padding-top: 25px; padding-bottom: 25px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold;margin:auto;color:white;">Advert PAGE</h1>
        <div class="hrading" style="display:flex; ">
            <div class="outer-wrapper">
                <div class="table-wrapper"style="max-height:550px;overflow-y:scroll;margin:20px;border:1px solid white;">
                            <table style="border:1px solid white; color:white; width: 1856px;">
                            <tr>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">#ID</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">type</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Company</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Logo</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">photo</td>
                                <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">user_id</td>
                            </tr>
                            <?php
                                foreach($rows as $row){
                                    echo'<tr>';
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Advert_id'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Type'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Company_Name'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Logo'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Photo'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['user_id'] . "</td>" ;
                                        echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'><a href='advert.php?do=Edit&advertid=" . $row["Advert_id"] . "'  class='btn btn-success' ><b>Edit</b></a>
                                        <a    href='?do=Delete&advertid=" . $row["Advert_id"] . "' class='btn btn-danger confirm'><b>Delete</b></a></td>" ;
                                    echo'</tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <br/><a href="?do=Add" class="btn btn-primary" style=" padding: 15px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold; color:white; width: 200px; margin: auto;"><b>Add advert </b></a>
        
        <?php
    }
    else if($do=='Add'){ //Add advert page ?>

        <h1 class="text-center text-white">Add advert</h1>
        <div class="container bg-dark" style="max-height:700px;overflow-y:scroll;border:1px solid white">
            <form class="form-horizontal" action="?do=Insert" method="POST">
                <!--start Type field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for="">Type</label>
                    <select name="Type" style="width:425px" class="form-control" autocomplete="off" required="required" id="">
                    <option value="">event</option>
                    <option value="">sport</option>
                    <option value="">economy</option>
                    <option value="">policy</option>
                </select>
                </div>
                <!--start Company field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Company </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Company" class="form-control"  required="required" placeholder="">
                    </div>
                </div>
                 <!--start Logo field-->
                 <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Logo </label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Logo" class="form-control"  required="required" placeholder="">
                    </div>
                </div>
                <!--start Photo field-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-white" for=""> Photo</label>
                    <div class="col-sm-10 col-md-4">
                        <input type="text" name="Photo" class="form-control"   required="required" placeholder="">
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
    <?php   }

        else if($do == 'Insert')
        {//Insert advert membar

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                //Get variables from the form
            
                $Type    =$_POST['Type'];
                $Company =$_POST['Company'];
                $Logo    =$_POST['Logo'];
                $Photo   =$_POST['Photo'];
                $uid     =$_SESSION['ID'];
            
                //validate the form
                $formError=array();
                // if($Type!='sport' && $Type!='event' && $Type!='economy' && $Type!='policy'){
                //     $formError[]='type can only be sport or event or economy or policy ';
                // }
                if(empty($Company)){
                    $formError[]='Company cant Be Empty';
                }
                if(empty($Logo)){
                    $formError[]='Logo cant Be Empty';
                }
                if(empty($Photo)){
                    $formError[]='Photo cant Be Empty';
                }
                foreach($formError as $error){
                    echo $error . '<br/>';
                }
                //check if theres no errors proceed the update operation
            
                if(empty($formError))
                {
                        //Insert userinfo in database
                        $stmt = $con->prepare("INSERT INTO 
                                                    advert 
                                                        (Type , Company_Name ,Logo, Photo, user_id)
                                                    VALUES
                                                        (:aType , :aCompany_Name ,:aLogo , :aPhoto ,:auid)");
                        $stmt->execute(array(
                            'aType'          =>$Type,
                            'aCompany_Name'  =>$Company,
                            'aLogo'          =>$Logo,
                            'aPhoto'         =>$Photo,
                            'auid'           =>$uid
                        ));
                    
                        // echo success message
                        echo "<div class='container'>";
                        $themsg ="<div class='alert alert-success'>" . $stmt->rowCount() . ' record updated</div>';
                        redirecthome($themsg, 'back');
                        echo"</div>";
                    
                }
            }
            else
            {
                echo"<div class='Container'";
                $themsg= '<div class="alert alert-danger">Sorry you cant browsernthis page directly</div>';
                redirecthome($themsg, 'back');
                echo"</div>";
            }
        }

        else if($do =='Edit')
        {
            $advertid=isset($_GET['advertid']) ? intval($_GET['advertid']) : 0;
                $stmt = $con->prepare("SELECT
                                                *
                                            FROM  
                                                advert
                                            WHERE
                                            Advert_id = ? 
                                            LIMIT 1");
                $stmt->execute (array( $advertid)) ;
                $row= $stmt->fetch();
                $count = $stmt->rowcount();
                if($count > 0)
                {   ?>

                    <h1 class="text-center text-white">Edit Advert</h1>
                    <div class="container bg-dark">
                        <form class="form-horizontal m-5  justify-content-center align-content-center pt-4 pb-4 " action="?do=update" method="POST">
                            <input type="hidden" name="advertid" value="<?php echo $advertid; ?>" />
                            <!--start Type field-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-white" for="">type</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="type" class="form-control" value="<?php echo $row['Type']?>" autocomplete="off" required="required">
                                </div>
                            </div>
                            <!--start Company field-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-white" for=""> Company</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="Company" class="form-control" value="<?php echo $row['Company_Name']?>" required="required">
                                </div>
                            </div>
                            <!--start Logo  field-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-white" for=""> Logo </label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="Logo" class="form-control" value="<?php echo $row['Logo']?>" required="required">
                                </div>
                            </div>
                            <!--start Photo field-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label text-white" for=""> Photo</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="Photo" class="form-control"  value="<?php echo $row['Photo']?>" required="required">
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
                <?php   }
                else
                {
                    echo"<div class='container'>";
                    $themsg = '<div class="alert alert-danger"> theres no such id </div>';
                    redirecthome($themsg);
                    echo"</div>";
                }
        }
        elseif( $do == 'update')
        { // update page 
    
            echo "<h1 class='text-center'>update advert</h1>";
        
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    //Get variables from the form
                    $advertid =$_POST['advertid'];
                    $type     =$_POST['type'];
                    $Company  =$_POST['Company'];
                    $Logo     =$_POST['Logo'];
                    $Photo    =$_POST['Photo'];

                    //validate the form
                    $formError=array();
                    if($type!='sport' && $type!='event' && $type!='economy' &&$type!='policy' ){
                        $formError[]='type can only be sport or event or economy or policy ';
                    }
                    
                    
                    if(empty($type)){
                        $formError[]='type  cant Be Empty';
                    }
                    if(empty($Company )){
                        $formError[]='Company cant Be Empty';
                    }
                    if(empty($Logo)){
                        $formError[]='Logo cant Be Empty';
                    }
                    if(empty($Photo)){
                        $formError[]='Photo cant Be Empty';
                    }
                    foreach($formError as $error){
                        echo $error . '<br/>';
                    }
                    //check if theres no errors proceed the update operation
        
                    if(empty($formError))
                    {
        
                        //update the database
                        
                        $stmt= $con->prepare(" UPDATE advert SET Type= ? , Company_Name = ? ,logo = ? , Photo = ?  WHERE  Advert_id = ? "); 
                        $stmt->execute(array( $type, $Company, $Logo, $Photo, $advertid));
                        
                        // echo success message
                        
                        $themsg = "<div class='alert alert-success'>"  . $stmt->rowCount() . ' record updated  </div>';
                        redirecthome($themsg, 'back');
                    }
                }
                else
                {
                    echo"<div class='container'>";
                    $themsg = '<div class="alert alert-danger"> sorry you cant browse this page directly</div>';
                    redirecthome($themsg);
                    echo"</div>";
                }
            ?>
        
        <?php
                
            }
            elseif($do=='Delete')
            { // Delete Membar page

                echo "<h1 class='text-center'>Delete new</h1>";
                
                $advertid=isset($_GET['advertid']) ? intval($_GET['advertid']) : 0;
                $stmt = $con->prepare("SELECT
                                                *
                                            FROM  
                                                advert 
                                            WHERE
                                            Advert_id = ? 
                                            LIMIT 1");
                $stmt->execute (array( $advertid)) ;
                $row= $stmt->fetch();
                $count = $stmt->rowcount();
                //select all data depend on this id
        
                $check=checkitem('Advert_id', 'advert', $advertid);
        
                if($check > 0)
                { 
                    $stmt = $con->prepare("DELETE FROM advert WHERE Advert_id =? ");
                    $stmt->execute (array( $advertid)) ;
                    $themsg = "<div class='alert alert-success'>" . 
                    $stmt->rowCount() . ' record Deleted</div>';
                    redirecthome($themsg);
                }
                else
                {
                    echo "<div class='container'>";
                    $themsg = '<div class="alert alert-danger"> this id not exist</div>';
                    redirecthome($themsg);
                    echo"</div>";
                }
        
        
            }
            include $tpl . "footer.php";
    }
    else{
        header('location: index.php');
        exit();
    }

?>