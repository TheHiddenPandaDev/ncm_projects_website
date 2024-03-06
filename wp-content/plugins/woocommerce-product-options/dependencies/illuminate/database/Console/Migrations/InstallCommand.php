<?php

namespace Barn2\Plugin\WC_Product_Options\Dependencies\Illuminate\Database\Console\Migrations;

use Barn2\Plugin\WC_Product_Options\Dependencies\Illuminate\Console\Command;
use Barn2\Plugin\WC_Product_Options\Dependencies\Illuminate\Database\Migrations\MigrationRepositoryInterface;
use Barn2\Plugin\WC_Product_Options\Dependencies\Symfony\Component\Console\Input\InputOption;
/** @internal */
class InstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'migrate:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the migration repository';
    /**
     * The repository instance.
     *
     * @var \Illuminate\Database\Migrations\MigrationRepositoryInterface
     */
    protected $repository;
    /**
     * Create a new migration install command instance.
     *
     * @param  \Illuminate\Database\Migrations\MigrationRepositoryInterface  $repository
     * @return void
     */
    public function __construct(MigrationRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->repository->setSource($this->input->getOption('database'));
        $this->repository->createRepository();
        $this->info('Migration table created successfully.');
    }
    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use']];
    }
}
