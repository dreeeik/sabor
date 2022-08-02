<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace controllers_interfaces;

/**
 *
 * @author dhieg
 */
interface LoginCheckable {
    function checkSessionDB($username): bool;
    
    function checkSession(): bool;
}