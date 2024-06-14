<?php

declare(strict_types=1);

namespace Echore\PacketHandlerAggregate;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	protected function onLoad(): void {
		PacketHandlerAggregate::initialize($this);
	}

}
