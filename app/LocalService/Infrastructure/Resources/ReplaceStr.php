<?php

namespace App\LocalService\Infrastructure\Resources;

trait ReplaceStr
{
    private function replaceStr($value): string
    {
        //Reemplazamos la A y a
        $value = str_replace(
            array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
            array('A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
            $value
        );

        //Reemplazamos la E y e
        $value = str_replace(
            array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
            array('E', 'E', 'E', 'E', 'E', 'E', 'E', 'E'),
            $value );

        //Reemplazamos la I y i
        $value = str_replace(
            array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
            array('I', 'I', 'I', 'I', 'I', 'I', 'I', 'I'),
            $value );

        //Reemplazamos la O y o
        $value = str_replace(
            array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
            array('O', 'O', 'O', 'O', 'O', 'O', 'O', 'O'),
            $value );

        //Reemplazamos la U y u
        $value = str_replace(
            array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
            array('U', 'U', 'U', 'U', 'U', 'U', 'U', 'U'),
            $value );
        return strtoupper($value);
    }
}
