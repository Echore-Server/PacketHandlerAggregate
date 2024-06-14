<?php

declare(strict_types=1);

namespace Echore\PacketHandlerAggregate;

use Echore\StarProject\Main;
use muqsit\simplepackethandler\interceptor\IPacketInterceptor;
use muqsit\simplepackethandler\monitor\IPacketMonitor;
use muqsit\simplepackethandler\SimplePacketHandler;
use pocketmine\plugin\PluginBase;
use RuntimeException;

class PacketHandlerAggregate {

	private static ?IPacketMonitor $monitor = null;

	private static ?IPacketInterceptor $interceptor = null;

	public static function getMonitor(): IPacketMonitor {
		return self::$monitor ?? throw new RuntimeException("PacketHandlerAggregate not initialized");
	}

	public static function getInterceptor(): IPacketInterceptor {
		return self::$interceptor ?? throw new RuntimeException("PacketHandlerAggregate not initialized");
	}

	public static function initialize(PluginBase $plugin): void {
		self::$monitor = SimplePacketHandler::createMonitor($plugin);
		self::$interceptor = SimplePacketHandler::createInterceptor($plugin);

	}
}
