<?php

namespace ops;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

   public function onEnable(){
       $this->getLogger()->info(TextFormat::GREEN."plugin by mohamedoo9 has been enabled");
   }
   
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      switch($cmd->getName()){
         case 'oo':
            if($sender->isOp()){
            $sender->sendMessage(TextFormat::.BLUE."test my plugin");
     }else{         
   }
}
