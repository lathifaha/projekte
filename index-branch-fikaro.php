<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Auer Weber">
<meta name="description" content="Auer Weber">
<meta name="date" content="2016-03-23">
<link rel="canonical" href="http://www.auer-weber.de">

<link rel="stylesheet" type="text/css" href="styles-branch-fikaro.css">
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/demo-slideshow.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/jquery.event.swipe.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.js"></script>
<script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>

<script type="text/javascript" src="scripts-branch-fikaro.js"></script>
<script type="text/javascript" src="js/slip.js"></script>
    
<title>Auer Weber</title>
</head>
<script>

</script>
<style type="text/css">
@media screen and (max-width:786px)
{
    img.default {display:none;}
    .slideshow-info {
        color:#ffffff !important; padding-left:0 !important; width:300px; position:absolute; z-index:999; bottom: 120px; left:20px; width:300px; background-color:rgba(0,0,0,0) !important;
    }    
    .sidemenu.mobile{
        position: fixed;
        top:0; left:0; right:0;
        width:100%; height:60px; min-width:320px;
        z-index:9998;
        padding-bottom: 0px;
        background-color:#FF0;
        min-height: 0 !important;
        transition: left 1s;
    }
    
    .nav-logo 
    {
        display:block; /* display: none;*/
        top:5px; right:10px;
        width:50px; height:50px;
        position:fixed; z-index:9999;
        
        background-image: url(image/auer-blue.png);
        background-repeat:no-repeat;
        background-size:contain;
        background-position:center;
        
    }
    .sidemenu.expand { 
        left: 300px;  /* Sidemenu pada mobile itu bentuknya bar kuning kecil. Ketika class di 'apply'. Dia geser 300px ke kanan (Baca: 300px distance from the document left) */
        transition:left 1s; } /* Transition effect. kurangi nilainya. Bisa pake 'ms' instead of 's'*/
    .sidemenu > .sidemenu-wrapper {
        left: -300px; /* Kondisi awal (kondisi ngumpet) si wrapper untuk tombol2. Negative value berarti dia ngumpet di sebelah kiri dokumen.*/
        width:300px; /* Lebar*/
        }
    
    .mobile-nav-btn
    {
        margin-top:5px; margin-bottom: 5px; margin-left:10px;
        width:50px; height:50px;
        
        cursor:hand; cursor:pointer;
    }
    #main-banner img
    {
        height:100%; width:auto;
    }
    .menu-item{
        border-bottom: 1px solid #ffffff;
        padding: 5px;
        color: #ffffff;
        position: relative;
        z-index: 9999;
        text-align: right;
    }
    .menu-item:hover{
        color:darkturquoise;
    }
    .vertical-menu
    {
        margin-top:0px;
    }
    .active-menu-item{
        font-weight: bold;
    }
    .sidemenu > a >div > .menu-item:nth-of-type(1){
        border-top:1px solid #ffffff;
    }
    .inline-menu{
        margin-top: 10px;
        margin-bottom: 10px;
        min-height: 25px;
    }
    .inline-menu-item{
        display: inline-block;
        font-size: 0.75em;
        color: #ffffff;
        position: relative;
        float: right;
        margin-right: 5px;
        margin-left: 5px;
    }
    .inline-menu-item:hover{
        color:darkturquoise;
    }
    .shadow-src{
        display:none;
        border-radius: 10%;
        position: absolute;
        top: 50%;
        bottom: 50%;
        left: 50%;
        right: 50%;
        height: 1px;
        width: 1px;
        -webkit-box-shadow: 140px 40px 190px 300px rgba(64,124,147,0.75);
        -moz-box-shadow: 140px 40px 190px 300px rgba(64,124,147,0.75);
        box-shadow: 140px 40px 190px 300px rgba(64,124,145,0.75);
    }
    .search-item{
        position: absolute;
        right: 0;
        top:0;
        width: 250%;
    }
    .search-item > form{
        height: 20px;
        float: right;
    }
    .search-btn{
        display: inline-block;
        height: 100%;
        width: 20px;
        cursor: hand;
        cursor: pointer;
    }
    .search-btn > img{
        width: 100%;
    }
    .search-box {
        display: inline-block;
        max-width: 0;
        overflow: hidden;
        height: 100%;
        transform: max-width 1s;
    }
    .search-box > input{
        height: 100%;
        width: 200px;
    }
    .search-box.expand{
        max-width: 500px;
        transition: max-width 1s;
    }
    .d1 {
        box-sizing:border-box; border:1px solid #000;
    }
}
.search-item {display:none;} /* Search is disabled */
</style>

<body>
<img src="image/auer-white.png" class="default">

<div class='sidemenu mobile'> <!-- General Container -->
    <div class='mobile-nav-btn d1'></div>
    <div class='nav-logo d1'></div>
    <div class='sidemenu-wrapper d1' style='position:relative;'> <!-- Position set to relative, so the shadow-src top, left, right, bottom orientation relatively positioned to this container and not to 'main-banner'-->
        <div class='shadow-src'></div>
        
        <div class='vertical-menu d1'>
            <a href='#'><div class='menu-item active-menu-item'>Startseite</div></a>
            <a href='#'><div class='menu-item'>Aktuelles</div></a>
            <a href='#'><div class='menu-item'>Projekte</div></a>
            <a href='#'><div class='menu-item'>Buro</div></a>
            <a href='#'><div class='menu-item'>Kontakt</div></a>
        </div>
        
        <div class='inline-menu'>
            <a href='#'><div class='inline-menu-item'>ID</div></a>
            <a href='#'><div class='inline-menu-item active-menu-item'>JP</div></a>
            <a href='#'><div class='inline-menu-item'>EN</div></a>
        </div>
        
        <div class='search-item'>
            <form id='search-form'>
                <!-- Reversed position for search area due to float:right property-->
                <div class='search-btn'><img src='image/Feedbin-Icon-home-search.svg.png'></div>
                <div class='search-box'><input type='text' placeholder='Search it!'></div>
            </form>
        </div>
    </div>
</div>
<div id="main-banner" class="cycle-slideshow" 
data-cycle-pager=".slideshow-nav" 
data-cycle-pager-template="<span></span>" 
data-cycle-overlay-template="<p>{{location}}</p><div></div><h3>{{caption}}</h3>">
    <div class='cycle-overlay custom slideshow-info'>
        <!-- Things inside here will be replaced by Cycle2. Unable to integrate slideshow nav here -->
    </div>

    <div class='slideshow-nav'>
        <!-- Reserved for Cycle2 slideshow nav control. Putting it in the right place -->
    </div>

	<img class="image" src="image/azur.jpg" data-location="Azur" data-caption="Azur azur">
    <img class="image" src="image/neue.jpg" data-location="Neue" data-caption="Neue neue">
    <img class="image" src="image/ubahn.jpg" data-location="Ubahn" data-caption="Ubahn ubahn">
</div>
<main class="wrapper">
<img src="image/auer-blue.png" class="moveable">
<section id="thumb">
    <div class="news">
        <a class="" href="#"><img src="image/thumb1.jpg" alt="thumb"></a>
        <div class="article">
            <a class="title" href="#"><h2>Stuttgart und Munchen</h2></a>
            <ul>
                <li>
                <p>An beiden Standorten suchen wir erfahrene Architekten/innen für interessante Projekte sowie motivierte Absolventen/innen für Wettbewerbe.</p>
                </li>
                <li>
            <a class="more" href="#">mehr >></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="news">
        <a class="" href="#"><img src="image/thumb2.jpg" alt="thumb"></a>
        <div class="article">    
            <a class="title" href="#"><h2>Eroffnung des Allianz Campus Unterfohring</h2></a>
            <ul>
                <li>
            <p>Am 9. März 2016 wurde der Allianz Neubau feierlich eröffnet und mit dem DGNB Nachhaltigkeitszertifikat in Platin ausgezeichnet</p>
                </li>
            <li>
            <a class="more" href="#">mehr >></a>
            </li>
            </ul>
        </div>
    </div>
    <div class="news">
        <a class="" href="#"><img src="image/thumb3.jpg" alt="thumb"></a>
    <div class="article">          
            <a class="title" href="#"><h2>Anerkennung fur das ,,Kaufhaus Schocken" in Chemnitz</h2></a>
        <ul>
            <li>
            <p>Am 9. März 2016 wurden in Dresden die Architekturpreise des DBA Sachsen 2016 vergeben</p>
            </li>
            <li>
                <a class="more" href="#">mehr >></a></li>
        </ul>
        </div>
    </div>
    <div class="news">
        <a class="" href="#"><img src="image/thumb4.jpg" alt="thumb"></a>
<div class="article">            
            <a class="title" href="#"><h2>Arbeiten bei auer Weber</h2></a>  
   <div class="arch">
            <p>Architekt/in</p>
            <a class="more" href="#">mehr >></a>
    </div>
    <div >
            <p>Praktikant/in</p>
            <a class="more" href="#">mehr >></a>
    </div>
</div>
    </div>
</section>
<section id="profile">
    <div id="brief">
        <h2>,,Das Irritierende an den offentlichen Bauten von Auer Weber ist ihre Normalitat"</h2>
        <p class="name">Gerhard Ullmann uber Auer Weber</p>
        <p class="prof">Unsere Arbeit verstehen wir als sozialen und kulturellen Beitrag auf einem hohen künstlerischen, funktionalen und technologischen Niveau, dessen architektonische Qualität und Nachhaltigkeit sich in erster Linie daran messen lassen muss, wie offen und vielseitig interpretierbar er ist für die vielfältigen Formen des Lebens.</p>
        <a class="more" href="#">mehr >></a>
    </div>
    <div id="sum">
        <h5>Standorte</h5>
            <h3>2</h3>
       <h5>Mitarbeiter</h5>
            <h3>140</h3>
        <h5>Auszeichnungen</h5>
            <h3>80</h3>
        <h5>Projekte</h5>
            <h3>129</h3>
    </div>
</section>
</main>

<footer id='footer'>
    <div id="contact">
    <div class="address">
        <h4>Auer Weber</h4>
        Haußmannstr. 103A<br>
70188 Stuttgart<br>
        t +49 711 268404 - 0<br>
        f +49 711 268404 - 88
        <a class="emails" href="mailto:stuttgart@auer-weber.de">stuttgart@auer-weber.de</a>
    </div>
    <div class="address">
        <h4>Auer Weber</h4>
        Sandstraße 33<br>
80335 München<br>
        t +49 89 381617 - 0<br>
        f +49 89 381617 - 38
        <a class="emails" href="mailto:muenchen@auer-weber.de" >muenchen@auer-weber.de</a>
        </div>
    </div>
    <div id="sns">
    <ul>
        <li><a href=""><img src="image/m.png"></a></li>
        <li><a href="#"><img src="image/f.png"></a></li>
        <li><a href="#"><img src="image/t.png"></a></li>
        <li>
        <a href="#" class="last">Impressum >></a>
        </li>
        </ul>
    </div>
</footer>
</body>
</html>