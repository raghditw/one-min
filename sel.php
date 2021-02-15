<!doctype html>

<head>
<meate charset="utf=8">
<title> selete page </title>

<style type="text/css"> header { 
			background-color: #6c5b6b; 
           text-align: center;
         }

  footer {
			background-color: #6c5b6b;
		   color: white;
         }
		 
  a        {
			text-decoration:none;
	      color:gray;
	     }
  p      { 
		border-radius:25px;
		border:3px solid #ffbf00;
		width:300px;
		text-align:center;
		margin-left:40%;
		margin-right:50%;
		margin-bottom:0.2%;
		padding:10px;
		background-color:LemonChiffon;
		font-size:30px;
         }	
		 
body {
    margin: 0;
    width: 100vw;
    height: 100vh;
    background-color: #6c5b6b;
    position :absolute;
}
 
 .box1 {
		background-color :#f8b195;
		height: 35px;
		}
		
		
.box1 h2 a { 
             float: left;
             display: block;
             text-align: center;
             padding: 2px 16px;
             text-decoration: none;
             font-size: 17px;
	}

	
 
	input[type=submit], input[type=reset], input[type=button] {
     background-color:#f67280;
     border: none;
     color:white;
     padding: 16px 32px;
     text-decoration: none;
	 margin: auto;
     border-radius:25px;
     color:gray;
	 text-align:center;
	

}

h6 { 
	text-align:center;
	}


#timer {
		width: 100%;
		height: 30px;
		position: relative;
		background-color: #ddd;
}

#myBar {
		background-color: #355c7d;
		width: 10px;
		height: 30px;
		position: absolute;
}

		 
  h1     { 
	color:#f8b195;
	font-size:100px;
	text-align: center;
         }
 
  .dropbtn {
			background-color: #f8b195;
			color: white;
			padding: 0px 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
			}		 
 
 .dropdown {
			position: relative;
			display: inline-block;
			float : left;

			}

  .dropdown-content {
				display: none;
				position: absolute;
				background-color: #f8b195;
			 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
				width : 112px;
				font-size: 16px;
				
}

  .dropdown-content a {
				color :#c06c84;
				padding: 12px 16px;
				text-decoration: none;
				display: block;

					}

  .dropdown-content a:hover {
					color: #ddd ;
				
				

				
				}

  .dropdown:hover .dropdown-content  {
				display: block;
				
				
				}

  .dropdown:hover .dropbtn {
			
				}
		 

</style>
</head>
<body>
<HEADER>
		<h2><img src="Logo22.png" width ="210" height="220" > </h2> </HEADER>
		<section class = "box1">
      <h2>
	  
	  	 <div class="dropdown">
			<button class="dropbtn"><img src= "arrow.png" width ="30" height=" 30" ></button>
				<div class="dropdown-content">
					<a href = "login.html">login     </a><br>
					<a href = "register2.html">register  </a><br>
					<a href = "about us.html">about us  </a><br>
					<a href = "contact.html">contact   </a><br>
					<a href = "draw.html">pictures  </a><br>
					<a href = "color.html">game color</a><br>
					<a href = "puzzels.html">questions </a>
				</div>
		  </div>
		  
		  
		   <a href = "search.html"><img src= "searchicon.png" width ="30" height=" 30" > </a>
           <a href = "choose your game.html"><img src= "game3.png" width ="35" height=" 33" ></a>  
		   <a href = "index.html"><img src= "HOMEICON.png" width ="30" height=" 30" ></a>
		  



      </h2>
  </section>
</section>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneMin";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname) or die(mysqli_error());

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT fname , lname FROM users WHERE    fname = '$_POST[fname]' and password = '$_POST[pass]'  ";

if ($result = mysqli_query($conn,$sql)) {
  
    print("<h1> Welcome back ");
  for ($x = 0 ; $row = mysqli_fetch_row($result) ; ++$x){
   
	foreach($row as $key => $value)
	print("  $value  ");
	
	
	 
  }
  print("</h1>");
  

} else {
  echo "Error: ". mysqli_error($sql);
}

mysqli_close($conn);
?>

<FOOTER><h2><img src="footer.png"  width ="1490"> </h2></FOOTER>
</body>
</html>