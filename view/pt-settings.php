<div class="row">
<div class="col-md-12">
  <div class="card">
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


                        <a class="btn megna-theme text-light" href="./?page=<?php echo "$page"; ?>&add-item=log"> <i class="fa fa-gear"></i> update folder log</a>
                      <hr>
                      <div id="info">
                        <p> <i class="ti-folder"></i> folder log : <?php echo $log['link']; ?> </p>
                      </div>



                    </div>
    </div>

    <div class="card">
      <div class="card-body">
        <table id="config-table" class="table display no-wrap">
        <?PHP
        function getFileList($dir)
         {
           // array to hold return value
           $retval = [];

           // add trailing slash if missing
           if(substr($dir, -1) != "/") {
             $dir .= "/";
           }

           // open pointer to directory and read list of files
           $d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
           while(FALSE !== ($entry = $d->read())) {
             // skip hidden files
             if($entry{0} == ".") continue;
             if(is_dir("{$dir}{$entry}")) {
               $retval[] = [
                 'name' => "{$dir}{$entry}/"

               ];
             } elseif(is_readable("{$dir}{$entry}")) {
               $retval[] = [
                 'name' => "{$dir}{$entry}"

               ];
             }
           }
           $d->close();

           return $retval;
         }
          $dirlist = getFileList("$log[link]");
          // output file list in HTML TABLE format

          echo "<thead>\n";
          echo "<tr><th>Name</th><th>Status</th></tr>\n";
          echo "</thead>\n";
          echo "<tbody>\n";
          foreach($dirlist as $file) {
            $filename=$file['name'];
            echo "<tr id='row$filename'>\n";
            echo "<td id=filename$filename>$filename</td>\n";
            $a=mysqli_query($con, "SELECT filename from ima_file where filename='$filename'");
            if(!$a || mysqli_num_rows($a) == 0 ){
            ?>

            <td>
              <input type='hidden' id='search' value="<?php echo "$filename"; ?>">
              <button type="button" id="but_search" class="btn megna-theme text-light" name="button"> Get Data </button>
              <p style='display: none;' id="but_success" ><i class='ti-receipt'></i> Terupdate</p>

            </td>



              <?php

              // ===================================================================================


            }else{
              echo "<td> <i class='ti-receipt'></i> Terupdate</d>";
            }

            echo "</tr>\n";
          }
          echo "</tbody>\n";
          echo "</table>\n\n";
        ?>
      </div>

    </div>



</div>
  </div>

<script>

  $(document).ready(function(){

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
        <p class="loader__label"<?php echo "$web[title]"; ?></p>
    </div>
  </div>



  <div class='response'></div>
