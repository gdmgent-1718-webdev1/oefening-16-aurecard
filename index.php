<?php

spl_autoload_register(function ($name) {
    $path = "${name}.php";
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);
});

$beeldhouwerk = new Kunstwerken\Beeldhouwerk();
$boek = new Kunstwerken\Boek();
$dans = new Kunstwerken\Dans();
$film = new Kunstwerken\Film();
$foto = new Kunstwerken\Foto();
$gedicht = new Kunstwerken\Gedicht();
$lied = new Kunstwerken\Lied();
$schilderij = new Kunstwerken\Schilderij();
$vaas = new Kunstwerken\Vaas();

echo var_dump($post1);
echo var_dump($post2);
echo var_dump($post3);