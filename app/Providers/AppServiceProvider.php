<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Model::unguard();

        seo()
            ->title(modify: fn (string $title) => $title . ' | Larapeeps')
            ->twitterImage(asset('img/twitter-card.png'));
    }
}
