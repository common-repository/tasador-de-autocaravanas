<?php
function getTasadorAutocaravanasForm($apikey, $email, $terminos)
{
?>
    <div class="staiapps-bs">
        <div id="contenedor" class="mainContainer">

            <input id="hiddenApikeyAutocaravanas" type="hidden" name="apikeyAutocaravanas" value="<?php echo esc_attr($apikey); ?>">
            <input id="hiddenEmail" type="hidden" name="email" value="<?php echo esc_attr($email); ?>">
            <input id="hiddenTerminos" type="hidden" name="terminos" value="<?php echo esc_attr($terminos); ?>">

            <!-- SELECCIÓN MARCA  -->
            <div class="row" id="brandAnchor">
                <div class="col-xs-12" id="brandRow">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Seleccione la marca de su autocaravana:', 'tasador-de-autocaravanas' ); ?>
                    </h3>
                    <div id="brandContainer" class="row">
                        <div id="brandLoader" class="se-pre-con"></div>
                        <button type="submit" id="buttonRetry" class="btn buttonRetry botonKM">
                            <?php _e( 'Reintentar', 'tasador-de-autocaravanas' ); ?>
                        </button>
                    </div>
                    <div id="hiddenBrands" style="display: none" class="row">
                    </div>
                </div>
            </div>

            <!-- SELECCIÓN MODELO  -->
            <div class="row opacityContent" id="modelAnchor">
                <div class="col-xs-12 rowMargin">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Seleccione el modelo de su autocaravana:', 'tasador-de-autocaravanas' ); ?>
                    </h3>
                    <div id="modelContainer" class="row" >
                        <div id="modelLoader" class="se-pre-con"></div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divModel">
                            <button id="model544" class="btn btn-default btnNormal btnModel" disabled>
                                AMUNDSEN
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divModel">
                            <button id="model545" class="btn btn-default btnNormal btnModel" disabled>
                                CLUB
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divModel">
                            <button id="model546" class="btn btn-default btnNormal btnModel" disabled>
                                COLUMBUS
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divModel">
                            <button id="model547" class="btn btn-default btnNormal btnModel" disabled>
                                SVEN
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SELECCIÓN ANTIGÜEDAD  -->
            <div class="row">
                <!-- SELECCIÓN DE MES -->
                <div class="col-sm-6 rowMargin opacityContent" id="monthAnchor">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Mes de matriculación:', 'tasador-de-autocaravanas' ); ?>
                    </h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes1" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this, 'Enero');" disabled>
                                <span>
                                    <?php _e( 'Enero', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes2" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Febrero');" disabled>
                                <span>
                                    <?php _e( 'Febrero', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes3" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Marzo');" disabled>
                                <span>
                                    <?php _e( 'Marzo', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes4" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Abril');" disabled>
                                <span>
                                    <?php _e( 'Abril', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes5" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Mayo');" disabled>
                                <span>
                                    <?php _e( 'Mayo', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes6" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Junio');" disabled>
                                <span>
                                    <?php _e( 'Junio', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes7" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Julio');" disabled>
                                <span>
                                    <?php _e( 'Julio', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes8" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Agosto');" disabled>
                                <span>
                                    <?php _e( 'Agosto', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes9" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Septiembre');" disabled>
                                <span>
                                    <?php _e( 'Septiembre', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes10" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Octubre');" disabled>
                                <span>
                                    <?php _e( 'Octubre', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes11" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Noviembre');" disabled>
                                <span>
                                    <?php _e( 'Noviembre', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements">
                            <button id="mes12" class="btn btn-default btnNormal btnMes" onclick="selectMonth(this,'Diciembre');" disabled>
                                <span>
                                    <?php _e( 'Diciembre', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- SELECCIÓN DE AÑO -->
                <div class="col-sm-6 rowMargin opacityContent" id="yearAnchor">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Año de matriculación:', 'tasador-de-autocaravanas' );?>
                    </h3>
                    <div class="row" id="yearContainer">
                        <div id="yearLoader" class="se-pre-con"></div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year0" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2010
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year1" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2011
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year2" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2012
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year3" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2013
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year4" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2014
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year5" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                    2015
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divYear">
                            <button id="year6" class="btn btn-default btnNormal btnYear" disabled>
                                <span>
                                   2016
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SELECCIÓN Y POTENCIA Y KM -->
            <div class="row">
                <!-- SELECCIÓN DE MOTOR -->
                <!-- <div class="col-sm-6 rowMargin opacityContent" id="engineAnchor">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php //_e( 'Seleccione el tipo de motor:', 'tasador-de-autocaravanas' ); ?>:
                    </h3>
                    <div class="row" id="engineContainer">
                        <div id="engineLoader" class="se-pre-con"></div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divEngine">
                            <button id="tm1" class="btn btn-default btnNormal btnEngine" disabled>
                                <span>
                                    <?php //_e( 'Diésel', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divEngine">
                            <button id="tm2" class="btn btn-default btnNormal btnEngine" disabled>
                                <span>
                                    <?php //_e( 'Gasolina', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 rowElements divEngine">
                            <button id="tm3" class="btn btn-default btnNormal btnEngine" disabled>
                                <span>
                                    <?php //_e( 'Híbrido', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- SELECCIÓN DE POTENCIA -->
                <div class="col-sm-6 rowMargin opacityContent" id="powerAnchor">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Seleccione la potencia del motor:', 'tasador-de-autocaravanas' ); ?>
                    </h3>
                    <div class="row" id="powerContainer">
                        <div id="powerLoader" class="se-pre-con"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3 rowElements divPower">
                            <button id="p1" class="btn btn-default btnNormal btnPower" disabled>
                                90
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 rowElements divPower">
                            <button id="p2" class="btn btn-default btnNormal btnPower" disabled>
                                110
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 rowElements divPower">
                            <button id="p3" class="btn btn-default btnNormal btnPower" disabled>
                                120
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 rowElements divPower">
                            <button id="p4" class="btn btn-default btnNormal btnPower" disabled>
                                140
                            </button>
                        </div>
                    </div>
                </div>

                <!-- SELECCIÓN KM  -->
                <div class="col-sm-6 rowMargin opacityContent" id="kmAnchor">
                    <form class="row" id="formKM">
                        <div class="col-sm-12">
                            <h3>
                                <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                                <?php _e( 'Indique el kilometraje de su autocaravana:', 'tasador-de-autocaravanas' ); ?>
                            </h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 rowElements">
                                    <input id="inputKM" type="number" class="form-control btnKM inputs" placeholder="<?php _e( 'Kilómetros', 'tasador-de-autocaravanas' ); ?>" disabled>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 rowElements">
                                    <button type="submit" class="btn btnKM btnNormal botonKM" disabled>
                                        <?php _e( 'Continuar', 'tasador-de-autocaravanas' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- SELECCION VERSIÓN  -->
            <div class="row rowMargin opacityContent" id="versionAnchor">
                <div class="col-sm-12">
                    <h3>
                        <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                        <?php _e( 'Indique la versión de su autocaravana:', 'tasador-de-autocaravanas' ); ?>
                    </h3>
                    <div class="row" id="versionContainter">
                        <div id="versionLoader" class="se-pre-con"></div>
                        <div class="col-xs-6 col-sm-6 col-md-6 rowElements divVersion">
                            <button id="v1" class="btn btn-default btnNormal btnVersion" disabled>
                                AMUNDSEN 540 D	
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 rowElements divVersion">
                            <button id="v2" class="btn btn-default btnNormal btnVersion" disabled>
                                AMUNDSEN 600 D	
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 rowElements divVersion">
                            <button id="v3" class="btn btn-default btnNormal btnVersion" disabled>
                                AMUNDSEN 600 E	
                            </button>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 rowElements divVersion">
                            <button id="v4" class="btn btn-default btnNormal btnVersion" disabled>
                                AMUNDSEN 640 E
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPROBAR RESULTADO  -->
            <div class="row rowMargin opacityContent" id="resultAnchor">
                <form id="formResult">
                    <div class="col-sm-12">
                        <h3>
                            <i class="glyphicon glyphicon-menu-right iconArrow"></i>
                            <?php _e( 'Comprobar resultado:', 'tasador-de-autocaravanas' ); ?>
                        </h3>
                        <div class="row rowElements">
                            <div class="col-xs-12 col-sm-6 col-md-6 rowElements">
                                <label for="inputEmail">
                                    <?php _e( 'Indique su email', 'tasador-de-autocaravanas' ); ?>
                                </label>
                                <input id="inputEmail" type="email" class="form-control btnResult inputs" placeholder="<?php _e( 'Email', 'tasador-de-autocaravanas' ); ?>" disabled>
                            </div>
                        </div>
                        <div class="row rowElements">
                            <div class="col-xs-12 col-sm-6 col-md-6 rowElements">
                                <label for="inputTelefono">
                                    <?php _e( 'Indique su teléfono', 'tasador-de-autocaravanas' ); ?>
                                </label>
                                <input id="inputTelefono" type="number" class="form-control btnResult inputs" placeholder="<?php _e( 'Teléfono', 'tasador-de-autocaravanas' ); ?>" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input id="checkTerminos" class="btnResult" type="checkbox" disabled><label for="checkTerminos" class="marginCheckLabel"> <?php _e( 'Aceptar', 'tasador-de-autocaravanas' ); ?> <a target="_blank" href="<?php echo esc_attr($terminos); ?>"><?php _e( 'términos y condiciones', 'tasador-de-autocaravanas' ); ?></a></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <button id="botonComprobar" type="button" class="btn btn-default btnResult" disabled> <?php _e( 'Comprobar', 'tasador-de-autocaravanas' ); ?> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- RESULTADO FINAL MODAL -->
            <div id="finalResultModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="backgroundHeader modal-header">
                            <h4 class="modal-title"><?php _e( 'Resultado de la tasación', 'tasador-de-autocaravanas' ); ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" id="resultContainer"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">
                                <?php _e( 'Volver', 'tasador-de-autocaravanas' ); ?>
                            </button>
                            <button id="btnNew" type="button" class="btn btn-default" data-bs-dismiss="modal" onclick="newValuation()">
                                <?php _e( 'Nueva tasación', 'tasador-de-autocaravanas' ); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL DE ERROR -->
            <div id="errorModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div id="backgroundBodyError" class="modal-content centerTextModal">
                        <div class="modal-body">
                            <p class="textHeaderError">
                                <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
                                <?php _e( 'Error!', 'tasador-de-autocaravanas' ); ?>
                            </p>
                            <p id="modalTextError" class="textError">
                                <?php _e( 'Se ha producido un error, inténtelo más tarde o póngase en contacto con el administrador', 'tasador-de-autocaravanas' ); ?>
                            </p>
                            <button type="button" class="btn btn-danger btnSize" data-bs-dismiss="modal">
                                <?php _e( 'Aceptar', 'tasador-de-autocaravanas' ); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL DE INFO -->
            <div id="infoModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div id="backgroundBodyInfo" class="modal-content centerTextModal">
                        <div class="modal-body">
                            <p class="textHeaderInfo">
                                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                <span id="tituloInfoModal">
                                    <?php _e( 'Tasación incorrecta', 'tasador-de-autocaravanas' ); ?>
                                </span>
                            </p>
                            <p id="textoInfoModal" class="textError">
                                <?php _e( 'No se ha podido tasar su vehículo con los parámetros introducidos', 'tasador-de-autocaravanas' ); ?>
                            </p>
                            <button id="botonInfo" type="button" class="btn btn-default btnSize" data-bs-dismiss="modal">
                                <?php _e( 'Aceptar', 'tasador-de-autocaravanas' ); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo plugin_dir_url(__FILE__);?>../js/scripts-autocaravanas.js"></script>
    <link href="<?php echo plugin_dir_url(__FILE__);?>../css/style.css" rel="stylesheet" type="text/css"/>
<?php
}
?>