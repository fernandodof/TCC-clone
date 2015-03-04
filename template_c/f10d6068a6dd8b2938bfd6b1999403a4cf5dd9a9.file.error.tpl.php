<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 15:02:58
         compiled from "C:\wamp\www\Restaurantes\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8130547d1547762509-36273240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10d6068a6dd8b2938bfd6b1999403a4cf5dd9a9' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\error.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8130547d1547762509-36273240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d1547813313_87924567',
  'variables' => 
  array (
    'templateRoot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d1547813313_87924567')) {function content_547d1547813313_87924567($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/error.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/animate.css-master/animate.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

</script>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>
                    404 Página não encontrada
                </h2>
                <div class="error-details">
                    Desculpe, a página requisitada não foi encontrada
                </div>
                <div class="error-actions">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/index" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Página inicial </a>
                </div>
            </div>
        </div>
    </div>
</div>
</html>                        

<?php }} ?>
