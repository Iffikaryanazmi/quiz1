<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Played;

class Played extends Model
{
    protected $table = "tb_played";

    protected $primaryKey = 'play_id'; 

    protected $fillable = ['play_id_track', 'play_date'];

    
}
