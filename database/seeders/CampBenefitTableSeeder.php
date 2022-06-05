<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id'   => 1,
                'name'      => 'Pro Techstack Kit',

            ],
            [
                'camp_id'   => 1,
                'name'      => 'iMac Pro 2021 & Display',
            ],
            [
                'camp_id'   => 1,
                'name'      => '1-1 Menthoring Program',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Final Project Sertifikate',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Ofline Course Video',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Feature Job Opportinity',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Premium Desaign Kit',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Website Builder',
            ],
            [
                'camp_id'   => 2,
                'name'      => '1-1 Methoring Program',
            ],
            [
                'camp_id'   => 2,
                'name'      => 'Final Project Certificate',
            ],
            [
                'camp_id'   => 2,
                'name'      => 'Ofline Course Video',
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
