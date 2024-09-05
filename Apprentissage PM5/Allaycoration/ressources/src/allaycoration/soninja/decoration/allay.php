<?php

namespace soninja\allaycoration\decoration;

use pocketmine\event\Listener;

use pocketmine\entity\Entity;

class allay extends Entity {
    
	public static function getNetworkTypeId(): string {
		return "allay:allay";
	}
	
}