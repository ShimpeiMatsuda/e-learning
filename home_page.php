<?php
require_once 'connect.php';
require_once 'header.php';

/*if(! isset($_SESSION['sessid'])){
	header('Location:log_in.php');
}*/
?>
<style type="text/css">
	.carousel-caption{
     top:40%;
      font-size: 60px;

	}
	.h2{

	}
</style>
<div class="container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/headphone.jpg" alt="...">
      <div class="carousel-caption">
        E-learning for everyone
      </div>
    </div>
    <div class="item">
      <img src="images/man.jpg" alt="...">
      <div class="carousel-caption">
        E-leaning everyone
      </div>
    </div>
    <div class="item">
      <img src="images/sumaho.jpg" alt="...">
      <div class="carousel-caption">
        E-leaning everyone
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h2>Welcome to Shimpei Matsuda's e-leaning website</h2>
		</div>
		<div class="col-md-6">
			    <dl style="font-size:20pt">About me</dl>
				    <dt>Your skils</dt>
				    <dd>I am studying IT skills in Kredo now. This homepage is made for demo usage</dd>
				    <br>
				    <dt>My experiences</dt>
				    <dd> I am senior in Keio university. I stop out my university now, and I will graduate on March 2019.So now I can get free time until next September.In the meanwhile I went to two countries. First one is Canada. And second one is philippine. And in Japan I played tennis. So in this home page I will show you more concretly about these experiences.</dd> 
			</div>
			<div class="col-md-offset-1 col-md-5">
				<img src="images/me.jpg" height="250">	    
			</div>
	</div>
<hr>	
</div>
<?php	
require_once 'footer.php';
?>