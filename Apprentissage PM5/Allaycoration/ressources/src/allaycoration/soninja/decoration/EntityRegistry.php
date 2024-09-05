<?php

namespace allaycorration\soninja\decoration;

use customiesdevs\customies\entity\CustomiesEntityFactory;
use allaycoration\soninja\Main;

final class EntityRegistry
{
    public function __construct()
    {
        CustomiesEntityFactory::getInstance()->registerEntity(allay::class, "allay:allay");
        Main::getInstance()->getLogger()->notice("Les Entités ont été enregistrés");
    }
}