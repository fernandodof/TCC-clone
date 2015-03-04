<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 15:03:04
         compiled from "C:\wamp\www\Restaurantes\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27067547d0c60963279-64820836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41c23a4326912e63fe16a58a121b5520db1ccc2' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\footer.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27067547d0c60963279-64820836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0c609d0982_88160911',
  'variables' => 
  array (
    'templateRoot' => 0,
    'footerBarMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0c609d0982_88160911')) {function content_547d0c609d0982_88160911($_smarty_tpl) {?><link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/footer.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-bottom navbar-static-bootom" role="navigation">
    <div class="container">
        <p class="navbar-text pull-left"><?php echo $_smarty_tpl->tpl_vars['footerBarMsg']->value;?>
</p>
        <a class="navbar-link pull-right navbar-text hidden-xs" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/areaRestrita">Area restrita</a>
        <a class="navbar-btn visible-xs pull-right navbar-text" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/areaRestrita"><span class="fa fa-lock"></span></a>
    </div>
</nav>
</body>
</html><?php }} ?>
