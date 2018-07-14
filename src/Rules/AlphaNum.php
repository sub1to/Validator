<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rules;

/**
 * Name: `alphanum`
 *
 * This rule ensures a specific field contains only alphanumeric characters.
 */
class AlphaNum implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if(!$exists) {
            return false;
        }
        
        if(!is_string($value) || !ctype_alnum($value)) {
            return 'formvalidator_make_alpha_num';
        }
        
        return true;
    }
}