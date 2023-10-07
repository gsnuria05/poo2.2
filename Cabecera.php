<?php
class Cabecera
{
 private $titulo;   
 /**
  * Get the value of titulo
  */
 public function getTitulo()
 {
  return $this->titulo;
 }

 /**
  * Set the value of titulo
  */
 public function setTitulo($titulo): self
 {
  $this->titulo = $titulo;

  return $this;
 }
}
    

   
?>