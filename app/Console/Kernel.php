<?php

namespace App\Console;

use App\Http\Controllers\V1\CommonController;
use App\Http\Controllers\V1\CountController;
use App\Http\Controllers\V1\MediaLiveController;
use App\Http\Controllers\V1\ReviewController;
use App\Http\Controllers\V1\NewsController;
use App\Tables\MediaLiveContent;
use App\Tables\MediaOriginalDegree;
use App\Tables\MediaPunishHistory;
use App\Tables\News;
use App\Tables\NewsSnm;
use App\Tables\SystemNotification;
use App\Tables\TvProgramReview;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Tables\BadWordCheck;
use App\Http\Controllers\V1\ScriptCodeController;
use App\Http\Controllers\V1\MaterialMediaController;
use App\Http\Controllers\V1\SystemNotificationController;
use App\Tables\Media;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        Commands\test::class,
        Commands\testTwo::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
    }
}
