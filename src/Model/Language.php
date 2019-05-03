<?php

namespace NtSchool\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}