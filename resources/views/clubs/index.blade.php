<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">الأندية الرياضية</h1>
        
        <!-- محرك البحث والفلترة -->
        <x-search-filter 
            :action="route('clubs.index')" 
            :cities="$cities" 
            :services="$services" 
            :subscriptionTypes="$subscriptionTypes" 
            :companies="$companies" 
            :targetGroups="$targetGroups" 
        />
        
        <!-- عرض نتائج البحث -->
        <div class="mb-6 flex justify-between items-center">
            <p class="text-gray-600">تم العثور على {{ $clubs->count() }} نادي</p>
            
            @if(request()->anyFilled(['name', 'city', 'district', 'company_id', 'subscription_type_id', 'service', 'target_group', 'min_price', 'max_price', 'min_age', 'max_age']))
                <a href="{{ route('clubs.index') }}" class="text-indigo-600 hover:text-indigo-800">
                    <span>إزالة الفلاتر</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif
        </div>
        
        @if($clubs->isEmpty())
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
                <p class="text-yellow-700">لم يتم العثور على أندية تطابق معايير البحث.</p>
                <p class="text-yellow-600 mt-2">يرجى تعديل معايير البحث والمحاولة مرة أخرى.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($clubs as $club)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                        <div class="relative h-48">
                            <img 
                                src="{{ $club->images[0] }}" 
                                alt="{{ $club->name }}" 
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 right-4">
                                <h3 class="text-xl font-bold text-white">{{ $club->name }}</h3>
                                <p class="text-sm text-gray-200">{{ $club->city }}</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $club->description }}</p>
                            
                            <!-- Company Badge -->
                            @if($club->company)
                            <div class="mb-4">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">
                                    {{ $club->company->name }}
                                </span>
                            </div>
                            @endif
                            
                            <!-- Subscription Types -->
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 mb-2">الاشتراكات المتاحة:</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($club->subscriptionTypes->take(3) as $subscription)
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                        {{ $subscription->name }}
                                    </span>
                                    @endforeach
                                    @if($club->subscriptionTypes->count() > 3)
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                        +{{ $club->subscriptionTypes->count() - 3 }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Services Tags -->
                            <div class="mb-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach($club->services as $service)
                                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm flex items-center">
                                        @if($service->icon)
                                            <i class="{{ $service->icon }} mr-1 text-indigo-600"></i>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        @endif
                                        {{ $service->name }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Target Groups -->
                            <div class="mb-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach($club->targetGroups as $group)
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
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

                            <div class="mt-4">
                                <a 
                                    href="{{ route('clubs.show', $club) }}" 
                                    class="inline-flex items-center text-indigo-600 hover:text-indigo-800"
                                >
                                    عرض التفاصيل
                                    <svg class="w-5 h-5 mr-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>