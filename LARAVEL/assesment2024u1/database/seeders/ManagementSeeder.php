<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Management;
use Illuminate\Database\Seeder;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $managements = Management::factory(10)
            ->has(Image::factory()->count(10))
            ->create();

        $managements->each(function ($management) {
            $randomManagement = Management::inRandomOrder()
                ->where('id', '!=', $management->id)
                ->first();

            $management->managements()->associate($randomManagement)->save();
        });
    }
}
