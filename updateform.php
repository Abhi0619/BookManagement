<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="css/all.css" rel="stylesheet">
     <link href="css/all.min.css" rel="stylesheet">
     <link href="css/fontawesome.css" rel="stylesheet">
     <link href="css/fontawesome.min.css" rel="stylesheet">
     <link href="css/index3.css" rel="stylesheet" >
     <title>updateform</title>
  </head> 
<body>
   <header>
      <div class="p-1" id="topHeader">
        <div class="container">
          <div class="row">
            <div class="col-12 text-right">
              <a class="p-1" href="tel:+918200852623"> <i class="fas fa-phone"></i> 91 8200852623</a>
              <a class="p-1" href="mailto:abhishekmishra41719@gmai.com"> <i class="fas fa-envelope"></i> abhishekmishra41719@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div id="bottomHeader">
        <div class="container-fluid">
          <nav class="navbar navbar-dark  navbar-expand-md" style="background-color: #004d80;">
           
           <a class="navbar-brand" href="#" >
              <img class="img-fluid" src="image/unnamed1.png" width="100px" height="40px">
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
             <span class="navbar-toggler-icon"></span>
           </button>
        
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">   
                <li class="nav-item">
                  <a class="nav-link" href="home.html">Home</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link " href="http://localhost/bookmanagement/forminsert.php">Insert Book</a>
                </li> 
               
                <li class="nav-item">
                  <a class="nav-link " href="http://localhost/bookmanagement/view.php">View Book Records</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/bookmanagement/deleteform.php">Delete Book Records</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="http://localhost/bookmanagement/updateform.php">Update Book Records</a>
                </li>
              </ul>
           </div>
          </nav>
        </div>
      </div>
    </header>
	<section class="breadcrumbs-section">
          <div class="container pl-3 pr-3 p-sm-3">
            <div class="row">
              <div class="col-12">
                <h2>Update Records</h2>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Home.html">Home</a></li>
                  <li class="breadcrumb-item active">Update Records</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
   <center>
<h1>book record mangement</h1>
<form action="updation.php" method="post">
<table border="2px" bgcolor="pink" width="400px">
<tr>
    <th>book id</th>
	<th>title</th>
	<th>price</th>
	<th>author</th>
	</tr>
	<?php
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
		?>
		<tr>
		<td><?php echo $row['bookid']; ?>
		<input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid']; ?>"/></td>
		<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title']; ?>"/></td>
		<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price']; ?>"/></td>
		<td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author']; ?>"/></td>
		</tr>
		<?php
	}
	?>	

	</table>
	<input type="submit" value="update"/>
	</form>
	<footer class="full-footer">
        <div class="container top-footer p-md-3 p-1">
          <div class="row">
            <div class="col-md-3 pl-4 pr-4">
              <img class="img-fluid" src="image/unnamed1.png" width="100px" height="50px" alt="">
              <p>
                Abhishek mishra is a Tech-Educational Channel / platform / Blog / Medium for anyone and everyone... <a href="">Read more....</a>
              </p>
              <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-facebook-square"></i></a>
              <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-google-plus-square"></i></a>
              <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
              <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-instagram"></i></a>
            </div>
  
            <div class="col-md-3 pl-4 pr-4">
              <h3>Important Links</h3>
              <a href="#">privacy Policy</a><br>
              <a href="#">Youtube Channel Link</a><br>
              <a href="#">Blog Articles</a><br>
              <a href="#">Social Media</a><br>
            </div>
  
            <div class="col-md-3 pl-4 pr-4">
              <h3>Out Services</h3>
              <a href="Web Designing.html">Web Designing</a><br>
              <a href="Web Development.html">Web Development</a><br>
              <a href="SEO Services.html">SEO Services</a><br>
              <a href="Software Development.html">Software Development</a><br>
              <a href="Mobile App Developmet.html">Mobile App Development</a><br>
              <a href="Graphic Designing.html">Graphic Designing</a><br>
            </div>
  
            <div class="col-md-3 pl-4 pr-4">
              <h3>Contact Us</h3>
              <a href="tel:+918200852623"> <i class="fas fa-phone"></i> 91 8200852623</a><br>
              <a href="mailto:abhishekmishra41719@gmai.com"> <i class="fas fa-envelope"></i>abhishekmishra41719@gmail.com</a><br>
              <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.16480707086!2d72.29884630289618!3d23.01999557816493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1585827773602!5m2!1sen!2sin" frameborder="0"></iframe>
                </div>
            </div>
            
          </div>
  
        </div>
  
        <div class="container-fluid bottom-footer pt-2">
          <div class="row">
            <div class="col-12 text-center">
              <p>Copyrights @ 2020 - All right reserved</p>
            </div>
          </div>
        </div>
      </footer>
	</body>
	</html>

