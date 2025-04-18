<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">لوحة التحكم</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-indigo-50 p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-indigo-500 text-white mr-4">
                                    <i class="fas fa-building text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-indigo-600">إجمالي الأندية</p>
                                    <p class="text-2xl font-bold">5</p>
                                </div>
                            </div>
                            <a href="{{ route('clubs.index') }}" class="mt-4 text-indigo-600 hover:text-indigo-800 text-sm flex items-center">
                                عرض الأندية
                                <i class="fas fa-arrow-left mr-1"></i>
                            </a>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-500 text-white mr-4">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-green-600">الفئات المستهدفة</p>
                                    <p class="text-2xl font-bold">5</p>
                                </div>
                            </div>
                            <a href="#" class="mt-4 text-green-600 hover:text-green-800 text-sm flex items-center">
                                عرض الفئات
                                <i class="fas fa-arrow-left mr-1"></i>
                            </a>
                        </div>
                        
                        <div class="bg-yellow-50 p-6 rounded-lg shadow">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-500 text-white mr-4">
                                    <i class="fas fa-tag text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-yellow-600">أنواع الاشتراكات</p>
                                    <p class="text-2xl font-bold">9</p>
                                </div>
                            </div>
                            <a href="#" class="mt-4 text-yellow-600 hover:text-yellow-800 text-sm flex items-center">
                                عرض الاشتراكات
                                <i class="fas fa-arrow-left mr-1"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h2 class="text-xl font-semibold mb-4">الأندية الأخيرة</h2>
                        <div class="bg-white shadow overflow-hidden rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            اسم النادي
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            المدينة
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            الشركة المالكة
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            الإجراءات
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">نادي الرياضة الذهبي</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">الرياض</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">شركة الرياضة الذهبية</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('clubs.show', 1) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">عرض</a>
                                            <a href="#" class="text-green-600 hover:text-green-900 ml-2">تعديل</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">نادي النخبة الرياضي</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">جدة</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">مجموعة النخبة الرياضية</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('clubs.show', 2) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">عرض</a>
                                            <a href="#" class="text-green-600 hover:text-green-900 ml-2">تعديل</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">حذف</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">نادي الأطفال السعيد</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">الدمام</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">شركة أطفال المستقبل</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('clubs.show', 3) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">عرض</a>
                                            <a href="#" class="text-green-600 hover:text-green-900 ml-2">تعديل</a>
                                            <a href="#" class="text-red-600 hover:text-red-900">حذف</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>