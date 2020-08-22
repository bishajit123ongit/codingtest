<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{
    public function bufferPosting()
    {
        return $this->hasMany(BufferPosting::class);
    }
}
