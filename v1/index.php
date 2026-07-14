<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="gelinlik,damatlık,nişanlık,abiye,kocapınarlılar,balıkesir,izmir,ahmet kayan" />
<meta name="description" content="Balıkesir'in En İyi Gelinlik Nişanlık Damatlık ve Abiye Mağazası. Bize uğramadan karar vermeyin." />
<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
<title>Kocapınarlılar Konfeksiyon Gelinlik Damatlık Nişanlık</title>

<style type="text/css">
body,td,th {
	font-size: 16px;
	color: #FFF;
	font-family: "Times New Roman", Times, serif;
}
h5 {font-size: 12px;
}
body {
	background-color: #000;
	background-image: url(kpbg.jpg);
	background-repeat: no-repeat;
	margin-left: 10px;
	font:italic 16px/27px 'Times New Roman',Times,serif;

#map_canvas { height: 100% }
}
#sliderDiv {
    display: none;
}
a {
	font-size: 12px;
	color: #FFF;
}
a:link {
	text-decoration: none;
	color: #666;
}
a:visited {
	text-decoration: none;
	color: #666;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function ShowHide(){
$("#sliderDiv").animate({"height": "toggle"}, { duration: 1000 });
}
//]]>
</script>
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=true">
</script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(39.648345,27.883166);
    var myOptions = {
      zoom: 19,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
  }
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-836566-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body onload="initialize()">
<div id="contact">
<img src="logo.png" width="321" height="90" alt="Kocapınarlılar Konfeksiyon" />
<p>Yaymacılar Caddesi No 33<br />
10100 Balıkesir Türkiye</p>
<p>+90 266 241 3699</p>
<a href="https://plus.google.com/110506235829106323420" rel="publisher">Google+</a>
<p><a onclick="ShowHide(); return false;" href="#">Haritada Göster</a></p>
<div id="sliderDiv">
	<div id="map_canvas" style="width:300px; height:200px"></div>
<h5>Pzt - Cmt : 09:00 - 19:00</h5>
<a onclick="ShowHide(); return false;" href="#">Haritayı Gizle</a></div>
</div>
</body>
</html>