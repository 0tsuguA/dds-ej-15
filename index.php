<?php
require_once 'modelo/tipoDocumento.php';
require_once 'modelo/documento.php';
require_once 'modelo/obraSocial.php';
require_once 'modelo/persona.php';

$os = new ObraSocial();
$os->setId(3);
$os->setRazonSocial('Camioneros');
$os->setCuit(65498);
$os->setSitioWeb('www.camionerosprimero.com');
$os->setTelefono(3416345681);


$td = new TipoDocumento();
$td->setId(1);
$td->setDescripcion('DNI');
$td->setHabilitado = True;

$td2 = new TipoDocumento();
$td2->setId(2);
$td2->setDescripcion('Pasaporte');
$td2->setHabilitado = True;

$doc = new Documento();
$doc->setId(1);
$doc->setNumero(40123123);
$doc->setHabilitado('True');
$doc->setTipoDocumento($td);

$doc2 = new Documento();
$doc2->setId(2);
$doc2->setNumero(50123123);
$doc2->setHabilitado = True;
$doc2->setTipoDocumento($td2);

$p = new Persona();
$p->setId(4);
$p->setNombre('Augusto');
$p->setApellido('Lopez');
$p->setFechaNacimiento('16/08/2002');
$p->setObraSocial($os);
$p->setDocumento($doc);
$p->setDocumento($doc2);
$p->MostrarDatos();
