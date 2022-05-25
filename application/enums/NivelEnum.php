<?php
namespace enums;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

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
