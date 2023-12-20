<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek_uas extends Model
{
    use HasFactory;
    protected $table = 'projek_uas';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'level', 'type' ,'attribute'];
}
