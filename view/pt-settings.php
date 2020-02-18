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
            echo "<tr>\n";
            echo "<td>{$file['name']}</td>\n";
            $filename=$file['name'];
            $a=mysqli_query($con, "SELECT filename from ima_file where filename='$filename'");
            if(!$a || mysqli_num_rows($a) == 0 ){
              echo "<td>belum terupdate</d>";
              // ===================================================================================

              $file_handle = fopen("file:///$filename", "rb");

              while (!feof($file_handle) ) {
                  $line_of_text = fgets($file_handle);

                  $part2 = explode('|', $line_of_text); //mencari  id transfer

                  $part3 = explode('"', $line_of_text); //mencari station Penerima

                  $idstart = explode('(', $part3[5]);

                  $id = explode(')',$idstart[1]); // id station Penerimaan

                  $idpenerimaan=explode(' (', $part3[7]);

                  $id2=explode(')',$idpenerimaan[1]); // id station Penerima

                  $logdatepenerima=explode(' ',$part3[11]);

                  $tp =" $logdatepenerima[2] $logdatepenerima[3] $logdatepenerima[4] "; //tanggal penerima
                  $tanggalpenerima=date('Y/m/d', strtotime($tp));

                  $station_penerima=str_replace("(".$id[0].")"," ",$part3[5]);
                  $station_penerimaan=str_replace("(".$id2[0].")"," ",$part3[7]);

                  if ($part3[5] != 'Clear (-1)' && $part2[3] != null ) {
                    // code...

                    mysqli_query($con,
                    " INSERT INTO ima_data (filename, transfer, station_penerimaan, station_penerima, log_penerimaan, log_penerima, tanggal, status, id_station)
                          VALUES ('$filename','$part2[3]', '$station_penerimaan', '$station_penerima', '$part3[9]', '$logdatepenerima[0]', '$tanggalpenerima', '$part3[1]','$id[0]')");


                      }
              }
              fclose($file_handle);



              // ==================================================================================
              mysqli_query($con, "insert into ima_file  (filename,date) values ('$filename','$date')");
            }else{
              echo "<td>terupdate</d>";
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
