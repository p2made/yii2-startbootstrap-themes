<?php
/**
 * error.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use p2made\helpers\FA;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>
<div class="container">

	<div class="row">
		<div class="col-sm-12">
			<h2><?= Html::encode($this->title) ?></h2>

			<div class="jumbotron">
				<div class="alert alert-danger">
					<?= nl2br(Html::encode($message)) ?>
				</div>
				<h1 class="text-center danger">
					<?= FA::i('ban')->size(FA::SIZE_5X) ?><br>
					Nothing to See Here
				</h1>
			</div>
		</div>
	</div>

	<hr>

	<?= $this->render('_footer.php') ?>
</div>
