<?php


//Datos de conexion a la base de datos
$sDBHost = '';
$sDBName = '';
$sDBUsr = '';
$sDBPsw = '';
$sDBSchemaDomainsData = ''; //Esquema de la base de datos donde se encuentran los datos necesarios para el proceso de desnormalización (dominio y dominio_valor)
$sDBSchemaCatalog = ''; //Esquema donde se crearan las tablas desnormalizadas

//Usuarios dueño de las tablas
$sDBOwner = '';

//Usuarios que deben estar asignados a las tablas
$aDBGrantUsers = array();

//Listado de tablas a procesar
$aTablas = array();

$aTablas[] = 'public.centros_poblados';
$aTablas[] = 'public.barrios';
$aTablas[] = 'public.edificio_religioso';
$aTablas[] = 'public.centros_culturales';
$aTablas[] = 'public.instalacion_deportiva_y_de_esparcimiento';
$aTablas[] = 'public.edificio_bibliotecas';
$aTablas[] = 'public.linea_de_transmision_electrica';
$aTablas[] = 'public.torre_de_telecomunicaciones';
$aTablas[] = 'public.edificio_gubernamental';
$aTablas[] = 'public.edificio_de_comunicaciones';
$aTablas[] = 'public.espacio_verde';
$aTablas[] = 'public.areas_de_cementerio';
$aTablas[] = 'public.puntos_de_puente';
$aTablas[] = 'public.estacion_de_omnibus';
$aTablas[] = 'public.estacion_de_servicio';
$aTablas[] = 'public.corriente_de_agua';
$aTablas[] = 'public.corriente_de_agua_perenne';
$aTablas[] = 'public.edificio_de_salud';
$aTablas[] = 'public.establecimiento_educativo';
$aTablas[] = 'public.edificio_de_seguridad';
$aTablas[] = 'public.cuartel_de_bomberos';
$aTablas[] = 'public.red_vial_primaria';
$aTablas[] = 'public.red_vial_secundaria';
$aTablas[] = 'public.red_vial_terciaria';
$aTablas[] = 'public.red_vial_urbana';
$aTablas[] = 'public.ferrocarril';
$aTablas[] = 'public.estacion_de_ferrocarril';
$aTablas[] = 'public.departamento';
$aTablas[] = 'public.municipio_y_comuna';
$aTablas[] = 'public.areas_protegidas';
$aTablas[] = 'public.municipio';
$aTablas[] = 'public.planta_urbana';
$aTablas[] = 'public.manzanas';
$aTablas[] = 'public.parcelamiento';
$aTablas[] = 'public.fracciones';
$aTablas[] = 'public.radio_censal';