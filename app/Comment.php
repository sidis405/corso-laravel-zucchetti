<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use \Spiritix\LadaCache\Database\LadaCacheTrait;

    public function commentable()
    {
        return $this->morphTo();
    }

    // appartiene a 1 User // user() // belongsTo
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
