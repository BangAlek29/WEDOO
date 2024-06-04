<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $primaryKey = 'id_mobil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mobil',
        'nama_mobil',
        'merk',
        'kapasitas',
        'harga',
        'image_url',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_mobil)) {
                $model->id_mobil = $model->generateCustomId();
            }
        });
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('images')
            ->singleFile();
    }

    public function generateCustomId()
    {
        $prefix = 'MBL';
        $length = 2;

        do {
            DB::beginTransaction();

            try {
                $lastRecord = DB::table('mobils')->lockForUpdate()->orderBy('id_mobil', 'desc')->first();
                $lastIdNumber = $lastRecord ? intval(substr($lastRecord->id_mobil, strlen($prefix))) : 0;
                $newIdNumber = $lastIdNumber + 1;
                $newId = $prefix . str_pad($newIdNumber, $length, '0', STR_PAD_LEFT);

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } while (self::where('id_mobil', $newId)->exists());

        return $newId;
    }
}

