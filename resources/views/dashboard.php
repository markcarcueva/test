<!DOCTYPE html>
<html>
<head>
	<title>Submit Hub</title>
	<meta charset="utf-8">
	<title>Christian Canlubo Responsive Website</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../front-end-logo.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="front-end-logo.ico" type="image/x-icon" />
	   <link rel="stylesheet" href="<?php echo asset('css/style/animate.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('css/style/bootstrap.min.css');?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo asset('css/style/templatemo-style.css');?>">
    <script src="<?php echo asset('js/script/jquery.js');?>"></script>
    <script src="<?php echo asset('js/script/bootstrap.min.js');?>"></script>

  <script src="<?php echo asset('js/script/jquery.singlePageNav.min.js');?>"></script>
	<script src="<?php echo asset('js/script/typed.js');?>"></script>
	<script src="<?php echo asset('js/script/wow.min.js');?>"></script>
	<script src="<?php echo asset('js/script/custom.js');?>"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <style type="text/css">
.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    perspective: 1500px;
}


#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: rgba(0,0,0,0.5);
    color: #fff;
    transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
    transform-origin: bottom left;
}

#sidebar.active {
    margin-left: -250px;
    transform: rotateY(100deg);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: rgba(0,0,0,0.5);
}
#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: rgba(0,0,0,0.5);
}


a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

.jumbotron{
  width: 100%;
  text-align: center;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

#sidebarCollapse {
    width: 40px;
    height: 40px;
    background: #f5f5f5;
    cursor: pointer;
}

#sidebarCollapse span {
    width: 80%;
    height: 2px;
    margin: 0 auto;
    display: block;
    background: #555;
    transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
    transition-delay: 0.2s;
}

#sidebarCollapse span:first-of-type {
    transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
    opacity: 0;
}
#sidebarCollapse span:last-of-type {
    transform: rotate(-45deg) translate(1px, -1px);
}


#sidebarCollapse.active span {
    transform: none;
    opacity: 1;
    margin: 5px auto;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
        transform: rotateY(90deg);
    }
    #sidebar.active {
        margin-left: 0;
        transform: none;
    }
    #sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }
    #sidebarCollapse.active span {
        margin: 0 auto;
    }
    #sidebarCollapse.active span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }
    #sidebarCollapse.active span:nth-of-type(2) {
        opacity: 0;
    }
    #sidebarCollapse.active span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }
    </style>
    <script>
        function sbmt(){
            $("#frm").submit();
        }
    </script>
</head>
<body>
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-light fixed-top bg-light p-3">
  	<div class="navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">Chat</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">Blog & Labels</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Popular</a>
        </li>
      </ul>
    </div>
    </div>
    <div class="dropdown  ml-auto">
  		<button class="dropbtn btn btn-outline-info p-1">2 Credits</button>
  		<div class="dropdown-content text-center text-dark">
    		<p class="mt-3">Premium: 0</p>
    		<p>Standard: 2</p>
    		<a href="#"><u class="text-info">Get More</u></a>
  		</div>
	</div>
      	<ul class="navbar-nav ml-3">
      	<li class="nav-item">
          <a class="nav-link u" href="#"><u>Christian Lee</u></a>
        </li>
    </ul>
  </nav>
</header>


<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header mt-5 bg-muted">
                <h3 class="mt-5">SubmitHub</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#" class="text-white">Home 1</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Home 2</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Home 3</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>
             <div class="jumbotron jumbotron-block">
        <div class="container">
          <h1 class="display-4"><strong>Upload Book</strong></h1>
          <hr>
        <?php echo
   Form::open(array('id'=>'frm', 'url' => '/bookSubmit','enctype'=>'multipart/form-data'));

   ?>
 
    <!--<form action="upload.php" method="post" enctype="multipart/form-data">-->
    <label>Select cover photo:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
    <label>Title:         <input type="text" name="title"></label><br>
    <label>Description:   <textarea name="description"></textarea></label><br>
    <label>Genre:   <input type="text" name="genre"></label>
    <p><a class="btn btn-primary btn-lg" href="javascript:sbmt();" role="button">Submit a Book</a></p>
</form>
        </div>
      </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>