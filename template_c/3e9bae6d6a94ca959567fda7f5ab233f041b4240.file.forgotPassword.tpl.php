<?php /* Smarty version Smarty-3.1.19, created on 2015-02-06 08:27:19
         compiled from "..\templates\forgotPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27191549b28d4957a26-04125785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9bae6d6a94ca959567fda7f5ab233f041b4240' => 
    array (
      0 => '..\\templates\\forgotPassword.tpl',
      1 => 1423139304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27191549b28d4957a26-04125785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549b28d495a065_17831732',
  'variables' => 
  array (
    'templateRoot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b28d495a065_17831732')) {function content_549b28d495a065_17831732($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/forgotPassword" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/forgotPassword.js"></script>
<div class="container col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Recuperar senha</h3>
        </div>
        <div class="panel-body" id="recoverPasswordPanelBody">
            <p class="text-info">Enviaremos um email para você com instruções para recuperar a sua senha.</p>

            <form id="forgotPasswordForm" method="POST">
                <div class="form-group">
                    <label class="control-label" for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Email cadastrado">
                </div>
                <input type="submit" value="Enviar" data-loading-text="Enviando..." id="enviar" name="formSubmit" class="btn btn-success pull-right">
            </form>

        </div>
    </div>
</div><?php }} ?>
