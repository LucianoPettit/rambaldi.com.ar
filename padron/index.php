<?
# recaptcha
# id : 6Le_YSYmAAAAALfUj7Dp-CtEL0oyxJCwP517nwCe
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5E5DJ1SX7D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5E5DJ1SX7D');
</script>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padron La Calera - Juntos por La Calera - Fernando Rambaldi</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio web del pardron de La Calera, Córdoba. Elecciones 2023 La Calera. Información sobre el padrón electoral. Juntos por La Calera">
    <meta name="keywords" content="elecciones 2023, Fernando Rambaldi, La Calera, padrón electoral">
    <meta name="author" content="uppermind">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <style>
        #preloader {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }
        .heart {
        animation: heartbeat 1s ease-in-out infinite;
        transform-origin: center;
      }

      @keyframes heartbeat {
        0% {
          transform: scale(1);
        }

        50% {
          transform: scale(0.99);
        }

        100% {
          transform: scale(1);
        }
      }
      .error{
        border-color: red;
      }
        </style>
</head>
<body>
    <div id="preloader" style="background-color: #fff;">
      <img src="https://www.fernandorambaldi.com.ar/img/juntos650px.jpg" style="width:18em;" class="heart">
    </div>
    <div class="container">
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <img src="https://www.fernandorambaldi.com.ar/img/juntos650px.jpg" class="card-img-top" alt="...">    
                    <div class="card-body">
                        <h5 class="card-title">Fernando Rambaldi</h5>
                        <p class="card-text">#EsJuntosEsconVos</p>
                    </div>
                </div>
            </aside> <!-- col.// -->
            <aside class="col-sm-4">
                <div class="card">
                    <article class="card-body">
                        <!--<a href="" class="float-right btn btn-outline-primary">¿Sabés dónde votás?</a>-->
                        <h4 class="card-title mb-4 mt-1">¿Sabés dónde votás?</h4>
                        <form>
                            <div class="form-group">
                                <label>Nro. de Documento</label>
                                <input name="formNumber" id="formNumber" class="form-control" placeholder="Nro. de Documento" type="number" required>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LfcFikmAAAAAE8IZ8pvxq4YjsTIo5iHfJrKFkrg"></div>
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="button" class="btn btn-primary btn-block" id="btnEnviar"> Consultar </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article>
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
            <aside class="col-sm-4" id="errorDatosVotante" style="display:none;">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title mb-4 mt-1">No encontramos información!</h4> 
                        <p id="errorDatosVotanteTexto"></p> 
                   </article>
                </div>
            </aside>
            <aside class="col-sm-4" id="datosVotante" style="display:none;">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title mb-4 mt-1">Tus datos para Votar</h4>
                        <div class="form-group">
                                <label>Nombre y Apellido</label>
                                <div id="resultadoNombre" class="form-control"></div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                                <label>Nro. de Documento</label>
                                <div id="resultadoNroDocumento" class="form-control"></div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                                <label>Lugar de Votación</label>
                                <div id="resultadoLugar" class="form-control"></div>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                                <label>Dirección Lugar de Votación</label>
                                <div id="resultadoLugarDireccion" class="form-control"></div>
                        </div> <!-- form-group// -->
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nro. de Mesa</label>
                                    <div id="resultadoNroMesa" class="form-control"></div>
                                </div> <!-- form-group// -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nro. de Orden</label>
                                    <div id="resultadoNroOrden" class="form-control"></div>
                                </div> <!-- form-group// -->
                            </div>
                        </div>
                        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.61808398762!2d-64.3389952!3d-31.3419189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942d620af58b554f%3A0x896b52fabb61bc22!2sC.%20Gral.%20Cabrera%20796%2C%20La%20Calera%2C%20C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1684692000676!5m2!1ses!2sar" referrerpolicy="no-referrer-when-downgrade" width="320" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </article>
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->

    </div>
    <!--container end.//-->
</body>

<script>
    $(document).ready(function() {
        $("#preloader").hide();
        
        $("#btnEnviar").on("click", function() {
            error = false;
            // valido nro documento
            valor = $("#formNumber").val();
            if(isNaN(valor) || valor.length==0){
                $('#formNumber').addClass('error');
                setTimeout(function() {
                    $('#formNumber').removeClass('error');
                    }, 3000);
                    error = true;
            }
            // valido recaptcha
            var response = grecaptcha.getResponse();
            if(response.length == 0){
                $('.recaptcha-checkbox-border').addClass('error');
                setTimeout(function() {
                    $('.recaptcha-checkbox-border').removeClass('error');
                    }, 3000);
                    error = true;
            }
            // procesamos
            if(!error) {
                $("#errorDatosVotante").hide();
                $("#errorDatosVotanteTexto").html("");
                $("#resultadoNombre").html("");
                $("#resultadoNroDocumento").html("");
                $("#resultadoLugar").html("");
                $("#resultadoLugarDireccion").html("");
                $("#resultadoNroMesa").html("");
                $("#resultadoNroOrden").html("");
                $("#mapa").attr('src', "").hide();

                $("#preloader").show();
                $.post( "procesar.php", { nroDoc: valor, recaptcha: response })
                    .done(function( data ) {
                        $("#formNumber").val("");
                        grecaptcha.reset();
                        $("#preloader").hide();
                        if(data.tipo == 'error'){
                            $("#datosVotante").hide();
                            $("#errorDatosVotanteTexto").html(data.mensaje);
                            $("#errorDatosVotante").show();
                        }else{
                            // cargar datos
                            $("#resultadoNombre").html(data.datos.nombre);
                            $("#resultadoNroDocumento").html(data.datos.tipoDocumento +" : "+data.datos.nroDocumento);
                            $("#resultadoLugar").html(data.datos.institucionNombre);
                            $("#resultadoLugarDireccion").html(data.datos.institucionDireccion);
                            $("#resultadoNroMesa").html(data.datos.mesa);
                            $("#resultadoNroOrden").html(data.datos.orden);
                            $("#mapa").attr('src', data.datos.institucionUrlMaps+'&output=embed').show();
                            $("#datosVotante").show();
                        }
                        
                        
                    });
            }
        });
    })
    
</script>

</html>