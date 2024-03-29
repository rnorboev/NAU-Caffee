<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- active page-->
<div>
  <div class="row">
    <div class="col-xs-12">
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
    </div>            
  </div>
</div>    


<!-- SLIDE SHOW -->
<div class="container">
    <div class="row row-content">
           <div class="col-xs-12">
                 <div id="mycarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                         <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive"
                         src="images/uthappizza.png" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Stallions Breakfast  <span class="label label-danger">Hot</span> <span class="badge">$8.99</span></h2>
                        <p>Your Custom Breakfast.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        ...
                        <div class="carousel-caption">
                        <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                         ...
                        </div>
                    </div>
                    <div class="item">
                        ...
                        <div class="carousel-caption">
                         ...
                        </div>
                    </div>
                </div>

            </div>
                   <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="btn-group" id="carouselButtons">
                    <button class="btn btn-danger btn-sm" id="carousel-pause">
                      <span class="fa fa-pause" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger btn-sm" id="carousel-play">
                      <span class="fa fa-play" aria-hidden="true"></span>
                    </button>
                </div>

            </div>
       </div>
    
    </div>
 <div class="container">
        <div class="row row-content">
            <div class="col-xs-12 col-sm-4 col-sm-push-8">
                
                <img class="img-circle" src="images/boorsok.jpg" alt="Boorsok" >
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>

            </div>
            <div class="col-xs-12 col-sm-8 col-sm-pull-4">
                <h2>Boorsrredok & Jaddrma</h2>
                <p>A unique combination of Indianrrr Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                <p><a class="btn btn-default" style="color:blue;" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
       

<!--
picture navigation before the footer-->
     <!--   <div class="row row-content">
            <div class="col-xs-12 col-sm-3 ">
                
                <img src="images/promotion.jpg" alt="Promotions" style="width:100%;">
                <h3 align=center>This Month's Promotions</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <h2>Weekend Breakfast Buffet</h2>
                <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                <p><a class="btn btn-default" style="color:blue; href="#" role="button">View details &raquo;</a> </p>
            </div>
        

       // <div class="row row-content">
            <div class="col-xs-12 col-sm-4 col-sm-push-8">
                
                <img src="images/chef.jpg" alt="Chef" style="width:100%; height: 250px;">
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-pull-4">
                <h2>NAU Coffeehouse</h2>
                <h4>History</h4>  
                <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                <p><a class="btn btn-default" style="color:blue; href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    
<!-- circle picture before the footer-->
    <div class="container marketing" style="padding-top: 50px;">

      <!-- Three columns of text below the carousel -->
      <div class="row, responsive">
        <div class="col-lg-4">
          <img class="img-circle" src="images/cafe.jpg" alt="Caffee" style="width:250px; height:250px;">
          <h2>Speciality Coffee</h2>
          <p>Specialty coffees crafted for you as a single or double. French Roast, Decaf French Roast, Cappuccino, Cafe Latte, American Roast, Cafe Mocha, Espresso, Hot Chocolate, Cafe Americano.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/cake.jpg" alt="Sweets" style="width:250px; height:250px;">
          <h2>French Cake</h2>
          <p>A delectable, semi-sweet New York Style Cheese Cake, with Graham cracker crust and spiced with Indian cardamoms</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/croissant.jpg" alt="Bulletin Board" style="width:250px; height:250px;">
          <h2>Breakfast Croissant</h2>
          <p>Scrambled eggs with sausage, ham or bacon, topped with fresh cheddar on a flaky butter croissant.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>
         </div>

<!-- end of circle picture -->

</body>
</html>