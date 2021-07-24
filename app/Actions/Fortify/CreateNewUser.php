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

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:25'],
            'lastname' => ['required', 'string', 'max:25'],
            'phone' => ['required', 'string', 'max:11'],
            'age' => ['required', 'integer'],
            'gender' => ['required', 'integer'],
            'birth' => ['required', 'date'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();
        $input['name'] = $input['firstname'].' '.$input['lastname'];
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        DB::table('role_user')->insert(['user_id' => $user->id,'role_id' => 2]);
        return $user;
    }
}
