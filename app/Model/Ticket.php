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
        'id', 'title', 'content', 'alias'
    ];

    /**
     * Method to get related Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne(Order::class, 'ticket_id', 'id');
    }
}