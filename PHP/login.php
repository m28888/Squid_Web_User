<!DOCTYPE html>
<html>
    <head>
        <title>Login</title> 
        <link href="../boot/css/bootstrap.min.css" rel="stylesheet">
        <link href="../boot/css/bootstrap.css" rel="stylesheet">
        <link href="../boot/css/bootstrap-theme.css" rel="stylesheet">
        <link href="../boot/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../CSS/login.css" rel="stylesheet">
        <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/assets.css" rel="stylesheet">
    </head> 
    <body">
        <div class="container">
            <img src="../assets/images/Squid logo WHITE.png" height="100" width="180" style="margin-top: 5%;">
        </div>
        <div class="col-md-2 col-md-offset-10" style="margin-top: -6%;">
            <a href="homepage1.php" class="homebtn">HOME</a>
        </div>
        <div class="row">
            <div class="col-lg-6 img-responsive size">
                <img src="../assets/images/card-background.png" height="500" width="800">
            </div>
        </div>
        <div class="row">
            <div>
                <div class="col-md-3 col-md-offset-7 form1">
                    <div class="form-box" style="margin-top: -100%;">
                        <form action="" method="">
                            <input name="user" type="text" placeholder="Enter email address or phone number" style="text-transform: capitalize;">
                            <div class="password" style="margin-top: 3%;">
                                <input type="password" id="passwordfield" placeholder="Enter password">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-8 form2" style="margin-top: -17%;">
                    <a href="#" class="list-group-item">
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" value="">                
                            </label>
                        </div>
                        <div class="pull-left form-control-inline">
                            <h6 class="">I'm not a Robot</h6>      
                        </div>
                        <span><img src="../assets/images/captcha.png" width="50" height="50" class="pull-right" ></span>
                        <div class="clearfix"></div>
                    </a>
                    <a class="pull-right text" href="#"> <i>forgot password?</i></a>
                </div>
            </div>
        </div>


        <script src="../boot/js/jquery.min.js"></script>
        <script src="../boot/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $("#passwordfield").on("keyup",function(){
                if($(this).val())
                    $(".glyphicon-eye-open").show();
                else
                    $(".glyphicon-eye-open").hide();
                });
            $(".glyphicon-eye-open").mousedown(function(){
                $("#passwordfield").attr('type','text');
                    }).mouseup(function(){
                $("#passwordfield").attr('type','password');
                    }).mouseout(function(){
                $("#passwordfield").attr('type','password');
                    });
        </script>
    </body>
</html>