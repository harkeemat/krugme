<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['rating', 'ratingable_id' , 'ratingable_type' , 'author_id', 'author_type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function rateable()
    {
        return $this->morphTo('ratingable');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function author()
    {
        return $this->morphTo('author');
    }
    public function scopeWhereRatingable_id($query, $model)
    {
        return $query->where('ratingable_id', $model->getKey())->where('ratingable_type', $model->getMorphClass());
    }
    public function scopeWhereAuthor_id($query, $model)
    {
        return $query->where('author_id', $model->getKey())->where('author_type', $model->getMorphClass());
    }
    public function rating() {
             return $this->belongsTo(Rating::class);
      }

}
