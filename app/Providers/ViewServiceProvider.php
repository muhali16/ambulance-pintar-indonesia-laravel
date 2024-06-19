<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\CompanyInformation;
use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $companyInformation = CompanyInformation::all();
//        dd($companyInformation);
        View::share('activeProductCategory', ProductCategory::activeProductCategory()->get());
        View::share('companyName', $companyInformation->where('name', 'company-name')->first());
        View::share('contactTelephone', $companyInformation->where('name', 'contact-telephone')->first());
        View::share('contactEmail', $companyInformation->where('name', 'contact-email')->first());
        View::share('contactWhatsapp', $companyInformation->where('name', 'contact-whatsapp')->first());
        View::share('youtube1', $companyInformation->where('name', 'youtube1')->first());
        View::share('youtube2', $companyInformation->where('name', 'youtube2')->first());
        View::share('facebook', $companyInformation->where('name', 'facebook')->first());
        View::share('address', $companyInformation->where('name', 'address')->first());
        View::share('about', $companyInformation->where('name', 'about')->first());
    }
}
