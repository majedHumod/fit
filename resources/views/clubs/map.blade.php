<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">خريطة الأندية الرياضية</h1>
            <p class="mt-2 text-gray-600">اكتشف مواقع الأندية الرياضية في مختلف المدن</p>
        </div>
        
        <!-- محرك البحث والفلترة -->
        <x-search-filter 
            :action="route('clubs.map')" 
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
                <a href="{{ route('clubs.map') }}" class="text-indigo-600 hover:text-indigo-800">
                    <span>إزالة الفلاتر</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            @if($clubs->isEmpty())
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center mb-6">
                    <p class="text-yellow-700">لم يتم العثور على أندية تطابق معايير البحث.</p>
                    <p class="text-yellow-600 mt-2">يرجى تعديل معايير البحث والمحاولة مرة أخرى.</p>
                </div>
            @else
                <div id="map" class="h-[600px] w-full rounded-lg"></div>
            @endif
        </div>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($clubs as $club)
            <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-all duration-300 cursor-pointer club-card"
                 onclick="focusClub({{ $club->latitude }}, {{ $club->longitude }}, '{{ $club->name }}')">
                <h3 class="text-lg font-semibold text-gray-900">{{ $club->name }}</h3>
                <div class="flex items-center mt-1">
                    <i class="fas fa-map-marker-alt text-indigo-600 ml-1"></i>
                    <span class="text-gray-600">{{ $club->city }} - {{ $club->district }}</span>
                    
                    @if($club->company)
                    <span class="mr-2 px-2 py-0.5 bg-yellow-100 text-yellow-800 rounded-full text-xs">
                        {{ $club->company->name }}
                    </span>
                    @endif
                </div>
                
                <p class="text-sm text-gray-500 mt-1">{{ $club->address }}</p>
                
                <div class="mt-2 flex flex-wrap gap-1">
                    @foreach($club->services->take(3) as $service)
                    <span class="px-2 py-0.5 bg-indigo-100 text-indigo-800 rounded-full text-xs flex items-center">
                        @if($service->icon)
                            <i class="{{ $service->icon }} ml-1"></i>
                        @endif
                        {{ $service->name }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- إضافة CSS الخاص بـ Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <!-- إضافة مكتبة Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <script>
        let map;
        let markers = [];
        
        document.addEventListener('DOMContentLoaded', function() {
            @if(!$clubs->isEmpty())
            // تهيئة الخريطة
            map = L.map('map').setView([24.7136, 46.6753], 6);
            
            // إضافة طبقة الخريطة
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // إضافة العلامات للأندية
            @foreach($clubs as $club)
                addMarker(
                    {{ $club->latitude }},
                    {{ $club->longitude }},
                    "{{ $club->name }}",
                    "{{ $club->city }}",
                    "{{ $club->address }}"
                );
            @endforeach
            
            // ضبط حدود الخريطة لتشمل جميع العلامات
            if (markers.length > 0) {
                const bounds = [];
                markers.forEach(marker => {
                    bounds.push([marker.lat, marker.lng]);
                });
                map.fitBounds(bounds);
            }
            @endif
        });

        function addMarker(lat, lng, name, city, address) {
            const marker = L.marker([lat, lng])
                .bindPopup(`
                    <div dir="rtl" style="text-align: right;">
                        <h3 style="font-weight: bold; margin-bottom: 5px;">${name}</h3>
                        <p style="margin: 0;">${city}</p>
                        <p style="margin: 5px 0 0; color: #666;">${address}</p>
                    </div>
                `)
                .addTo(map);
            
            markers.push({ marker, lat, lng });
        }

        function focusClub(lat, lng, name) {
            map.setView([lat, lng], 15);
            
            const marker = markers.find(m => m.lat === lat && m.lng === lng);
            if (marker) {
                marker.marker.openPopup();
            }
        }
    </script>

    <style>
        .club-card {
            transition: all 0.3s ease;
        }
        .club-card:hover {
            transform: translateY(-2px);
        }
    </style>
</x-app-layout>