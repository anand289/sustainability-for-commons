
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="Subscription.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Subscription</title>
	</head>
	
	
	<body id="body">
	    
	               
	    
		
		<div id="container">

		<div id="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="About.html">How it works?</a></li>
				<li><a href="References.html">References</a></li>
				<li><a class="fa fa-bell" href="Subscription.html"></a></li>
			</ul>
		</div>

			
        
        <img id="header"  src="img/newsletter.png" class="fade" width= 100%  />
        
		<div id="content">

			<div id="aside">
				<ul>
					<li><a href="#">Card 3:Life Cycle Assesment</a></li>
					<li><a href="#">Card 2: Global Resource Scenario</a></li>
					<li><a href="Article_1.html">Card 1: What is sustainability and what can we do about it?</a></li>
				</ul>
			</div>

			<div id="article">
			 		<div id="card">
					
					 <?php
						$con = mysqli_connect("localhost","susta91n_anand","abcd123");
                    
                    
                        if(!$con){
                            echo 'NOT CONNECTED TO SERVER';
                        }
                        
                        if(!mysqli_select_db($con, "susta91n_abc")){
                            echo 'DATABASE NOT SELECTED';
                        }
                        
                        $email= $_POST [email];
                        
                        $sql = "INSERT INTO subs (Email) VALUES ('$email')" ;
                        
                        if(!mysqli_query($con,$sql))
                        {
                            echo ' NOT SUBMIT';
                        }
                        else{
                            echo 'Submitted';
                        }
                         ?>
	    
					
                        
					</div>
			</div>
		
		</div>

		<div id="footer">
			<p>Copyright @ 2018</p>
		</div>

	</div>
		
		
	</body>	
		
</html>