<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-cyan.css" type="text/css" />
<?php if (frmd_message()): ?>
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-metro-cyan" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post" autocomplete="off"><div class="title"><h2>Registration form</h2></div>
	<div class="element-input" ><label class="title">Username:<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email" ><label class="title">Email:<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-password" ><label class="title">Password:<span class="required">*</span></label><input class="large" type="password" name="password" value="" required="required"/></div>
	<div class="element-password" ><label class="title">Confirm password:<span class="required">*</span></label><input class="large" type="password" name="password1" value="" required="required"/></div>
	<div class="element-name" ><label class="title">Name:</label><span class="nameFirst"><input  type="text" size="8" name="name[first]" /><label class="subtitle">First</label></span><span class="nameLast"><input type="text" size="14" name="name[last]" /><label class="subtitle">Last</label></span></div>
	<div class="element-radio" ><label class="title">Gender:</label>		<div class="column column2"><input type="radio" name="radio" value="Male" /><span>Male</span><br/></div><span class="clearfix"></span>
		<div class="column column2"><input type="radio" name="radio" value="Female" /><span>Female</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-date" ><label class="title">Birthday:</label><input class="large" placeholder="yyyy-mm-dd" type="date" name="date" /></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-cyan.js"></script>
<div id="formoid-info" style="display:none;">Made with <a href="http://formoid.com/">Free Formoid</a> form generator</div>
<p class="frmd"><a href="http://formoid.com/">Css Form Styling</a>Formoid.com 2.0</p>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>