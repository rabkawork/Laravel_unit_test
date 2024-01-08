<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\RewardHelper;

class UserController extends Controller
{
    private $rewardHelper;

    public function __construct(RewardHelper $rewardHelper) {
        $this->rewardHelper = $rewardHelper;
    }

    public function get_reward_level(Request $request): JsonResponse
    {
        $totalSpent = array_sum($request->only('history','current'));
        
        $rewardLevel = $this->rewardHelper->getLevel( floatval($totalSpent));

        return response()->json(['level'=>$rewardLevel]);
    }
    
}
