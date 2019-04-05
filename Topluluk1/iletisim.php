<?php
error_reporting(0);
$baglan=mysql_connect("localhost","root");
$db=mysql_select_db("topluluk");
mysql_query("SET NAMES UTF8");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
<script src="js1.js" type="text/javascript"></script>
<script src="jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="iletisimcss.css"/>
</head>

<body>
<p>&nbsp;</p>
<div id="navıgator">
  <nav>
   <img class="sosyal" src="facebook-logo.png">
   <img class="sosyal" src="instagram-logo.png">
   <img class="sosyal" src="twitter-letter-logo.png">
   <img class="sosyal" src="google-plus-logo-button.png">
   <img class="sosyal" src="linkedin-logo-button.png">
   <img class="sosyal" src="youtube-logotype.png">
	<div class="title"><h1>BİLİŞİM VE TEKNOLOJİ TOPLULUĞU</h1>
   </div>
	<ul id="menü">
    <?php 
	$nav=mysql_query("select * from kat");
	while($navcek=mysql_fetch_array($nav)){
	?>
    	<li><a href="<?php echo $navcek['k_url']  ?>"><?php echo $navcek['k_ad'] ?></a></li>
        <?php
	}
		?>
		
     
    </ul> 
	
</nav>
</div>
<div id="center">
<p>&nbsp;</p>
</div>
<div id="brain">
<h2>EKİBİMİZ</h2><br>
<div id="ynt">
<img id="brainj" src="meeting-icon-png-11.png" height="220" width="150" >
<a href="#"><h3>Yönetim Kurulumuz</h3></a>
<p id="yntp">Kulüp başkanı, yardımcıları, genel sekreter ve saymandan oluşan bu kurul, kulübün işleyişini düzenler.</p>
</div>
<div id="idr">
<img id="brainj" src="board-512.png" height="220" width="150" >
<a href="#"><h3>İdari Kurulumuz</h3></a>
<p id="idrp">Komite başkanları, yardımcıları ve etkinlik koordinatörlerinden oluşan bu kurul, her hafta yapılan toplantıyla kulübün işleyişi hakkında kararlar alır.</p>
</div>
<div id="kyt">
<img id="brainj" src="hizmet.png" height="220" width="150" >
<a href="ekle.php"><h3>Aramıza Katılın!!!</h3></a>
<p id="kytp">Enerjik takım arkadaşlarına asla hayır demeyiz. Gel sen de bu kocaman aileye katıl.</p>
</div>
</div>
</body>
</html>