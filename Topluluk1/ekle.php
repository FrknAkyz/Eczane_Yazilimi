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
<title>BİLTEK|Üye Formu</title>
</head>
<link rel="stylesheet" href="üye.css">
<script src="js1.js" type="text/javascript"></script>
<script src="jquery-3.2.1.min.js"></script>


<body>
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
<div id="form">
<h1>Üye Formu</h1>
<form method="post" name="form" >
 <table>
    
    <tr>
      <td>Ad soyad:<br>
        <input type="text" align="absbottom"  placeholder="Ad Soyad Giriniz" class="input"  name="name" /></td>
    </tr>
    <tr>
      <td>Okul Numarası:<br>
        <input type="number" placeholder="Okul No Giriniz" class="input" name="no" /></td>
    </tr>
    <tr>
      <td>Telefon Numarası:<br>
        <input type="tel" placeholder="Okul No Giriniz" class="input" name="telno" /></td>
    </tr>
    <tr>
      <td>Bölüm:<br>
        <input type="text" multiple  placeholder="Bölümünüzü giriniz" class="input" name="bolum" /></td>
    </tr>
    <tr>
      <td>E-posta:<br>
        <input type="email"  placeholder="E-posta Giriniz" class="input" name="email" /></td>
    </tr>
    <tr>
      <td><input type="image" src="uye_ol.gif" value="Kayıt Ol" alt="submit" height="50" width="200"  class="input"  name="submit" /></td>
    </tr>
    <tr>
      <td><input type="radio"  onMouseUp="chacked"    class="input"  name="ad" />
        Topluluk etkinliklerinden mail olarak bilgi almak istiyorum.</td>
    </tr>
  </table>
</form>

</div>
</div>

<?php /*?><?php
error_reporting(0);
$ad=$_POST["name"];
$no=$_POST["no"];
$tno=$_POST["telno"];
$bolum=$_POST["bolum"];
$email=$_POST["email"];



?><?php */?>
<div id="brain">
<h2>EKİBİMİZ</h2>
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