<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 14:06:24
         compiled from "..\templates\resetPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25415549c4d8e2221a7-04883769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9273307ac403b08d3ece732d16f686f99ad2909' => 
    array (
      0 => '..\\templates\\resetPassword.tpl',
      1 => 1422972961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25415549c4d8e2221a7-04883769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549c4d8e224889_16450736',
  'variables' => 
  array (
    'templateRoot' => 0,
    'codigo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549c4d8e224889_16450736')) {function content_549c4d8e224889_16450736($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/forgotPassword" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/resetPassword.js"></script>
<div class="container col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Redefinir senha</h3>
        </div>
        <div class="panel-body" id="resetPasswordPanelBody">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" id="codigo">
            <p class="text-info">Redefina a sua senha abaixo</p>

            <form id="resetPasswordForm" method="POST">
                <div class="form-group">
                    <label class="control-label" for="pass1">Nova senha:</label>
                    <input type="password" name="pass1" id="pass1" class="form-control" required placeholder="Nova senha">
                </div>
                <div class="form-group">
                    <label class="control-label" for="pass2">Confirme a senha:</label>
                    <input type="password" name="pass2" id="pass2" class="form-control" required placeholder="Confirme a senha">
                </div>
                <input type="submit" value="Redefinir" data-loading-text="Redefinindo..." id="redefinir" name="formSubmit" class="btn btn-success pull-right">
            </form>
        </div>
    </div>
</div><?php }} ?>
