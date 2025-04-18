<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $companies = [
            [
                'name' => 'شركة الرياضة الذهبية',
                'registration_number' => '1000000001',
                'headquarters_city' => 'الرياض',
                'headquarters_address' => 'حي العليا، شارع العروبة',
                'email' => 'info@golden-sports.com',
                'phone' => '+966500000001',
                'website' => 'https://golden-sports.com',
                'description' => 'شركة متخصصة في إدارة الأندية الرياضية الفاخرة'
            ],
            [
                'name' => 'مجموعة النخبة الرياضية',
                'registration_number' => '1000000002',
                'headquarters_city' => 'جدة',
                'headquarters_address' => 'حي الروضة، شارع فلسطين',
                'email' => 'info@elite-fitness.com',
                'phone' => '+966500000002',
                'website' => 'https://elite-fitness.com',
                'description' => 'مجموعة متخصصة في إدارة أندية اللياقة البدنية وكمال الأجسام'
            ],
            [
                'name' => 'شركة أطفال المستقبل',
                'registration_number' => '1000000003',
                'headquarters_city' => 'الدمام',
                'headquarters_address' => 'حي الشاطئ، شارع الخليج',
                'email' => 'info@future-kids.com',
                'phone' => '+966500000003',
                'website' => 'https://future-kids.com',
                'description' => 'شركة متخصصة في إدارة الأندية والمراكز الترفيهية للأطفال'
            ]
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}