<?php

declare(strict_types=1);

namespace ProjectX\Command;

use ProjectX\Base\Factory\Figure\FigureInterface;
use ProjectX\Pattern\QuadrangleFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FigureCommand extends Command
{
    public function configure()
    {
        $this
            ->setName("Figure")
            ->setDescription("Factory pattern example")
            ->addOption("iterations", null, InputOption::VALUE_OPTIONAL, "How many iterations should happen?", 2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var FigureInterface $square */
        $square = QuadrangleFactory::getFigure("square");

        /** @var FigureInterface $circle */
        $circle = QuadrangleFactory::getFigure("circle");

        for ($i = 1; $i < $input->getOption("iterations"); ++$i) {
            $output->writeln(sprintf(
                "The area of the %s figure with the dimension of %d is %f",
                $square->getFigureType(),
                $square->setDimension($i)->getDimension(),
                $square->getArea()
            ));

            $output->writeln(sprintf(
                "The area of the %s figure with the dimension of %d is %f",
                $circle->getFigureType(),
                $circle->setDimension($i)->getDimension(),
                $circle->getArea()
            ));

            $output->writeln("");
        }
    }
}

