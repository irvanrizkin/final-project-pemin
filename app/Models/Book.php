<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'books';
    protected $fillable = [
        // TODO: Insert your fillable fields
        'title', 'description', 'author',
        'year', 'synopsis', 'stock'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        // TODO: Insert your hidden fields
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'book_id');
    }
}
