<?php


$dbmap['Roles']['has_many']['RolesOpciones'] = array("foreign_key"=>"role_id");
$dbmap['RolesOpciones']['belongs_to']['Roles'] = array("foreign_key"=>"id");

/*
$dbconfig['dev'] = array('192.168.5.10', 'ecolavados', 'root', 'Desarrollo2019', 'mysql', false, 'collate'=>'utf8_general_ci', 'charset'=>'utf8');
$dbconfig['prod'] = array('192.168.5.10', 'ecolavados', 'root', 'Desarrollo2019', 'mysql', false, 'collate'=>'utf8_general_ci', 'charset'=>'utf8');
*/

$dbconfig['dev'] = array('localhost','ecolavados', 'ecolavado', 'c4rt4g3n4#*', 'mysql', false, 'collate'=>'utf8_general_ci', 'charset'=>'utf8');
$dbconfig['prod'] = array('localhost', 'ecolavados', 'ecolavado', 'c4rt4g3n4#*', 'mysql', false, 'collate'=>'utf8_general_ci', 'charset'=>'utf8');
