<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

// $this->pageTitle=Yii::app()->name . ' - Login';
// $this->breadcrumbs=array(
// 	'Login',
// );
?>
<ul class="breadcrumb">
  <li><a href="site/index">Home</a></li>
  <li class="active">Login</li>
</ul>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="row">
	<div class="col-lg-6">
		<form class="form-horizontal">
		 	 <fieldset>
		 	 <legend><h1>Login</h1></legend>
		 	 <p>Please fill out the following form with your login credentials:</p>
		 	 	<div class="alert alert-dismissible alert-warning">
		 	 		<p class="note">Fields with <span class="required">*</span> are required.</p>
		 	 	</div>
				
				<div class="form-group">
			      <?php echo $form->labelEx($model,'username', array('class' => 'col-lg-2 form-label')); ?>
				      <div class="col-lg-10">
				        <?php echo $form->textField($model,'username', array('class' => 'form-control')); ?>
						<?php echo $form->error($model,'username', array('class' => 'form-label')); ?>
				      </div>
			    </div>
			    <div class="form-group">
			      <?php echo $form->labelEx($model,'password', array('class' => 'col-lg-2 form-label')); ?>
			      <div class="col-lg-10">
			       		<?php echo $form->passwordField($model,'password', array('class' => 'form-control')); ?>
						<?php echo $form->error($model,'password', array('class' => 'form-label')); ?>
			        <div class="checkbox">
			          <label>
			            <?php echo $form->checkBox($model,'rememberMe'); ?>
			            <?php echo $form->label($model,'rememberMe'); ?>
						<?php echo $form->error($model,'rememberMe'); ?>
			          </label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
			      </div>
			    </div>
			</fieldset>
		</form>
	</div>
</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
