<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 20:31:01
         compiled from "C:\wamp\www\Restaurantes\templates\nearBy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5889548900f59a1326-72105372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3ecba1ac39d4551330666ab1445bd688acc7ec' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\nearBy.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5889548900f59a1326-72105372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548900f59a2f27_37416924',
  'variables' => 
  array (
    'templateRoot' => 0,
    'j' => 0,
    'kindsOfFood' => 0,
    'kind' => 0,
    'restaurants' => 0,
    'restaurante' => 0,
    'forma' => 0,
    'idsRestaurantesComprados' => 0,
    'i' => 0,
    'avgRating' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548900f59a2f27_37416924')) {function content_548900f59a2f27_37416924($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/sidebar.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/search.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/nearBy.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/clientePage.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/hoverCSS/hover.min.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/jquery.query-object.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/searchFunctionsLocation.js" type="text/javascript"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Filtrar por tipo</h4>
            <div class="visible-xs sidebarToggleButton">
                <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target=".sidebarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-3 sidebarContainer">
        <div class="navbar navbar-static-top sidebar <?php if (isset($_SESSION['locationError'])) {?> disabledSideBar <?php }?>">
            <div class="collapse navbar-collapse sidebarCollapse">
                <ul class="nav nav-pills nav-stacked">
                    <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(0, null, 0);?>
                    <li id="liFilter<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" class="liFilterType" onclick="filterRestaurante('', this.id, null);"><a class="elementToggle button glow">Todos</a></li>
                        <?php  $_smarty_tpl->tpl_vars['kind'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kind']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kindsOfFood']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kind']->key => $_smarty_tpl->tpl_vars['kind']->value) {
$_smarty_tpl->tpl_vars['kind']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->tpl_vars['j']->value+1, null, 0);?>
                        <li id="liFilter<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" class="liFilterType" onclick="filterRestaurante('<?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
', this.id, null);"><a class="elementToggle button glow"><?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
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
                        

                        <?php if (isset($_SESSION['locationError'])) {?>
                            <h4 class="locationError">Não foi possível obter a sua localização, motivo: <small> <?php echo $_SESSION['locationError'];?>
 </smal></h4>
                            <h6>Mas você pode pesquisar aqui</h6>
                            
                            <form method="GET" class="form-horizontal searchForm" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/search">
                                <div class="row input-group col-md-12 pull-left search">
                                    <div class="col-md-7 col-xs-12 searchDiv pull-left">
                                        <input type="text" class="form-control pull-left searchField" placeholder="Digite seu cep ou o nome do restaurante" id="search" name="search">
                                    </div>
                                    <div class="row col-md-5 col-xs-12">
                                        <div class="form-group col-md-11 col-xs-12 pull-left kindOfFoodDiv">
                                            <select class="form-control kindOfFoodSelect col-md-11 col-xs-12" name="kindOfFood">
                                                <option class="" value="">Tipo de cozinha (todas)</option>
                                                <?php  $_smarty_tpl->tpl_vars['kind'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kind']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kindsOfFood']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kind']->key => $_smarty_tpl->tpl_vars['kind']->value) {
$_smarty_tpl->tpl_vars['kind']->_loop = true;
?>
                                                    <option class="" value='<?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
'><?php echo $_smarty_tpl->tpl_vars['kind']->value['nome'];?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1 visible-lg visible-md btSearchDiv">        
                                            <div class="input-group-btn">
                                                <button type="submit" name="formSubmit" value="SearchRestaurante" class="btn btn-success btSearch"><span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-xs-12 visible-sm visible-xs btSearchDiv">        
                                        <div class="input-group-btn">
                                            <button type="submit" name="formSubmit" value="SearchRestaurante" class="col-xs-12 btn btn-success btSearch">Pesqusar <span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php }?>

                        <?php if ((count($_smarty_tpl->tpl_vars['restaurants']->value)==0)) {?>
                            <h3 class="no-result-search">Desculpe, a pesquisa não retornou nenhum resultado.</h3>
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
