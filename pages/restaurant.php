<?php

require_once '../pages/pathVars.php';
require_once $path . 'pages/smartyHeader.php';
require_once $path . 'src/app/model/persistence/Dao.class.php';
require_once $path . 'src/app/model/VO/PedidoVO.class.php';
require_once $path . 'src/app/model/VO/ItemPedidoVO.class.php';
require_once $path . 'src/app/model/VO/ProdutoVO.class.php';
require_once $path . 'src/app/model/VO/TamanhoVO.class.php';
require_once $path . 'src/app/util/Queries.php';
require_once $path . 'src/app/util/UserTypes.php';

session_start();

$slashCount = substr_count(filter_input(INPUT_SERVER, 'REQUEST_URI'), '/');
echo $slashCount;
