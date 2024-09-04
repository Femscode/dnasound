<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beat extends Model
{
    use HasFactory;
    protected $table = 'beats';
    protected $guarded = [];

    public function author() {
        return $this->belongsTo(User::class,'user_id','uuid');
    }
    public function folder() {
        return $this->belongsTo(Folder::class,'folder_id');
    }
    protected $casts = [
        'tags' => 'array',
        'instruments' =>  'array',
    ];
}
