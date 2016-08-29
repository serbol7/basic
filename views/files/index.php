<?php
use yii\widgets\ActiveForm;
?>
<h1>Загрузить файлы</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'xlsFiles[]')->fileInput(['multiple' => true, 'accept' => 'excel/*']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>
