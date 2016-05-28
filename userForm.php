

<?php
/*view file */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
?>
<style>
.font{
	font-family: Sans-Ascender;
	color:GREY;
}
</style>
<h1 class='font'> STUDENT REGISTRATION FORM </h1>
<?php 
	if(Yii::$app->session->hasFlash('success'))
//	{
		echo Yii::$app->session->getFlash('success');
//			}
?>
<div class="row">
            <div class="col-lg-5">

<?php $form = ActiveForm::begin(); ?>
<br>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model,'phone'); ?>
<?= $form->field($model, 'areaofinterest')->textArea(['rows' => 6]) ?>
</div>
</div>
<?= Html::submitButton('Submit',['class'=>'btn btn-primary submit']); ?>
<?php ActiveForm::end(); ?>
