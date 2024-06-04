<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pelanggan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pelanggan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pelanggan',
        'name',
        'email',
        'id_vendor',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_pelanggan)) {
                $model->id_pelanggan = $model->generateCustomId();
            }
        });
    }

    public function generateCustomId()
    {
        $prefix = 'PLG';
        $length = 2;

        do {
            DB::beginTransaction();

            $lastRecord = DB::table('pelanggans')->lockForUpdate()->orderBy('id_pelanggan', 'desc')->first();
            $lastIdNumber = $lastRecord ? intval(substr($lastRecord->id_pelanggan, strlen($prefix))) : 0;
            $newIdNumber = $lastIdNumber + 1;
            $newId = $prefix . str_pad($newIdNumber, $length, '0', STR_PAD_LEFT);

            DB::commit();

        } while (self::where('id_pelanggan', $newId)->exists());

        return $newId;
    }
}

