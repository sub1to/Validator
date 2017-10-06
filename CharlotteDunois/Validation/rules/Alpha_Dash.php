<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Docs: https://laravel.com/docs/5.2/validation
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

class Alpha_Dash implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, \CharlotteDunois\Validation\Validator $validator) {
        if(mb_ereg("/^([^A-Za-z\-_]+)$/i", $value)) {
            return 'formvalidator_make_alpha_dash';
        }
        
        return true;
    }
}