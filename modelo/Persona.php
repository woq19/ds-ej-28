<?php

class Persona{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $ObraSocial;
    public $ListDocumentos = array();

        public function MostrarDatos(){
        echo 'Datos de la persona: <hr>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre: '.$this->Nombre.'<br>';
        echo 'Apellido: '.$this->Apellido.'<br>';
        echo 'Fecha de nacimiento: '.$this->FechaNacimiento.'<br>';
        echo '<hr>';
        echo 'Datos de Obra Social: '.'<hr>';
        echo 'Id: '.$this->ObraSocial->Id.'<br>';
        echo 'Razon social: '.$this->ObraSocial->RazonSocial.'<br>';
        echo 'Cuit: '.$this->ObraSocial->Cuit.'<br>';
        echo 'Sitio web: '.$this->ObraSocial->SitioWeb.'<br>';
        echo 'Telefono: '.$this->ObraSocial->Telefono.'<br>';
        echo '<hr>';
        echo 'Datos del documento :'.'<hr>';
        foreach($this->ListDocumentos as $Ld){
            echo 'Id: '.$Ld->Id.'<br>';
            echo 'Numero: '.$Ld->Numero.'<br>';
            echo '¿Esta habilitado?: '.$Ld->Habilitado.'<br>';
            echo 'Id: '.$Ld->TipoDocumento->Id.'<br>';
            echo 'Descripcion: '.$Ld->TipoDocumento->Descripcion.'<br>';
            echo '¿Esta habilitado?: '.$Ld->TipoDocumento->Habilitado.'<br>';
        }
    }

}