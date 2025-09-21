<?php

namespace Sythv\Forms;

use pocketmine\form\Form;
use pocketmine\player\Player;


class Options implements Form {

    public function jsonSerialize(): array {
        return [
            "type" => "form",
            "title" => "Health & Hunger Menu",
            "content" => "Choose an action below:",
            "buttons" => [
                ["text" => "Feed Me! ✫"],
                ["text" => "Heal Me! ♥"],
                ["text" => "Cancel"]
            ]
        ];
    }

    public function handleResponse(Player $player, $data): void {
        if ($data === null) return;

        switch($data) {
            case 0:
                $player->getHungerManager()->setFood(20);
                $player->sendMessage("You have been fed!");
                break;
            case 1:
                $player->setHealth($player->getMaxHealth());
                $player->sendMessage("You have been healed!");
                break;
            case 2:
                $player->sendMessage("You closed the menu.");
                break;
        }
    }
}