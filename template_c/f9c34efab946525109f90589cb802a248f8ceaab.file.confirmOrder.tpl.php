<?php /* Smarty version Smarty-3.1.19, created on 2015-02-27 18:17:31
         compiled from "C:\wamp\www\Restaurantes\templates\confirmOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20947547d1551075c66-58973378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c34efab946525109f90589cb802a248f8ceaab' => 
    array (
      0 => 'C:\\wamp\\www\\Restaurantes\\templates\\confirmOrder.tpl',
      1 => 1425071849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20947547d1551075c66-58973378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547d1551629743_28741134',
  'variables' => 
  array (
    'templateRoot' => 0,
    'restaurante' => 0,
    'it' => 0,
    'i' => 0,
    'cliente' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d1551629743_28741134')) {function content_547d1551629743_28741134($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/animate.css-master/animate.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
css/confirmOrder.css" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
js/updateOrder.js" type="text/javascript"></script>
<div class="container">
    
    <?php if (isset($_SESSION['pedido'])) {?>
        <input type="hidden" id="idRestaurante" value="<?php echo $_SESSION['idRestauranteDoPedidoAtual'];?>
">
        <h2><?php echo $_smarty_tpl->tpl_vars['restaurante']->value->getNome();?>
</h2>
        <div id="confirmation">
            <h2 class="success-msg">Pedido realizado com sucesso</h2>
            <div id='faces'>
                <img id = 'imgFace' src ='<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/svg/happyFace.svg'/>
            </div>
            <a href='<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/index' class='btn btn-primary btn-lg'><span class='glyphicon glyphicon-home'></span> Página inicial</a>
        </div>
        <?php if (isset($_SESSION['pedido'])) {?>
            <div id="orderInfo">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th id="ProdutoTh">Produto</th>
                            <th id="ValorTh">Valor</th>
                            <th id="ValorTh">Quantidade</th>
                            <th id="SubtotalTh" class="text-center">Subtotal</th>
                            <th id="ButtonsTh"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_SESSION['pedido']->getItensPedido(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            <tr>
                                <td data-th="Item">
                                    <div class="row">
                                        <?php if (($_smarty_tpl->tpl_vars['it']->value->getProduto()->getIngredientes()==null)) {?>
                                            <div class="col-sm-2 hidden-xs">
                                                <?php if ($_smarty_tpl->tpl_vars['it']->value->getProduto()->getImagem()!=null) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getImagem();?>
" alt="Bebida" class="img-responsive productImg"/>
                                                <?php } else { ?>    
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/drink.png" alt="Bebida" class="img-responsive productImg"/>
                                                <?php }?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-sm-2 hidden-xs">
                                                <?php if ($_smarty_tpl->tpl_vars['it']->value->getProduto()->getImagem()!=null) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getImagem();?>
" alt="Bebida" class="img-responsive productImg"/>
                                                <?php } else { ?>    
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/food.png" alt="Comida" class="img-responsive productImg"/>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin nomeProduto"><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getNome();?>
 <span class="tamanho"> - <?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getDescricao();?>
</span></h4>
                                            <p><?php echo $_smarty_tpl->tpl_vars['it']->value->getProduto()->getIngredientes();?>
</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Preço: ">R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getTamanho()->getPreco();?>
</td>
                                <td data-th="Quantidade: ">
                                    <input type="number" class="form-control" min="1" max="99" id="quantidade<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['it']->value->getQuantidade();?>
">
                                </td>
                                <td data-th="Subtotal" class="text-center">R$ <?php echo $_smarty_tpl->tpl_vars['it']->value->getSubtotal();?>
</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm" onclick="updateQuantity(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
);" ><i class="glyphicon glyphicon-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm" onclick="removeProduct(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
);"><i class="fa fa-trash-o"></i></button>								
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center bold">Total R$ <?php echo $_SESSION['pedido']->getValorTotal();?>
</td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
pages/restaurant/<?php echo $_SESSION['idRestauranteDoPedidoAtual'];?>
" class="btn btn-warning"><i class="fa fa-angle-left"></i> Voltar ao cardápio</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center bold">Total R$ <?php echo $_SESSION['pedido']->getValorTotal();?>
</td>
                    <form method="POST" action="javascript:void(0)">
                        <td><button class="btn btn-success btn-block" data-loading-text="Enviando..." id="confirmar" onclick="checkout();"> Comfirmar <i class="fa fa-angle-right"></i></button></td>
                    </form>
                    </tr>
                    </tfoot>
                </table>

                <div class="row">
                    <div id="enderecoEntrega" class="col-md-4">
                        <h5 id="nome" class="bold"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getNome();?>
</h5>
                        <h6 class="bold">Endereco de entrega: </h6>
                        <div>
                            <?php  $_smarty_tpl->tpl_vars['endereco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['endereco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value->getEnderecos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                    <div class="col-md-8">
                        <textarea class="form-control" placeholder="Se você tem alguma requisição especial sobre o seu pedido insira aqui" 
                                  rows="5" id="observacoes" name="observacoes"></textarea>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        
            <script>location.href = "../pages/clientePage";</script>
        
    <?php }?>
    <div id="sumitingOrderDiv">
        <img id="sumitingOrder" class="rotating" src="<?php echo $_smarty_tpl->tpl_vars['templateRoot']->value;?>
images/icons/plate.svg">
        <h4 class="center">Aguarde...</h4>
    </div>
</div><?php }} ?>
