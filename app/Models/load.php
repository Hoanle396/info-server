<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class load extends Model
{
    use HasFactory;
    protected $fillable=[
        'ip',
    ];
    protected $table="loads";
    protected $primaryKey="id";
}
