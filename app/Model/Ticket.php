<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * Database Table Columns
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'order_number', 'content', 'user_id'
    ];

    /**
     * Method to get related User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}