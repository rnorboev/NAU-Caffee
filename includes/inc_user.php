

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=home_page">Home</a></li>
            <li class="active">User</li>
        </ul>
    </div>            
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body text-left">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <center>
                                           
                                                <img class="avatar img-circle img-thumbnail" src="<?php echo "" . get_avatar($_SESSION['email']); ?>" style="width: 175px; height: 180px;"">
                                           
                                        </center>
                                    </div>
                                    <div class="col-md-12">

                                        <h2 style="text-align: center;">
                                        <?php echo "" . get_name($_SESSION['email']);  ?> 
                                        <?php echo "" . get_lastname($_SESSION['email']); ?> 

                                        </h2>
                                        <p style="text-align: center;"><?php echo "" . get_select($_SESSION['email']); ?></p>
                                        <p style="text-align: center;"><?php echo "" . get_dates($_SESSION['email']); ?></p>
                                        <p>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="index.php?page=menu"><button type="button" class="btn btn-primary btn-lg btn-block">Order</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="index.php?page=user_posts"><button type="button" class="btn btn-primary btn-lg btn-block">Posts</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="index.php?page=user_profile"><button type="button" class="btn btn-primary btn-lg btn-block">Account Settings</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="logout.php"><button type="button" class="btn btn-primary btn-lg btn-block btn-danger">Logout</button></a>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div style="padding: 30px;"></div>
                    </div>

                <div class="col-md-4"></div>
                </div>
            
    </div>
</div>
</body>
</html>