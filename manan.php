<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
     	 <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<style type="text/css">
			
			#name,#mail,#textarea1{
			    border: 1px solid;
			   	color:  #c47226 ;
			    border-color:white;
			    border-radius: 1px;
			    placeholder-color:black;
				
			}
			.contact-form.input-field input[type=text]:focus {
		    	border-bottom: 1px solid #fff;
		    	box-shadow: 0 1px 0 0 #fff;
		   	}
			#name:focus,#mail:focus,#textarea1:focus{
				border-color:#c47226;
				box-shadow: 0 2px 0 0 #c3752c;
				color:#fff !important;
				
			}
			input::-webkit-input-placeholder {
				color: #c47226 !important;
			}
			textarea::-webkit-input-placeholder {
				color: #c47226 !important;
			}
			textarea.materialize-textarea{
				height: 6rem;
				position: absolute;
			}
			.card .card-action{
				padding-top: 8px;
				padding-bottom: 8px;
			}
			.parallax-container.container-2 {
				height: 150px;
			}
	
			.bold-color-amber{
				color:#c47226;
				font-weight:bolder

			}
			.input-field input[type=text]:focus{
		   		border-bottom: 1px solid #a26836;
		   		box-shadow: 0 1px 0 0 #a26836;
		  	}
		  	.input-field input[type=password]:focus{
		   		border-bottom: 1px solid #a26836;
		   		box-shadow: 0 1px 0 0 #a26836;
		  	}
		  	.input-field input[type=number]:focus{
		   		border-bottom: 1px solid #a26836;
		   		box-shadow: 0 1px 0 0 #a26836;
		  	}
		  	.input-field input[type=email]:focus{
		   		border-bottom: 1px solid #a26836;
		   		box-shadow: 0 1px 0 0 #a26836;
		  	}
			
			
			
		</style>
	</head>
	<body>
    
		<header>
			<nav style="background-color:#393e41" class=" nav-extended">
		 	   <div class="nav-wrapper">
		 	   			<img style="height: 65px;" src="images/logo.jpg">
				      <a href="#" class="brand-logo">  </a>
				      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a class=" waves-effect " id="user-name" href="#!"></a></li>
				        <li><a class=" waves-effect modal-trigger " id="signup-button" href="#modal2">SignUp</a></li>
				        <li><a class="modal-trigger waves-effect" id="login-button" href="#modal1">Login</a></li>

				        <!-- start of modal 	-->


						


				        <!-- login end -->

				        <!-- end oof modal -->
				        <li><a  id="to_cart" href="#!">Cart<span>  </span><span id="qty"></span><i class="material-icons right">shopping_cart
</i></a></li>
				      </ul>
				      <ul class="side-nav" id="mobile-demo">
				        <li><a href="#!">SignUp</a></li>
				        <li><a href="#!">Login</a></li>
				        <li><a href="#!">Cart</a></li>
				      </ul>
				    </div>
				    <div class="nav-content row" style="margin-bottom:0px;height:40px;">
						<ul class="tabs-transparent">			    
						<li class="">
							<a style="color:#c47226;font-weight:bolder" class="materialize-pink btn-flat dropdown-button bold-color-amber" data-activates="list1">Fiction</a>


							<ul class="dropdown-content" id="list1">
								<li> <a class="grey-text text-darken-2 book-check-login" href="#!">Harry Potter</a></li>
								<li class="divider"></li>
								<li><a class="grey-text text-darken-3" href="#!">Lord Of The Rings</a></li>
								
								<li><a class="grey-text text-darken-3" href="#!">Hobbit</a></li>
							</ul>
						</li>
						<li class="">
							<a class=" materialize-pink  btn-flat dropdown-button bold-color-amber" data-activates="list2">Motivating</a>


							<ul class="dropdown-content" id="list2">
								<li><a class="grey-text text-darken-3" href="#!">You Can.</a></li>
								
								<li><a class="grey-text text-darken-3" href="#!">Guide To Greatness</a></li>
								
								<li><a class="grey-text text-darken-3" href="#!">Possible!</a></li>
							</ul>
						</li>
						<li class="">
							<a class="materialize-pink bold-color-amber btn-flat dropdown-button" data-activates="list3">Romantic</a>


							<ul class="dropdown-content" id="list3">
								<li><a class="grey-text text-darken-3" href="#!">Book Of Love</a></li>
								
								<li><a class="grey-text text-darken-3" href="#!">Beauty and Beast</a></li>
								
								<li><a class="grey-text text-darken-3" href="#!">Lala land</a></li>
							</ul>
						</li>
						</ul>
				      
			    </div>
			</nav>

			
		</header>
		

		<main>
			<br><br><br>
			<div class="parallax-container">

	  	
				
		    	<div class="parallax"><img src="images/HOWBookends.jpg"></div>
		  	</div>
		  	<div     style="background-color: #393e41" class="section ">
				
				<div style="margin-left:50px;" id="all-books">
					<div class="my-card-container row">

						<div class="card  small sticky-action no-padding col s3">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text ">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="text-amber" class="add-to-cart" data-name="HIMYM" href="#!">Addasd to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title  white-text text-darken-4">How I Met Your Mother<i class=" material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card small sticky-action no-padding col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>

							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" data-name="The Secret" href="#!">Adda to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card small sticky-action no-padding col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" data-name="secret3" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  			</div>

					<div class="my-card-container row">

						<div class="card small sticky-action no-padding col s3">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" data-name="secret4" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card small sticky-action no-padding col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card small sticky-action no-padding col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  			</div>




		  			<div class="my-card-container row">

						<div class="card sticky-action no-padding small col s3">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card sticky-action no-padding small col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" href="#!">Add to Cart</a>
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  				<div class="card sticky-action no-padding small col s3 offset-s1">
							<div class="card-image waves-effect waves-block waves-light">
							  	<img class="activator" src="images/book1.jpg">
							</div>
							<div style="background-color: #5c6367;" class="card-action">
								<a class="add-to-cart" href="#!">Add to Cart</a>
							</div>
							<div  style="background-color: #5c6367;" class="card-content">
							 	 <span class="card-title activator white-text text-darken-4">How I Met Your Mother<i class="material-icons right">more_vert</i></span>
							  	<!-- <p><a href="#">This is a link</a></p> -->
							</div>
							<div class="card-reveal grey">
								<span class="card-title white-text text-darken-4">How I Met Your Mother<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
		  				</div>

		  			</div>

				</div>
	  		</div><!--section white-->



	  		<!-- diff parallax-->
		  	<div class="parallax-container container-2">
		  		
		    	<div class="parallax"><img src="images/whatsapp_background.jpg">
		    		
				</div>
			</div>
		    		<footer class="card-panel teal lighten-3" style="margin-top: 0px;background-color: #393e41 !important">
		    			<div id="chip-contain">
		    				
			    			<span style="color:d97c27;">Latest Picks :</span>
							
							<span class="chip">
							    <a class="grey-text text-darken-2" href="bookpage_1.html">Harry Potter</a>
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    Game Of Thrones
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    Hobbit
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    Two States
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    See you at the top
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    The monk who sold his Ferari
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    Wealth
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							    NaMo India
							    <i class="close material-icons">close</i>
							</span>
							<span class="chip">
							     <a class="grey-text text-darken-2" href="bookpage_1.html">The Secret</a>
							    <i class="close material-icons">close</i>
							</span>
						</div>
						<div class="row"></div>
						<div class=" row divider"></div>

						<div class="">
							<!-- //asd -->

							<div class="row">
								<!--*************** contact        form*************  -->
								<form id="contact-form" method="post" name="contact-form" class="col s12">
								  	<div class="row">
								  		<div style=" padding-left: 1px;" class="input-field col s6">
								  			<div class="input-field">
								  				
									  			<input class="" type="text" placeholder="Name" id="name" name="feedback_name">
									  			<label for="name"></label>
								  				
								  			</div>
											<div class="input-field">
									  			<input type="email" placeholder="Email id" id="mail" name="feedback_mail">
									  			
									  		</div>
								  		</div>
								    	<div class="input-field col s6">
									      	<div class="row">
 

										        <div class="input-field col s12">
										          	<textarea style="height:95px;color:#c47226" id="textarea1" placeholder="Your Comments" noresize name="feedback_comment" class="materialize-textarea"></textarea>
										          
										        </div>
										   
										  	</div>

								    	</div>
								 	</div>
								 	<div class="row">
								 		 <a id="contact-button" style="color: rgb(197, 116, 41); background-color: rgba(242, 202, 167, 0.16);"  class=" col s12 waves-effect waves btn">Contact Us</a>
								 	</div>
								</form>
							</div>
							
							<!-- as -->
						</div>

		    			<div style="color:#d67b27" class="center-align">Copyrights © 2014 -17 All Rights Reserved.</div>
		    		</footer>

		    		<div id="modal1" class="modal">
		    			<!--*************** login        form*******  -->
		    				<form  method="post" id="form_login">
								<div class="modal-content">
									<h4><center style="color:a26836;" class="">Login To bookbird</center></h4>
										
									<br>
									<br>
									
								      	<div class="row">
								        	<div  class="col s12 input-field ">
								          		<input id="email" placeholder="Email" name="email" class="amber-text" type="email" >
								          
								        	</div>
								      	</div>
										<div class="row">
									        <div class="col s12 input-field ">
								        	  	<input class="amber-text" name="password" id="password" placeholder="Password" type="password" >
								          		
								        	</div>
								      	</div>
									

								</div>
								<div class="modal-footer">
									<a type="submit" class="waves-effect waves-blue blue-text btn-flat" id="login1">Login</a>
				
									<a style="right:65%" class="waves-effect waves-red modal-action modal-close red-text btn-flat">Back</a>
								</div>
							</form>
						</div>
						<div id="modal2" class="modal">
		    				<form  method="post" id="form_signup">
								<div class="modal-content">
									<h4><center style="color:a26836;" class="">Register To bookbird</center></h4>
										
									<br>
									<br>
									<!--*************** Signup        form*******  -->
								      	<div class="row">
								        	<div  class="col s12 input-field ">
								          		<input id="regname" placeholder="Name" name="regname" class="amber-text" type="text">
								          
								        	</div>
								      	</div>
								      	<div class="row">
								        	<div  class="col s12 input-field ">
								          		<input id="email" placeholder="Email" name="email" class="amber-text" type="email" >
								          
								        	</div>
								      	</div>
										<div class="row">
									        <div class="col s12 input-field ">
								        	  	<input class="amber-text" name="password"  placeholder="Password" type="password" >
								          		
								        	</div>
								      	</div>
								      	<div class="row">
								        	<div  class="col s12 input-field ">
								          		<input id="regnum" placeholder="Number" name="regnum" class="amber-text" type="number">
								          
								        	</div>
								      	</div>
								      	<div class="row">
								        	<div  class="col s12 input-field ">
								          		<input id="regaddress" placeholder="Address" name="regaddress" class="amber-text" type="text">
								          
								        	</div>
								      	</div>
									

								</div>
								<div class="modal-footer">
									<a type="submit" class="waves-effect waves-blue blue-text btn-flat" id="signup1">Register</a>
				
									<a style="right:65%" class="waves-effect waves-red modal-action modal-close red-text btn-flat">Back</a>
								</div>
							</form>
						</div>
		    	<!-- </div> -->
		  	<!-- </div>parallax container -->
		</main>
		

		
		



		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 	    <script type="text/javascript" src="js/materialize.js"></script>
 	    <script type="text/javascript">

 	
 	   		if(checkCookie("cart-count") != ""){
 	   			item = getCookie("cart-count");
	      		$("#qty").text(item);
 	   		}

 
 	    	$(document).ready(function(){
 	    		
 	    		
		      	$('.parallax').parallax();
		      	if(checkCookie("logged")!=""){

			      	$("#login-button").hide();
					$("#signup-button").hide();
					$("#user-name").text("Logout, " + getCookie("logged"));
		      	}
		      	
		      	 $('.dropdown-button').dropdown({
					  inDuration: 300,
					  outDuration: 225,
					  constrainWidth: false,
					  hover: true, // Activate on hover
					  gutter: 0, // Spacing from edge
					  belowOrigin: false, // Displays dropdown below the button
					  alignment: 'left', // Displays dropdown with edge aligned to the left of button
					  stopPropagation: false // Stops event propagation
				});
		      	 $('.modal').modal();
		      	
		      	<?php
 	    $myyy='manan'?>
		      
		      	
		      	var x,y;
		      
		      	var item = 0;
		      	var universal_status = "false";
				// for ajax sumit of login data
				$("a#login1").click(function(){

					if(validateLoginForm()){

						
						
						$.post("login.php",$("form#form_login").serializeArray(),function(data){

						data = data.trim();
						y=data.charAt(0);
						

						if(y==1)
						{
							alert("Login Successful")
							$("#login-button").hide();
							$("#signup-button").hide();
							$("#user-name").text("Logout, " + data.slice(1));
							$("#modal1").modal('close');
							universal_status = "true";
							setCookie("logged",data.slice(1),3);
							
							// $("#user").show();
						}
						else if(y==2)
						{
							alert("Password is incorrect");
							// alert(data);
						}
						else if(y==3)
						{
							alert("Email id is incorrect");
							// alert(data);
						}
						else
						{
							alert("Both email id and passsword are incorrect");
							// alert(data);
						}
						// $("#form_login")[0].reset();
						});


					}
				});


				$("a#signup1").click(function(){

					if(validateSignupForm()){

						
						
						$.post("signup.php",$("form#form_signup").serializeArray(),function(data){
						data = data.trim();
						y=data.charAt(0);
						

						if(y==1)
						{
							alert("Registeration Successful")
							$("#login-button").hide();
							$("#signup-button").hide();
							$("#user-name").text("Logout, " + data.slice(1));
							$("#modal2").modal('close');
							universal_status = "true";
							setCookie("logged",data.slice(1),3);

							// $("#user").show();
						}
						else if(y==2)
						{
							alert("This email id already exists");
							// alert(data);
						}
						// else if(y==3)
						// {
						// 	alert("Email id is incorrect");
						// 	// alert(data);
						// }
						else
						{
							alert("Something went wrong!");
							alert(data);
						}
						// $("#form_login")[0].reset();
						});
					}
				});

				$("#contact-button").click(function(){

					if(validateContactForm()){

						$.post("feedback.php",$("form#contact-form").serializeArray(),function(data){
							// alert(data);
						});
						Materialize.toast("Your feedback has been submitted",4000);
						$("#contact-form")[0].reset();
					}
				});
		      	$(".add-to-cart").click(function(){

		      		if(checkCookie("logged")!=""){

		      			if(checkCookie("cart-count") == ""){
		      				// alert("cookie initialized");
		      				setCookie("cart-count",1,3);
			      		}
			      		else{
			      			setCookie("cart-count",parseInt(getCookie("cart-count"))+1,3);
			      		}
			      		item = getCookie("cart-count");
			      		$("#qty").text(item);
		      			$.ajax({
			      			type: 'POST',
			      			url: 'http://localhost:81/books/add_to_cart.php',
			      			data: {
			      				'uname': ($("#user-name").text()).slice(8),
			      				'pname': $(this).attr("data-name"),
			      			},
			      			success: function(msg){
			      				alert(msg);
			      			}
		      			});
		      			
		      			// alert($(this).attr("data-name"));





		      		}
		      		else{
		      			Materialize.toast("Please Login to continue",4000);
		      		}


		      		
		      	});
		      	$("#user-name").click(function(){
		      		deleteCookie("logged","del_cookie",1);
		      		deleteCookie("cart-count","del_cookie",1);
		      		$("#login-button").show();
					$("#signup-button").show();
					$("#user-name").hide();
					$("#qty").text("0");
		      	});

		      	$(".book-check-login").click(function(){
		      	 	if(checkCookie("logged")!=""){
		      	 		
		      	 		window.location.replace("http://localhost:81/books/bookpage_1.html");
		      	 	}else{
		      	 		Materialize.toast("Please Login to continue",4000);
		      	 	}
		      	 });

		      $("#to_cart").click(function(){
		      	
		      	window.location.href = ("http://localhost:81/books/cart.php?uname=")+getCookie('logged'); 
		      });
		      	

		    });

			function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function deleteCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+"Thu, 01 Jan 1970 00:00:00 UTC";
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}


			function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i < ca.length; i++) {
			    var c = ca[i];
			    while (c.charAt(0) == ' ') {
			        c = c.substring(1);
			    }
			    if (c.indexOf(name) == 0) {
			        return c.substring(name.length, c.length);
			    }
			}
			return "";
			}

			function checkCookie(n) {
			    var user = getCookie(n);
			    if (user != "") {
			        return user;
			    } else {
			    	return "";
			    }
			}

			function validateLoginForm(){
				if(1){
					//if validated
					return true;
				}
				else{
					//if not valideated
					return false;
				}
			}
			function validateSignupForm(){
				if(1){
					//if validated
					return true;
				}
				else{
					//if not valideated
					return false;
				}
			}
			function validateContactForm(){
				if(1){
					//if validated
					return true;
				}
				else{
					//if not valideated
					return false;
				}
			}

		//
 	    </script>
	</body>
</html>