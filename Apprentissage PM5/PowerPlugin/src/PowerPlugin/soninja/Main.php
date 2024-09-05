<?php

namespace PowerPlugin\soninja;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleSneakEvents;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;
use PowerPlugin\soninja\ice\ice;

class Main extends PluginBase implements Listener {

    use SingletonTrait;


    public function onEnable(): void
    {
        $this->getLogger()->info("§fPlugin Power en §aMarche");

        $this->saveDefaultConfig();

        $this->getServer()->getPluginManager()->registerEvents(new ice,$this);

    }

    public function onDisable(): void
    {
        $this->getLogger()->info("§fPlugin Power en §cMarche");
    }
}