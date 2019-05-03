<?php

namespace NtSchool\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}