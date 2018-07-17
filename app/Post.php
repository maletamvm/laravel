<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function getImagePath()
    {
        return Storage::url($this->image);
    }
}
