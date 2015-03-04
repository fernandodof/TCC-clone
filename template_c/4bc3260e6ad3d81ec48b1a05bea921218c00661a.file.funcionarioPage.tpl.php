<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 18:27:44
         compiled from "..\templates\funcionarioPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7181547d0cf077e736-97738926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc3260e6ad3d81ec48b1a05bea921218c00661a' => 
    array (
      0 => '..\\templates\\funcionarioPage.tpl',
      1 => 1425072461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7181547d0cf077e736-97738926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0cf1704336_58771952',
  'variables' => 
  array (
    'templateRoot' => 0,
    'pedidosRecebidos' => 0,
    'i' => 0,
    'pedido' => 0,
    'it' => 0,
    'telefone' => 0,
    'endereco' => 0,
    'pedidosCozinha' => 0,
    'pedidosEntrega' => 0,
    'historicoPedidos' => 0,
    'produtosComida' => 0,
    'produto' => 0,
    'tamanho' => 0,
    'produtosBebida' => 0,
    'tamanhosComida' => 0,
    'tamanhosBebida' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0cf1704336_58771952')) {function content_547d0cf1704336_58771952($_smarty_tpl) {?><head>
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/funcionarioPage.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/media/css/jquery.dataTables_themeroller.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/bootstrapDatatableTheme/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/cardapio.css" rel="stylesheet" type="text/css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/jquery.priceFormat.min.js" type="text/javascript"></script>
    <script type="text/javascript" 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvaKdbwG_GgsyhMXSQLUQ6cu9Vhn657B8&sensor=TRUE">
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/funcionarioPageFunctions.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/bootstrapDatatableTheme/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/showOrderMap.js" type="text/javascript"></script>
</head>

<div class="container" id="page">
    <h3><?php echo $_SESSION['funcRestaurante'];?>
</h3>
    <ul class="nav nav-pills nav-stacked col-md-3 sidebar">
        <li class="<?php if (!isset($_GET['produtoCadastrado'])&&!isset($_GET['error'])) {?>active<?php }?>"><a href="#tab_a" data-toggle="pill">Novos Pedidos <span class="glyphicon glyphicon-shopping-cart"></span></a></a></li>
        <li class=""><a href="#tab_b" data-toggle="pill">Pedidos na Cozinha <img class="img img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/chef16.svg" alt="Cozinha"></a></li>
        <li class=""><a href="#tab_c" data-toggle="pill">Pedidos em entrega <img class="img img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/logistics3.svg" alt="Cozinha"></a></li>
        <li class=""><a href="#tab_d" data-toggle="pill">Histórico de Pedidos <span class="fa fa-history"></span></a></li>
        <li class="<?php if (isset($_GET['produtoCadastrado'])||isset($_GET['error'])) {?>active<?php }?>"><a href="#tab_e" data-toggle="pill">Cardápio <span class="glyphicon glyphicon-list-alt"></span></a></li>
    </ul>
    <div class="tab-content col-md-9">
        <div class="tab-pane <?php if (!isset($_GET['produtoCadastrado'])&&!isset($_GET['error'])) {?>active<?php }?>" id="tab_a">
            <h4 class="col-xs-12 pull-left novosPedidosLb">Novos Pedidos <i class="fa fa-refresh fa-spin fa-2x pull-right"></i></h4>
            <div class="col-xs-12" id="pedidosRecebidos">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidosRecebidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                    <div class="pedidoDiv" id="pedidoRecebidoDiv<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <label class="idPedido">#<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</label>
                        <div class="pull-right checkboxPedidoDiv">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
" id="idPedidoRecebido<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                            <input type="checkBox" name="pedidos[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="pedidoRecebido<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onchange="enviarPedidoCozinha(this);">
                            <label for="pedidoRecebido<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span class="lbEncaminharCozinha">Encaminhar para cozinha</span></label>
                        </div>
                        <table class="table table-condensed table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantidade</th>
                                    <th>Tamanho</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
</td>
                                        <td>R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <label class="pull-right valorTotal">TOTAL: R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</label>
                        <div class="infoCliente">
                            <h4 class="nomeCliente"><span>Cliente: </span><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getNome();?>
</h4>
                            <h4  data-toggle="collapse" data-target="#enderecoNovosPedidos<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="elementToggle verEndereco">Detalhes do cliente <i class="fa fa-chevron-circle-down"></i></h4>

                            <div class="collapse" id="enderecoNovosPedidos<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getTelefones(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?>
                                    <h5>Telefone: <?php echo $_smarty_tpl->tpl_vars['telefone']->value->getNumero();?>
</h5>
                                <?php } ?>
                                <h4>Endereço <span class="fa fa-map-marker enderecoMarker"></span></h4>
                                    <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?> 
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getNumero();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getBairro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCidade();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getEstado();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCep();?>
</p>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getLatitude()!=null) {?>
                                    <a href="#myMapModal"  data-toggle="modal" onclick="initialize(<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLatitude();?>
,<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLongitude();?>
);" class="btn btn-info btn-xs">Mapa</a>
                                <?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getObservacoes()!=null) {?>
                            <h3 class="obs">Observações: <small><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getObservacoes();?>
</small></h3>
                        <?php }?>

                    </div>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <?php } ?>
            </div>
        </div>

        <div class="tab-pane" id="tab_b">
            <h4 class="col-xs-12 pull-left pedidosCozinhaLb">Pedidos na Cozinha <i class="fa fa-refresh fa-spin fa-2x pull-right"></i></h4>
            <div class="col-xs-12" id="pedidosCozinha">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidosCozinha']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                    <div class="pedidoDiv" id="pedidoCozinhaDiv<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <label class="idPedido">#<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</label>
                        <div class="pull-right checkboxPedidoDiv">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
" id="idPedidoCozinha<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                            <input type="checkBox" name="pedidos[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="pedidoCozinha<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onchange="enviarPedidoEntrega(this);">
                            <label for="pedidoCozinha<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span class="lbEncaminharEntrega">Encaminhar para entrega</span></label>
                        </div>
                        <table class="table table-condensed table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantidade</th>
                                    <th>Tamanho</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
</td>
                                        <td>R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <label class="pull-right valorTotal">TOTAL: R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</label>
                        <div class="infoCliente">
                            <h4 class="nomeCliente"><span>Cliente: </span><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getNome();?>
</h4>
                            <h4  data-toggle="collapse" data-target="#enderecoCozinha<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="elementToggle verEndereco">Detalhes do cliente <i class="fa fa-chevron-circle-down"></i></h4>
                            <div class="collapse" id="enderecoCozinha<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getTelefones(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?>
                                    <h5>Telefone:<?php echo $_smarty_tpl->tpl_vars['telefone']->value->getNumero();?>
</h5>
                                <?php } ?>
                                <h4>Endereço <span class="fa fa-map-marker enderecoMarker"></span></h4>
                                    <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?> 
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getNumero();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getBairro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCidade();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getEstado();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCep();?>
</p>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getLatitude()!=null) {?>
                                    <a href="#myMapModal" data-toggle="modal" onclick="initialize(<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLatitude();?>
,<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLongitude();?>
);" class="btn btn-info btn-xs">Mapa</a>
                                <?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getObservacoes()!=null) {?>
                            <h3 class="obs">Observações: <small><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getObservacoes();?>
</small></h3>
                        <?php }?>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <?php } ?>
            </div>
        </div>


        <div class="tab-pane" id="tab_c">
            <h4 class="col-xs-12 pull-left pedidosEntregaLb">Pedidos em Entrega <i class="fa fa-refresh fa-spin fa-2x pull-right"></i></h4>
            <div class="col-xs-12" id="pedidosEntrega">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidosEntrega']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                    <div class="pedidoDiv" id="pedidoEntregaDiv<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <label class="idPedido">#<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</label>
                        <div class="pull-right checkboxPedidoDiv">
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
" id="idPedidoEntrega<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                            <input type="checkBox" name="pedidos[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="pedidoEntrega<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onchange="finalizarPedido(this);">
                            <label for="pedidoEntrega<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span class="lbFinalizar">Finalizar pedido</span></label>
                        </div>
                        <table class="table table-condensed table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantidade</th>
                                    <th>Tamanho</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
</td>
                                        <td>R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <label class="pull-right valorTotal">TOTAL: R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</label>
                        <div class="infoCliente">
                            <h4 class="nomeCliente"><span>Cliente: </span><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getNome();?>
</h4>
                            <h4  data-toggle="collapse" data-target="#enderecoEntrega<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="elementToggle verEndereco">Detalhes do cliente <i class="fa fa-chevron-circle-down"></i></h4>
                            <div class="collapse" id="enderecoEntrega<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getTelefones(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?>
                                    <h5>Telefone: <?php echo $_smarty_tpl->tpl_vars['telefone']->value->getNumero();?>
</h5>
                                <?php } ?>
                                <h4>Endereço <span class="fa fa-map-marker enderecoMarker"></span></h4>
                                    <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?> 
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getNumero();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getBairro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCidade();?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getEstado();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCep();?>
</p>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getLatitude()!=null) {?>
                                    <a href="#myMapModal" onclick="initialize(<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLatitude();?>
,<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getLongitude();?>
);" data-toggle="modal" class="btn btn-info btn-xs">Mapa</a>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['pedido']->value->getObservacoes()!=null) {?>
                                <h3 class="obs">Observações: <small><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getObservacoes();?>
</small></h3>
                            <?php }?>
                        </div>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <?php } ?>
            </div>
        </div>

        <div class="tab-pane" id="tab_d">                      
            <button class="btn btn-info btn-sm" data-loading-text="Atualizando ...." onclick="updateHitorico();" id="update">Atualizar Historio</button>
            <h4 class="col-xs-12 pull-left">Historico <img id="historyIcon" class="img img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/history.svg"/></h4>
            <div id="historico">
                <table id="historicoPedidos" class="table table-responsive display table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Detalhes</th>
                        </tr>
                    </thead>
                    <tbody id="bodyHistorico">
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['historicoPedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getDataHora()->format('d/m/Y - H:i:s');?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</td>
                                <td <label data-toggle="collapse" data-target="#item<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="elementToggle verItem">Detalhes <span class="fa fa-eye"></span></label>

                                    <div class="modal" id="item<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getDataHora()->format('d/m/Y - H:i:s');?>
</h5>
                                                    <h4>Itens</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-hover table-responsive table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th>Nome</th>
                                                                <th>Tamanho</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                            <tr>
                                                        </thead>
                                                        <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</td>
                                                                </tr>
                                                            <tbody>
                                                            <?php } ?>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <label class="pull-right">Valor Total: R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</label>
                                                    <div class="col-xs-12">
                                                        <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getTelefones(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?>
                                                            <h5>Telefone: <?php echo $_smarty_tpl->tpl_vars['telefone']->value->getNumero();?>
</h5>
                                                        <?php } ?>
                                                        <h4>Cliente: <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getNome();?>
</h4>
                                                        <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value->getCliente()->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?> 
                                                            <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getLogradouro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getNumero();?>
</p>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getBairro();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCidade();?>
</p>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['endereco']->value->getEstado();?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCep();?>
</p>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if (isset($_GET['produtoCadastrado'])) {?>
            <div class="alert alert-success alert-dismissible col-xs-12 col-xs-offset-0" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                Produto cadastrado com sucesso.
            </div>
        <?php }?>

        <?php if (isset($_GET['error'])) {?>
            <div class="alert alert-danger alert-dismissible col-xs-12 col-xs-offset-0" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                <?php echo $_GET['error'];?>
 
            </div>
        <?php }?>

        <div class="tab-pane <?php if (isset($_GET['produtoCadastrado'])||isset($_GET['error'])) {?>active<?php }?>" id="tab_e">

            <h4 data-toggle="collapse" data-target="#cardapio" class="elementToggle" id="openCardapio">Cardápio <b class="caret"></b></h4>
            <div id="cardapio" class="collapse">
                <ul class="nav nav-tabs nav-justified" data-tabs="tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#comida" data-toggle="tab">Comida</a></li>
                    <li role="presentation"><a href="#bebida" data-toggle="tab">Bebida</a></li>
                </ul>
                <div class="tab-content">
                    <div id="comida" class="tab-pane active fade in">
                        <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtosComida']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <h4 data-toggle="collapse" data-target="#produtos" class="elementToggle" id="openInserir">Inserir Novo Produto <b class="caret"></b></h4>

            <div id="produtos" class="collapse">
                <ul class="nav nav-tabs nav-justified" data-tabs="tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#addComida" data-toggle="tab">Comida</a></li>
                    <li role="presentation"><a href="#addBebida" data-toggle="tab">Bebida</a></li>
                </ul>
                <div class="tab-content">
                    <div id="addComida" class="tab-pane active fade in">
                        <form class="form-horizontal col-xs-10 col-xs-offset-1" method="POST" id="addComidaForm" class="addProduto" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
src/app/processes/ProcessProduto.php" enctype="multipart/form-data">
                            <h4 class="formLegend">Novo item</h4>
                            <input type="hidden" name="idRestaurante" id="idRestaurante" value="<?php echo $_SESSION['idRestaurante'];?>
"/>
                            <input type="hidden" name="categoria" id="categoria" value="1"/>
                            <div class="form-group">
                                <input type="text" placeholder="Nome do produto" name="nomeProduto" class="form-control"/>
                            </div>

                            <div class="form-group" id="ingDiv">
                                <textarea class='form-control' rows='3' name='ingredientes' id='ingredientes' placeholder='Ingredientes' required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Imagem do ítem</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <p id="imageSize">Maxímo: 1MB</p>

                            <div class="form-group">   
                                <label id="lbTamanho" class="col-sm-2">Tamanho(s):</label>

                                <div id="tamanhosDiv" class="col-xs-12 form-group">
                                    <div class= 'checkboxes'>
                                        <?php  $_smarty_tpl->tpl_vars['tamanho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tamanho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tamanhosComida']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tamanho']->key => $_smarty_tpl->tpl_vars['tamanho']->value) {
$_smarty_tpl->tpl_vars['tamanho']->_loop = true;
?>
                                            <div class='checkboxDiv col-xs-12 checkbox'>
                                                <label class='labelTamanho'>
                                                    <input class='checkboxTamanho' type='checkbox' name='tamanhos[]' onchange='checkCreatePriceComida(this);' value='<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
' id= '<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
'/> <?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getDescricao();?>

                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <button  type="button" onclick="callResetForm('addComidaForm');" class="btn btn-default btn-sm">Limpar</button>        
                            <button type="submit" class="btn btn-success pull-right" name="formSubmit" value="cadastrarProduto"> Cadastrar </button>
                        </form>
                    </div>
                    <div id="addBebida" class="tab-pane fade">
                        <form class="form-horizontal col-xs-10 col-xs-offset-1" method="POST" id="addBebidaForm" class="addProduto" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
src/app/processes/ProcessProduto.php">
                            <h4 class="formLegend">Novo item</h4>
                            <input type="hidden" name="idRestaurante" id="idRestaurante" value="<?php echo $_SESSION['idRestaurante'];?>
"/>
                            <input type="hidden" name="categoria" id="categoria" value="2"/>
                            <div class="form-group">
                                <input type="text" placeholder="Nome do produto" name="nomeProduto" class="form-control"/>
                            </div>

                            <div class="form-group">   
                                <label id="lbTamanho" class="col-sm-2">Tamanho(s):</label>

                                <div id="tamanhosDiv" class="col-xs-12 form-group">
                                    <div class= 'checkboxes'>
                                        <?php  $_smarty_tpl->tpl_vars['tamanho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tamanho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tamanhosBebida']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tamanho']->key => $_smarty_tpl->tpl_vars['tamanho']->value) {
$_smarty_tpl->tpl_vars['tamanho']->_loop = true;
?>
                                            <div class='checkboxDiv col-xs-12 checkbox'>
                                                <label class='labelTamanho'>
                                                    <input class='checkboxTamanho' type='checkbox' name='tamanhos[]' onchange='checkCreatePriceBebida(this);' value='<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
' id='<?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getId();?>
'/> <?php echo $_smarty_tpl->tpl_vars['tamanho']->value->getDescricao();?>

                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <button  type="button" onclick="callResetForm('addBebidaForm');" class="btn btn-default btn">Limpar</button>        
                            <button type="submit" class="btn btn-success pull-right" name="formSubmit" value="cadastrarProduto"> Cadastrar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- tab content -->
</div>
<div class="modal fade" id="myMapModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Localização aproximada do cliente</h4>
                <p class="text-danger">A localização não indica exatamente o endereço do cliente, e a precisão pode variar.</p>
            </div>
            <div class="modal-body">
                <div id="map-canvas" class="">
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-modal" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
</div><?php }} ?>
