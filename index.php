<!DOCTYPE html>
<html ⚡ lang="en">

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  	<meta content="IE=Edge" http-equiv="X-UA-Compatible">
  	<title>BK Intern management system - Home</title>
  	<?php include 'reference.php' ?>
</head>

<body class="own-style own-margin">
	<?php include 'header.php' ?>

	<section class="">
		<div class="container-fluid main-background" style="padding: 0px 0px 30px 0px;">
			<img class="" srcset="http://via.placeholder.com/1500x500">
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/FPT_Logo.jpg">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">FPT</p>
							</div>	
						</a>					
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/2000px-Intel-logo.svg.png">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">Intel</p>
							</div>
						</a>	
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/Logo-MangoAds.png">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">MangoAds</p>
							</div>
						</a>	
					</div>
				</div>
					
				<div class="col-lg-3 col-sm-6">
					<div class="choice">						
						<a href="VNG.php">
							<div class="logo-container">
								<img src="images/vng-logo-share-v2.jpg">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">VNG</p>
							</div>
						</a>	
					</div>
				</div>
			</div>

			<div class="row mt-30">
				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/itemeditorimage_5850051dd903b.png">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">Microsoft</p>
							</div>
						</a>	
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/2000px-Samsung_Logo.svg.png">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">Samsung</p>
							</div>	
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="choice">
						<a href="">
							<div class="logo-container">
								<img src="images/Apple-Logo-black.png">
							</div>

							<div class="company-name">
								<p class="text-center" style="padding: 0;">Apple</p>
							</div>
						</a>	
					</div>
				</div>
			</div>			
		</div>		
	</section>

	<div id="id01" class="modal">  
	  	<form class="radius-5 form-modified animate" action="/action_page.php">
			<div class="text-center mb-30" >
				<h2 class="font-w-300 fs-42 color-white ">Log in</h2>
				<p class="text-center color-gray fs-17 line-h ">Log in to BK intern management system</p>			
			</div>
		  	
		  	<p class="m-0"><input class="input input-sm w-full radius-5 color-white mb-20" placeholder="Username" type="text" required></p>
		  	
			<p class="m-0"><input class="input input-sm w-full radius-5 color-white	mb-20" placeholder="Password" type="password" required></p>

			<div class="mb-20">
				<label class="checkbox">
				  <input type="checkbox">
				  <span></span>
					Remember me
				</label>
				<button type="submit" class="btn btn-sm btn-primary radius-5" style="width:40%;max-width:200px;float:right;">Log in</button>						
			</div>		  		  			  	
		</form>
	</div>

	<?php include 'footer.php' ?>	
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/intern.js"></script>
</body>
</html>

<!--
	<form class="radius-5 form-modified">		  	
			<div class="text-center mb-30" >
				<h2 class="font-w-300 fs-42 color-white ">Sign In</h2>
				<p class="text-center color-gray fs-17 line-h ">Process results from a change in the energy level of the nucleus</p>			
			</div>
		  	
		  	<p class="m-0"><input class="input input-sm w-full radius-5 color-white mb-20" placeholder="Username" type="text"></p>

		  	
			<p class="m-0"><input class="input input-sm w-full radius-5 color-white	mb-20" placeholder="Password" type="password"></p>

			<div class="mb-20">
				<label class="checkbox">
				  <input type="checkbox">
				  <span></span>
					Remember me
				</label>
				<a href="#" class="btn btn-sm btn-primary radius-5">Sign in</a>						
			</div>
		  
		  	<p class="text-center mt-30"><a href="#" class="btn btn-info w-full radius-5">Via Facebook</a></p>		  	
		</form>





		<form class="modal-content animate" action="/action_page.php">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="img_avatar2.png" alt="Avatar" class="avatar">
	    </div>

	    <div class="">
	      <label><b>Username</b></label>
	      <input type="text" placeholder="Enter Username" name="uname" required>

	      <label><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="psw" required>
	        
	      <button type="submit">Login</button>
	      <input type="checkbox" checked="checked"> Remember me
	    </div>

	    <div class="" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	      <span class="psw">Forgot <a href="#">password?</a></span>
	    </div>
	  </form>		
		-->