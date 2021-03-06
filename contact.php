<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.E.T.E.C</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>C.E.</span>T.E.C</h1></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Accueil</a></li>
								<li role="presentation"><a href="about.html">A Propos</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>
								<li role="presentation"><a href="contact.html" class="active">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<div id="breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<li><a href="index.html">Accueil</a></li>
				<li>Contact</li>
			</div>
		</div>
	</div>

	<div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div>

	<section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Laissez Nous Un Message</h2>
            </div>

            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <?php
    $action=$_REQUEST['action'];
    if ($action=="")    /* display the contact form */
        {
        ?>
        <!--<form  action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit">
        Your name:<br>
        <input name="name" type="text" value="" size="30"/><br>
        Your email:<br>
        <input name="email" type="text" value="" size="30"/><br>
        Your message:<br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <input type="submit" value="Send email"/>
      </form>-->
        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="" enctype="multipart/form-data">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Nom *</label>
                    <input type="text" name="name" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control" required="required">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Sujet *</label>
                    <input type="text" name="sujet" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Message *</label>
                    <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Envoyer</button>
                </div>
            </div>
        </form>
        <?php
        }
    else                /* send the submitted data */
        {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        $sujet=$_REQUEST['sujet'];
        if (($name=="")||($email=="")||($message==""))
            {
            echo "Tous les Champs Sont Obligatoires <a href=\"\">the form</a> again.";
            }
        else{
            $from="From: $name<$email>\r\nReturn-path: $email";
            mail("fabioued@yahoo.fr", $sujet, $message, $from);
            echo "Message Envoye!!!";
            }
        }
    ?>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy;2016 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">fabioued</a> Tous Droits Reserves.
					</div>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>

  </body>
</html>
