<?php require './functions.php'; $error = "";?>
<?php error_reporting(0); ?>

<!doctype html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/964ce683fb.js" crossorigin="anonymous"></script>
    <title>Download YouTube video</title>
    <!-- Font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        input.form-control {
      border: 3px solid #031b50;
  }

        @media only screen and (min-width: 1200px) {
          #navbarNav{
            margin-left:500px ;
          }
        }
.btnd1{
  color: white;
  background:blue;
}
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <?php Require_once('header.php'); ?>
    <div class="container-fluid">
        <form method="post" action="" class="formSmall">
            <div class="row">
                <div class="col-lg-12">
                    <h5  class="text-center">Download Any Youtube Video ,,, From Here!</h5>
                </div>
                <div class="col-lg-12">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="video_link" placeholder="Paste link.. e.g. https://www.youtube.com/watch?v=OK_JCtrrv-c" <?php if(isset($_POST['video_link'])) echo "value='".$_POST['video_link']."'"; ?>>
                        <span class="input-group-btn">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary ml-2">Download</button>
                      </span>
                    </div><!-- /input-group -->
                </div>
            </div><!-- .row -->
        </form>

        <?php if($error) :?>
            <div style="color:red;font-weight: bold;text-align: center"><?php print $error?></div>
        <?php endif;?>

        <?php if(isset($_POST['submit'])): ?>


            <?php
            $video_link = $_POST['video_link'];
            parse_str( parse_url( $video_link, PHP_URL_QUERY ), $parse_url );
            $video_id =  $parse_url['v'];
            $video = json_decode(getVideoInfo($video_id));
            $formats = $video->streamingData->formats;
            $adaptiveFormats = $video->streamingData->adaptiveFormats;
            $thumbnails = $video->videoDetails->thumbnail->thumbnails;
            $title = $video->videoDetails->title;
            $short_description = $video->videoDetails->shortDescription;
            $thumbnail = end($thumbnails)->url;
            ?>


            <div class="row formSmall">
                <div class="col-lg-3">
                    <img src="<?php echo $thumbnail; ?>" style="max-width:100%">
                </div>
                <div class="col-lg-9">
                    <h2><?php echo $title; ?> </h2>
                    <p><?php echo str_split($short_description, 100)[0]; ?></p>
                </div>
            </div>

            <?php if(!empty($formats)): ?>


                <?php if(@$formats[0]->url == ""): ?>
                <div class="card formSmall">
                    <div class="card-header">
                        <strong>This video is currently not supported by our downloader!</strong>
                        <small><?php
                        $signature = "https://example.com?".$formats[0]->signatureCipher;
                                    parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                                    $url = $parse_signature['url']."&sig=".$parse_signature['s'];
                                ?>
                        </small>
                    </div>
                </div>
                <?php
                die();
                endif;
                ?>

                <div class="card formSmall">
                    <!--div class="card-header">
                        <strong>With Video & Sound</strong>
                    </div-->

                    <div class="card-body">
                        <table class="table table-dark table-bg-dark ">
                            <tr >
                                <td>URL</td>
                                <td>Type</td>
                                <td>Quality</td>
                                <td class="ml-3">....Download...</td>
                            </tr>
                            <?php foreach($formats as $format): ?>
                                <?php

                                if(@$format->url == ""){
                                    $signature = "https://example.com?".$format->signatureCipher;
                                    parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                                    $url = $parse_signature['url']."&sig=".$parse_signature['s'];
                                    //var_dump($parse_signature);
                                }else{
                                    $url = $format->url;
                                }




                                ?>
                                <tr>
                                    <td mb-2><a href="<?php echo $url; ?>">Play</a></td>
                                    <td>
                                        <?php if($format->mimeType) echo explode(";",explode("/",$format->mimeType)[1])[0]; else echo "Unknown";?>
                                    </td>
                                    <td>
                                        <?php if($format->qualityLabel) echo $format->qualityLabel; else echo "Unknown"; ?>
                                    </td>
                                    <td>
                                        <a
                                            href="downloader.php?link=<?php echo urlencode($url)?>&title=<?php echo urlencode($title)?>&type=<?php if($format->mimeType) echo explode(";",explode("/",$format->mimeType)[1])[0]; else echo "mp4";?>"
                                        >
                                          <button
                                          class="btn btn-primary ml-2">Download </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12 col-lg-3">
                      <h5 class="text-center badge bg-primary text-wrap-text-center">Ads1</h5> <br>
                      <a href="https://www.tkqlhce.com/click-100701718-15082829" target="_top">
                      <img src="https://www.awltovhc.com/image-100701718-15082829" width="300" height="250" alt="Domain & Hosting bundle deals!" border="0"/></a>

                      <a href="https://www.anrdoezrs.net/click-100701718-15083053" target="_top">
  <img src="https://www.awltovhc.com/image-100701718-15083053" width="300" height="250" alt="Domains + Hosting + Security" border="0"/></a>
  <a href="https://www.anrdoezrs.net/click-100701718-15332761" target="_top">
  <img src="https://www.awltovhc.com/image-100701718-15332761" width="300" height="250" alt=".COM for just $6.98 at Namecheap" border="0"/></a>
  <a href="https://www.anrdoezrs.net/click-100701718-15083087" target="_top">
<img src="https://www.ftjcfx.com/image-100701718-15083087" width="300" height="250" alt="VPS hosting" border="0"/></a>
<a href="https://www.tkqlhce.com/click-100701718-13925793" target="_top">Get a FREE domain when you buy Shared hosting!</a><img src="https://www.ftjcfx.com/image-100701718-13925793" width="1" height="1" border="0"/>

                    </div>
                    <div class="col-sm col-lg-6">

                                      <div class="card formSmall">
                                          <div class="card-header">
                                              <strong>Videos video only/ Audios audio only</strong>
                                          </div>
                                          <div class="card-body">
                                              <table class="table ">
                                                  <tr>
                                                      <td>Type</td>
                                                      <td>Quality</td>
                                                      <td>Download</td>
                                                  </tr>
                                                  <?php foreach ($adaptiveFormats as $video) :?>
                                                      <?php
                                                      try{
                                                          $url = $video->url;
                                                      }catch(Exception $e){
                                                          $signature = $video->signatureCipher;
                                                          parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
                                                          $url = $parse_signature['url'];
                                                      }

                                                      ?>
                                                      <tr>
                                                          <td><?php if(@$video->mimeType) echo explode(";",explode("/",$video->mimeType)[1])[0]; else echo "Unknown";?></td>
                                                          <td><?php if(@$video->qualityLabel) echo $video->qualityLabel; else echo "Unknown"; ?></td>
                                                          <td><a href="downloader.php?link=<?php print urlencode($url)?>&title=<?php print urlencode($title)?>&type=<?php if($video->mimeType) echo explode(";",explode("/",$video->mimeType)[1])[0]; else echo "mp4";?>">Download</a> </td>
                                                      </tr>
                                                  <?php endforeach;?>
                                              </table>
                                          </div>
                                      </div>


                    </div>
                    <div class="col-sm-12 col-lg-3">
                      <h5 class="text-center badge bg-primary text-wrap">Ads</h5> <br>
                      <a href="https://www.kqzyfj.com/click-100701718-11793715" target="_top">
<img src="https://www.awltovhc.com/image-100701718-11793715" width="300" height="250" alt="" border="0"/></a>
<a href="https://www.kqzyfj.com/click-100701718-11337764" target="_top">
<img src="https://www.lduhtrp.net/image-100701718-11337764" width="300" height="250" alt="" border="0"/></a>
<a href="https://www.anrdoezrs.net/click-100701718-13671329" target="_top">
<img src="https://www.lduhtrp.net/image-100701718-13671329" width="300" height="250" alt="" border="0"/></a>
<a href="https://www.tkqlhce.com/click-100701718-15083058" target="_top">
<img src="https://www.ftjcfx.com/image-100701718-15083058" width="300" height="250" alt="Domains + Hosting + Security" border="0"/></a>

                      </div>
<!--  end  right slider here !--->
<?php endif; ?>


<?php endif; ?>

<!--  end here -->

                  </div>
                </div>

    </div>
    <!-- Bogs  here -->
    <?php require_once('blog.php'); ?>

      <!-- Bogs End  here -->
    <!--  Footer here -->
<?php require_once('footer.php'); ?>
    <!-- footer end -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
