<?php
if(!empty($_POST['nama'])){
  mysqli_query($con, "update user set nama='$_POST[nama]',
                                            alamat='$_POST[alamat]',
                                            no_hp='$_POST[no_hp]'
                                            where email='$_POST[email]'
                                            ");
$member = $user->getuser($_SESSION['user_session']);
echo "<br>";
echo "<div class='alert alert-success alert-dismissible fade show font-weight-bold'>update berhasil</div>";
}

 ?>
<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="https://lh5.ggpht.com/-DJY7hmKSDV4/UyHo8vTBQnI/AAAAAAAAADs/b-Oip_th4yA/s1600/Mathematics-wallpaper-10187717.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo "$member[nama]"; ?></h4>

                                </center>
                            </div>
                            <div>
                                <hr> </div>
                             <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo "$member[email]"; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo "$member[no_hp]"; ?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo "$member[alamat]"; ?></h6><small class="text-muted p-t-30 db">Last Login</small>
                                <h6><?php echo "$member[lastlogin]"; ?></h6>
                                <!-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>  -->

                                <!-- <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="ti-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="ti-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="ti-instagram"></i></button> -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <!-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li> -->
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#gantipassword" role="tab">Ganti Password</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!--second tab-->

                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="post" action="./account.aspx">
                                            <div class="form-group">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nama" value="<?php echo "$member[nama]"; ?>" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" value="<?php echo "$member[email]"; ?>" class="form-control form-control-line" name="example-email" id="example-email" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Nomor Handphone</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="no_hp" value="<?php echo "$member[no_hp]"; ?>" placeholder="Masukan Nomor HP" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Alamat</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" name="alamat"><?php echo "$member[alamat]"; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn megna-theme text-light">Update Profile</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- ganti password -->
                                <div class="tab-pane active" id="gantipassword" role="tabpanel">
                                    <div class="card-body">
                                        <form id="loginform" class="form-horizontal form-material" action="account.html" method="post">

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="password" name="password_lama" placeholder="Pasword Lama"  class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="password" name="password_baru" placeholder="Password Baru" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                  <input type="password" name="confirm_password" placeholder="Confirm Pasword Baru" class="form-control form-control-line">
                                                  <input type="hidden" value="<?php echo "$member[email]"; ?>" name="email" placeholder="Confirm Pasword Baru" class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn megna-theme text-light" id="submit">Confirm</button>
                                                </div>

                                                <div id="info"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
