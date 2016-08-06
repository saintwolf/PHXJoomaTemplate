<?php defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$sitename = $app->getCfg('sitename');
$itemid   = $app->input->getCmd('Itemid', '');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
<?php
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');
// Add Stylesheets
JHtmlBootstrap::loadCss();
// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);
// Adjusting content width
if ($this->countModules('left') && $this->countModules('right'))
{
	$span = "span6";
}
elseif ($this->countModules('left') && !$this->countModules('right'))
{
	$span = "span9";
}
elseif (!$this->countModules('left') && $this->countModules('right'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}
?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css' />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">[PHX] Phoenix Battalion</a>
				<div class="nav-collapse collapse">
					<jdoc:include type="modules" name="navbar" style="none" />
				</div><!-- nav-collapse -->
			</div><!-- container -->
		</div><!-- navbar inner -->
	</div><!-- navbar -->

	<div id="wrapper" class="container">

		<div class="headerimage">
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/phxbanner.jpg" alt="Phoenix Battalion" />
		</div>

		<!-- Example row of columns -->
		<div class="row">

			<div class="span3">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
			<div id="content" class="<?=$span ?>">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
			<div class="span3">
				<jdoc:include type="modules" name="right" style="xhtml" />
			</div>

		</div><!-- row -->

		<hr>

		<footer><p>© 2016 Glorious Leader</p></footer>

	</div> <!-- /container -->

</body>
</html>
