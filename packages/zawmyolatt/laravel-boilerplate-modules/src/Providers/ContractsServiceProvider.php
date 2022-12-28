<?php

namespace Zawmyolatt\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Zawmyolatt\Modules\Contracts\RepositoryInterface;
use Zawmyolatt\Modules\Laravel\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
