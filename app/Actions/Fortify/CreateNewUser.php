<?php

namespace App\Actions\Fortify;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    public function create(array $data)
    {

        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'username' =>['required', 'string', 'max:20'],
            'password' => $this->passwordRules(),
        ])->validate();


        return DB::transaction(function () use ($data) {

            //creates users
            $user = new User();
            $user->username = strtolower($data['username']);
            $user->name = $data['name'];
            $user->password = Hash::make($data['password']);
            $user->email = $data['email'];
            $user->save();
            return $user;

        });

    }
}
