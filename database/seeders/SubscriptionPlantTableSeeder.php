<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubcriptionPlan;

class SubscriptionPlantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subctiptionPlans = [
            [
                'name' => 'Basic',
                'price'=> 200000,
                'active_period_in_months' => 3,
                'features' => json_encode(['feature', 'feature2']),
            ],
            [
                'name' => 'Premium',
                'price'=> 800000,
                'active_period_in_months' => 6,
                'features' => json_encode(['feature', 'feature2', 'feature3', 'feature4']),
            ],
        ];
        //buat insert ke file database seeder
        SubcriptionPlan::insert($subctiptionPlans);
    }
}
