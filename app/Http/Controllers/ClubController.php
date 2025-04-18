<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Service;
use App\Models\SubscriptionType;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClubController extends Controller
{
    public function index(Request $request): View
    {
        $query = Club::with(['services', 'targetGroups', 'company', 'subscriptionTypes']);
        
        // تطبيق الفلاتر
        $query = $this->applyFilters($request, $query);
        
        $clubs = $query->get();
        
        // البيانات اللازمة للفلاتر
        $cities = Club::distinct()->pluck('city');
        $services = Service::distinct()->pluck('name');
        $subscriptionTypes = SubscriptionType::all();
        $companies = Company::all();
        $targetGroups = ['children', 'youth', 'men', 'women', 'seniors'];
        
        return view('clubs.index', compact(
            'clubs', 
            'cities', 
            'services', 
            'subscriptionTypes', 
            'companies', 
            'targetGroups'
        ));
    }

    public function show(Club $club): View
    {
        $club->load(['services', 'targetGroups', 'company', 'subscriptionTypes']);
        return view('clubs.show', compact('club'));
    }

    public function map(Request $request): View
    {
        $query = Club::with(['services', 'targetGroups', 'company', 'subscriptionTypes']);
        
        // تطبيق الفلاتر
        $query = $this->applyFilters($request, $query);
        
        $clubs = $query->get();
        
        // البيانات اللازمة للفلاتر
        $cities = Club::distinct()->pluck('city');
        $services = Service::distinct()->pluck('name');
        $subscriptionTypes = SubscriptionType::all();
        $companies = Company::all();
        $targetGroups = ['children', 'youth', 'men', 'women', 'seniors'];
        
        return view('clubs.map', compact(
            'clubs', 
            'cities', 
            'services', 
            'subscriptionTypes', 
            'companies', 
            'targetGroups'
        ));
    }
    
    /**
     * تطبيق الفلاتر على استعلام الأندية
     */
    private function applyFilters(Request $request, $query)
    {
        // البحث بالاسم
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        
        // البحث بالمدينة
        if ($request->filled('city')) {
            $query->where('city', $request->city);
        }
        
        // البحث بالحي
        if ($request->filled('district')) {
            $query->where('district', 'like', '%' . $request->district . '%');
        }
        
        // البحث بالشركة المالكة
        if ($request->filled('company_id')) {
            $query->where('company_id', $request->company_id);
        }
        
        // البحث بنوع الاشتراك
        if ($request->filled('subscription_type_id')) {
            $query->whereHas('subscriptionTypes', function($q) use ($request) {
                $q->where('subscription_types.id', $request->subscription_type_id);
            });
        }
        
        // البحث بنطاق السعر
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereHas('subscriptionTypes', function($q) use ($request) {
                $q->wherePivot('price', '>=', $request->min_price)
                  ->wherePivot('price', '<=', $request->max_price);
            });
        } else if ($request->filled('min_price')) {
            $query->whereHas('subscriptionTypes', function($q) use ($request) {
                $q->wherePivot('price', '>=', $request->min_price);
            });
        } else if ($request->filled('max_price')) {
            $query->whereHas('subscriptionTypes', function($q) use ($request) {
                $q->wherePivot('price', '<=', $request->max_price);
            });
        }
        
        // البحث بالخدمات
        if ($request->filled('service')) {
            $query->whereHas('services', function($q) use ($request) {
                $q->where('name', $request->service);
            });
        }
        
        // البحث بالفئة المستهدفة
        if ($request->filled('target_group')) {
            $query->whereHas('targetGroups', function($q) use ($request) {
                $q->where('type', $request->target_group);
            });
        }
        
        // البحث بالفئة العمرية
        if ($request->filled('min_age') && $request->filled('max_age')) {
            $query->whereHas('targetGroups', function($q) use ($request) {
                $q->where(function($query) use ($request) {
                    // تحقق من أن الحد الأدنى للعمر في النادي أقل من أو يساوي الحد الأقصى المطلوب
                    // وأن الحد الأقصى للعمر في النادي أكبر من أو يساوي الحد الأدنى المطلوب
                    $query->whereNull('min_age')
                          ->orWhere('min_age', '<=', $request->max_age);
                })->where(function($query) use ($request) {
                    $query->whereNull('max_age')
                          ->orWhere('max_age', '>=', $request->min_age);
                });
            });
        }
        
        return $query;
    }
}