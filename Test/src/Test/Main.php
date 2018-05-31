<?php

namespace Test;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;

 class Main extends PluginBase{
 
   public function onEnable(){
    $this->getServer()->getLogger()->info("Test Enabled");
   }
}
