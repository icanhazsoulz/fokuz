<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    // Override record creation method to assign a role
    protected function handleRecordCreation(array $data): Model
    {
        $role = $data['role'];
        unset($data['role']);
        $record = static::getModel()::create($data);
        $record->assignRole($role);

        return $record;
    }
}
