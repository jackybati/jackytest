<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\Cors::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//            \App\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'admin.auth' => \App\Http\Middleware\UserAuth::class,
        'admin.permission' => \App\Http\Middleware\Permission::class,
        'platform.api.auth' => \App\Http\Middleware\PlatformRequestCheck::class,
        'live.api.auth' => \App\Http\Middleware\LiveRequestCheck::class,
        'admin.extPermission' => \App\Http\Middleware\MediaExtPermission::class,
        'admin.verified' => \App\Http\Middleware\UserVerified::class,
        'admin.inMedia' => \App\Http\Middleware\UserMedia::class,
        'admin.common' => \App\Http\Middleware\Common::class,
        'snm' => \App\Http\Middleware\Snm::class,
        'admin.live.interactive.permission' => \App\Http\Middleware\LiveInteractivePermission::class,
        'admin.live.interactive' => \App\Http\Middleware\LiveInteractive::class,
        'mudu' => \App\Http\Middleware\Mudu::class,
        'admin.live.permission' => \App\Http\Middleware\LivePermission::class,
        'admin.media.status' => \App\Http\Middleware\MediaStatus::class,
    ];
}
