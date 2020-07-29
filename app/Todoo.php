<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Step;
class Todoo extends Model
{
    protected $fillable = ['title','completed','incompleted','user_id','description'];
      
    public function steps()
    {
        return $this->hasMany(Step::class);
    }
   
}
