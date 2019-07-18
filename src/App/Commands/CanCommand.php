<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class CanCommand extends Command
{
    const positions = ['designer', 'manager', 'tester', 'developer'];
    const actions = [
        'codeWriting',
        'codeTesting',
        'communicationWithManager',
        'draw',
        'setTasks'
    ];
    
    protected function configure()
    {
        $this->setName('can')
            ->setDescription('can position do action')
            ->setHelp('')
            ->addArgument('position', InputArgument::REQUIRED, 'Pass the position.')
            ->addArgument('action', InputArgument::REQUIRED, 'Pass the position.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $position = $input->getArgument('position');
        if(!in_array($position, self::positions)){
            $output->writeln('Position error');
            return;
        }
        $position = "Console\App\Classes\\".ucfirst($position);
        $person = new $position();
        
        $action = $input->getArgument('action');
        if(!in_array($action, self::actions)){
            $output->writeln('Action error');
            return;
        }
        $output->writeln(json_encode($person->$action()));
    }
}
