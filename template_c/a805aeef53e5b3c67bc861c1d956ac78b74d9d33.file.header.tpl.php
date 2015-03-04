<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 15:02:58
         compiled from "C:\wamp\www\Restaurantes\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4021547d0c5e014955-65530929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a805aeef53e5b3c67bc861c1d956ac78b74d9d33' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\header.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4021547d0c5e014955-65530929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0c5e3dedb4_99685691',
  'variables' => 
  array (
    'title' => 0,
    'templateRoot' => 0,
    'siteName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0c5e3dedb4_99685691')) {function content_547d0c5e3dedb4_99685691($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/header.css" rel="stylesheet">
        <link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/styles.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/alertify.js-0.3.11/themes/alertify.core.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/alertify.js-0.3.11/themes/alertify.bootstraModified.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/dist/css/bootstrapValidator.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/dist/css/bootstrapValidator.min.css" rel="stylesheet">


        <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
        <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/favico.png">

        <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/favico.png">

        
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/locationInfo.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/jquery.dim-background.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/alertify.js-0.3.11/lib/alertify.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/dist/js/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/src/js/language/pt_BR.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/header.js" type="text/javascript"></script>
        
    </head>
    <body>
        <header>
            
            <nav class="navbar navbar-default navbar-custom navbar-static-top" id="nav">
                <div class="container">
                    <input type="hidden" id="templateRoot" value="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
">
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target = ".custonNavHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/index"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a>
                    </div>
                    <div class="collapse navbar-collapse custonNavHeaderCollapse">
                         
                        <ul class="nav navbar-nav navbar-right" id="bar">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/index">Home</a></li>
                                <?php if (!isset($_SESSION['id'])) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/subscribe">Cadastro</a></li>
                                <li class="dropdown" id="menuLogin">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login <b class="caret"></b></a>
                                    <div class="dropdown-menu">
                                        <form class="form-horizontal"  nanme="loginForm" id="loginForm" method="POST" action="javascript:void(0)">
                                            <div class="form-group loginFormGroup">
                                                <div class="col-lg-12">
                                                    <input type="text" name="emailLogin" id="emailLogin" class="form-control" placeholder="Email ou login" required> 
                                                </div>
                                                <small id="loginErrorMsg" class="helpTextLogin help-block">Email ou senha inválidos</small>
                                            </div>
                                            <div class="form-group loginFormGroup">
                                                <div class="col-lg-12">
                                                    <input name="senhaLogin" id="senhaLogin" class="form-control" type="password" placeholder="Senha" required>
                                                </div>
                                                <small id="loginErrorMsg" class="helpTextLogin help-block">Email ou senha inválidos</small>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/forgotPassword" id="forgortPassword">Esqueci a senha</a>
                                            </div>
                                            <input type="hidden" name="formSubmit" value="Login">
                                            <button type="submit" data-loading-text="Login..." onclick="validateLogin();" id="btnLogin" class="btn btn-info pull-right">Login</button>
                                        </form>
                                    </div>
                                </li>
                            <?php }?>
                            
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/about">Sobre</a></li>
                            <li><a href="#contact" data-toggle="modal">Contato</a></li>
                                <?php if (isset($_SESSION['id'])) {?>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-fw fa-user">
                                </span> Minha Conta <span class="caret"></span></a>

                                    <ul class="dropdown-menu" id="dropdownBar" role="menu">
                                        <?php ob_start();?><?php echo $_SESSION['tipo']=='funcionario';?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/funcionarioPage">Minha Conta</a></li>
                                            <?php } else { ?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/clientePage">Minha Conta</a></li>
                                            <?php }?>
                                        <li class="divider"></li>
                                        <li><form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/logout">
                                                <button type="submit" name="formSubmit" value="Logout" class="btn btn-danger pull-right">Sair 
                                                    <i class="glyphicon glyphicon-log-out logoutIcon"></i></button>
                                            </form></li>
                                    </ul>
                                </li>
                                <li id="liGotoCart">
                                    <?php if (isset($_SESSION['pedido'])) {?>

                                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/confirmOrder" id="goToCart">
                                            <button class="btn" type="submit"><img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/cartIcon2.png" title="Pedido" alt="Pedido">
                                                <span class="badge" id="badgePedido"><?php echo count($_SESSION['pedido']->getItensPedido());?>
</span></button>
                                            <input type="hidden" name="idRestaurantePedido" id="idRestaurantePedido" 
                                                   value="<?php echo $_SESSION['idRestauranteDoPedidoAtual'];?>
">
                                        </form>

                                    <?php }?>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal" id="contact" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-horizontal" id="contactForm" method="POST" action="javascript:void(0)">
                            <div class="modal-header">
                                <h4>Fale conosco</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="nameContact">Nome:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="nameContact" id="nameContact" placeholder="Nome completo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="emailContact">Email: </label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" name="emailContact" id="emailContact" placeholder="você@exemplo.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="messageContact">Mensagem:</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="messageContact" id="messageContact" rows="8" placeholder="Insira a sua mensagem aqui" required></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal">Cancelar</a>
                                <button class="btn btn-primary" type="submit" id="sendEmailContact" data-loading-text="Enviando...">Enviar <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <?php }} ?>
