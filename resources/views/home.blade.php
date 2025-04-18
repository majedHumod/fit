<x-layout>
    <div class="bg-gradient-to-b from-indigo-600 to-indigo-800">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    اكتشف أفضل الأندية الرياضية
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-indigo-100 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    ابحث عن النادي المثالي لك واستمتع بمجموعة متنوعة من الأنشطة الرياضية والخدمات المتميزة
                </p>
                <div class="mt-10">
                    <a href="{{ route('clubs.index') }}" class="inline-block bg-white px-8 py-3 rounded-full text-lg font-semibold text-indigo-600 hover:bg-indigo-50 transition-colors duration-300">
                        <i class="fas fa-search ml-2"></i>
                        استكشف الأندية
                    </a>
                </div>
            </div>
        </div>

        <!-- Featured Clubs Section -->
        <div class="bg-gray-50 py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 mb-12">أبرز الأندية الرياضية</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($featuredClubs as $club)
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
                            
                            <!-- Services Tags -->
                            <div class="mb-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach($club->services as $service)
                                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm flex items-center">
                                        @if($service->icon)
                                            <i class="{{ $service->icon }} ml-1"></i>
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

                <!-- View All Button -->
                <div class="text-center mt-12">
                    <a 
                        href="{{ route('clubs.index') }}" 
                        class="inline-block bg-indigo-600 px-8 py-3 rounded-full text-lg font-semibold text-white hover:bg-indigo-700 transition-colors duration-300"
                    >
                        <i class="fas fa-list-ul ml-2"></i>
                        عرض جميع الأندية
                    </a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 mb-12">مميزات الأندية</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-indigo-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-bolt text-2xl text-indigo-600"></i>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">مرافق حديثة</h3>
                        <p class="mt-2 text-gray-600">أحدث المعدات والمرافق الرياضية</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-indigo-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user-friends text-2xl text-indigo-600"></i>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">مدربون محترفون</h3>
                        <p class="mt-2 text-gray-600">فريق من المدربين المؤهلين</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-indigo-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-shield-alt text-2xl text-indigo-600"></i>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">بيئة آمنة</h3>
                        <p class="mt-2 text-gray-600">معايير سلامة وأمان عالية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>