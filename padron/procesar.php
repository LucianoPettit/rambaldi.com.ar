<?
/*
clave_sitio_web: 6LfcFikmAAAAAE8IZ8pvxq4YjsTIo5iHfJrKFkrg
clave_secreta: 6LfcFikmAAAAANuwIod2R4wIIUYe-L1B33MuquRo
*/

# recaptcha
    $ip = $_SERVER["REMOTE_ADDR"];
    $recaptchaResponse = $_POST['recaptcha'];
    $secretKey = '6LfcFikmAAAAANuwIod2R4wIIUYe';

# credenciales database
    define("global_servername","localhost");
    define("global_username","fernando_padron");
    define("global_password","5RnS7ypewrMS");
    define("global_dbname", "fernando_padron");

    #define("global_servername","localhost");
    #define("global_username","root");
    #define("global_password","Francisco2015!");
    #define("global_dbname", "padron");

    $nroDocumento = $_POST["nroDoc"];


$errors = array();
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$ip}");
$atributos = json_decode($response, TRUE);

if (!$atributos['success']) {
    $errorMessage = 'Verifica el captcha';
}else if (empty($nroDocumento)) {
    $errorMessage = 'El campo nombre es obligatorio';
}

if (count($errors) != 0) {
    $respuesta = array(
        "tipo" => "error",
        "mensaje" => $errorMessage,
        "datos"=> false
    );
}else{
    $resultado = consultarDatos($nroDocumento);
    if(!empty($resultado)){
        $respuesta = array(
            "tipo" => "success",
            "mensaje"=> "Se obtuvieron los datos correctamente",
            "datos"=> $resultado
        );
    }else{
        $respuesta = array(
            "tipo" => "error",
            "mensaje" => "No encontrado información relacionada a tu DNI.<br>
                        <br>Recuerda que sólo realizamos la búsqueda en el padrón de La Calera.
                        <br><br>Si sos de la Calera y no encontrás tu información contactate con nosotros. <br><br> <a  class=\"btn btn-primary btn-block\" style=\"margin: 0px auto;\" href=\"https://api.whatsapp.com/send?phone=%2B543515145928&amp;fbclid=IwAR0dZ8ZdQgt1JntoLmYIdZX0BcWMwDS8kf0dhpTPaxDLOCFae4avpfb6zNY\" target=\"_blank\">Enviar Mensaje</a>",
            "datos"=> false
        );
    }
    
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($respuesta);





function intEmptyToNull($param){
    return (strlen($param)==0 ? 'null' : sprintf('%1$s',$param) );
}

function consultarDatos($nroDoc){
    # crear conexion
    $conn = new mysqli(global_servername, global_username, global_password, global_dbname);
    #verificar conexion
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    // Consulta SQL
    $sql = "SELECT P.nombre as nombre, P.nroDocumento, P.tipoDocumento, P.direccion, P.mesa, P.orden,
                 I.nombre as institucionNombre, I.direccion as institucionDireccion, I.urlMaps as institucionUrlMaps
                FROM padron P
                INNER JOIN institucion I ON CAST(P.mesa AS SIGNED) BETWEEN I.mesaDesde AND I.mesaHasta
                WHERE 
                REPLACE(P.nroDocumento, '.', '') = ".intEmptyToNull($nroDoc).";";
  
    // Ejecutar la consulta
    $result = $conn->query($sql);
    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Recorrer los resultados y mostrarlos
        if($row = $result->fetch_assoc()) {
            $datos = array(
                "nombre"=>$row["nombre"],
                "nroDocumento"=>$row["nroDocumento"],
                "tipoDocumento"=>$row["tipoDocumento"],
                "direccion"=>$row["direccion"],
                "mesa"=>$row["mesa"],
                "orden"=>$row["orden"],
                "institucionNombre"=>$row["institucionNombre"],
                "institucionDireccion"=>$row["institucionDireccion"],
                "institucionUrlMaps"=>$row["institucionUrlMaps"]
            ) ;
          
          	$sql = "update padron set chequeos = chequeos + 1 WHERE REPLACE(nroDocumento, '.', '') = ".intEmptyToNull($nroDoc)."; ";
            $result = $conn->query($sql);
          
            // Cerrar la conexión
            $conn->close();
            return $datos;
        }else{
            return false;
        }
    } else {
        return false;
    }
    
}
?>
