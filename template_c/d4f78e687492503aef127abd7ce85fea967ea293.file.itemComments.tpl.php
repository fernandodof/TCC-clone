<?php /* Smarty version Smarty-3.1.19, created on 2015-02-26 19:36:12
         compiled from "C:\wamp\www\Restaurantes\templates\itemComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4793548f0d378545e9-39374401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f78e687492503aef127abd7ce85fea967ea293' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\itemComments.tpl',
      1 => 1424917446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4793548f0d378545e9-39374401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548f0d378c1a76_64501112',
  'variables' => 
  array (
    'templateRoot' => 0,
    'restaurante' => 0,
    'produto' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f0d378c1a76_64501112')) {function content_548f0d378c1a76_64501112($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/comments.css" rel="stylesheet" type="text/css">

<div class="container">

    <div class="col-md-8 col-md-offset-2 col-sm-12">
        
        <div id="itemInfo">
            <h2><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
</h2>
            <h3>Comentários sobre: <small class="nameP"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
</small></h3>
        </div>
        
        <ul class="media-list comments">
            <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produto']->value->getComentarios(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                <li class="media">
                    <span class="fa fa-user fa-4x pull-left img-thumbnail userIcon"></span>
                    <div class="media-body">
                        <h5 class="media-heading pull-left"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->getCliente()->getLogin();?>
</h5>
                        <div class="comment-info pull-left">
                            <div class="btn btn-default btn-xs"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['comentario']->value->getDataHora()->format('d/m/Y');?>
</div>
                        </div>
                        <br class="clearfix">
                        <p class="well commentText"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->getTexto();?>
</p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

</div><?php }} ?>
