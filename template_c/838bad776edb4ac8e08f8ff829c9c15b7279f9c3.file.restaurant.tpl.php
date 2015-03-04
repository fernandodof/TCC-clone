<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 17:26:09
         compiled from "C:\wamp\www\Restaurantes\templates\restaurant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1636547d1540db9ee6-10552174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838bad776edb4ac8e08f8ff829c9c15b7279f9c3' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\restaurant.tpl',
      1 => 1425068759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636547d1540db9ee6-10552174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d1541689f26_89723048',
  'variables' => 
  array (
    'templateRoot' => 0,
    'restaurante' => 0,
    'avgRating' => 0,
    'restaurantePedido' => 0,
    'count1' => 0,
    'it' => 0,
    'produtosComida' => 0,
    'produto' => 0,
    'idsProdutosComprados' => 0,
    'i' => 0,
    'avgRatingP' => 0,
    'tamanho' => 0,
    'count' => 0,
    'produtosBebida' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d1541689f26_89723048')) {function content_547d1541689f26_89723048($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\Restaurantes\\libs\\Smarty\\plugins\\modifier.replace.php';
?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/restaurant.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/cardapio.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/restaurantColumn.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/animate.css-master/animate.min.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script type="text/javascript" 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvaKdbwG_GgsyhMXSQLUQ6cu9Vhn657B8&sensor=TRUE">
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/restaurantPageFunctions.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/mapFunctions.js"></script>
<div class="container">
    <div id="addingItemDiv">
        <img id="sumitingOrder" class="rotating" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/plate.svg">
        <h4>Adicionando...</h4>
    </div>

    <div class="visible-sm visible-xs">
        <button class="btn btn-primary btn" data-toggle="collapse" data-target=".restaurant">
            <span class="fa fa-bars"></span>
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
            <a onclick="expandMap();" class="elementToggle">Expandir Mapa</a>
        </div>
        <input type="hidden" id="latitude" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLatitude();?>
">
        <input type="hidden" id="longitude" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLongitude();?>
">
        <input type="hidden" id="nomeRestauranteMap" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
">
    </div>

    <div class="menu col-md-9 col-sm-12">
        <div id="cardapioHeader" class="row col-md-12">
            <h2>Cardápio</h2>
            <input type="hidden" id="idRestaurantePedidoInicial" value="<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">
            <ul>

                <li class="dropdown" id="pedidoDropdown">
                    <?php if (isset($_SESSION['pedido'])) {?>

                        <a href="#" class="dropdown-toggle btn btn-primary pull-left" id="togglePedido" data-toggle="dropdown">Resumo do Pedido 
                            <span class="badge" id="badgePedido"><?php echo count($_SESSION['pedido']->getItensPedido());?>
</span> <b class="caret"></b></a>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/confirmOrder" method="POST" id="formProseguir" class="pull-left">
                            <button type="submit" class="dropdown-toggle btn btn-success" id="proseguirPedido">Proseguir Pedido
                                <img class="img" src='<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/hotPot.png'/> <span class="glyphicon glyphicon-arrow-right"></span></button>
                            <input type="hidden" name="idRestaurantePedido" id="idRestaurantePedido" value="<?php echo $_smarty_tpl->tpl_vars['restaurantePedido']->value->getId();?>
">
                        </form>

                        <ul class="dropdown-menu col-xs-12 col-sm-6">
                            <li id="liNomeRetaurantePedido">
                                <h5 id="nomeRestaurnatePedido"><?php echo $_smarty_tpl->tpl_vars['restaurantePedido']->value->getNome();?>
</h5>
                            </li>
                            <li class="divider firstDivider"></li>
                                <?php $_smarty_tpl->tpl_vars['count1'] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_SESSION['pedido']->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['count1'] = new Smarty_variable($_smarty_tpl->tpl_vars['count1']->value+1, null, 0);?>
                                <li>
                                    <div class="row produtoDropdown">
                                        <p class="pull-left noreProdutoDropdown"><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
</p>
                                        <p class="pull-right">R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getPreco();?>
</p>
                                    </div>
                                    <div class="row qutidadeDropdown">
                                        <p class="pull-left">Quantidade</p>
                                        <p class="pull-right"><?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
</p> 
                                    </div>
                                    <div class="row tamanhoDropdown">
                                        <p class ="pull-left">Tamanho:</p>
                                        <p class = "pull-right"><?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
 </p>
                                    </div>
                                    <div class="row subtotalDropdown">
                                        <p class="pull-left subtotal">Subtotal</p>
                                        <p class="pull-right"><?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</p> 
                                    </div>
                                </li>
                                <?php if (($_smarty_tpl->tpl_vars['count1']->value<count($_SESSION['pedido']->getItensPedido()))) {?>
                                    <li class="divider"></li>
                                    <?php }?>
                                <?php } ?>
                            <li class="totalLi">
                                <div class="row totalDropdown">
                                    <p class="pull-left total">TOTAL</p>
                                    <p class="pull-right">R$ <?php echo $_SESSION['pedido']->getValorTotal();?>
</p> 
                                </div>
                            </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </div>
        <ul class="nav nav-tabs nav-justified" id="ulCardapio" data-tabs="tabs" role="tablist">
            <li role="presentation" class="active"><a href="#comida" data-toggle="tab">Comida</a></li>
            <li role="presentation"><a href="#bebida" data-toggle="tab">Bebida</a></li>
        </ul>
        <div class="tab-content">
            <div id="comida" class="tab-pane active fade in">
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtosComida']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                    <div class="produto" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['produto']->value->getNome(),' ','');?>
">
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['idsProdutosComprados']->value)&&in_array($_smarty_tpl->tpl_vars['produto']->value->getId(),$_smarty_tpl->tpl_vars['idsProdutosComprados']->value)) {?>
                            <p class="nome pull-left col-sm-10 nameP"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
</p>
                            <div class="row btAvaliarDiv">
                                <a class="btn btn-default btn-sm pull-right btAvaliar" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/rateItem/<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
">Avaliar Ítem</a>
                            </div>
                        <?php } else { ?>
                            <p class="nome pull-left col-xs-12 nameP"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
</p>
                        <?php }?>
                        <div class="col-xs-12">
                            <div class="rateDiv">
                                <a class="btn btn-primary btn-xs pull-right commentButton <?php if ((count($_smarty_tpl->tpl_vars['produto']->value->getComentarios())==0)) {?> disabled <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/itemComments/<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
"><span class="fa fa-comment fa-2x commentIcon"></span> 
                                    <span class="badge commentCountBadge"><?php echo count($_smarty_tpl->tpl_vars['produto']->value->getComentarios());?>
</span></a>
                                <input class="rateInputs pull-right" data-show-clear="false" value="<?php echo $_smarty_tpl->tpl_vars['avgRatingP']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">  
                            </div>
                        </div>
                        <a href="#" class="btn productImg" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['produto']->value->getNome(),' ','');?>
Img" aria-describedby="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['produto']->value->getNome(),' ','');?>
Img" data-toggle="popover" data-trigger="focus"
                           title="<?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
" data-content="<img class='img img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['produto']->value->getImagem();?>
'/>"><img class='img img-responsive' src='<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['produto']->value->getImagem();?>
'/></a>

                        <?php  $_smarty_tpl->tpl_vars['tamanho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tamanho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produto']->value->getTamanhos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tamanho']->key => $_smarty_tpl->tpl_vars['tamanho']->value) {
$_smarty_tpl->tpl_vars['tamanho']->_loop = true;
?>
                            <div class="tamanho row col-xs-12">
                                <div class="tam">
                                    <p class="pull-left descricaoTamanho"><?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getDescricao();?>
</p>
                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                                    <form action="javascript:void(0);" id="add<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" onsubmit="checkCurrentOrder(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);">
                                        <button class="btn-link pull-right addCart"><img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/addCartIcon.png" class="img img-responsive pull-right imgAddCart img-circle" 
                                                                                         alt="Adicionar a compra" title="Adicionar a compra"/></button>
                                        <input type="number" min="1" max="99" value="1" class="form-control pull-right quantidade"/>
                                        <input type="hidden" class="idProduto" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
">
                                        <input type="hidden" class="idTamanho" value="<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
">
                                    </form>

                                    <p class="pull-right precoTamanho">R$ <?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getPreco();?>
</p>

                                </div>
                            </div>
                        <?php } ?>
                        <h6 data-toggle="collapse" data-toggle="tooltip" data-placement="right" title="Clique para ver os ingredientes" data-target="#ingredientes<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
" class="elementToggle ingredientesLabel">Ingredientes</h6>
                        <div id="ingredientes<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
" class="collapse ingredientes fade">
                            <p><?php echo $_smarty_tpl->tpl_vars['produto']->value->getIngredientes();?>
</p>
                        </div>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>        
                <?php } ?>
            </div>
            <div id="bebida" class="tab-pane fade">
                <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtosBebida']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                    <div class="produto">
                        <p class="nome"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
</p>
                        <?php  $_smarty_tpl->tpl_vars['tamanho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tamanho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produto']->value->getTamanhos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tamanho']->key => $_smarty_tpl->tpl_vars['tamanho']->value) {
$_smarty_tpl->tpl_vars['tamanho']->_loop = true;
?>
                            <div class="tamanho row col-xs-12">
                                <div class="tam">
                                    <p class="pull-left descricaoTamanho"><?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getDescricao();?>
</p>
                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
                                    <form action="javascript:void(0);" id="add<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" onsubmit="checkCurrentOrder(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);">
                                        <button class="btn-link pull-right"><img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/addCartIcon.png" class="img img-responsive pull-right imgAddCart img-circle" 
                                                                                 alt="Adicionar a compra" title="Adicionar a compra"/></button>
                                        <input type="number" min="1" max="99" value="1" class="form-control pull-right quantidade"/>
                                        <input type="hidden" class="idProduto" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
">
                                        <input type="hidden" class="idTamanho" value="<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
">
                                    </form>
                                    <p class="pull-right precoTamanho">R$ <?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getPreco();?>
</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>

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
