<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 20:06:07
         compiled from "C:\wamp\www\Restaurantes\templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17421547d1527b67d40-31801656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e06628247cce21c547e4e6c03705092f3d566fe' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\search.tpl',
      1 => 1425078341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17421547d1527b67d40-31801656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d15282e6b60_88237025',
  'variables' => 
  array (
    'templateRoot' => 0,
    'j' => 0,
    'kindsOfFood' => 0,
    'kind' => 0,
    'restaurants' => 0,
    'term' => 0,
    'kindOfFood' => 0,
    'restaurante' => 0,
    'forma' => 0,
    'idsRestaurantesComprados' => 0,
    'i' => 0,
    'avgRating' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d15282e6b60_88237025')) {function content_547d15282e6b60_88237025($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/sidebar.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/hoverCSS/hover.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/search.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/jquery.query-object.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/searchFunctions.js" type="text/javascript"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Filtrar por tipo</h4>
            <div class="visible-xs sidebarToggleButton">
                <button class="btn btn-primary" data-toggle="collapse" data-target=".sidebarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-3 sidebarContainer">
        <div class="navbar navbar-static-top sidebar">
            <div class="collapse navbar-collapse sidebarCollapse">
                <ul class="nav nav-pills nav-stacked">
                    <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(0, null, 0);?>
                    <li id="liFilter<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" class="liFilterType" onclick="filterRestaurante('', this.id);"><a class="elementToggle button glow">Todos</a></li>
                        <?php  $_smarty_tpl->tpl_vars['kind'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kind']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kindsOfFood']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kind']->key => $_smarty_tpl->tpl_vars['kind']->value) {
$_smarty_tpl->tpl_vars['kind']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->tpl_vars['j']->value+1, null, 0);?>
                        <li id="liFilter<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" class="liFilterType" onclick="filterRestaurante('<?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
', this.id);"><a class="elementToggle button glow"><?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
</a></li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default panel-search">
                <div class="row">   
                    <div class="page-header row col-xs-12">
                        <div class="col-xs-12">
                            <h3 class="pull-left">Resultados da pesquisa</h3>
                            <img id="circleLoader" class="img img-responsive rotating pull-right" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/plate.svg" alt="Carregando..." title="Carregando...">
                        </div>
                        
                    </div>
                </div>
                <div class="panel-body">
                    <div id="results">
                        <?php if (empty($_smarty_tpl->tpl_vars['restaurants']->value)) {?>
                            <h3 class="no-result-search">Desculpe, a pesquisa não retornou nenhum resultado para: <small id="term">"<?php echo $_smarty_tpl->tpl_vars['term']->value;?>
"</smalL>
                                <?php if ($_smarty_tpl->tpl_vars['kindOfFood']->value!='') {?> em <span id="type"><?php echo $_smarty_tpl->tpl_vars['kindOfFood']->value;?>
</span><?php }?>
                            </h3>
                            <div id='faces'> 
                                <img id = "imgFace" src = '<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/sadFace.svg'/>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['restaurante'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['restaurante']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['restaurants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['restaurante']->key => $_smarty_tpl->tpl_vars['restaurante']->value) {
$_smarty_tpl->tpl_vars['restaurante']->_loop = true;
?>
                                <div class="well closed col-xs-12">
                                    <h4 id="nameRestaurante" class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
 <small> <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getTipo()->getNome();?>
</small></h4>
                                    <div class="row col-xs-12 enderecoDiv">
                                        <span class="fa fa-map-marker fa-2x pull-left"> </span>
                                        <address class="col-xs-10"><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getNumero();?>
, Bairro: <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getBairro();?>
, CEP:
                                            <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getCep();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getCidade();?>
, <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getEstado();?>
 
                                            <?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getEndereco()->getComplemento();?>
.
                                        </address>                                    
                                    </div>
                                    <div class="row col-xs-12 pull-right formaPagamentoDiv">
                                        <?php  $_smarty_tpl->tpl_vars['forma'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['forma']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['restaurante']->value->getFormasPagamento(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['forma']->key => $_smarty_tpl->tpl_vars['forma']->value) {
$_smarty_tpl->tpl_vars['forma']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['forma']->value->getNome()=='Dinheiro') {?>
                                                <img class="img pull-right moneyImg" alt="Dinheiro" title="Dinheiro" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/money59.png"/>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['forma']->value->getNome()=='Cartao') {?>
                                                <img class="img pull-right cardImg" alt="Cartão" title="Cartão"src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/card25.png"/>
                                            <?php }?>
                                        <?php } ?>
                                        <p class="pull-right">Formas de Pagamento: </p>
                                    </div>

                                    <?php if (isset($_smarty_tpl->tpl_vars['idsRestaurantesComprados']->value)&&in_array($_smarty_tpl->tpl_vars['restaurante']->value->getId(),$_smarty_tpl->tpl_vars['idsRestaurantesComprados']->value)) {?>
                                        <div class="row">
                                            <a class="btn btn-default btn-sm pull-left btAvaliar visible-lg visible-md" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/rate/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">Avaliar estabelecimento</a>
                                        </div>
                                    <?php }?>

                                    <div class="row buttons pull-left col-md-12">
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <input class="rateInputs pull-left" data-show-clear="false" value="<?php echo $_smarty_tpl->tpl_vars['avgRating']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">
                                        </div>
                                        <a class="btn btn-info btn-sm pull-right btVerCardapio visible-lg visible-md" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">Visualizar Cardápio</a>
                                        <a class="btn btn-primary btn-xs pull-right commentButton visible-lg visible-md <?php if ((count($_smarty_tpl->tpl_vars['restaurante']->value->getComentarios())==0)) {?> disabled <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/comments/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
"><span class="fa fa-comment fa-2x commentIcon"></span> 
                                            <span class="badge commentCountBadge"><?php echo count($_smarty_tpl->tpl_vars['restaurante']->value->getComentarios());?>
</span></a>

                                        <a class="btn btn-info btn-sm pull-right btVerCardapioSm visible-xs visible-sm btn-block" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">Visualizar Cardápio</a>
                                        <a class="btn btn-primary btn-xs pull-right commentButtonSm visible-xs visible-sm btn-block <?php if ((count($_smarty_tpl->tpl_vars['restaurante']->value->getComentarios())==0)) {?> disabled <?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/comments/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
"><span class="fa fa-comment fa-2x commentIcon"></span> 
                                            <span class="badge commentCountBadge"><?php echo count($_smarty_tpl->tpl_vars['restaurante']->value->getComentarios());?>
</span> Comentários</a>

                                        <?php if (isset($_smarty_tpl->tpl_vars['idsRestaurantesComprados']->value)&&in_array($_smarty_tpl->tpl_vars['restaurante']->value->getId(),$_smarty_tpl->tpl_vars['idsRestaurantesComprados']->value)) {?>
                                            <a class="btn btn-default btn-sm pull-left btAvaliar visible-xs visible-sm btn-block" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/rate/<?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getId();?>
">Avaliar estabelecimento</a>
                                        <?php }?>

                                    </div>
                                </div>
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                            <?php } ?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>    <?php }} ?>
