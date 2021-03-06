<?php

declare(strict_types=1);

namespace Rinvex\Statistics\Console\Commands;

use Illuminate\Console\Command;

class RollbackCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:rollback:statistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback Rinvex Statistics Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn($this->description);
        $this->call('migrate:reset', ['--path' => 'vendor/rinvex/statistics/database/migrations']);
    }
}
