<?php
require_once 'connect.php';
require_once 'header.php';

if(! isset($_SESSION['sessid'])){
	header('Location:log_in.php');
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h2>Welcome to Shimpei Matsuda's e-leaning website</h2>
		</div>
		<div class="col-md-6">
			    <dl style="font-size:20pt">About me</dl>
				    <dt>My skills</dt>
				    <dd>I am studying IT skills in Kredo now. This homepage is made for demo usage</dd>
				    <br>
				    <dt>My experiences</dt>
				    <dd> I am senior in Keio university. I stop out my university now, and I will graduate on March 2019.So now I can get free time until next September.In the meanwhile I went to two countries. First one is Canada. And second one is philippine. And in Japan I played tennis. So in this home page I will show you more concretly about these experiences.</dd> 
			</div>
			<div class="col-md-offset-1 col-md-5">
				<img src="images/me.jpg" height="250">	    
			</div>
	</div>
</div>
<?php	
require_once 'footer.php';
?>