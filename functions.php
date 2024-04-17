<?php
if(isset($_GET['klienti_form']) || isset($_GET['klienti'])) {
    include 'functions/klienti.php';
}

function restructureFilesArray($files)
{
    $output = [];
    foreach ($files as $attrName => $valuesArray) {
        foreach ($valuesArray as $key => $value) {
            $output[$key][$attrName] = $value;
        }
    }
    return $output;
}
?>

