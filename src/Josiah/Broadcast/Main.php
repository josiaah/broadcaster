<?php

namespace Josiah/Broadcast;

use pocketmine/plugin/PluginBase;
use pocketmine/command/CommandSender;
use pocketmine/command/Command;

class Main extends PluginBase {
  public function onEnable() {
    $this->getServer()->getLogger()->info("[Broadcast] Plugin Enabled");
  }

  public function onDisable() {
    $this->getServer()->getLogger()->info("[Broadcast] Plugin Disabled");
  }

  public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
    switch ($command->getName()) {
      case: "test"
        $sender->sendMessage("[Broadcast] this is my first plugin in 6 years!")
    }
    return true;
  }
}
