<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2made\helpers\FA;

$this->title = 'P2 Landing Page';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/landing-page'
);
?>
<div>

	<!-- Header -->
	<a name="about"></a>
	<div class="intro-header">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="intro-message">
						<h1><?= Html::encode($this->title) ?></h1>
						<h3>A Template by Start Bootstrap &amp; Pedro fp</h3>
						<hr class="intro-divider">
						<ul class="list-inline intro-social-buttons">
							<li>
								<a href="https://#" class="btn btn-default btn-lg">
									<?= FA::i('twitter') ?>
									<span class="network-name">Twitter</span>
								</a>
							</li>
							<li>
								<a href="https://#" class="btn btn-default btn-lg">
									<?= FA::i('github') ?>
									<span class="network-name">Github</span>
								</a>
							</li>
							<li>
								<a href="https://#" class="btn btn-default btn-lg">
									<?= FA::i('linkedin') ?>
									<span class="network-name">Linkedin</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container -->

	</div>
	<!-- /.intro-header -->

	<!-- Page Content -->

	<a  name="services"></a>
	<div class="content-section-a">

		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-sm-6">
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
					<h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
					<p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
				</div>
				<div class="col-lg-5 col-lg-offset-2 col-sm-6">
					<img src="<?= $assetDir ?>/img/ipad.png" alt="" class="img-responsive">
				</div>
			</div>

		</div>
		<!-- /.container -->

	</div>

	<div class="content-section-b">

		<div class="container">

			<div class="row">
				<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
					<h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
					<p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
				</div>
				<div class="col-lg-5 col-sm-pull-6  col-sm-6">
					<img src="<?= $assetDir ?>/img/dog.png" alt="" class="img-responsive">
				</div>
			</div>

		</div>
		<!-- /.container -->

	</div>

	<div class="content-section-a">

		<div class="container">

			<div class="row">
				<div class="col-lg-5 col-sm-6">
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
					<h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
					<p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
				</div>
				<div class="col-lg-5 col-lg-offset-2 col-sm-6">
					<img src="<?= $assetDir ?>/img/phones.png" alt="" class="img-responsive">
				</div>
			</div>

		</div>
		<!-- /.container -->

	</div>

	<a  name="contact"></a>
	<div class="banner">

		<div class="container">

			<div class="row">
				<div class="col-lg-6">
					<h2>Connect to <?= Html::encode($this->title) ?>:</h2>
				</div>
				<div class="col-lg-6">
					<ul class="list-inline banner-social-buttons">
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('twitter') ?> <span class="network-name">Twitter</span>
							</a>
						</li>
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('github') ?> <span class="network-name">Github</span>
							</a>
						</li>
						<li>
							<a href="https://#" class="btn btn-default btn-lg">
								<?= FA::i('linkedin') ?> <span class="network-name">Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
		<!-- /.container -->

	</div>
	<!-- /.banner -->

	<?= $this->render('_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>