<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reporte examen laboratorio</title>
    <style>
        body{border-top: 50px solid #d5dfc4; border-bottom: 50px solid #d5dfc4;}
        #id1{font-size: 18px ; padding: 0 3em; }
        h2{color: #9cb38f; font-weight: bold;}
        /* .container-sm{border: 1px solid #d5dfc4;} */
        span{font-weight: bold;}
        #id2{border: 1px solid #d5dfc4; text-align: center; }
        .white{height: 250px; color: white;}
    </style>
</head>
<body>
<?php    
include('./conexion.php');
$idorden = $_SESSION['idorden'];

$q = "SELECT resultado FROM resultados WHERE id_orden = '$idorden'";
$mysql = mysqli_query($con, $q);
if(mysqli_num_rows($mysql) == 1){
    $row = mysqli_fetch_array($mysql);
    $resultado = $row['resultado'];
}

$query = "SELECT * FROM ordenes WHERE id='$idorden'";
$sql = mysqli_query($con, $query);

if(mysqli_num_rows($sql) == 1){
    $row = mysqli_fetch_array($sql);
    $idpaciente = $row['id_paciente'];
    $idpersonal = $row['id_personal'];
    $idexamen = $row['id_examen'];
    
    $query2 = "SELECT * FROM paciente WHERE id='$idpaciente'";
    $sql2 = mysqli_query($con, $query2);
    if(mysqli_num_rows($sql2) == 1){
        $row = mysqli_fetch_array($sql2);
        $paciente = $row['nombre'];
        $pemail = $row['email'];
    }
    
    $query3 = "SELECT * FROM personal WHERE id='$idpersonal'";
    $sql3 = mysqli_query($con, $query3);
    if(mysqli_num_rows($sql3) == 1){
        $row = mysqli_fetch_array($sql3);
        $personal = $row['nombre'];
        $peremail = $row['email'];
        $pertlf = $row['tlf'];
    }

    $query4 = "SELECT nombre FROM examen WHERE id='$idexamen'";
    $sql4 = mysqli_query($con, $query4);
    if(mysqli_num_rows($sql4) == 1){
        $row = mysqli_fetch_array($sql4);
        $examen = $row['nombre'];
    }
}
?>
    <table>
        <thead>
            <tr>
                <td>
                   <h2>Resultados del examen</h2> 
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="id1">
                    <p>El resultado del paciente <span><?php echo $paciente;?></span> poseedor del correo <span><?php echo $pemail;?></span> para el examen de <span><?php echo $examen;?></span> solicitado fue: <span><?php echo $resultado;?></span>.</p>
                </td>
            </tr>
            <tr>
                <td class="white">1</td>
            </tr>
            <tr>
                <td class="white">1</td>
            </tr>
            <tr id="tr2">
                <td id="id2">
                    <p>Ponerse en contacto con el/la bionalista <span><?php echo $personal;?></span> por cualquier inconveniente.<br>
                    <span><?php echo $peremail;?></span><br>Teléfono <span><?php echo $pertlf;?></span> </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php
$html = ob_get_clean();
require_once('./dompdf/autoload.inc.php');
$file_name = $paciente.'_'.$examen.'.pdf';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

// $options = $dompdf->getOptions();
// $options->set('debugCss', true);
// $dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper("A4");
$dompdf->render();
// $dompdf->stream($file_name, array("Attachment"=> false));
$file = $dompdf->output();
file_put_contents($file_name, $file);

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();

$mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;
    $mail->Host = 'smtp.live.com';
    $mail->Port = "587";
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = "tls"; //PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = "login";
    $mail->Username = 'sther-salazar@hotmail.com';
    $mail->Password = 'Stherasr13122000';

    $mail->setFrom('sther-salazar@hotmail.com', 'Sther Salazar');
    $mail->addAddress("$pemail");

    $mail->isHTML(true);
    $mail->AddAttachment("./$file_name");
    $mail->Subject = 'RESULTADOS DE EXAMEN';
    $mail->Body = '<p>Ponerse en contacto con el/la bionalista <span>' . "$personal" . '</span> por cualquier inconveniente.<br>
    <span>'. "$peremail" . '</span><br>Teléfono <span>'. "$pertlf" . '</span> </p>';

    if (!$mail->send()) {
        echo 'Error: ' . $mail->ErrorInfo;
    } else {
        echo '<h3>Mensaje enviado</h3>';
        header('Location: ../orden.php');
    }
    unlink($file_name);
?>