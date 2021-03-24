<?php

namespace Josiah-React-Core;

use pocketmine/plugin/PluginBase;

use pocketmine/event/player/PlayerJoinEvent;

use pocketmine/event/player/PlayerQuitEvent;

use pocketmine/Player;

use pocketmine/Server;

use pocketmine/event/Listener;

use pocketmine/utils/TextFormat as C;

class Josiah-React-Core extends PluginBase implements Listener{
  public function onLoad(){
    $this->getLogger()->info("[BROADCASTER] Loading");
  }

  public function onEnable(){
    $this->getLogger()->info("[BROADCASTER] Enabled");
  }

  public function onDisable(){
    $this->getLogger()->info("[BROADCASTER] Disabled");
  }

  public function onJoin(PlaeyerJoinEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();

    $this->getServer()->broadcastMessage(c::GREEN."$name just joined!!!!")
  }
}
