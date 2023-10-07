<?php
class Cabecera
{
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
   
?>