<?php ini_set('date.timezone','Asia/Shanghai');/* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh-CN" /> 

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

<!-- page -->

</body>
</html>
