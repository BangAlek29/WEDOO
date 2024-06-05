<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_transaksi',
        'total_bayar',
        'tgl_transaksi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_transaksi)) {
                $model->id_transaksi = $model->generateCustomId();
            }
        });
    }

    public function generateCustomId()
    {
        $prefix = '202406';
        $length = 2;

        do {
            DB::beginTransaction();

            $lastRecord = DB::table('transaksis')->lockForUpdate()->orderBy('id_transaksi', 'desc')->first();
            $lastIdNumber = $lastRecord ? intval(substr($lastRecord->id_transaksi, strlen($prefix))) : 0;
            $newIdNumber = $lastIdNumber + 1;
            $newId = $prefix . str_pad($newIdNumber, $length, '0', STR_PAD_LEFT);

            DB::commit();

        } while (self::where('id_transaksi', $newId)->exists());

        return $newId;
    }
}
