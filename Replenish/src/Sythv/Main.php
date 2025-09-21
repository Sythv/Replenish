<?php

declare(strict_types=1);

namespace Sythv;

use pocketmine\plugin\PluginBase;
use Sythv\Commands\Replenish;

class Main extends PluginBase
{
    protected function onEnable(): void
    {
        /** This shows you that the plugin is working in the console */
        $this->getLogger()->info("enable");
        /** This is to register the initCommands function */
        $this->initCommands();
    }

    /** Place all your command class names here, so they get registered. */
    public function initCommands(): void
    {
        $commands = [
            new Replenish(),
            /** Add more commands here as needed.*/
        ];
        $this->getServer()->getCommandMap()->registerAll("Sythv" ,$commands);
    }
}
