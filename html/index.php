<!doctype html>
<html>
<head>
<!--  Meta tag - fortæller browseren at den må/kan læse æ, ø, å -->
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/soy4you_responsive_logo.png">
<!-- 3. PARTS KODE - Link til online version af det nyeste bootstrap - http://getbootstrap.com/getting-started/ -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- 3. PARTS KODE - Link til Fontawesome - https://cdnjs.com/libraries/font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- 3. PARTS KODE - Link til googlefont montserrat - https://www.google.com/fonts#UsePlace:use/Collection:Montserrat -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<!-- 3. PARTS KODE - Link til hover.css - https://cdnjs.com/libraries/hover.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css">
<!--  Link til vores eget stylesheet -->
<link rel="stylesheet" href="../css/style.css" media="screen">
<!--  Responsivt meta tag - der gør at man ikke kan zoome på mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  Meta tag - keywords -->
<meta name="keywords" content="Soy4you, soy4you, kødfri, Kødfri, kødfri mandag, Kødfri Mandag, kødfrimandag, KødfriMandag, #kødfrimandag, #Kødfrimandag, GMO, gmo, GMOVenligt, gmovenlingt, sundmad, Sundmad, veganer, Veganer, protein, Protein, proteinrigt, Proteinrigt, naturligt, Naturligt, sundhed, Sundhed">
<!--  Meta tag - description -->
<meta name="description" content="Soy4you er proteinrig mad. Soy4you er et 100 procent naturligt alternativ til kød, og uanset om du er vegetar, veganer, eller blot en af de mange danskere der kunne tænke sig en kødfri dag, så er Soy4you det rette valg for dig">
<!--  Meta tag robots -->
<meta name="robots" content="noindex, nofollow">
<title>Soy4you - kampagnesite</title>
<!-- 3. PARTS KODE - Link til scroolrevealjs - https://cdnjs.com/libraries/scrollReveal.js -->
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>

<!-- 3. PARTS KODE - Script tag til scroolreveal js - https://cdnjs.com/libraries/scrollReveal.js  --> 
<script>
window.sr = ScrollReveal();
</script>
</head>
<body>

<!--  Main tag til at inddele hele vores side med et id "wrapper" -->

<main id="wrapper">
<!--  nav tag til at lave vores menu -->

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
              <div class="navbar-header hidden-xs hidden-sm">
      <a class="navbar-brand" href="#produkter">
        <img alt="Soy4you logo" src="../img/soy4you.svg" id="logo">
      </a>
    </div>
    
             <div class="navbar-header visible-xs visible-sm">
      <a class="navbar-brand" href="#produkter">
        <img alt="Soy4you responsivt logo" src="../img/soy4you_responsive_logo_2.svg" id="logoresponsive">
      </a>
    </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
     <!--  Vores menupunkter i menubaren -->

          <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs"><a href="#produkter">PRODUKTER</a></li>
                         <li><a href="#animation">ANIMATIONSFILM</a></li>
                         <li><a href="#diy">DIY</a></li>
                        <li><a href="#omos">OM SOY4YOU</a></li>
            <li><a href="#baeredygtighed">BÆREDYGTIGHED</a></li>
             <li ><a href="#nyhedsbrev">OPSKRIFTER</a></li>
            <li><a href="#social">SOCIAL</a></li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    
  <!--  MIKKEL + FREDERIK HTML - Første sektion med vores produkter + slider -->

    <section id="produkter">
        <img src="../img/sun.svg" alt="sol" class="img-responsive pull-left" id="sun">

    <h1 class="text-center headline">PRODUKTER</h1>
    <p class="text-center">Tryk på en af vores nedenstående produkter for at læse mere</p>
    <article id="produkterarticle">
        <img src="../img/soy4you_bod.svg" alt="bod" class="center-block hidden-xs" id="bod">

    <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


      <div class="item active">
        <img src="../img/soy4you1.png" alt="Soy4you soya bites" class="produktbillede center-block" data-toggle="modal" data-target="#soyabitesModal">
        <div class="carousel-caption">


        </div>
      
      
   
</div>

    
      <div class="item">
        <img src="../img/soy4you3.png" alt="Soy4you soya grauleret lys" class="produktbillede center-block" data-toggle="modal" data-target="#soyabiteslysModal">
        <div class="carousel-caption">
       
        </div>
      </div>

      <div class="item">
        <img src="../img/soy4you2.png" alt="Soy4you soya grauleret mørk" class="produktbillede center-block" data-toggle="modal" data-target="#soyabitesmoerkModal">
        <div class="carousel-caption">
        
        </div>
      </div>
  </div>
   

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 
 </div>
 </div>
 
    <!-- Modal -->
<div class="modal fade" id="soyabitesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title headline" id="myModalLabel">Soya Bites</h1>
      </div>
      <div class="modal-body">
  



  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#omproduktet" aria-controls="omproduktet" role="tab" data-toggle="tab">Om produktet</a></li>
    <li role="presentation"><a href="#opskrifter" aria-controls="opskrifter" role="tab" data-toggle="tab">Opskrifter</a></li>
    <li role="presentation"><a href="#butikker" aria-controls="butikker" role="tab" data-toggle="tab">Kan købes her</a></li>
    <li role="presentation"><a href="#varedeklaration" aria-controls="vaeredeklaration" role="tab" data-toggle="tab">Varedeklaration</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="omproduktet">
     <p class="modaltext">Det naturlige og sunde alternativ til lyst kød/kylling i pastaretter, wok, salater mm.<br> Produktets høje indhold af fibre, protein, vitaminer & mineraler er velegnet til brug i al madlavning for at erstatte kød eller for at forøge madens næringsværdi. <br>
Soy4you er baseret på 100% sojabønner.<br>Sojabønner indeholder ikke gluten.</p>
<br>
<br>

<img src="../img/soy4you1.png" alt="Soy4you soya bites" class="img-responsive center-block modalbillede">
</div>
    <div role="tabpanel" class="tab-pane" id="opskrifter">
    <br>
    <br>
    <h1 class="headline">Er god i:</h1>
    <br>
<ol>
<li>Wok med nudler</li>
<li>Kebab med hvidløgsdressing</li>
<li>Brændende kærlighed</li>
</ol>

<br>
<br>
<a href="http://www.soy4you.dk/soja-bites/" target="_blank"><h1 class="headline">Se flere gode opskrifter her!</h1></a>
</div>
    <div role="tabpanel" class="tab-pane" id="butikker">
    <br>
    <br>
    <br>
    <section class="col-lg-3">
    <img src="../img/bilka.svg" alt="Bilka logo" class="img-responsive center-block modalproduktbilleder">
</section>
        <section class="col-lg-3">
            <img src="../img/foetex.svg" alt="Føtex logo" class="img-responsive center-block modalproduktbilleder">
        </section>
    <section class="col-lg-3">
        <img src="../img/meny.svg" alt="Meny logo" class="img-responsive center-block modalproduktbilleder">
    </section>
    <section class="col-lg-3">
        <img src="../img/rema.svg" alt="Rema logo" class="img-responsive center-block modalproduktbilleder">
    </section>
<br>
<br>
<br>
 </div>
   
  
    <div role="tabpanel" class="tab-pane" id="varedeklaration">
    <br>
    <br>
    <h1 class="headline">Alle informationer er angivet efter pr. 100 gram</h1>   <br>
      <br>
       <br>
    <table class="table"> <tbody> <tr> <th scope="row">Energi</th> <td>1215 kj/289 kcal</td> </tr> <tr> <th scope="row">Fedt</th> <td>1,0 g</td> </tr> <tr> <th scope="row">Heraf mættede fedtsyrer</th> <td>0,1 g</td> </tr> <tr> <th scope="row">Kulhydrat</th> <td>4,3 g</td> </tr> <tr> <th scope="row">Heraf sukkerarter</th> <td>1,0 g</td> </tr><tr> <th scope="row">Protein</th> <td>65 g</td> </tr><tr> <th scope="row">Salt</th> <td>5,5 g</td> </tr><tr> <th scope="row">Kostfibre</th> <td>19,4 g</td> </tr><tr> <th scope="row">Ingredienser</th> <td>Traditionelle sojabønner (non-GMO)</td> </tr><tr> <th scope="row">Allergener</th> <td>Soja</td> </tr><tr> <th scope="row">EAN nummer</th> <td>5711687010057</td> </tr><tr> <th scope="row">Varenummer</th> <td>1001</td> </tr></tbody> </table>
    
    </div>
 

</div>



<br>
<br>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Luk</button>
       
      </div>
    </div>
  </div>
  </div>
  </div>




  <!-- Modal -->
<div class="modal fade" id="soyabiteslysModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabelSecond">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title headline" id="myModalLabelSecond">Soya granuleret - lys</h1>
      </div>
      <div class="modal-body">
  



  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#omproduktet2" aria-controls="omproduktet2" role="tab" data-toggle="tab">Om produktet</a></li>
    <li role="presentation"><a href="#opskrifter2" aria-controls="opskrifter2" role="tab" data-toggle="tab">Opskrifter</a></li>
    <li role="presentation"><a href="#butikker2" aria-controls="butikker2" role="tab" data-toggle="tab">Kan købes her</a></li>
    <li role="presentation"><a href="#varedeklaration2" aria-controls="vaeredeklaration2" role="tab" data-toggle="tab">Varedeklaration</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="omproduktet2">
     <p class="modaltext">
Det naturlige og sunde alternativ til hakket kød i gryderetter f.eks. pastaretter, chili con carne &amp; lasagne.<br> Med produktets høje indhold af fibre, protein, vitaminer & mineraler er det velegnet til brug i al madlavning for at erstatte kød eller for at forøge madens næringsværdi.<br> 
Soy4you er baseret på 100% sojabønner.<br>Sojabønner indeholder ikke gluten.</p>
<br>
<br>

<img src="../img/soy4you3.png" alt="Soy4you soya grauleret lys" class="img-responsive center-block modalbillede">
</div>
    <div role="tabpanel" class="tab-pane" id="opskrifter2">
    <br>
    <br>
    <h1 class="headline">Er god i:</h1>
    <br>
<ol>
<li>Boller i kokos og karry</li>
<li>Chai spyd - vegan</li>
<li>Chili con soy</li>
</ol>

<br>
<br>
<a href="http://www.soy4you.dk/soja-granulat/" tagret="_blank"><h1 class="headline">Se flere gode opskrifter her!</h1></a>
</div>
    <div role="tabpanel" class="tab-pane" id="butikker2">
    <br>
    <br>
    <br>
    <section class="col-lg-3">
    <img src="../img/bilka.svg" alt="Bilka logo" class="img-responsive center-block modalproduktbilleder">
</section>
        <section class="col-lg-3">
            <img src="../img/foetex.svg" alt="Føtex logo" class="img-responsive center-block modalproduktbilleder">
        </section>
    <section class="col-lg-3">
        <img src="../img/meny.svg" alt="Menylogo" class="img-responsive center-block modalproduktbilleder">
    </section>
    <section class="col-lg-3">
        <img src="../img/rema.svg" alt="Rema logo" class="img-responsive center-block modalproduktbilleder">
    </section>
<br>
<br>
<br>
 </div>
   
  
    <div role="tabpanel" class="tab-pane" id="varedeklaration2">
    <br>
    <br>
    <h1 class="headline">Alle informationer er angivet efter pr. 100 gram</h1>   <br>
      <br>
       <br>
    <table class="table"> <tbody> <tr> <th scope="row">Energi</th> <td>1215 kj/289 kcal</td> </tr> <tr> <th scope="row">Fedt</th> <td>1,0 g</td> </tr> <tr> <th scope="row">Heraf mættede fedtsyrer</th> <td>0,1 g</td> </tr> <tr> <th scope="row">Kulhydrat</th> <td>4,3 g</td> </tr> <tr> <th scope="row">Heraf sukkerarter</th> <td>1,0 g</td> </tr><tr> <th scope="row">Protein</th> <td>65 g</td> </tr><tr> <th scope="row">Salt</th> <td>5,5 g</td> </tr><tr> <th scope="row">Kostfibre</th> <td>19,4 g</td> </tr><tr> <th scope="row">Ingredienser</th> <td>Traditionelle sojabønner (non-GMO)</td> </tr><tr> <th scope="row">Allergener</th> <td>Soya</td> </tr><tr> <th scope="row">EAN nummer</th> <td>5711687010057</td> </tr><tr> <th scope="row">Varenummer</th> <td>1001</td> </tr></tbody> </table>
    
    </div>
 

</div>



<br>
<br>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Luk</button>
       
      </div>
    </div>
  </div>
 </div>
  </div>




  <!-- Modal -->
<div class="modal fade" id="soyabitesmoerkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabelThird">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title headline" id="myModalLabelThird">Soya granuleret - mørk</h1>
      </div>
      <div class="modal-body">
  



  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#omproduktet3" aria-controls="omproduktet3" role="tab" data-toggle="tab">Om produktet</a></li>
    <li role="presentation"><a href="#opskrifter3" aria-controls="opskrifter3" role="tab" data-toggle="tab">Opskrifter</a></li>
    <li role="presentation"><a href="#butikker3" aria-controls="butikker3" role="tab" data-toggle="tab">Kan købes her</a></li>
    <li role="presentation"><a href="#varedeklaration3" aria-controls="vaeredeklaration3" role="tab" data-toggle="tab">Varedeklaration</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="omproduktet3">
     <p class="modaltext">
Det naturlige og sunde alternativ til hakket kød i gryderetter f.eks. pastaretter, chili con carne &amp; lasagne.<br> Med produktets høje indhold af fibre, protein, vitaminer &amp; mineraler er det velegnet til brug i al madlavning for at erstatte kød eller for at forøge madens næringsværdi. <br>
Soy4you er baseret på 100% sojabønner.<br>Sojabønner indeholder ikke gluten.</p>
<br>
<br>

<img src="../img/soy4you2.png" alt="Soy4you soya grauleret mørk" class="img-responsive center-block modalbillede">
</div>
    <div role="tabpanel" class="tab-pane" id="opskrifter3">
    <br>
    <br>
    <h1 class="headline">Er god i:</h1>
    <br>
<ol>
<li>Spaghetti Bolognese</li>
<li>Burger med avocadocreme og chilisalsa</li>
<li>Krebinetter med et grønt twist
</li>
</ol>

<br>
<br>
<a href="http://www.soy4you.dk/soja-granulat/" tagret="_blank"><h1 class="headline">Se flere gode opskrifter her!</h1></a>
</div>
    <div role="tabpanel" class="tab-pane" id="butikker3">
    <br>
    <br>
    <br>
    <section class="col-lg-3">
    <img src="../img/bilka.svg" alt="Bilka logo" class="img-responsive center-block modalproduktbilleder">
</section>
        <section class="col-lg-3">
            <img src="../img/foetex.svg" alt="Føtex logo" class="img-responsive center-block modalproduktbilleder">
        </section>
    <section class="col-lg-3">
        <img src="../img/meny.svg" alt="Meny logo" class="img-responsive center-block modalproduktbilleder">
    </section>
    <section class="col-lg-3">
        <img src="../img/rema.svg" alt="Rema logo" class="img-responsive center-block modalproduktbilleder">
    </section>
<br>
<br>
<br>
 </div>
   
  
    <div role="tabpanel" class="tab-pane" id="varedeklaration3">
    <br>
    <br>
    <h1 class="headline">Alle informationer er angivet efter pr. 100 gram</h1>   <br>
      <br>
       <br>
    <table class="table"> <tbody> <tr> <th scope="row">Energi</th> <td>	1140 kj/271 kcal</td> </tr> <tr> <th scope="row">Fedt</th> <td>0,5 g</td> </tr> <tr> <th scope="row">Heraf mættede fedtsyrer</th> <td>0,1 g</td> </tr> <tr> <th scope="row">Kulhydrat</th> <td>2,3 g</td> </tr> <tr> <th scope="row">Heraf sukkerarter</th> <td>1,0 g</td> </tr><tr> <th scope="row">Protein</th> <td>65,0 g</td> </tr><tr> <th scope="row">Salt</th> <td>4,5 g</td> </tr><tr> <th scope="row">Kostfibre</th> <td>19,4 g</td> </tr><tr> <th scope="row">Ingredienser</th> <td>Traditionelle sojabønner (non-GMO)</td> </tr><tr> <th scope="row">Allergener</th> <td>Soja</td> </tr><tr> <th scope="row">EAN nummer</th> <td>5711687020056</td> </tr><tr> <th scope="row">Varenummer</th> <td>2001</td> </tr></tbody> </table>
    
    </div>
 

</div>



<br>
<br>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Luk</button>
       
      </div>
    </div>
  </div>
 </div>
  </div>
</article>

    </section>
    
   
<hr>
    
   
    
    
      <br>
      <br>
      <br>  
    <!-- Frederik HTML - animationsfilm sektionen-->
    <section id="animation">
    <br>
    <h1 class="text-center headline">Animationsfilm</h1>
    <p class="text-center">Se en hurtig film om Soy4you og vores værdier</p>
    <br>
    <br>
     <br>
      <video id="animationsfilm" class="center-block" controls>
        <source src="../video/soy4you_film.mp4" type="video/mp4">
        Din browser kan ikke afspille videoen. Opdater browseren for at løse problemet. </video>
       
      </section>
      <br>
      <br>
      <hr>
      
         <!-- MIKKEL HTML - Sektion med DO IT YOURSELF VIDEO -->


    <section id="diy" class="container-fluid">
    <h1 class="text-center headline">SUND MAD PÅ 15 MINUTTER</h1>
    <article class="container marketing">
   
 
     <br>
    <br>
    <br>
    <section class="col-lg-4 text-center" id="checkmarkone">

     <i class="fa fa-check checkmark center-block fa-5x" aria-hidden="true"></i>
  <p>Sundt</p>


    </section>
    
    <section class="col-lg-4 text-center" id="checkmarktwo">
     <i class="fa fa-check checkmark center-block fa-5x" aria-hidden="true"></i>
     <p>Nemt at lave</p>
  
    </section>
    
    <section class="col-lg-4 text-center" id="checkmarkthree">
   <span>
     <i class="fa fa-check checkmark center-block fa-5x" aria-hidden="true"></i>
     <p>Prisvenligt</p>
 </span>
    </section>



    <section class="row" id="moviesection">
    <section class="col-lg-12">
    <h1 class="text-center headline">Se hvor let det er at lave en bolognese med soy4you</h1>
    <video id="diyfilm" class="center-block" controls>
        <source src="../video/diyfilm.mp4" type="video/mp4">
        Din browser kan ikke afspille videoen. Opdater browseren for at løse problemet. </video>
        </section>
    </section>
    
     </article>
    </section>
    <hr>
    <!-- Lasse HTML - om soy4you produktet og dens historie-->
    
    <section id="omos">
      <h1 class="text-center headline">OM SOY4YOU</h1>
      <article class="container-fluid" id="omosarticle">
   <br>
   <br>

        <section class="col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-4">
       
          <p>Et sundt måltid mad har aldrig stået højere på listen over formlen for det “gode” liv.<br> Mere end nogensinde før er vi danskere blevet bevidste om vores spise og levevis. <br>
            <br>
            Soy4you er et 100 procent naturligt alternativ til kød, og uanset om du er vegetar, veganer, eller blot en af de mange danskere der flirter med tanken om en kødfri dag og mere proteinrig mad, så er der masser af muligheder med Soy4you. <br>
            <br>
            Næringsindholdet i Soy4you er ikke kun sundt for miljøet, men det er også sundt for dig og din familie. <br>
            <br>
            Smag og struktur er den samme, som du kender til fra almindeligt kød - der er bare ikke kød i produkterne. <br>
            <br>
            Tænk over Soy4you næste gang du handler ind og nup en kødfri dag.</p>
        </section>
        
      </article>
    </section>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <!-- Rasmus HTML - rasmuses sektion om bæredygtighed-->
    <section id="baeredygtighed" class="container-fluid"> 
    <img src="../img/cloud.svg" alt="sky" class="pull-right" id="cloud">
      <h1 class="text-center headline">BÆREDYGTIGHED</h1>
    <br>
    <br>
    <br>
      <article class="container marketing" id="baeredygtighedarticle">
        <section class="col-lg-4" id="meat"> 
        <img class="center-block baeredygtighedsbilleder" src="../img/cow.svg" id="cow" alt="Ko">
         <br>
          <br>
           <h1 class="headline text-center">Fodervenlig</h1>
          <p>Kødproduktionen koster hvert år massevis af liter rent drikkevand og udleder flere tons af CO2.<br> På grund af det har vi valgt at ”skære” mellemmanden fra og derved spare mængden af vand og CO2 samt udgifter på dyrefoder.<br><br>
Vi tror på at, hvis flere gik med til at spiste mindre kød ville det ikke kun fremme jordens levetid og vores, men også forbedre dyrenes.<br><br>
Valget er selvfølgelig op til DIG, så hvis du trænger til noget forandring i din hverdag eller madvaner så prøv Soy4you.
</p>
        </section>
        <section class="col-lg-4" id="cotwo"> 
        <img class="center-block baeredygtighedsbilleder" src="../img/infographic2.svg" id="tree" alt="Træ">
         <br>
          <br>
          <h1 class="headline text-center">Protein</h1>
          <p>Med Soy4yous produkter får du den samme smag som hakket oksekød. Du er garanteret et højere protein indhold og konsistensen er næsten den samme.<br><br> Udover at det er nemmere at tilberede er holdbarheden også bedre og du behøver aldrig mere at bekymre dig om at det bliver for gammelt.</p>
        </section>
        <section class="col-lg-4" id="gmo"> 
        <img class="center-block baeredygtighedsbilleder" src="../img/infographic1.svg" id="scope" alt="Mikroskop">
         <br>
          <br>
           <h1 class="headline text-center">GMO</h1>
          <p>Du får mere værdi for pengene når du spiser soy4you produkter. Sojabønnerne der bruges til produktion er dyrket i Serbien.<br><br> Serbien har nemlig den mest strikse GMO lovgivning. Det betyder at der ikke er brugt nogen form for genmanipulation af bønnerne.<br><br>
På den måde sikre vi os at bevare sundere og mere bæredygtigt produkt.</p>
        </section>
      </article>
    </section>
    
 
        <hr>

     <!-- Mikkel HTML - nyhedsbrev signup boks -->
    <section id="nyhedsbrev">
      <h1 class="text-center headline">OPSKRIFTER</h1>
      <p class="text-center">Få hurtige lækre opskrifter på mail</p>
      <div class="signin-form">
        <div class="container">
          <form class="form-signin" method="post" id="register-form">
            <h1 class="text-center headline">Tilmeld nyhedsbrev</h1>
            <hr />
            <div id="error"> 
              <!-- error will be showen here ! --> 
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Navn" name="user_name" id="user_name" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email adresse" name="user_email" id="user_email" />
              <span id="check-e"></span> </div>
            <hr />
            <div class="g-recaptcha" data-sitekey="6Le2wCATAAAAAKMqyrXoMel-tJPhExWtk50ubYsj"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">Tilmeld nyhedsbrev</button>
            </div>
          </form>
        </div>
      </div>
    </section>
   
    
    <!-- Karl HTML + MIKKEL HTML - footer med sociale medier + kontakt footer helt i bunden af siden -->
    <hr>
    <footer id="social">
      <article class="container-fluid">
        <h1 class="text-center headline">SOCIALE MEDIER</h1>
        <section class="row" id="socialsection">
          <section class="col-lg-12">
            <section class="col-lg-4 col-xs-12 hvr-bob">
             <a href="https://www.facebook.com/Soy4you" target="_blank"><img id="facebook" alt="Facebook social ikon" src="../img/facebook.svg"></a>
              <img id="flowerleft" class="flower pull-left " alt="Blomst venstreside" src="../img/flower.svg"> 
            </section>
            <section class="col-lg-4 col-xs-12 hvr-bob"> <a href="https://www.youtube.com/user/AggerFoods" target="_blank"><img id="youtube" alt="Youtube social ikon" src="../img/youtube.svg"></a> <img id="flowercenter" class="flower center-block" alt="Blomst centreret" src="../img/flowerreverse.svg"> </section>
            <section class="col-lg-4 col-xs-12 hvr-bob"> <a href="https://www.instagram.com/soy4you" target="_blank"><img id="instagram" alt="Instagram social ikon" src="../img/instagram.svg"></a> <img id="flowerright" class="flower pull-right" alt="Blomst højrestillet" src="../img/flower.svg"> </section>
          </section>
        </section>
      </article>
            <img id="bakkeground" class="img-responsive bakker" alt="" src="../img/groennebakker.svg">

         <footer class="footer">
      <div class="container-fluid">
     <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a>Agger Foods A/S<br>
Christian X´s Vej 175<br>
8270 Højbjerg</a></li>
                <li><a>E-mail: info@soy4you.dk</a></li>
                <li><a>Tlf.: +45 4844 4646 </a></li>
                <li><a href="#produkter"><i class="fa fa-arrow-up fa-2x"><p class="arrowuptext">&nbsp;Til top</p></i></a></li>
            </ul>
        </div>
    </div>
      </div>
    </footer>
    
       </footer>
       
      
 <!--  Slut på vores main tag -->
      
</main>


<!-- Den "ældste" version af jquery biblioteket --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script> 
<!-- Den "nyeste" version af jquery biblioteket --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script> 
<!-- Sidste nye version af bootstrap javascript --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
<!-- Script til at køre reCaptcha på vores sign up form --> 
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script> 
<!-- 3. PARTS KODE - Link til jquery minified version 1.11.3 - http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html  -->
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<!-- 3. PARTS KODE - Link til vores validerings script - http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html -->
<script type="text/javascript" src="validation.min.js"></script>
<!-- 3. PARTS KODE - Link til vores validerings script (definition af valideringen - diverse parametre der valideres på) - http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html -->
<script type="text/javascript" src="script.js"></script>
<!-- 3. PARTS KODE - Script tag til scroolreveal js - https://cdnjs.com/libraries/scrollReveal.js  --> 
<script>
sr.reveal('#sun', { delay: 400 });
sr.reveal('#cloud', { delay: 400 });
sr.reveal('#meat', { delay: 800 });
sr.reveal('#cotwo', { delay: 800 });
sr.reveal('#gmo', { delay: 800 });
sr.reveal('#checkmarkone', { delay: 400 });
sr.reveal('#checkmarktwo', { delay: 400 });
sr.reveal('#checkmarkthree', { delay: 400 });
sr.reveal('#socialsection', { delay: 600 });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46204128-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>