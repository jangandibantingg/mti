<section id="wrapper">
    <div class="login-register" style="background-image:url(library/assets/images/background/coffeeshop.jpg);">
        <div class="login-box card">
            <div class="card-body">


<form class="form-horizontal form-material" id="loginform" action="signin.html" method="post">
    <i class="icon-lock"></i> <span class="box-title m-b-20 font-weight-bold">Sign In</span>

    <hr>

    <div id="info">

    </div>

<div class="">
  <?php
    if(!empty($_COOKIE['email'])){
      echo '<div class="form-group m-b-0">
            <div class="col-sm-12 text-center"><img src="https://scontent.cdninstagram.com/vp/fe9d8d7e9e614a404ca1821d883e7155/5E4D2B18/t51.2885-15/sh0.08/e35/s640x640/61409118_125019675380847_4956097427162933611_n.jpg?_nc_ht=scontent.cdninstagram.com" class="img-circle align-center" width="100" />';
            echo "<br>$_COOKIE[nama]</div></div>";

            echo "<br>";

      $type="hidden";
    }else{
      $type="text";
    }

   ?>
</div>

      <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="<?php echo "$type"; ?>" required="" name="email" value="<?php echo $_COOKIE["email"]; ?>" id='email' placeholder="email">
              </div>
      </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="password" placeholder="Enter Password"> </div>
    </div>

    <div class="form-group text-center">
        <div class="col-xs-12 p-b-20">

            <button class="btn btn-block btn-lg btn-info " id="submit">m a s u k</button>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center ">
        <?php if ($_COOKIE['email'] != ''){ ?>
                <a href="./?action=gantiakun" class="text-info m-l-5"><b>Ganti Akun </b></a> <hr>
        <?php } ?>

            Belum Punya Akun <a href="./register.aspx" class="text-info m-l-5"><b>Sign Up</b></a>
        </div>
    </div>
</form>
</div>
</div>
</div>
</section>
