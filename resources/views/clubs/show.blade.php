<x-app-layout>
    <div class="max-w-4xl mx-auto py-12 px-4" dir="rtl">
        <h1 class="text-3xl font-bold mb-6">{{ $club->name }}</h1>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <img src="{{ $club->images[0] }}" alt="{{ $club->name }}" class="w-full h-64 object-cover rounded-lg mb-6">
            <p class="text-gray-600 mb-6">{{ $club->description }}</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-xl font-semibold mb-4">معلومات الاتصال</h2>
                    <div class="space-y-2">
                        <p>البريد الإلكتروني: {{ $club->email }}</p>
                        <p>الهاتف: {{ $club->phone }}</p>
                        <p>الواتساب: {{ $club->whatsapp }}</p>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold mb-4">الموقع</h2>
                    <div class="space-y-2">
                        <p>المدينة: {{ $club->city }}</p>
                        <p>الحي: {{ $club->district }}</p>
                        <p>العنوان: {{ $club->address }}</p>
                    </div>
                </div>
            </div>

            <!-- Company Information -->
            @if($club->company)
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-4">الشركة المالكة</h2>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-900">{{ $club->company->name }}</h3>
                    <p class="text-gray-700 mt-1">رقم الهوية الاعتبارية: {{ $club->company->registration_number }}</p>
                    <p class="text-gray-700">المقر الرئيسي: {{ $club->company->headquarters_city }} - {{ $club->company->headquarters_address }}</p>
                </div>
            </div>
            @endif

            <!-- Subscription Types Section -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-4">أنواع الاشتراكات المتاحة</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($club->subscriptionTypes as $subscription)
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-900">{{ $subscription->name }}</h3>
                        <p class="text-blue-700 text-sm mt-1">{{ $subscription->description }}</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-blue-900 font-bold">{{ $subscription->pivot->price }} ريال</span>
                            @if($subscription->is_limited_sessions && $subscription->sessions_count)
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                                    {{ $subscription->sessions_count }} حصة
                                    @if($subscription->sessions_validity_days)
                                        (خلال {{ $subscription->sessions_validity_days }} يوم)
                                    @else
                                        (غير محدودة المدة)
                                    @endif
                                </span>
                            @else
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                                    @if($subscription->duration_type == 'day')
                                        {{ $subscription->duration_value }} يوم
                                    @elseif($subscription->duration_type == 'hour')
                                        {{ $subscription->duration_value }} ساعة
                                    @elseif($subscription->duration_type == 'month')
                                        {{ $subscription->duration_value }} شهر
                                    @elseif($subscription->duration_type == 'year')
                                        {{ $subscription->duration_value }} سنة
                                    @endif
                                </span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Services Section -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-4">الخدمات المتوفرة</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($club->services as $service)
                    <div class="bg-indigo-50 p-4 rounded-lg">
                        <div class="flex items-center mb-2">
                            @if($service->icon)
                                <div class="w-8 h-8 mr-2 flex items-center justify-center bg-indigo-100 rounded-full">
                                    <i class="{{ $service->icon }} text-indigo-600"></i>
                                </div>
                            @else
                                <div class="w-8 h-8 mr-2 flex items-center justify-center bg-indigo-100 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            @endif
                            <h3 class="font-semibold text-indigo-900">{{ $service->name }}</h3>
                        </div>
                        <p class="text-indigo-700 text-sm">{{ $service->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Target Groups Section -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-4">الفئات المستهدفة</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($club->targetGroups as $group)
                    <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full">
                        @if($group->type === 'youth')
                            شباب ({{ $group->min_age }}-{{ $group->max_age }} سنة)
                        @elseif($group->type === 'children')
                            أطفال
                        @elseif($group->type === 'women')
                            نساء
                        @elseif($group->type === 'men')
                            رجال
                        @else
                            كبار السن
                        @endif
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>