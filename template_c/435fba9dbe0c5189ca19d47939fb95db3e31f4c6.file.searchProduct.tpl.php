<?php /* Smarty version Smarty-3.1.19, created on 2015-02-26 19:55:37
         compiled from "C:\wamp\www\Restaurantes\templates\searchProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23352549956556a8042-96782988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435fba9dbe0c5189ca19d47939fb95db3e31f4c6' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\searchProduct.tpl',
      1 => 1424917446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23352549956556a8042-96782988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549956556a9794_25196446',
  'variables' => 
  array (
    'templateRoot' => 0,
    'products' => 0,
    'idsProdutosComprados' => 0,
    'produto' => 0,
    'i' => 0,
    'restaurants' => 0,
    'avgRating' => 0,
    'tamanho' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549956556a9794_25196446')) {function content_549956556a9794_25196446($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/cardapio.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/bestItemRate.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/searchProduct.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/restaurantPageFunctions.js"></script>

<div class="container">
    <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/loader.GIF" title="Carregando" alt="Carregando" class="img img-responsive" id="loader">

    <div class="menu col-md-10 col-md-offset-1 col-sm-12">
        <h2>Resultados da pesquisa</h2>

        <div id="comida" class="tab-pane active fade in">
            <?php if (empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                <h3 class="no-result-search">Desculpe, nenhum resultado encontrado para: <small id="term">"<?php echo $_GET['productName'];?>
"</smalL></h3>
                <form method="GET" class="form-horizontal searchProduct" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/searchProduct">
                    <div class="form-group col-md-11 col-xs-12">
                        
                            <input type="text" class="form-control input-lg pull-left searchFieldProduct" placeholder="Digite o nome de um prato" id="searchProduct" name="productName" pattern=".{3,}" required title="Informe pelo menos 3 caracteres">
                        
                    </div> 
                    <div class="col-md-1 visible-lg visible-md btSearchDivProduct">        
                        <div class="input-group-btn">
                            <button type="submit" name="formSubmit" value="SearchProduct" class="col-xs-12 btn btn-lg btn-success btSearchProduct"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                    <div class="row col-xs-12 visible-sm visible-xs btSearchDivProduct">
                        <div class="input-group-btn">
                            <button type="submit" name="formSubmit" value="SearchProduct" class="col-xs-12 btn btn-lg btn-success btSearchProduct">Pesqusar <span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
                <div id='faces'> 
                    <img id = "imgFace" src = '<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/sadFace.svg'/>
                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                    <div class="produto">

                        <?php if (isset($_smarty_tpl->tpl_vars['idsProdutosComprados']->value)&&in_array($_smarty_tpl->tpl_vars['produto']->value->getId(),$_smarty_tpl->tpl_vars['idsProdutosComprados']->value)) {?>
                            <p class="nome pull-left col-sm-10 nameP"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
 - <small><?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['i']->value)->getNome();?>
</small></p>
                            <div class="row btAvaliarDiv">
                                <a class="btn btn-default btn-sm pull-right btAvaliar" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/rateItem/<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
">Avaliar Ítem</a>
                            </div>
                        <?php } else { ?>
                            <p class="nome pull-left col-xs-12 nameP"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
 - <small><?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['i']->value)->getNome();?>
</small></p>
                        <?php }?>
                        <div class="col-xs-12">
                            <div class="rateDiv">
                                <a class="btn btn-primary btn-xs pull-right commentButton <?php if ((count($_smarty_tpl->tpl_vars['produto']->value->getComentarios())==0)) {?> disabled <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/itemComments/<?php echo $_smarty_tpl->tpl_vars['produto']->value->getId();?>
"><span class="fa fa-comment fa-2x commentIcon"></span> 
                                    <span class="badge commentCountBadge"><?php echo count($_smarty_tpl->tpl_vars['produto']->value->getComentarios());?>
</span></a>
                                <input class="rateInputs pull-right" data-show-clear="false" value="<?php echo $_smarty_tpl->tpl_vars['avgRating']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">  
                            </div>
                        </div>
                        <a class="btn btn-info btn-xs btVerCardapio" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['i']->value)->getId();?>
">Cardápio</a>
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
" onsubmit="checkCurrentOrder1(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['i']->value)->getId();?>
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
            <?php }?>
        </div>

    </div>
</div><?php }} ?>
