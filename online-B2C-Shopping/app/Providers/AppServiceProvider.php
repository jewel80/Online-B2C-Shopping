<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Subcategory;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view){
            $categories=Category::where('categoryPublication',1)->get();


        foreach ($categories as $value) {
            //$subcategory[$value->id] = DB::table('subcategories')->where('categoryId',$value->id)->get();
            $subcategory[$value->id] = Subcategory::where('categoryId',$value->id)->get();

        }


           // $subcategory=Subcategory::where('subcategoryPublication',1)->get();
            $view->with('categories',$categories)->with('subcategory', $subcategory);
            //$view->with('subcategories', $subcategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
