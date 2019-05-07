<?php

namespace App\Modeles;

use DB;

use Illuminate\Database\Eloquent\Model;



class Conference extends Model
{
    //
    public function getLesConferences() {
        $lesConferences= DB::table('Conference')->get();
        return $lesConferences;
    }
}
