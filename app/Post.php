<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'contenu', 'image', 'published_at', 'category_id',
    ];

    /**
     * this function will delete image on PostsController from storage
     * @return void
     */
    public function deleteImage ()
    {
        Storage::delete($this->image);
    }

    /**
     * here we make relation in category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
