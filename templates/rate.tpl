<link href="{$templateRoot}libs/bootstrap-star-rating/css/star-rating.min.css" rel="stylesheet" type="text/css">
<script src="{$templateRoot}libs/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>
<link href="{$templateRoot}css/restaurantColumn.css" rel="stylesheet" type="text/css">
<link href="{$templateRoot}css/rate.css" rel="stylesheet" type="text/css">
<script type="text/javascript" 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvaKdbwG_GgsyhMXSQLUQ6cu9Vhn657B8&sensor=TRUE">
</script>
<script type="text/javascript" src="{$templateRoot}js/mapFunctions.js"></script>
<script type="text/javascript" src="{$templateRoot}js/rateFunctions.js"></script>
<script type="text/javascript" src="{$templateRoot}js/stopVerbosity.min.js"></script>
<div class="container">
    <div class="visible-sm visible-xs">
        <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target=".restaurant">
            <span class="fa fa-bars"></span>
        </button>
    </div>

    <div class="restauntContainer col-md-3">
        <div class="restaurant collapse navbar-collapse">
            <img src="{$templateRoot}images/logos/restaurantLogo.gif" class="img img-thumbnail img-responsive restaurantLogo"/>
            <h4 id="nomeRestaurante">{$restaurante->getNome()}</h4>
            <input id="rateInput" data-show-clear="false" value="{$avgRating}"> 
            <img src="{$templateRoot}images/icons/rsz_location.png" class="pull-left addressIcon">
            <address>{$restaurante->getEndereco()->getLogradouro()}, {$restaurante->getEndereco()->getNumero()}, Bairro: {$restaurante->getEndereco()->getBairro()}, CEP:
                {$restaurante->getEndereco()->getCep()}, {$restaurante->getEndereco()->getCidade()}, {$restaurante->getEndereco()->getEstado()} 
                {$restaurante->getEndereco()->getComplemento()}.</address>

            <div id="location">
                <div id="map">
                </div>
            </div>
        <a onclick="expandMap();" class="elementToggle">Expandir Mapa</a>
        </div>
        <input type="hidden" id="latitude" value="{$restaurante->getEndereco()->getLatitude()}">
        <input type="hidden" id="longitude" value="{$restaurante->getEndereco()->getLongitude()}">
        <input type="hidden" id="idRestaurante" value="{$restaurante->getId()}">
        <input type="hidden" id="nomeRestauranteMap" value="{$restaurante->getNome()}">
    </div>

    <div class="menu col-md-9 col-sm-12">
        <h3>Avaliar Estabelecimento</h3>
        <div id="rateDiv">
            <h4>Faça Sua Avaliação</h4>
            <input id="rateInputUser" data-show-clear="false" value="{$nota}">
        </div>

        <div id="comment">
            <form class="form-horizontal" method="POST" action="javascript:void(0)">
                <label for="commentBox">Você também pode fazer um comentário</label>
                <div class="form-group">
                    <textarea id="commentBox" rows="5" class="form-control" name="comment" required placeholder="Insira seu comentário aqui"></textarea>
                </div>
                <button class="btn btn-primary pull-right" data-loading-text="Enviando....." id="send" onclick="sendComment();">Enviar comentário</button>
            </form>
        </div>
    </div>

    <div class="modal" id="bigMap" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" id="map-header">
                    <h4 id="closeMap" class="elementToggle" onclick="closeMap()">Fechar <span class="glyphicon glyphicon-remove"></span></h4>
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

</div>