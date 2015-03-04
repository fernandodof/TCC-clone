<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 20:31:32
         compiled from "C:\wamp\www\Restaurantes\templates\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20136547e37d82c31b1-04906185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779642c1e7fa0eb6a80579f2999d0b8829133ac6' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\comments.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20136547e37d82c31b1-04906185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547e37d85097e3_36320999',
  'variables' => 
  array (
    'templateRoot' => 0,
    'restaurante' => 0,
    'avgRating' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e37d85097e3_36320999')) {function content_547e37d85097e3_36320999($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/restaurantColumn.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/comments.css" rel="stylesheet" type="text/css">
<script type="text/javascript" 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvaKdbwG_GgsyhMXSQLUQ6cu9Vhn657B8&sensor=TRUE">
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/mapFunctions.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/commentFunctions.js"></script>

<div class="container">
    <div class="visible-sm visible-xs">
        <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target=".restaurant">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </button>
    </div>

    <div class="restauntContainer col-md-3">
        <div class="restaurant collapse navbar-collapse">
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/logos/restaurantLogo.gif" class="img img-thumbnail img-responsive restaurantLogo"/>
            <h4 id="nomeRestaurante"><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
</h4>
            <input id="rateInput" data-show-clear="false" value="<?php echo $_smarty_tpl->tpl_vars['avgRating']->value;?>
"> 
            <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/rsz_location.png" class="pull-left addressIcon">
            <address><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getNumero();?>
, Bairro: <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getBairro();?>
, CEP:
                <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getCep();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getCidade();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getEstado();?>
 
                <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getComplemento();?>
.</address>

            <div id="location">
                <div id="map">
                </div>
            </div>
        </div>
        <a onclick="expandMap();" class="elementToggle">Expandir Mapa</a>
        <input type="hidden" id="latitude" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLatitude();?>
">
        <input type="hidden" id="longitude" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLongitude();?>
">
        <input type="hidden" id="idRestaurante" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">
        <input type="hidden" id="nomeRestauranteMap" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
">
    </div>

    <div class="col-md-8 col-sm-12">
        <ul class="media-list comments">
            <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['restaurante']->value->getComentarios(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

    <div class="modal" id="bigMap" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" id="map-header">
                    <h4 id="closeMap" class="elementToggle" onclick="closeMap();">Fechar <span class="glyphicon glyphicon-remove"></span></h4>
                </div>
                <div class="modal-body modal-body-map" id="bigMap-modal-body">
                    <div id="location2">
                        <div id="map2" class="col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><?php }} ?>
