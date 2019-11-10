<?php
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
    </head>
    <body>
	<?php if($_SERVER['HTTP_X_FORWARDED_FOR'] != "208.94.240.252"){
		echo '<form id="login-form" class="login-form" name="form1" method="post" action="../index.php">';
	} else {
		echo '<form id="login-form" class="login-form" name="form1" method="post" action="index.php">';
	}?>
	    	<input type="hidden" name="is_login" value="1">
	        <div class="h1">Admin panel</div>
	        <div id="form-content">
	            <div class="group">
	                <label for="email">Login</label>
	                <div><input id="email" name="email" class="form-control required" type="text" placeholder="Email"></div>
	            </div>
	           <div class="group">
	                <label for="name">Password</label>
	                <div><input id="password" name="password" class="form-control required" type="password" placeholder="Password"></div>
	            </div>
	            <?php if($error) { ?>
	                <em>
						<label class="err" for="password" generated="true" style="display: block;"><?php echo $error ?></label>
					</em>
				<?php } ?>
	            <div class="group submit">
	                <label class="empty"></label>
	                <div><input name="submit" type="submit" value="Submit"/>
					<a href="../index.php"><input style="    border: none;    background: #65CA60;    color: white;    font-family: 'Roboto', sans-serif;    padding: 5px 20px;    text-transform: uppercase;    font-weight: 500;    border-radius: 1px;    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);    -webkit-transition: background ease-in-out .15s;    transition: background ease-in-out .15s;cursor: pointer;
" type="button" value="On Main"/></a></div>
	            </div>
	        </div>
			<?php if ($_SERVER['HTTP_X_FORWARDED_FOR'] != "208.94.240.252"){
				echo "<p style='text-align:center;'>ERROR: Access from other countries is denied.</p>";
			} else {
				echo "<p style='text-align:center;'>flag{PentagonSafetysoBad}</p>";
			}
			?>
			
	        <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
	    </form>   
    </body>
</html>
