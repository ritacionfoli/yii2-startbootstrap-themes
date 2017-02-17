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

$this->title = 'P2 Creative';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/creative'
);
?>

<?= $this->render('_header.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_about.php') ?>
<?= $this->render('_services.php') ?>
<?= $this->render('_portfolio.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_aside.php') ?>
<?= $this->render('_contact.php') ?>
<?= $this->render('_footer.php') ?>
