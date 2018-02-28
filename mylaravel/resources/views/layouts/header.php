
<!DOCTYPE HTML>
<html>
<head>
<title>Mych@t</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="web/js/jquery-1.11.1.min.js"></script>
    <script src="web/js/bootstrap.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Data-tables -->
    <script src="web/jquery.min.js"></script>
    <script src="web/DataTables/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="web/DataTables/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function(){
            $("#example").dataTable();
        });
    </script>

</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
                            <?php
                           // $r=$db->query("SELECT fname FROM `registration` WHERE id=$_SESSION[usedId]");
                           // $d=$r->fetch_array();

                            ?>
							<a class="navbar-brand" href="cpost.php"><span>My</span> <?php //echo $d[0]; ?></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a class="active" href="/home" class="effect1 active">Home </a></li>

                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="addpost.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Post <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="addpost.php">Add Post</a></li>
                                    <li><a href="show_post.php">Show Post</a></li>

                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="addpost.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Setting <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>

                                </ul>
                            </li>


						</ul>
					</div><!-- /.navbar-collapse -->

				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
