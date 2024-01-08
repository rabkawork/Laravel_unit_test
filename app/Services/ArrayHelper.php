<?php
namespace App\Services;

class ArrayHelper
{
    public function hasUniqueValues(Array $origLetters): bool
    {
        // METHOD 1: not as fast as method (0.10-14s)
        // // change keys to lower case
        // $letters = array_change_key_case(array_flip($origLetters));
        // // get flip array and get unique keys
        // $unique =  array_flip(array_keys(array_change_key_case($letters)));
        
        // METHOD 2: consistently fast (0.10-12s)
        // transform values to lower case
        $letters = array_map('strtolower', $origLetters);
        // get array_unique
        $unique = array_unique($letters);

        // compare the two arrays
        if ( $unique !== $letters ){
            return false;
        }
        return true;
    }    
}
