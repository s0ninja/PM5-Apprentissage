<?php

namespace allaycorration\soninja;

use allaycorration\soninja\decoration\EntityRegistry;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    private EntityRegistry $entityregistery;

    public function onEnable(): void
    {

        $this->getLogger()->info("§fPlugin §9Allaycoration by §fSoninja §2ON");
        $this->saveDefaultConfig();
        

    }

    public function onDisable(): void
    {
        $this->getLogger()->info("§fPlugin §9Allaycoration by §fSoninja §cOFF");
    }

}