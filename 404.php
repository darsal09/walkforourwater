<?php
  // Set the 404 status code
  header('HTTP/1.0 404 Not Found');

  require_once 'include/config.php';
  require_once PRESENTATION_DIR . '/link.class.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>
     The new Poject Not Found (404)
    </title>
    <link href="<?php echo Link::Build('styles/thegympark.css'); ?>"
     type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div id="header">
        <div>
			<div id=logo>
				<a href="<?php echo Link::Build(''); ?>">
					<img src="<?php echo Link::Build('images/gp_symbol.png'); ?>"
					alt="the gym park logo" />
				</a>
			</div>
		</div>
    </div>
        <div id="bodies">
			<p>&nbsp;</p>
          <h1>
            The page that you have requested doesn't exist on The new Project.
          </h1>
		  <p>&nbsp;</p>
          <p>
            Please visit the
            <a href="<?php echo Link::Build(''); ?>">The new Project</a>
            or <a href="<?php echo ADMIN_ERROR_MAIL; ?>">email us</a>
            if you need further assistance.
          </p>
          <p>Thank you!</p>
          <p>The Gym Park team.</p>
        </div>
  </body>
</html>