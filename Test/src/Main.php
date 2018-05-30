<?php

namespace Test;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
  
  public function onEnable(){
     $this->getLogger()->info(TextFormat::GREEN."Test Enabled");
  }
}
