<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Site\CartItem;
use App\Models\Slider;
use App\Observers\BaseObserver;
use App\Services\CustomersClub\LLCCGPayment;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Relation::morphMap([
            'product' => Product::class,
            'category' => Category::class,
            'slider' => Slider::class,
        ]);

        $this->app->bind('llccg-payment', function () {
            $config = config('payment') ?? [];
            return new LLCCGPayment($config);
        });
    }
}
