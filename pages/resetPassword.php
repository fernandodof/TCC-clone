<?php

require_once '../pages/pathVars.php';

require_once $path . 'pages/smartyHeader.php';
require_once $path . 'src/app/model/persistence/Dao.class.php';
require_once $path . 'src/app/util/Queries.php';

//$slashCount = substr_count(filter_input(INPUT_SERVER, 'REQUEST_URI'), '/');

if (filter_input(INPUT_GET, 'cod') != null) {
    $codigo = filter_input(INPUT_GET, 'cod');
}else{
    header("Location: ../error");
}

$dao = new Dao();
$params['codigo'] = $codigo;

$recuperar = $dao->getArrayResultOfNativeQueryWithParameters(Queries::GET_ID_PESSOA_CODIGO_BY_PASSWORD_CODE, $params);

if (!$recuperar) {
    header("Location: ../error");
}

include_once $path . 'pages/header.php';

$smarty->assign('codigo',$codigo);
$smarty->display('../templates/resetPassword.tpl');

include_once '../pages/footer.php';
