<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 17:51:26
         compiled from "C:\wamp\www\Restaurantes\templates\clientePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22925547d0ce12c40d6-40908488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f5b3bcf4f78f68e70090a2ad9c3daf4ffd5537' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\clientePage.tpl',
      1 => 1425059814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22925547d0ce12c40d6-40908488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d0ce1645555_49014989',
  'variables' => 
  array (
    'templateRoot' => 0,
    'kindsOfFood' => 0,
    'kind' => 0,
    'ultimosPedidos' => 0,
    'pedido' => 0,
    'i' => 0,
    'it' => 0,
    'pedidos' => 0,
    'cliente' => 0,
    'telefone' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d0ce1645555_49014989')) {function content_547d0ce1645555_49014989($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/clientePage.css" rel="stylesheet" type="text/css">

<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/media/css/jquery.dataTables_themeroller.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/bootstrapDatatableTheme/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/hoverCSS/hover.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/subscribe.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/dist/css/bootstrapValidator.min.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/jquery.dim-background.js" rel="stylesheet"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/dataTables/bootstrapDatatableTheme/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/clientPageFunctions.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/jqueryMaskedInput/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/dist/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
libs/bootstrapvalidator-dist-0.5.3/src/js/language/pt_BR.js" type="text/javascript"></script>
<div class="container">
    <div id="clienteLoadingDiv">
        <img id="sumitingOrder" class="rotating" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/plate.svg">
        <h4 class="center">Aguarde...</h4>
    </div>
    <form method="GET" class="form-horizontal searchForm" action="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/search">
        <div class="row input-group col-md-12 pull-left search">
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
        </div>
    </form>

    <ul class="nav nav-pills nav-stacked col-md-2 sidebar">
        <li class="active"><a href="#tab_a" data-toggle="pill" class="button glow">Principal<span class="fa fa-fw fa-bars"></span></a></li>
        <li><a href="#tab_b" data-toggle="pill" class="button glow">Pedidos <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="#tab_c" data-toggle="pill" class="button glow">Perfil <span class="glyphicon glyphicon-user"></span></a></li>
    </ul>
    <div class="tab-content col-md-10">
        <div class="tab-pane active" id="tab_a">
            <h4>Últimos Pedidos</h4>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultimosPedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                <div class="pedidoDiv well well-sm">
                    <div class="pedidoHeader">
                        <h5 class="date pull-left"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getDataHora();?>
</h5>
                        <button class="btn btn-xs btn-info pull-right addCart glow" id='reOrder<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' data-loading-text="Enviando..."
                                onclick="reOrder(<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
,<?php echo $_smarty_tpl->tpl_vars['pedido']->value->getRestaurante()->getId();?>
,<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
);">Refazer Pedido
                        </button>
                    </div>
                    <table class="table table-condensed table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantidade</th>
                                <th>Tamanho</th>
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
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h5 class="restaurant"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getRestaurante()->getNome();?>
</h5>
                </div>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>

        </div>
        <div class="tab-pane" id="tab_b">
            <h4>Pedidos</h4>
            <div>
                <table id="pedidos" class="table table-responsive display table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Estabelecimento</th>
                            <th>Itens</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getId();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getDataHora();?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->getValorTotal();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedido']->value->getRestaurante()->getNome();?>
</td>
                                <td <label data-toggle="collapse" data-target="#item<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="elementToggle verItem">Ver Itens <span class="fa fa-eye"></span></label>

                                    <div class="modal" id="item<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
        <div class="tab-pane" id="tab_c">
            <form role="form" class="form-horizontal col-sm-6 col-sm-offset-3" id="setRadiusForm" action="javascript:void(0)" method="post">

                <h4>Preferência de raio <img id="radiusImage" class="pull-right" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/distance.svg"></h4>
                <h5>Defina aqui um raio em kilômetros em que você deseja fazer a pesquisa por estabelecimentos próximos</h5>
                <div class="form-group input-group">
                    <input class="form-control" type="text" id="km" name="km" value="<?php echo $_SESSION['raio'];?>
">
                    <span class="input-group-addon" id="kmAddon">Km</span>
                    <a id="setRadius" onclick="setRadius();" class="btn btn-success pull-left">Salvar <span id="mapMarker" class="fa fa-fw fa-map-marker"></span> 
                        <span id="saveRadius" class="glyphicon glyphicon-refresh glyphicon-refresh-animate buttonLoadingIcon"></span></a>
                </div>
                <small class="help-block" id="helpKm">Insira um valor entre 0.5 e 30</small>
            </form>

            <div class="divider1 col-sm-6 col-sm-offset-3 pull-left"></div>

            <form role="form" class="form-horizontal col-sm-6 col-sm-offset-3" id="subscribeForm" action="javascript:void(0)" method="post">

                <a id="edit" onclick="edit();" value="CadastrarCliente" type="button" class="btn btn-default pull-right">Editar <span class="fa fa-edit"></span></a>
                <h2>Cadastro</h2>

                <div class="form-group">
                    <input type="text" name="nome" id="nome" class="form-control editField" placeholder="Nome Completo" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNome();?>
" required/>
                </div>
                <div class="form-group" id="emailDiv">
                    <input type="email" name="email" id="email" class="form-control editField" placeholder="Email" required value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEmail();?>
"/>
                </div>

                <div class="form-group">
                    <input type="text" name="login" id="login" class="form-control editField" placeholder="Login" required value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getLogin();?>
"/>
                </div>
                <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value->getTelefones(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?> 
                    <div class="form-group col-sm-6" id="telefoneDiv">
                        <input type="text" name="telefone" id="telefone" class="form-control editField" placeholder="Número do Telefone" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value->getNumero();?>
"/>
                    </div>

                <?php } ?>
                <div class="form-group col-sm-6" id="senhaAtualDiv">
                    <input type="password" name="senhaAtual" id="senhaAtual" class="form-control editField" placeholder="Senha Atual"/>
                </div>
                <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['endereco']->key => $_smarty_tpl->tpl_vars['endereco']->value) {
$_smarty_tpl->tpl_vars['endereco']->_loop = true;
?>
                    <h3 class="pull-left" id="enrececoLabel">Endereço</h3>
                    <div class="form-group">
                        <input type="text" name="descricaoEndereco" id="descricaoEndereco" class="form-control editField" placeholder="Descrição para o endereço (ex: casa, escritório, etc)" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getDescricao();?>
"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="logradouro" id="logradouro" class="form-control editField" placeholder="Logradouro (ex: Rua, Avenida, etc.)" required value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getLogradouro();?>
"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="bairro" id="bairro" class="form-control editField" placeholder="Bairro" required value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getBairro();?>
"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="numero" id="numero" class="form-control editField" placeholder="Número" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getNumero();?>
"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cep" id="cep" class="form-control editField" placeholder="CEP" required value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCep();?>
"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cidade" id="cidade" class="form-control editField" placeholder="Cidade" required value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getCidade();?>
"/>
                    </div>
                    <div class="form-group">
                        <select name="estado" id="estado" class="form-control editField" required>
                            <option value="">Estado</option>
                            <option value="Ácre" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Ácre') {?> selected<?php }?>>Ácre</option>
                            <option value="Alagoas" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Ácre') {?> selected<?php }?>>Alagoas</option>
                            <option value="Amapá" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Alagoas') {?> selected<?php }?>>Amapá</option>              
                            <option value="Amazonas" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Amazonas') {?> selected<?php }?>>Amazonas</option>
                            <option value="Bahia" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Bahia') {?> selected<?php }?>>Bahia</option>
                            <option value="Ceará" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Ceará') {?> selected<?php }?>>Ceará</option>
                            <option value="Distrito Federal" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Distrito Federal') {?> selected<?php }?>>Distrito Federal</option>
                            <option value="Espírito Santo" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Espírito Santo') {?> selected<?php }?>>Espírito Santo</option>
                            <option value="Goiás" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Goiás') {?> selected<?php }?>>Goiás</option>
                            <option value="Maranhão" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Maranhão') {?> selected<?php }?>>Maranhão</option>
                            <option value="Mato Gorsso" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Mato Gorsso') {?> selected<?php }?>>Mato Gorsso</option>
                            <option value="Mato Grosso do Sul" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Mato Grosso do Sul') {?> selected<?php }?>>Mato Grosso do Sul</option>
                            <option value="Minas Gerais" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Minas Gerais') {?> selected<?php }?>>Minas Gerais</option>
                            <option value="Pará" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Pará') {?> selected<?php }?>>Pará</option>              
                            <option value="Paraíba" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Paraíba') {?> selected<?php }?>>Paraíba</option>
                            <option value="Paraná" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Paraná') {?> selected<?php }?>>Paraná</option>
                            <option value="Pernambuco" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Pernambuco') {?> selected<?php }?>>Pernambuco</option>
                            <option value="Piauí" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Piauí') {?> selected<?php }?>>Piauí</option>
                            <option value="Rio de Janeiro" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Rio de Janeiro') {?> selected<?php }?>>Rio de Janeiro</option>
                            <option value="Rio Grande Do Norte" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Rio Grande Do Norte') {?> selected<?php }?>>Rio Grande Do Norte</option>
                            <option value="Rio Grande do Sul" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Rio Grande do Sul') {?> selected<?php }?>>Rio Grande do Sul</option>
                            <option value="Rondônia" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Rondônia') {?> selected<?php }?>>Rondônia</option>
                            <option value="Roraima" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Roraima') {?> selected<?php }?>>Roraima</option>
                            <option value="Santa Catarina" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Santa Catarina') {?> selected<?php }?>>Santa Catarina</option>
                            <option value="São Paulo" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='São Paulo') {?> selected<?php }?>>São Paulo</option>
                            <option value="Sergipe" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Sergipe') {?> selected<?php }?>>Sergipe</option>
                            <option value="Tocantins" <?php if ($_smarty_tpl->tpl_vars['endereco']->value->getEstado()=='Tocantins') {?> selected<?php }?>>Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="complemento" id="complemento" class="form-control editField" placeholder="Complemento" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value->getComplemento();?>
"/>
                    </div>
                <?php } ?>
                <button type="submit" id="sub" name="formSubmit" value="EditarCliente" class="btn btn-success pull-right editField">Salvar <span class="fa fa-fw fa-save"></span> <span id="saveButton" class="glyphicon glyphicon-refresh glyphicon-refresh-animate buttonLoadingIcon"></span></button>
            </form>

            <div class="divider1 col-sm-6 col-sm-offset-3 pull-left"></div>

            <form role="form" class="form-horizontal col-sm-6 col-sm-offset-3" id="changePassword" action="javascript:void(0)" method="post">
                <h3>Alterar Senha</h3>
                <div class="form-group col-sm-6" id="senhaAtualDiv">
                    <input type="password" name="senhaAtual" id="senhaAtual1" class="form-control" placeholder="Senha Atual"/>
                </div>

                <div class="form-group col-sm-6" id="senha1Div">
                    <input type="password" name="senha1" id="senha1" class="form-control"  placeholder="Nova senha"/>
                </div>

                <div class="form-group col-sm-6" id="senha2Div">
                    <input type="password" name="senha2" id="senha2" class="form-control" placeholder="Confirme a senha"/>
                </div>
                <button type="submit" id="subPass" name="formSubmit" class="btn btn-success pull-right">Salvar <span class="fa fa-fw fa-save"></span> <span id="savePassword" class="glyphicon glyphicon-refresh glyphicon-refresh-animate buttonLoadingIcon"></span></button>
            </form>
        </div>
    </div>
</div><?php }} ?>
