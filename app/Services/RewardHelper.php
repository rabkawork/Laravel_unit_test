<?php
namespace App\Services;

class RewardHelper
{   
    public function getLevel(float $totalSpent)
    {
        if ($totalSpent < 125 ) {
            return 0; // white
        }elseif ($totalSpent >= 125 && $totalSpent <= 999 ) {
            return 1; // blue
        }elseif ($totalSpent >= 1000 && $totalSpent <= 1999 ) {
            return 2; // silver
        }else{ //2000 & above
            return 3; // gold
        }
    }
}
