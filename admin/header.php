<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="https://use.fontawesome.com/10a964325b.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
	
		$(document).ready(function(){
    $("#menu_icon").click(function(){
        $(".open_sidbar").toggleClass("small_sidebar");
        $('.remove_text').toggleClass('text_hide');
        $('#content_body').toggleClass('margin_left');
    });
});
	
	</script>
</head>

<body>


 <!--////////////////TOP NAVBAR FIXED NAVBAR////////////////-->
    <div class="main-container">
        <nav class="navbar navbar-fixed-top admin-navbar">
            <div class="container-fluid">
                <div class="navbar-header" style="display: inline-block;">
                    <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <a href="dashboard.php" class="admin-chat-logo"><img src="images/download.png" class="img-responsive" style="    width: 25%; margin-left: 50px; margin-top: -50px;"></a>
                </div>
            </div>
        </nav>

        <aside class="hit_sidebar open_sidbar sidebar-slide-push">
            <ul>
                <li><a href="#">
            <span class="nav-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
            <span class="remove_text">Admin Panel</span></a></li>
                



			   <li><a href="add_products.php">
            <span class="nav-icon"><i class="fa fa-book" aria-hidden="true"></i></span>
            <span class="remove_text">Add Items</span></a></li>
                <li><a href="manage_products.php">
            <span class="nav-icon"><i class="fa fa-book" aria-hidden="true"></i></span>
            <span class="remove_text"> Manage Items</span></a></li>
              
                <li><a href="logout.php">
            <span class="nav-icon"><i class="fa fa-power-off" aria-hidden="true"></i></span>
            <span class="remove_text">Logout</span> </a></li>
            </ul>
        </aside>
     



    </div>
