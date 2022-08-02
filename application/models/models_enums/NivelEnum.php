<?php
namespace models_enums;


/**
 * Description of nivel
 *
 * @author dhiego
 */
class NivelEnum {
    public static function setNivel($nivel){
        $nivelFormatado = "";
        switch ($nivel){
            case 1:
                $nivelFormatado = "BAIXO";
                break;
            case 2:
                $nivelFormatado = "MODERADO";
                break;
            case 3:
                $nivelFormatado = "ALTO";
                break;
            default:
                $nivelFormatado = "INDEFINIDO";
        }
        return $nivelFormatado;
    }
}
