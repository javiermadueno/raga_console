<?php
/**
 * Created by PhpStorm.
 * User: javier.madueno
 * Date: 27/04/2017
 * Time: 17:44
 */

namespace Raga\Command;


use Raga\ImportSevice;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportIsopackCommand extends Command
{
    /**
     * @var ImportSevice
     */
    private $service;


    public function __construct(ImportSevice $service)
    {
        parent::__construct();
        $this->service = $service;
    }


    protected function configure()
    {
        $this
            ->setName('import:isopack')
            ->setDescription('Import all files from ISOPACK');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln("<ok>                                        </ok>");
        $output->writeln("<ok>              .:: ISOPACK ::.           </ok>");
        $output->writeln("<ok>                                        </ok>");
        $output->writeln("");


        $this->service->execute();
    }


}