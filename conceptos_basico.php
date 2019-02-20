<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1> Conceptos básicos PHP </h1>
    
    <?php 
    #Comentario en php
    
    
    #TEXTO EN PHP_ECHO
    echo 'Tipo de texto escrito en PHP una comilla';
 
    echo "<p>Texto en PHP con doble comilla</p>";
 
    echo '
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://placeimg.com/640/480/any" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
';
#PONER ; EN CADA TERMINO DE TEXTO DE PHP

#DIFERENTES VALORES DE PHP
?>


 <h2>Tipos de datos en PHP</h2>

 <?php 
echo "

    <ol>
    
    <li>Números (Numbers)</li>
    <li>Buleanos (Booleans)</li>
    <li>Arreglos (Arrays)</li>
    <li>Cadenas de texto(String)</li>

    </ol>

";
?>

<p>Para utilizar tipos de datos en PHP <br>es necesario almacenarlos en
    variantes o constantes </p>

<?php 

#DECLARACION DE UNA VARIABLE EN PHP ES EL SIMBOLO DE DOLLAR
$nombre ='Ivan'; 
#STRING
$edad = 19 ;
$estudiante = true;

#NUMERO
#Bulean: Verdadero o falso
#UNIR VALORES DE VARIABLES PARA FORMAR UN
#MENSAJE DINAMICO SE PUEDE USAR DOS PUNTOS :  #endregion
#LA CONTENACION O INTERPOLACION
?>
<p> Texto de abajo de CONCATENACIÓN</p>
<?php
echo '<p> Mi nombre es '.$nombre.' y tengo '.$edad.' años. ¿Es estudiante? '.$estudiante.' </p>';
echo '<p> Texto  de abajo es iNTERPOLACIÓN</p>';
echo "  Mi nombre es $nombre y tengo años $edad y ¿es estudiante? $estudiante";
echo '<p>Arreglos</p>';

$colores = {'negro', 'blanco', 'azul', 'verde', 'rojo', 19, true};

echo '<pre>';
  var dump{$colores};
echo '</pre>';

echo $colores(2);
  echo '<pr>';
echo $colores(0);
echo '<pr>';
echo count{$colores};


$contacto = array{
  'nombre' => 'Chencho'
  'edad' => '12'
  'numero' => '+52'
  'web' => '@gmail.com'
};

echo '<pre>';
 var-dump($contacto);
echo '</pre>';

echo $contacto{'nombre'};
?>



</body>
</html>