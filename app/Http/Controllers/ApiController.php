<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApiController extends Controller
{

    public function getPlayers()
    {
        $players=DB::Select('select * from players');
        return response()->json($players);
    }

    public function getPlayerProfile($PlayerID)
    {
        $playerProfile=DB::Select('select * from playersprofile where playerid=?',[$PlayerID]);
        return response()->json($playerProfile);
    }
}
