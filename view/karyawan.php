<!-- <script src="ajax/modify.record.js"></script> -->
<script src="ajax/modify.akun.js"></script>


<div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <button data-toggle="modal" data-target="#add-staff"  class="btn megna-theme text-light"><i class="icon-user-follow"></i>  TAMBAH </button>

                        </div>
                        <div class="card-body">
                          <div class="col-md-6">
                            <span class="font-weight-bold"> <i class="ti-printer"></i> KASIR / WAITER </span><br>
                            Karyawan ini bertugas sebagai kasir atau pramusaji, mereka hanya mendapatkan hak akses di aplikasi kasir.
                          </div>
                          <hr>
                          <div class="col-md-6">
                           <span class="font-weight-bold">  <i class="ti-harddrive"></i> STAFF / MANAJER </span><br>
                            Dapat mengakses aplikasi kasir dan backend my.pawoon.com untuk melakukan manajemen data
                          </div>
                        </div>
                      </div>
                        <div class="card">
                          <div class="card-header">
                          <i class="ti-user"></i>  Karyawan
                          </div>
                            <div class="card-body">

                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                       <table id="config-table" class="table display table-bordered table-striped no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Role</th>

                                                <th>Nama</th>
                                                <th>email</th>
                                                <th>alamat</th>
                                                <th>No HP</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $p=mysqli_query($con, "select * from user where sponsoring='$member[email]' order by id_user asc");


                                            while ($r=mysqli_fetch_array($p)) {
                                           if ($r['level'] == 'admin') {
                                             $level = "<i class='ti-harddrive text-danger'></i> Staff";
                                           }elseif($r['level'] == 'kasir' || $r['level'] == 'akun') {
                                             $level = "<i class='icon-printer text-info'></i> Kasir";
                                           }else {
                                             $level = "<i class='ti-user text-success'></i> $r[level] ";
                                           }


                                           ?>
                                            <tr id="row<?php echo $r['id_user'];?>">
                                              <td id="level<?php echo $r['id_user'];?>"><?php echo "$level"; ?>  </td>

                                              <td id="nama<?php echo $r['id_user'];?>"> <?php echo "$r[nama]"; ?></td>
                                              <td id="email<?php echo $r['id_user'];?>"><?php echo "$r[email]"; ?></td>
                                              <td id="alamat<?php echo $r['id_user'];?>"><?php echo "$r[alamat]"; ?></td>
                                              <td id="no_hp<?php echo $r['id_user'];?>"><?php echo "$r[no_hp]"; ?></td>


                                                <td>
                                                  <a href="javascript:void(0)" id="edit_button<?php echo $r['id_user'];?>"  onclick="edit_row('<?php echo $r['id_user'];?>');"> <i class="icon-pencil text-info"></i>  </a>
                                                   <input type='button' class="btn btn-success" id="save_button<?php echo $r['id_user'];?>" value="save" onclick="save_row('<?php echo $r['id_user'];?>');" style="display:none;">

                                                </td>
                                                <td>
                                                  <a href="javascript:void(0)" id="delete_button<?php echo $r['id_user'];?>" onclick="delete_row('<?php echo $r['id_user'];?>');"><i class="icon-trash"></i></a>

                                                </td>
                                            </tr>
                                            <?php
                                              }
                                              ?>
                                        </tbody>
                                        <tfoot>
                                            <tr id="row<?php echo $r['id_kategori_khas'];?>">


                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->

                        <!-- Column -->

                        <!-- Column -->

                    </div>
                </div>
                <div id="add-staff" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title" id="myModalLabel">Tambah Staff</h4> </div>
                            <div class="modal-body">
                                <form id="loginform" class="form-horizontal form-material form-validation" action="sponsoring.html" method="post">
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text"  name="nama" class="form-control" placeholder="nama" />
                                            <input type="hidden"  name="sponsoring" value="<?php echo "$member[email]"; ?>" class="form-control"  />
                                            <input type="hidden"  name="id_plan" value="<?php echo "$member[id_plan]"; ?>" class="form-control"  />
                                            <input type="hidden"  name="gerai" value="<?php echo "$member[gerai]"; ?>" class="form-control"  />

                                          </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" name="email" class="form-control" placeholder="email"></div>
                                            <div class="col-md-12 m-b-20">
                                              <select class="form-control" name="level">
                                                  <option value="">PILIH HAK AKSES</option>
                                                  <option value="admin">Admin / staff </option>
                                                  <option value="kasir"> kasir </option>
                                              </select>

                                            </div>



                                    </div>

                                    <div id="info">

                                    </div>
                            </div>
                            <div class="modal-footer">


                              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                              <button id="submit"  class="btn btn-outline-info"><i class="ti-save-alt"></i> Proses</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
