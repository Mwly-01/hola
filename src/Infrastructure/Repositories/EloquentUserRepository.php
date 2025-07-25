<?php
namespace App\Infrastructure\Repositories;



use App\Domain\Models\User;
use App\Domain\Repositories\UserRepositoryInterface;
use Exception;

class EloquentUserRepository implements UserRepositoryInterface
{
   public function create(array $data):User{

    $exists = User::where('email', $data['email'])->first();
    if($exists){
        throw new Exception('User already exists');
    }
    return User::create($data);
   }
}