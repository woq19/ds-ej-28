<?php

require_once 'modelo/Documento.php';
require_once 'modelo/ObraSocial.php';
require_once 'modelo/Persona.php';
require_once 'modelo/TipoDocumento.php';

$Os = new ObraSocial;
$Os->Id=1;
$Os->RazonSocial='Esencial';
$Os->Cuit='11-256987431-5';
$Os->SitioWeb='www.esencial.com.ar';
$Os->Telefono=4658796;

$Td1 = new TipoDocumento;
$Td1->Id=1;
$Td1->Descripcion='DNI';
$Td1->Habilitado=True;

$Td2= new TipoDocumento;
$Td2->Id=2;
$Td2->Descripcion='Pasaporte';
$Td2->Habilitado=True;

$P = new Persona;
$P->Id=1;
$P->Nombre='Walter';
$P->Apellido='Quintana';
$P->FechaNacimiento='19/05/1996';
$P->ObraSocial=$Os;

$D1 = new Documento;
$D1->Id=1;
$D1->Numero=40123123;
$D1->Habilitado= true;
$D1->TipoDocumento=$Td1;

$D2 = new Documento;
$D2->Id=2;
$D2->Numero=50123123;
$D2->Habilitado= true;
$D2->TipoDocumento=$Td2;

$P->ListDocumentos []=$D1;
$P->ListDocumentos []=$D2;

$P->MostrarDatos();