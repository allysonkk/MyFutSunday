<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function register(Request $request) {
        $player = Player::firstOrCreate(
            [
                'name' => $request->player['name'], 
                'skill' => $request->player['skill']
            ]
        );
    }
    public function players() {
        return Player::all();
    }
}
