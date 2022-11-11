<?php

namespace App\Console\Commands;

use App\Notifications\CaseNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Notification;

class CheckCasePosition extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fwabot:check-case-position {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check case on FWA';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://thefwa.com/api/live/updates');
        $jsonResponse = $response->json();

        foreach ($jsonResponse['cases'] as $case) {
            if ($case['title'] === $this->argument('name')) {
                Notification::route('slack', config('fwa.webhook_url'))
                    ->notify(new CaseNotification($case));
            }
        }

        return 0;
    }
}
