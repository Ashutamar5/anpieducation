<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!--------nav bar starts---------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Apni Education</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cources.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
         
      </ul>
    </div>
  </div>
</nav>
<!--------nav bar end---------->

<div><h1 class="text-center pt-4">Join us today</h1></div>
<div class="w-50 m-auto">

<form action="userinfo.php " method="POST">
    
    <div class="form-group">
       <label>Your First</label>
        <input type="text" name="Name" autocomplele="off" class="form-control">

    </div>

    <div class="form-group">
       <label>Your last</label>
        <input type="text" name="Name" autocomplele="off" class="form-control">

    </div>

    <div class="form-group">
       <label>Your Phone</label>
        <input type="text" name="Name" autocomplele="off" class="form-control">

    </div>

    <div class="form-group">
       <label>Course Name</label>
        <input type="text" name="Name" autocomplele="off" class="form-control">

    </div>

    

    <div class="form-group">
       <label> Your Email </label>
        <input type="text" name="Email" autocomplele="off" class="form-control">

    </div>

    

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>





<footer class="pt-4">

<p class="p-3 bg-dark  text-white text-center">@AshuTamar</p>



</footer>
<!--------section end------------->
<!--------section end------------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>