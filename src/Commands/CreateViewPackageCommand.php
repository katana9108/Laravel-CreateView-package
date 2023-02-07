<?php

namespace Katana9108\CreateViewPackage\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class CreateViewPackageCommand extends Command
{
    public $signature = 'k:v {viewName}';

    public $description = 'Create and new view';

    public function handle(): int
    {
        $viewName = $this->argument('viewName');

        $viewPath = resource_path("views/{$viewName}.blade.php");

        if (File::exists($viewPath)) {
            $this->error("The view {$viewName} already exists.");
            return 1;
        }

        File::put($viewPath, "");

        $this->info("The view {$viewName} has been created successfully!!");

        return self::SUCCESS;
    }
}
