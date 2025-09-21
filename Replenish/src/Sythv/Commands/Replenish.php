<?php

namespace Sythv\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Sythv\Forms\Options;

class Replenish extends Command
{

    public function __construct()
    {
        parent::__construct("replenish", "Replenish your health or hunger", "/replenish", ["r"]);
        $this->setPermission("pocketmine.group.user");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool
    {
        if (!$sender instanceof Player) {
            $sender->sendMessage("§cThis command can only be used in-game.");
            return false;
        }
        $sender->sendForm(new Options());
        return true;
    }
}