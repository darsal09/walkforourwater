<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 13:30:15
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1675955da90666c2780-70270798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c49c2a8c53944e73520c2664987d46834b1cb0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\contact.tpl',
      1 => 1442251813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675955da90666c2780-70270798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55da9066791806_02503679',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da9066791806_02503679')) {function content_55da9066791806_02503679($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"contactController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

	<h1>Contact Us</h1>
	<hr>
	<div class="row">
			<div class="col-md-8" id=contactInfo>
				<form method=post role=form id=contactInfoForm>
					<div class="panel panel-default">
						<div  class="panel-heading">
							<h3 class="panel-title"">Your Information</h3>
						</div>
						<div class="panel-body">
							<p>All the fields are required.</p>
										<div class=form-group>
											<div class=row>
												<div class="col-md-4 <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['name'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['name']){?>has-error<?php }?>" id=fg_name>
													<label>Name</label>
													<input type=text name=name class=form-control placeholder="enter name" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['name'];?>
">
													<span id=name_error></span>
												</div>
												<div class="col-md-4 <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['phone'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['phone']){?>has-error<?php }?>" id=fg_phone>
													<label>Phone</label>
													<input type=text name=phone class=form-control placeholder="enter phone number" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['phone'];?>
">
													<span id=phone_error></span>
												</div>				
												<div class="col-md-4 <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['email'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['email']){?>has-error<?php }?>" id=fg_email>
													<label>Email</label>
													<input type=text name=email class=form-control placeholder="enter email" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['email'];?>
">
													<span id=email_error></span>
												</div>
											</div>
										</div>
										<div class=form-group>
											<div class=row>
												<div class="col-md-12 <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['subject'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['subject']){?>has-error<?php }?>"  id=fg_subject>
													<label>Subject</label>
													<input type=text name=subject class=form-control placeholder="enter subject" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['subject'];?>
">
													<span id=subject_error></span>
												</div>
											</div>
										</div>
										<div class=form>
											<div class=row>
												<div class="col-md-12 <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['message'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['message']){?>has-error<?php }?>" id=fg_message>
													<label>Message:</label>
													<textarea name=message class="form-control input-medium" placeholder="write your questions or about the information you want us to provide"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['message'];?>
</textarea>
													<span id=message_error></span>
												</div>
											</div>
										</div>
						</div>
						<div class="panel-footer">
										<div class=form-group>
											<input type=submit name=add_registration class="btn btn-default btn-primary btn-lg" value="Send&raquo;">
										</div>
						</div>
					</div>
				</form>
				<div class="error" style="display:none;color:red;">
					<h1>Error Message</h1>
					<div id="error_message">
						<p>There are errors in your input information. Please fill out all the fields in red.</p>
					</div>
				</div>
				<p>&nbsp;</p>

			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div  class="panel-heading">
						<h3 class="panel-title"">Contact Information</h3>
					</div>
					<div class="panel-body">
						<p style="line-height:2">
							<i class="icon icon-envelope icon-lg"></i> info@walkforourwater.org<br/>
							<i class="icon icon-phone icon-lg"></i> (646) 450-6257<br/>
							<a href="https://twitter.com/@Walk4OurWater" target="_blank"><i class="icon icon-twitter icon-lg"></i>/@Walk4OurWater</a><br/>
							<a href="https://www.facebook.com/walkforourwater?ref=hl" target="_blank"><i class="fa fa-facebook fa-lg"></i>/WalkForOurWater	
						</p>
					</div>
				</div>
			</div>
	</div>
<script>
	var contactInfo={
					init:function(){
						this.el = $( '#contactInfo' );
						this.required = {
										'name':true,
										'email':true,
										'phone':false,
										'subject':true,
										'message':true
										};
						
						if( this.el.length == 0){
							console.log( 'element to define this page does not exist' );
							return 0;
						}
						
						this.events();
					},
					validate: function(){
						var flag = true;
						var elements = document.getElementById( 'requestInfoForm' ).elements;
												
						for( x in elements ){
							if( this.required[ elements[ x].name ] && elements[ x ].value == '' ){
								flag = false;
								$( '#fg_'+elements[ x ].name ).addClass( 'has-error' );
							}else{
								$( '#fg_'+elements[ x ].name ).removeClass( 'has-error' );
							}
						}

						return flag;
					},
					displayMessage: function( message ){
						var element = $( '#error_message' );
						
						element.show();
						element.html( '<p>&nbsp;</p>'+message );
						
					},
					events:function(){
						var that = this;
						
						$('#requestInfoForm' ).on( 'submit', function( e ){							
							e.preventDefault();
							
							if( !that.validate() ){
								e.preventDefault();	
								that.displayMessage( 'Please fill out all the field in red' );
								return 0;
							}
							
							that.submitForm();
						});
					},
					submitForm:function(){
						var that = this;
						
						$.post('/request-infos',
								$('#requestInfoForm' ).serialize(),
								 function( data ){
									console.log( data );
							})
							.fail( function( jqXHR, textStatus){
								console.log( textStatus );
							});
					}
					
	}
	$(document ).ready( function(){
		contactInfo.init();
	});
</script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea'});</script>
<?php }} ?>