<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BufferPosting extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function socialPostGroup()
    {
        return $this->belongsTo(SocialPostGroup::class,'group_id');
    }

    public function socialPost()
    {
        return $this->belongsTo(SocialPost::class,'post_id');
    }
}
