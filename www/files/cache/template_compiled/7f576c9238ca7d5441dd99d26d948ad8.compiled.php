<?php if(!defined("__XE__"))exit;?>
<?php echo Context::addHtmlHeader('<meta name="viewport" content="width=1240">') ?>
<style>
.xedition-error {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	padding: 80px 0 0;
	background-color:#EFEFEF;
	font-family: "Open Sans", sans-serif;
	text-align: center;
}
.xedition-error h1 {
	margin: 0 0 19px;
	font-size: 40px;
	font-weight: normal;
	color: #E02B2B;
	line-height: 40px;
}
.xedition-error p {
	margin: 0 0 57px;
	font-size: 16px;
	color:#444;
	line-height: 23px;
}
</style>
<section class="xedition-error">
	<h1>404</h1>
	<p>Oops, Sorry.<br>Page is not found!</p>
	<img src="/modules/message/skins/xedition/img/error.png" width="340" height="400" />
</section>
