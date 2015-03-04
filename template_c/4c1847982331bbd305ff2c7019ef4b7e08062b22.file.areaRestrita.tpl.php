<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 18:20:10
         compiled from "C:\wamp\www\Restaurantes\templates\areaRestrita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11992547d0ce7ca8f21-46630935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c1847982331bbd305ff2c7019ef4b7e08062b22' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\areaRestrita.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11992547d0ce7ca8f21-46630935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0ce7d15f76_11586301',
  'variables' => 
  array (
    'templateRoot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0ce7d15f76_11586301')) {function content_547d0ce7d15f76_11586301($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Área Restrita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8">
        <link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/styles.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/areaRestrita.css" rel="stylesheet"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/animate.css-master/animate.min.css" rel="stylesheet" type="text/css">
        
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/areaRestrita.js"></script>
        
    </head>

    <div class="container">
        <input type="hidden" id="templateRoot" value="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">ÁREA RESTRITA</h1>
                <div class="account-wall">
                    <img class="profile-img img-rounded" src="../images/icons/tray.png"
                         alt="Imagem Usuário" title="Imagem Usuário">
                    <form name="loginForm" class="form-signin" action="javascript:void(0)" method="POST">
                        <input type="text" name="funcLogin" id="funcLogin" class="form-control inputLogin" placeholder="Login" required autofocus>
                        <input type="password" name="funcSenha" id="funcSenha" class="form-control inputLogin" placeholder="Senha" required>
                        <button class="btn btn-lg btn-primary btn-block" id="btnLogin" data-loading-text="Entrar..." onclick="validateLogin();" type="submit" name="formSubmit" value="Login">Entrar</button>
                    </form>
                    <small id="loginErrorMsg" class="help-block">Login ou senha inválidos</small>
                </div>
                <a href="../pages/index.php" class="text-center index-page">Página Inicial</a>
            </div>
        </div>
    </div>
</html><?php }} ?>
