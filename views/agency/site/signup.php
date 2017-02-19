<?php
/**
 * signup.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use p2made\helpers\FA;
use p2made\helpers\BSocial;

$this->title = 'Signup';
?>
<header>
	<div class="container">
		<div class="intro-text">
			<h1>
				<?= Html::encode($this->title) ?>
				<small>to use this awesome site</small>
			</h1>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="panel text-info text-left">
						<div class="panel-body">
							<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

								<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

								<?= $form->field($model, 'email') ?>

								<?= $form->field($model, 'password')->passwordInput() ?>

								<div class="form-group">
									<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
								</div>

							<?php ActiveForm::end(); ?>
						</div>
					</div>

					<p class="text-center">- OR -</p>

				</div>

				<div class="col-lg-3 col-lg-offset-3">
					<?= BSocial::b('github')->caption('Signup using @@@') ?>
					<?= BSocial::b('google')->caption('Signup using @@@') ?>
				</div>
				<div class="col-lg-3">
					<?= BSocial::b('twitter')->caption('Signup using @@@') ?>
					<?= BSocial::b('facebook')->caption('Signup using @@@') ?>
				</div>
			</div>
		</div>
	</div>
</header>
<?= $this->render('_footer.php') ?>
