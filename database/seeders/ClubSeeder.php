<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Service;
use App\Models\TargetGroup;
use App\Models\Company;
use App\Models\SubscriptionType;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        // الحصول على الشركات
        $companies = Company::all();
        
        // الحصول على أنواع الاشتراكات
        $subscriptionTypes = SubscriptionType::all();
        
        $clubs = [
            [
                'name' => 'نادي الرياضة الذهبي',
                'description' => 'نادي رياضي متكامل يقدم أحدث التجهيزات والخدمات الرياضية للرجال والنساء',
                'website' => 'https://golden-sports.com',
                'email' => 'info@golden-sports.com',
                'phone' => '+966500000001',
                'whatsapp' => '+966500000001',
                'city' => 'الرياض',
                'country' => 'المملكة العربية السعودية',
                'district' => 'حي الملقا',
                'address' => 'شارع الأمير محمد بن سلمان',
                'latitude' => 24.7714,
                'longitude' => 46.6383,
                'company_id' => $companies[0]->id,
                'images' => [
                    'https://images.unsplash.com/photo-1534438327276-14e5300c3a48',
                    'https://images.unsplash.com/photo-1571902943202-507ec2618e8f'
                ],
                'services' => [
                    ['name' => 'كرة قدم', 'description' => 'ملعب كرة قدم معشب صناعي', 'icon' => 'fas fa-futbol'],
                    ['name' => 'سباحة', 'description' => 'مسبح أولمبي مغطى ومكيف', 'icon' => 'fas fa-swimming-pool'],
                    ['name' => 'لياقة بدنية', 'description' => 'صالة رياضية متكاملة', 'icon' => 'fas fa-dumbbell']
                ],
                'target_groups' => [
                    ['type' => 'men'],
                    ['type' => 'women'],
                    ['type' => 'youth', 'min_age' => 16, 'max_age' => 25]
                ],
                'subscription_types' => [
                    ['id' => $subscriptionTypes[2]->id, 'price' => 350], // شهري
                    ['id' => $subscriptionTypes[3]->id, 'price' => 900], // 3 شهور
                    ['id' => $subscriptionTypes[6]->id, 'price' => 2800], // سنوي
                ]
            ],
            [
                'name' => 'نادي النخبة الرياضي',
                'description' => 'نادي رياضي متخصص في التدريب الشخصي وبناء الأجسام',
                'website' => 'https://elite-fitness.com',
                'email' => 'info@elite-fitness.com',
                'phone' => '+966500000002',
                'whatsapp' => '+966500000002',
                'city' => 'جدة',
                'country' => 'المملكة العربية السعودية',
                'district' => 'حي الروضة',
                'address' => 'شارع فلسطين',
                'latitude' => 21.5433,
                'longitude' => 39.1728,
                'company_id' => $companies[1]->id,
                'images' => [
                    'https://images.unsplash.com/photo-1534258936925-c58bed479fcb',
                    'https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e'
                ],
                'services' => [
                    ['name' => 'تدريب شخصي', 'description' => 'برامج تدريب مخصصة', 'icon' => 'fas fa-user-friends'],
                    ['name' => 'كمال أجسام', 'description' => 'صالة مجهزة بأحدث المعدات', 'icon' => 'fas fa-dumbbell'],
                    ['name' => 'تغذية', 'description' => 'استشارات تغذية متخصصة', 'icon' => 'fas fa-apple-alt']
                ],
                'target_groups' => [
                    ['type' => 'men'],
                    ['type' => 'youth', 'min_age' => 18, 'max_age' => 30]
                ],
                'subscription_types' => [
                    ['id' => $subscriptionTypes[0]->id, 'price' => 60], // يومي
                    ['id' => $subscriptionTypes[2]->id, 'price' => 400], // شهري
                    ['id' => $subscriptionTypes[7]->id, 'price' => 450], // 12 حصة خلال شهر
                ]
            ],
            [
                'name' => 'نادي الأطفال السعيد',
                'description' => 'نادي متخصص في الأنشطة الرياضية والترفيهية للأطفال',
                'website' => 'https://happy-kids.com',
                'email' => 'info@happy-kids.com',
                'phone' => '+966500000003',
                'whatsapp' => '+966500000003',
                'city' => 'الدمام',
                'country' => 'المملكة العربية السعودية',
                'district' => 'حي الشاطئ',
                'address' => 'شارع الخليج',
                'latitude' => 26.4207,
                'longitude' => 50.0888,
                'company_id' => $companies[2]->id,
                'images' => [
                    'https://images.unsplash.com/photo-1547919307-1ecb10702e6f',
                    'https://images.unsplash.com/photo-1596464716127-f2a82984de30'
                ],
                'services' => [
                    ['name' => 'جمباز', 'description' => 'صالة جمباز مجهزة للأطفال', 'icon' => 'fas fa-child'],
                    ['name' => 'سباحة', 'description' => 'مسبح آمن للأطفال', 'icon' => 'fas fa-swimming-pool'],
                    ['name' => 'ألعاب حركية', 'description' => 'منطقة ألعاب حركية متكاملة', 'icon' => 'fas fa-gamepad']
                ],
                'target_groups' => [
                    ['type' => 'children', 'min_age' => 4, 'max_age' => 12]
                ],
                'subscription_types' => [
                    ['id' => $subscriptionTypes[1]->id, 'price' => 25], // ساعة
                    ['id' => $subscriptionTypes[0]->id, 'price' => 45], // يومي
                    ['id' => $subscriptionTypes[8]->id, 'price' => 550], // 12 حصة مفتوحة
                ]
            ],
            [
                'name' => 'نادي السيدات الراقي',
                'description' => 'نادي نسائي متكامل يوفر جميع الخدمات الرياضية والصحية للسيدات',
                'website' => 'https://ladies-club.com',
                'email' => 'info@ladies-club.com',
                'phone' => '+966500000004',
                'whatsapp' => '+966500000004',
                'city' => 'الرياض',
                'country' => 'المملكة العربية السعودية',
                'district' => 'حي الياسمين',
                'address' => 'شارع الأميرة نورة',
                'latitude' => 24.8174,
                'longitude' => 46.6274,
                'company_id' => $companies[0]->id,
                'images' => [
                    'https://images.unsplash.com/photo-1518611012118-696072aa579a',
                    'https://images.unsplash.com/photo-1574680096145-d05b474e2155'
                ],
                'services' => [
                    ['name' => 'يوجا', 'description' => 'صالة يوجا هادئة', 'icon' => 'fas fa-spa'],
                    ['name' => 'زومبا', 'description' => 'صالة رقص وزومبا', 'icon' => 'fas fa-music'],
                    ['name' => 'سبا', 'description' => 'خدمات سبا متكاملة', 'icon' => 'fas fa-hot-tub']
                ],
                'target_groups' => [
                    ['type' => 'women']
                ],
                'subscription_types' => [
                    ['id' => $subscriptionTypes[2]->id, 'price' => 320], // شهري
                    ['id' => $subscriptionTypes[4]->id, 'price' => 1600], // 6 شهور
                    ['id' => $subscriptionTypes[7]->id, 'price' => 420], // 12 حصة خلال شهر
                ]
            ],
            [
                'name' => 'نادي كبار السن النشط',
                'description' => 'نادي متخصص في الأنشطة الرياضية المناسبة لكبار السن',
                'website' => 'https://active-seniors.com',
                'email' => 'info@active-seniors.com',
                'phone' => '+966500000005',
                'whatsapp' => '+966500000005',
                'city' => 'جدة',
                'country' => 'المملكة العربية السعودية',
                'district' => 'حي الحمراء',
                'address' => 'شارع الأندلس',
                'latitude' => 21.5433,
                'longitude' => 39.1728,
                'company_id' => $companies[1]->id,
                'images' => [
                    'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b',
                    'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b'
                ],
                'services' => [
                    ['name' => 'تمارين خفيفة', 'description' => 'تمارين مناسبة لكبار السن', 'icon' => 'fas fa-walking'],
                    ['name' => 'علاج طبيعي', 'description' => 'خدمات علاج طبيعي', 'icon' => 'fas fa-heartbeat'],
                    ['name' => 'سباحة علاجية', 'description' => 'مسبح مجهز للسباحة العلاجية', 'icon' => 'fas fa-swimming-pool']
                ],
                'target_groups' => [
                    ['type' => 'seniors', 'min_age' => 60, 'max_age' => 80]
                ],
                'subscription_types' => [
                    ['id' => $subscriptionTypes[0]->id, 'price' => 40], // يومي
                    ['id' => $subscriptionTypes[2]->id, 'price' => 250], // شهري
                    ['id' => $subscriptionTypes[3]->id, 'price' => 650], // 3 شهور
                ]
            ]
        ];

        foreach ($clubs as $clubData) {
            $services = $clubData['services'];
            $targetGroups = $clubData['target_groups'];
            $subscriptionTypes = $clubData['subscription_types'];
            
            unset($clubData['services'], $clubData['target_groups'], $clubData['subscription_types']);
            
            $club = Club::create($clubData);

            foreach ($services as $service) {
                $club->services()->create($service);
            }

            foreach ($targetGroups as $group) {
                $club->targetGroups()->create($group);
            }
            
            // إضافة أنواع الاشتراكات للنادي
            foreach ($subscriptionTypes as $subscription) {
                $club->subscriptionTypes()->attach($subscription['id'], [
                    'price' => $subscription['price'],
                    'is_active' => true
                ]);
            }
        }
    }
}