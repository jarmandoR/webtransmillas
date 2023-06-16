
<!DOCTYPE html>
<html>
<head>
    <title>Página de calificación</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }

        .rating-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
        }

        .rating-stars input {
            display: none;
        }

        .rating-stars label {
            font-size: 50px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.3s;
        }

        .rating-stars input:checked ~ label,
        .rating-stars input:checked ~ label {
            color: #ffcc00;
        }

        .submit-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="rating-container">
        <h1>Antes de completar la solicitud califica nuestro servicio</h1>
        <div class="rating-stars">
        <input type="radio" id="star1" name="rating" value="1">
            <label for="star1">&#9733;</label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2">&#9733;</label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3">&#9733;</label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4">&#9733;</label>
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5">&#9733;</label>
            
           
          
         
        </div>
        <button class="submit-button" onclick="submitRating()">Continuar</button>
    </div>

    <script>
        function submitRating() {
            const selectedRating = document.querySelector('input[name="rating"]:checked').value;
            // Aquí puedes hacer algo con la calificación seleccionada, como enviarla al servidor

            // Ejemplo de cómo mostrar la calificación en la consola
            alert(selectedRating);
            console.log(`Calificación seleccionada: ${selectedRating} estrellas`);
        }
    </script>
</body>
</html>
<?php



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Configuración del correo
//     $remitente = "paginaweb@transmillas.com";
//     $destinatario = "ventastransmillas@gmail.com";
//     $asunto = "Solicitud recibo";

// $file1 = $_FILES['file1']['tmp_name'];
// $file2 = $_FILES['file2']['tmp_name'];

// // Nombre de los archivos adjuntos
// $filename1 = $_FILES['file1']['name'];
// $filename2 = $_FILES['file2']['name'];

// $message ="Nueva solicitud de recibo";

// $fileContent1 = file_get_contents($file1);
// $fileContent2 = file_get_contents($file2);

// // Encabezados del correo
// $boundary = md5(time());
// $headers = "From: Transmillas.com\r\n";
// $headers .= "Reply-To: Transmillas.com\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// // Cuerpo del correo
// $body = "--$boundary\r\n";
// $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
// $body .= "Content-Transfer-Encoding: 7bit\r\n";
// $body .= "\r\n";
// $body .= "$message\r\n";
// $body .= "--$boundary\r\n";

// // Adjunto 1
// $body .= "Content-Type: application/octet-stream; name=\"$filename1\"\r\n";
// $body .= "Content-Transfer-Encoding: base64\r\n";
// $body .= "Content-Disposition: attachment; filename=\"$filename1\"\r\n";
// $body .= "\r\n";
// $body .= chunk_split(base64_encode($fileContent1));
// $body .= "--$boundary\r\n";

// // Adjunto 2
// $body .= "Content-Type: application/octet-stream; name=\"$filename2\"\r\n";
// $body .= "Content-Transfer-Encoding: base64\r\n";
// $body .= "Content-Disposition: attachment; filename=\"$filename2\"\r\n";
// $body .= "\r\n";
// $body .= chunk_split(base64_encode($fileContent2));
// $body .= "--$boundary--\r\n";


//     // Envío del correo
//     if (mail($destinatario, $asunto, $body, $headers)) {
//       echo "Correo enviado con éxito.";

//       header("Location: https://transmillas.com/#factura");
//       exit(); 
//     } else {
//       echo "Error al enviar el correo.";

//     }
//   }






//   $to = 'correo_destino';
// $subject = 'Adjuntos de correo';
// $message = 'Adjuntos de correo';

// // Archivos adjuntos
// $file1 = 'ruta_archivo1';
// $file2 = 'ruta_archivo2';

// // Nombre de los archivos adjuntos
// $filename1 = basename($file1);
// $filename2 = basename($file2);

// // Contenido del archivo adjunto
// $fileContent1 = file_get_contents($file1);
// $fileContent2 = file_get_contents($file2);

// // Encabezados del correo
// $boundary = md5(time());
// $headers = "From: tu_correo\r\n";
// $headers .= "Reply-To: tu_correo\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// // Cuerpo del correo
// $body = "--$boundary\r\n";
// $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
// $body .= "Content-Transfer-Encoding: 7bit\r\n";
// $body .= "\r\n";
// $body .= "$message\r\n";
// $body .= "--$boundary\r\n";

// // Adjunto 1
// $body .= "Content-Type: application/octet-stream; name=\"$filename1\"\r\n";
// $body .= "Content-Transfer-Encoding: base64\r\n";
// $body .= "Content-Disposition: attachment; filename=\"$filename1\"\r\n";
// $body .= "\r\n";
// $body .= chunk_split(base64_encode($fileContent1));
// $body .= "--$boundary\r\n";

// // Adjunto 2
// $body .= "Content-Type: application/octet-stream; name=\"$filename2\"\r\n";
// $body .= "Content-Transfer-Encoding: base64\r\n";
// $body .= "Content-Disposition: attachment; filename=\"$filename2\"\r\n";
// $body .= "\r\n";
// $body .= chunk_split(base64_encode($fileContent2));
// $body .= "--$boundary--\r\n";

// // Envío del correo
// if (mail($to, $subject, $body, $headers)) {
//     echo 'Correo enviado correctamente.';
// } else {
//     echo 'Error al enviar el correo.';
// }
?>