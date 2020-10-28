 <html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Downloader</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
  </head>
  <body>
      <nav>
      <div class="wrap">
      <div class="title">
       <a href="../index.html">Facebook Downloader</a>
      </div>
     </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(".togel.tblmenu").click(function () {
      $(".menu").toggleClass("sh");
      });
    </script>
    <h2>Facebook Video Downloader</h2>
    <center><form action="fbdown.php#Download" method="post" id="form1">
    <input type="text" name="url" placeholder="Enter Video Url">
    </form></center>
    <div class="row">
    <center><button type="submit" form="form1" value="submit" class="button button5">Download</button></center>
  </div>
</body>
</html>
<?php 
require_once("functions.php");

if (!empty($_POST["url"]) ) {

    $data = url_get_contents($_POST["url"]);
    $hdlink = hdLink($data);
    $sdlink = sdLink($data);

    if (!empty($sdlink) && !empty($hdlink) ) {?>
       <div class="card">
  <div class="container">
    <div class="row">
      <h4><b><?php echo $title;?></b></h4>
          <h2><a target="_blank" download data-href="<?php echo $hdlink; ?>" href="<?php echo $hdlink; ?>" class="btn btn-block btn-lg btn-success">Klik Disini UNtuk Mendownload</a></h2>
  </div>
</div>
</div> 
   <?php }
   else {?>
    <h2>Error! Url Invalid/Video Mungkin Di Private</h2>
  <?php }
}

 ?>
