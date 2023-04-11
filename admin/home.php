<?php
session_start();

$pagetitle='HOME_ADMIN';

if(isset($_SESSION['name'])){
    include 'init.php';

    //start home page

    $latestMas = 5 ;//num of latest News
    $thelatest =getlatest("*", "contact_us", "ContactUs_id", $latestMas);//latest news array
    
   
?>
        <div class="container home-stats text-center" >
            <h1 style="color:#ffffff; padding: 25px;">HOME PAGE</h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="stat st-members" >
                        Total Members <br/>
                        <span style="font-size: 60px;"><a href="mempar.php"><?php echo countItems('user_id','user') ?></a></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat st-News">
                        Total News <br/>
                        <span style="font-size: 60px;"><a href="NewsControl.php"><?php echo countItems('News_id','news') ?></a></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat st-Massages">
                        Total Massages <br/>
                        <span style="font-size: 60px;"><a href="COntactUS.php"><?php echo countItems('ContactUs_id ','contact_us') ?></a></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat st-Advert">
                        Total Advertisements <br/>
                        <span style="font-size: 60px;"><a href="advert.php"><?php echo countItems('Advert_id','Advert') ?></a></span>
                    </div>
                </div>
                <div class="col-sm-3" style="margin-top: 25px; ">
                    <div class="stat st-club" style="background-color: #8e44ae;" >
                        Total club <br/>
                        <span style="font-size: 60px;"><a href="club.php"><?php echo countItems('club_id','club') ?></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container latest">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <i class="fa fa-users"></i> latest <?php echo $latestMas; ?> massege
                        </div>
                        <div class="panel-body">
                           <?php
                            foreach ($thelatest as $user){
                                echo $user['Massage'] . '<br>';
                            }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
   
    //end home page
    include $tpl . "footer.php";
}else{
    
    header('location:index.php');
    exit();

}
?>