<?php

declare(strict_types=1);

namespace Sythv;

use pocketmine\plugin\PluginBase;
use Sythv\Commands\Replenish;

class Main extends PluginBase
{
    protected function onEnable(): void
    {
        $this->getLogger()->info("enable");
        $this->initCommands();
    }
    public function initCommands(): void
    {
        $commands = [
            new Replenish(),
        ];
        $this->getServer()->getCommandMap()->registerAll("Sythv" ,$commands);
    }
}
