<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h2 class="text-xl font-semibold mb-4">البحث والتصفية</h2>
    
    <form action="{{ $action }}" method="GET" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- البحث بالاسم -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">اسم النادي</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ request('name') }}"
                    placeholder="ابحث باسم النادي" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
            </div>
            
            <!-- البحث بالمدينة -->
            <div>
                <label for="city" class="block text-sm font-medium text-gray-700 mb-1">المدينة</label>
                <select 
                    name="city" 
                    id="city" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">جميع المدن</option>
                    @foreach($cities as $city)
                        <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- البحث بالحي -->
            <div>
                <label for="district" class="block text-sm font-medium text-gray-700 mb-1">الحي</label>
                <input 
                    type="text" 
                    name="district" 
                    id="district" 
                    value="{{ request('district') }}"
                    placeholder="ابحث بالحي" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
            </div>
            
            <!-- البحث بالشركة المالكة -->
            <div>
                <label for="company_id" class="block text-sm font-medium text-gray-700 mb-1">الشركة المالكة</label>
                <select 
                    name="company_id" 
                    id="company_id" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">جميع الشركات</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ request('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- البحث بنوع الاشتراك -->
            <div>
                <label for="subscription_type_id" class="block text-sm font-medium text-gray-700 mb-1">نوع الاشتراك</label>
                <select 
                    name="subscription_type_id" 
                    id="subscription_type_id" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">جميع أنواع الاشتراكات</option>
                    @foreach($subscriptionTypes as $type)
                        <option value="{{ $type->id }}" {{ request('subscription_type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- البحث بالخدمات -->
            <div>
                <label for="service" class="block text-sm font-medium text-gray-700 mb-1">الخدمة</label>
                <select 
                    name="service" 
                    id="service" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">جميع الخدمات</option>
                    @foreach($services as $service)
                        <option value="{{ $service }}" {{ request('service') == $service ? 'selected' : '' }}>{{ $service }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- البحث بالفئة المستهدفة -->
            <div>
                <label for="target_group" class="block text-sm font-medium text-gray-700 mb-1">الفئة المستهدفة</label>
                <select 
                    name="target_group" 
                    id="target_group" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">جميع الفئات</option>
                    <option value="children" {{ request('target_group') == 'children' ? 'selected' : '' }}>أطفال</option>
                    <option value="youth" {{ request('target_group') == 'youth' ? 'selected' : '' }}>شباب</option>
                    <option value="men" {{ request('target_group') == 'men' ? 'selected' : '' }}>رجال</option>
                    <option value="women" {{ request('target_group') == 'women' ? 'selected' : '' }}>نساء</option>
                    <option value="seniors" {{ request('target_group') == 'seniors' ? 'selected' : '' }}>كبار السن</option>
                </select>
            </div>
            
            <!-- البحث بنطاق السعر -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">نطاق السعر (ريال)</label>
                <div class="flex space-x-2 rtl:space-x-reverse">
                    <input 
                        type="number" 
                        name="min_price" 
                        placeholder="الحد الأدنى" 
                        value="{{ request('min_price') }}"
                        class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    >
                    <input 
                        type="number" 
                        name="max_price" 
                        placeholder="الحد الأقصى" 
                        value="{{ request('max_price') }}"
                        class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
            
            <!-- البحث بالفئة العمرية -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">الفئة العمرية (سنة)</label>
                <div class="flex space-x-2 rtl:space-x-reverse">
                    <input 
                        type="number" 
                        name="min_age" 
                        placeholder="من عمر" 
                        value="{{ request('min_age') }}"
                        class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    >
                    <input 
                        type="number" 
                        name="max_age" 
                        placeholder="إلى عمر" 
                        value="{{ request('max_age') }}"
                        class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    >
                </div>
            </div>
        </div>
        
        <div class="flex justify-between">
            <button 
                type="submit" 
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                بحث
            </button>
            
            <a 
                href="{{ $action }}" 
                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
            >
                إعادة ضبط
            </a>
        </div>
    </form>
</div>