<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Answer extends Model
{
    use HasFactory;

    public function user() {

        return $this->belongsTo(User::class, 'foreign_key');

    }

    public function question() {

        return $this->belongsTo(Question::class, 'foreign_key');
    }
}