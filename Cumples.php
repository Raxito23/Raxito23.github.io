<?php
$canal = $_GET["opcion"];
$instrucciones = 'MODO DE USO: !cumpleaños (opción). Usa "!cumpleaños lista" para ver la lista de opciones disponibles.';
if (isset($canal) && $canal != "") {
    $prefijo = "El cumpleaños de ";
    $canales = array(
        "vhykka" => $prefijo . "Vhykka es el 8 de Junio 🐆",
        "raxi" => $prefijo . "Raxi es el 9 de marzo 🐻",
        "justix" => $prefijo . "Jus es el 27 de diciembre 🐼",
        "jan" => $prefijo . "Jan es el 30 de noviembre 🧁",
        "ingeniera" => $prefijo . "La igneniera es el 7 de diciembre 🍉",
        "pabli" => $prefijo . "Pabli es el 31 de marzo 🦁",
        "sofi" => $prefijo . "Sofi es el 17 de noviembre 🐬",
        "baby" => $prefijo . "Baby es el 18 de diciembre ⭐",
        "justina" => $prefijo . "Justina es el 6 de abril 💙"
    );
    if (array_key_exists($canal, $canales)) {
        echo $canales[$canal];
    } else if ($canal == "lista") {
        foreach ($canales as $un_canal => $valor) {
            echo $un_canal . " | ";
        }
    } else {
        echo $instrucciones;
    }
} else {
    echo $instrucciones;
}
?>
