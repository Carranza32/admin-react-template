<?php

namespace App\Traits;

trait RecordSignature
{
    static $record = true;

    protected static function boot()
    {
        parent::boot();

        if (auth()->user()) {
            static::creating(function ($model) {
                $model->created_by = auth()->user()->id;

                if (array_key_exists('us_ingreso', $model->attributes)) {
                    $model->us_ingreso = auth()->user()->id;
                }
            });

            static::updating(function ($model) {
                $model->updated_by = auth()->user()->id;
            });

            static::deleting(function ($model) {
                $model->deleted_by = auth()->user()->id;
                if (array_key_exists('is_active', $model->attributes)) {
                    $model->is_active = 0;
                }
                $model->saveQuietly();
            });
        }
    }


}
