<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Student;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    

    <?=   $form->field($model, 'institute')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Student::find()->all(),'institute','institute'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a insitute ...'],
        'pluginOptions' => [
            'allowClear' => true
            ],
         ]);
         ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'area_of_interest')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file' )->fileinput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
