<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'NIM' => $input['nim'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'program_studi' => $input['program_studi'],
            'gender' => $input['gender'],
            'no_telp' => $input['no_telp'],
            'ipk' => $input['ipk'],
            'total_sks' => $input['total_sks'],
            'role' => 'mahasiswa',
            'password' => Hash::make($input['password']),
        ]);
    }
}
