<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centrar Contenido en PHP</title>
</head>
<body>

<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  
  public function __construct($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }

  public function darEstilo()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('Mi primera cabecera con estilo','center');
$cabecera->darEstilo();
?>

</body>
</html>
