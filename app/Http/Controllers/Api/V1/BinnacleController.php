<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Binnacle;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BinnacleController extends Controller
{
    public static function Log($data, $type, User $user)
    {
        $binnacle = Binnacle::create([            
            'table' => $data->table,
            'table_id' => $data->id,
            'table_uuid' => $data->uuid,
            'type' => $type,
            'user_id' => $user->id,
            'user_uuid' => $user->uuid,
            'time' => Carbon::now(),
        ]);         
        $binnacle->save();
    }
}
