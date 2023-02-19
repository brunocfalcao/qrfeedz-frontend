<?php

namespace QRFeedz\Frontend\Commands;

use Brunocfalcao\Helpers\Traits\CanValidateArguments;
use Brunocfalcao\Helpers\Traits\CanValidateEnvs;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ResetFrontend extends Command
{
    use CanValidateEnvs, CanValidateArguments;

    protected $signature = 'qrfeedz:reset-frontend';

    protected $description = 'Resets the frontend web server to run smooth qrfeedz instances';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("
   ____  __   ___             _         ___                _                 _
  /___ \/__\ / _____  ___  __| |____   / ___ __ ___  _ __ | |_ ___ _ __   __| |
 //  / / \/// _\/ _ \/ _ \/ _` |_  /  / _\| '__/ _ \| '_ \| __/ _ | '_ \ / _` |
/ \_/ / _  / / |  __|  __| (_| |/ /  / /  | | | (_) | | | | ||  __| | | | (_| |
\___,_\/ \_\/   \___|\___|\__,_/___| \/   |_|  \___/|_| |_|\__\___|_| |_|\__,_|
            ");

        $this->info('Deleting routes/web.php ...');

        $this->info('Thank you.');

        $this->preChecks();
        $this->publishQRFeedzResources();
        $this->deleteModelsDefaultFolder();
        $this->deleteStorageDirectories();
        $this->deleteLogs();
        $this->createStorageLink();
        $this->replaceJsonDataTypesToLongText();

        return self::SUCCESS;
    }

    protected function deleteLogs(): void
    {
        $this->paragraph('=> Deleting logs file(s)...', false);

        File::delete(storage_path('logs/laravel.log'));
    }

    protected function deleteModelsDefaultFolder(): void
    {
        $this->paragraph('=> Deleting App/Models directory (if exist)...', false);

        File::deleteDirectory(app_path('Models'));
        File::delete(app_path('Nova/User.php'));
    }

    protected function deleteStorageDirectories(): void
    {
        $this->paragraph('=> Deleting storage public directories (if they exist)...', false);

        File::deleteDirectory(storage_path('app/public'));
        mkdir(storage_path('app/public'));
    }

    protected function createStorageLink(): void
    {
        $this->paragraph('=> Creating storage link...');

        File::deleteDirectory(public_path('storage'));
        $this->call('storage:link');
    }

    protected function replaceJsonDataTypesToLongText()
    {
        $this->paragraph('=> Replacing json migration datatypes by longTexts (for maria db compatibility)...', false);

        // Delete previous create_media_file migrations.
        foreach (glob(database_path('migrations/*.php')) as $filename) {
            $file = file_get_contents($filename);

            $data = str_replace('->json(', '->longText(', $file);

            file_put_contents($filename, $data);
        }
    }

    protected function preChecks()
    {
        $this->paragraph('Running pre-checks...', false);

        /**
         * Quick ENV key/values validation.
         * key name => type
         * type can be:
         *   null (should exist, any value allowed)
         *   a value (equal to that value).
         */
        $envVars = [
            'POSTMARK_TOKEN' => null,
            'QUEUE_CONNECTION' => ['redis', 'sync'],
            'CACHE_DRIVER' => ['redis', 'file'],
            'MAIL_MAILER' => 'postmark',
        ];

        if (! $this->validateEnvVars(collect($envVars))) {
            return $this->error($this->envValidationMsg());
        }
    }

    protected function publishQRFeedzResources()
    {
        $this->paragraph('=> Publishing eduka packages assets...');

        /*
         * Eduka packages
         * brunocfalcao/eduka-nereus
         * brunocfalcao/eduka-analytics
         * brunocfalcao/eduka-nova
         * brunocfalcao/eduka-payments
         **/
        $this->call('vendor:publish', [
            '--force' => 'true',
            '--provider' => 'QRFeedz\\Frontend\\FrontendServiceProvider',
        ]);
    }
}
