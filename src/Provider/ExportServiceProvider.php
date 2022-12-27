<?php

namespace Nabeel\Export\Provider;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Nabeel\Export\Console\ExportData;

class ExportServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            ExportData::class
        ]);
    }
}
