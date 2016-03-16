<?php namespace App\Commands;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CaptureCommand extends \Consolle\Command\Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'capture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Captura os logs e registra no banco';

    /**
     * Execute command
     */
    public function fire()
    {
        $app = app();
        $x = \DB::table('teste');

    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            //['name', InputOption::VALUE_REQUIRED, 'Helo of argument', null],
        ];
    }
}