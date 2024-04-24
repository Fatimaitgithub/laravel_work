<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthenticationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "father_name" => "Admin",
            "cnic" => "33103-3747483-3",
            "email" => "admin@admin.com",
            "password" => Hash::make('password'),
            "email_verified_at" => now(),
            "contact_no" => "0373-7594746",
            "gender" => "Male",
            "date_of_birth" => "01,Oct,2000",
            "address" => "Faisalabad",
            "is_email_verified" => 1,
            "is_active" => 1,
            "role_assign" => "Admin",
        ]);
    }
}
