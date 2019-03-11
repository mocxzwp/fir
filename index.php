<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        
        <title>TOKEN R1</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
		
    <script src="jquery.min.js"></script>
   <script>
 function autoRefresh_div()
 {
      $("#token").load("token.php");// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 1000); // refresh div after 5 secs
            </script>
			  <script>
 function autoRefresh1_div()
 {
      $("#rt").load("rt.php");// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh1_div()', 1000); // refresh div after 5 secs
            </script>
    </head>
    <body>
        <div class="header">
          
            <div class="header_text">
            TOKEN UN-BK-RUANG 2
                </div>
        </div>
        <div class="token_outer">
            <div id="token">
        <?php include 'token.php';?>
        </div>
        </div><div class="remarks">Masukan Token Diatas Untuk Memulai Ujian</div></body>
		<marquee id="rt" style="color:white; font-size:38px; width:100%; background:rgb(213, 22, 58); font-family:tahoma">Pastikan Anda Log out Sebelum Meninggalkan Ruang Ujian</marquee>
</html>

    