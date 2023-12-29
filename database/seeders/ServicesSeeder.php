<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Passport Application', 'code' => 'PA'],
            ['name' => 'Visa Application', 'code' => 'VA'],
            ['name' => 'Student Visa Application', 'code' => 'VA-S'],
            ['name' => 'Medical Visa Application', 'code' => 'VA-M'],
        ];

        foreach ($services as $key => $service) {
            Service::updateOrCreate([
                'name' => $service['name'],
                'slug' => Str::slug($service['name']),
                'code' => $service['code'],
                'description' => 'This is for demo purpose'
            ]);
        }
    }
}
