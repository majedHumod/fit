<?php

namespace Database\Seeders;

use App\Models\SubscriptionType;
use Illuminate\Database\Seeder;

class SubscriptionTypeSeeder extends Seeder
{
    public function run(): void
    {
        $subscriptionTypes = [
            [
                'name' => 'اشتراك يومي',
                'description' => 'دخول ليوم واحد فقط',
                'duration_type' => 'day',
                'duration_value' => 1,
                'is_limited_sessions' => false,
                'price' => 50
            ],
            [
                'name' => 'اشتراك ساعة',
                'description' => 'دخول لمدة ساعة واحدة فقط',
                'duration_type' => 'hour',
                'duration_value' => 1,
                'is_limited_sessions' => false,
                'price' => 30
            ],
            [
                'name' => 'اشتراك شهري',
                'description' => 'اشتراك لمدة شهر كامل',
                'duration_type' => 'month',
                'duration_value' => 1,
                'is_limited_sessions' => false,
                'price' => 300
            ],
            [
                'name' => 'اشتراك 3 شهور',
                'description' => 'اشتراك لمدة ثلاثة شهور',
                'duration_type' => 'month',
                'duration_value' => 3,
                'is_limited_sessions' => false,
                'price' => 800
            ],
            [
                'name' => 'اشتراك 6 شهور',
                'description' => 'اشتراك لمدة ستة شهور',
                'duration_type' => 'month',
                'duration_value' => 6,
                'is_limited_sessions' => false,
                'price' => 1500
            ],
            [
                'name' => 'اشتراك 9 شهور',
                'description' => 'اشتراك لمدة تسعة شهور',
                'duration_type' => 'month',
                'duration_value' => 9,
                'is_limited_sessions' => false,
                'price' => 2000
            ],
            [
                'name' => 'اشتراك سنوي',
                'description' => 'اشتراك لمدة سنة كاملة',
                'duration_type' => 'year',
                'duration_value' => 1,
                'is_limited_sessions' => false,
                'price' => 2500
            ],
            [
                'name' => '12 حصة خلال شهر',
                'description' => '12 حصة يجب استخدامها خلال شهر واحد',
                'duration_type' => 'sessions',
                'duration_value' => null,
                'is_limited_sessions' => true,
                'sessions_count' => 12,
                'sessions_validity_days' => 30,
                'price' => 400
            ],
            [
                'name' => '12 حصة مفتوحة',
                'description' => '12 حصة بدون تاريخ انتهاء',
                'duration_type' => 'sessions',
                'duration_value' => null,
                'is_limited_sessions' => true,
                'sessions_count' => 12,
                'sessions_validity_days' => null,
                'price' => 500
            ]
        ];

        foreach ($subscriptionTypes as $type) {
            SubscriptionType::create($type);
        }
    }
}