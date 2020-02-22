<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <a class="btn megna-theme text-light" href="./?page=<?php echo "$page"; ?>&add-item=log"> <i class="fa fa-gear"></i> update folder log</a>

      <input type="hidden" value="<?php echo "$log[link]"; ?>" id="log" name="log">
      <button type="button" class="btn btn-info" id="btn_log" name="button"><i class="ti-server"></i> Backup Semua File</button>
      <input type="hidden" value="station" id="station" name="station">
      <button type="button" class="btn btn-info" id="btn_station" name="button"><i class="ti-location-pin"></i> Get Data Station </button>
      <a href="./reset.php" class="btn btn-danger" > <i class="ti-trash"></i> reset data log</a>

    </div>
    <div class="card-body">

      <?php
        if (!empty($_GET['add-item'])) {
            include 'modal/modal.dir.php';
            ?>
            <script>
            $(window).load(function(){
              $('#add-item').modal('show');
               });
            </script>


            <?php
            }
            ?>


                      <hr>
                      <div class='response'></div>




                    </div>
    </div>

    <div class="card">
      <div class="card-header">
          List data log  <b>  "<?php echo "$log[link]"; ?>" </b>
      </div>
      <div class="card-body">
        <small>
        <table id="config-table" class="table display no-wrap">
        <?PHP

          $dirlist = getFileList("$log[link]");
          // output file list in HTML TABLE format

          echo "<thead>\n";
          echo "<tr><th>Name</th><th>Status</th></tr>\n";
          echo "</thead>\n";
          echo "<tbody>\n";
          foreach($dirlist as $file) {
            $filename=$file['name'];
            echo "<tr id='row$filename'>\n";
            echo "<td id=filename$filename> <i class='ti-receipt'></i> $filename</td>\n";

            $a=mysqli_query($con, "SELECT filename from ima_file where filename='$filename'");
            if(!$a || mysqli_num_rows($a) == 0 ){
            ?>

            <td class="text-danger">
              <b><i class='ti-arrow-circle-right'></i> belum Terbackup</b>
            </td>



              <?php

              // ===================================================================================


            }else{
              echo "<td class='text-success'><b> <i class='ti-arrow-circle-right'></i> Terbackup </b></td>";
            }

            echo "</tr>\n";
          }
          echo "</tbody>\n";
          echo "</table>\n\n";
        ?>
      </small>
      </div>

    </div>



</div>
</div>
<!-- <button type="button" id="more" name="button" class="btn btn-danger">more</button>
<script type="text/javascript">
var repeater;

function doWork() {
$('#more').load('control/ima-file-log.php?get=data');
repeater = setTimeout(doWork, 5000);
}

doWork();
</script> -->


<script>

  $(document).ready(function(){

    $("#btn_log").click(function(){
     var log = $('#log').val();

     $.ajax({
      url: 'control/ima-file-log.php',
      type: 'post',
      data: {log:log},
      beforeSend: function(){
       // Show image container
       $("#loader").show();
      },
      success: function(response){
       $('.response').empty();
       $('.response').append(response);
      },
      complete:function(data){
       // Hide image container
       $("#loader").hide();

      }
     });

    });

     $("#btn_station").click(function(){
         var station = $('#station').val();

         $.ajax({
          url: 'control/ima-file-log.php',
          type: 'post',
          data: {station:station},
          beforeSend: function(){
           // Show image container
           $("#loader").show();
          },
          success: function(response){
           $('.response').empty();
           $('.response').append(response);
          },
          complete:function(data){
           // Hide image container
           $("#loader").hide();

          }
         });

        });

    //
   $("#but_search").click(function(){
    var search = $('#search').val();

    $.ajax({
     url: 'control/ima-file-update.php',
     type: 'post',
     data: {search:search},
     beforeSend: function(){
      // Show image container
      $("#loader").show();
     },
     success: function(response){
      $('.response').empty();
      $('.response').append(response);
     },
     complete:function(data){
      // Hide image container
      $("#loader").hide();
      $("#but_success").show();
      $("#but_search").hide();
     }
    });

   });
  });
  </script>



  <!-- Image loader -->
  <div id='loader' style='display: none;'>
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label"> GET DATA  </p>
    </div>
  </div>
