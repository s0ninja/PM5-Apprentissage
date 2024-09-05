<?php

namespace PowerPlugin\soninja\ice;

use pocketmine\entity\object\ItemEntity;
use pocketmine\event\entity\EntityEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\item\Item;
use pocketmine\item\StringItem;
use pocketmine\item\StringToItemParser;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\utils\StringToTParser;
use PowerPlugin\soninja\Main;
use pocketmine\math\Vector3;

class ice implements Listener{

    public static $icecooldown = [];

    public function ice(PlayerToggleSneakEvent $event) {
        $player = $event->getPlayer();

        $config = Main::getInstance()->getConfig();

        /*Si il sneak crée un timer,
        quand il va re sneak ça va en crée un nouveau
        mais regarder si il y a déjà un temps, si il est <= à 2sec alors
        ça lance une boule de neige*/

        $pos = $player->getPosition();
        $direction = $player->getDirectionVector();
        $ball = //Mettre la snowerball

        $ball->teleport(new Vector3($pos->getX(), $pos->getY(), $pos->getZ()+2)); // Position de la ball
        
        $ball-> 

    }

}