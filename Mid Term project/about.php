<!DOCTYPE html>
<html>
    <style>
        .about {
        padding-top: 6%;
        }
        .about-head h3 {
        color: #60B0E6;
        font-size: 1.97em;
        }
        .about-grids h4 {
        font-size: 1.4em;
        font-weight: 500;
        color: #343E46;
        }
        .about-head img{
        margin:1em 1em 0 0;
        }
        .about-head span{
        background:rgba(128, 128, 128, 0.41);
        width:5.5%;
        height:1px;
        display: inline-block;
        vertical-align: text-bottom;
        }
        .about-head span:nth-child(2){
        margin-right:1em;
        }
        .about-grids{
        margin-top:3.5em;
        }
        .about-grids h4 span{
        background: url("../images/about-icons.png") no-repeat 0 0;
        width: 46px;
        height: 37px;
        display: inline-block;
        vertical-align: middle;
        margin-right: 0.5em;
        margin-top: 0.7em;
        cursor:pointer;
        }
        .about-grids h4 span.icon1{
        background-position:0px 0px;
        }
        .about-grids h4 span.icon1:hover{
        background-position:0px -48px;
        }
        .about-grids h4 span.icon2{
        background-position:-405px 0;
        }
        .about-grids h4 span.icon2:hover{
        background-position:-405px 0;
        }
        .about-grids h4 span.icon3{
        background-position:-810px 1px;
        }
        .about-grids h4 span.icon3:hover{
        background-position:-809px -48px;
        }
        .about-grids p {
        margin-left: 4em;
        width: 87%;
        line-height: 23px;
        color: #9EA4A9;
        }
   </style>

    <body>
    <?php include('header.php');?>
        
    <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>ABOUT US</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Best Destinations</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Trust & Safety</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Combine & Save</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
	 </div>
</div>
    
    <?php include('footer.php');?>
    </body>
</html>