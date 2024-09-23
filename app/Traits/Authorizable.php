<?php
namespace App\Traits;

trait Authorizable{
    public static function middleware(): array
    {
        $resource = static::$permissionName;

        return [
            // 'index' => ["permission:read.{$resource}"],
            // 'show' => ["permission:read.{$resource}"],
            // 'create' => ["permission:create.{$resource}"],
            // 'store' => ["permission:create.{$resource}"],
            // 'edit' => ["permission:update.{$resource}"],
            // 'update' => ["permission:update.{$resource}"],
            // 'destroy' => ["permission:delete.{$resource}"],
        ];
    }
}
