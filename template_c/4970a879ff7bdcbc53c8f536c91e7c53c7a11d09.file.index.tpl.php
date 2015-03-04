<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 15:03:04
         compiled from "C:\wamp\www\Restaurantes\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1610547d0c6079f3c1-81901083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4970a879ff7bdcbc53c8f536c91e7c53c7a11d09' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\index.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610547d0c6079f3c1-81901083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0c609171e3_45624487',
  'variables' => 
  array (
    'templateRoot' => 0,
    'kindsOfFood' => 0,
    'kind' => 0,
    'products' => 0,
    'produto' => 0,
    'count' => 0,
    'restaurants' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0c609171e3_45624487')) {function content_547d0c609171e3_45624487($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\Restaurantes\\libs\\Smarty\\plugins\\modifier.replace.php';
?><link href= "<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/index.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/index.js"></script>

<div class="container main">
    <div id="jumbotronContent" class="col-xs-12">
    </div>
    <div class="jumbotron">

        <div class="row input-group col-md-12 pull-left search">
            <ul class="nav nav-tabs" id="indexTabs" data-tabs="tabs" role="tablist">
                <li role="presentation" id="firstTab" class="active indexTab"><a href="#searchRestaurant" data-toggle="tab">Restaurantes</a></li>
                <li role="presentation" id="secondTab" class="indexTab"><a href="#searchProduct" data-toggle="tab">Pratos</a></li>
            </ul>
            <div class="tab-content">
                <div id="searchRestaurant" class="tab-pane active fade in">
                    <form method="GET" class="form-horizontal searchForm" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/search">
                        <div class="col-md-7 col-xs-12 searchDiv pull-left">
                            <input type="text" class="form-control input-lg pull-left searchField" placeholder="Digite seu cep ou o nome do restaurante" id="search" name="search">
                        </div>
                        <div class="row col-md-5 col-xs-12">
                            <div class="form-group col-md-11 col-xs-12 pull-left kindOfFoodDiv">
                                <select class="form-control input-lg kindOfFoodSelect col-md-11 col-xs-12" name="kindOfFood">
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
                                    <button type="submit" name="formSubmit" value="SearchRestaurante" class="btn btn-lg btn-success btSearch"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row col-xs-12 visible-sm visible-xs btSearchDiv">        
                            <div class="input-group-btn">
                                <button type="submit" name="formSubmit" value="SearchRestaurante" class="col-xs-12 btn btn-lg btn-success btSearch">Pesqusar <span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="searchProduct" class="tab-pane fade in">
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
                </div>
            </div>
            <div id="indexButtons">        
                <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/nearBy">Locais próximos <img id="gpsIcon" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/gps13.png"></a>
                <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/bestRate">Melhores locais <span class="starIcon glyphicon glyphicon-star"></span></a>
                <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/bestItemRate">Melhores Ítens <span class="starIcon glyphicon glyphicon-star"></span></a>
            </div>
        </div>
    </div>
    <h1 class="hidden-sm hidden-xs">Bem vindo ao SaborVirtual</h1>
</div>

<div class="container">
    <h3 id="destaques">Destaques</h3>
    <div class="col-lg-12" id="destaquesDiv">
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
            
            <div class="col-sm-3 colunaDestaque">
                <h4 class="dishName"><?php echo $_smarty_tpl->tpl_vars['produto']->value->getNome();?>
</h4>
                <div id="prod<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" onmouseover="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" onmouseout="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" class="well well-sm col-xs-12 imgDiv pull-left">
                    <a onmouseover="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" onmouseout="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['count']->value)->getId();?>
#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['produto']->value->getNome(),' ','');?>
">
                        <img id="prod<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" onmouseover="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" onmouseout="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['produto']->value->getImagem();?>
" class="img-responsive"></a>
                </div>
                <div class="info">
                    <a class="restaurantName pull-left" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['count']->value)->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['count']->value)->getNome();?>
</a>
                    <a id="btProd<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" onmouseover="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" onmouseout="highlightItem(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
);" href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_smarty_tpl->tpl_vars['restaurants']->value->get($_smarty_tpl->tpl_vars['count']->value)->getId();?>
#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['produto']->value->getNome(),' ','');?>
" class="btn btn-danger btn-block pull-left pecaAgora">Peça agora</a>
                </div>
            </div> 
            <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
        <?php } ?>
    </div>
</div><?php }} ?>
