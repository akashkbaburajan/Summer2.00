


<?php
/*view file */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
?>
<?php 
	if(Yii::$app->session->hasFlash('success'))
	{
		echo Yii::$app->session->getFlash('success');
			}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model, 'area of interest')->textArea(['rows' => 6]) ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
