<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getInTime()
    {
        return $this->in_time ? 'Si' : 'No';
    }

    public function getDeleted()
    {
        return $this->deleted ? 'Cancellato' : 'In arrivo';
    }
}
