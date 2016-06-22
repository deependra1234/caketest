<?php

namespace App\Utility;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GlobalVariable
 *
 * @author Deependra.Singh
 */
class GlobalVariable {

    static function getWorkType() {
        return array( ""=> 'Select', 1 => 'On Field', 2 => "Holiday/Leave");
    }

}

?>
