<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArrayHelper;

class AlphabetController extends Controller
{
    private $arrayHelper;

    /**
     * Inject our Array Service
     *
     * @param ArrayHelper $checker
     */
    public function __construct(ArrayHelper $arrayHelper) {
        $this->arrayHelper = $arrayHelper;
    }
    /**
     * check if array of letters passed has unique values
     *
     * @param Request $request
     * @return void
     */
    public function check(Request $request)
    {
        $valesAreUnique = $this->arrayHelper->hasUniqueValues($request->all());
        if(!$valesAreUnique){
            return response()->json(['status'=>'failed'], 420);
        }
        return response()->json(['status'=>'success'], 200);
    }
}
