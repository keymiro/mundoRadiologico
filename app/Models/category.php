<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','user_id','category_id'];

    public function information(){
        return $this->hasMany(information::class);
    }
}
