<?php

namespace ops;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

   public function onEnable(){
       $this->getLogger()->info(TextFormat::GREEN."plugin by mohamedoo9 has been enabled");
   }
}
 
