<?php
  // Set the 500 status code
  header('HTTP/1.0 500 Internal Server Error');

  require_once 'include/config.php';
  require_once PRESENTATION_DIR . '/link.class.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>
      the Gym Park Application Error (500)
    </title>
    <link href="<?php echo Link::Build('styles/thegympark.css'); ?>"
     type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div id="header">
		<div>
			<div id="logo">
				<a href="<?php echo Link::Build(''); ?>">
					<img src="<?php echo Link::Build('images/gp_symbol.png'); ?>" alt="tshirtshop logo" />
				</a>
			</div>
		</div>
	</div>
	<div id="bodies">
		<p>&nbsp;</p>
          <h1>
            The Gym Park is experiencing technical difficulties.
          </h1>
          <p>
            Please
            <a href="<?php echo Link::Build(''); ?>">visit us</a> soon,
            or <a href="<?php echo ADMIN_ERROR_MAIL; ?>">contact us</a>.
          </p>
          <p>Thank you!</p>
          <p>The Gym Park team.</p>
	</div>
  </body>
</html>
