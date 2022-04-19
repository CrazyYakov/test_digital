<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * int $id
 * mixed $data
 */
class Request extends Model
{
    public $timestamps = false;

    protected $table = 'requests';

    protected $fillable = ['data'];

    public static function addRequest(array $data)
    {
        return self::create([
            'data' => json_encode($data)
        ]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setData( $data)
    {
        $this->data = $data;

        return $this;
    }
}
