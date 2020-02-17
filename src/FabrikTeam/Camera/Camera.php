<?php

namespace FabrikTeam\Camera;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\block\{Block, BlockFactory};
use pocketmine\item\{Item, ItemFactory, ItemBlock, enchantment\Enchantment, enchantment\EnchantmentInstance};
use pocketmine\utils\Config;

use FabrikTeam\Camera\Custom\Item\{CameraItem};

class Camera extends PluginBase implements Listener{
	
	private static $instance = null;
	
	public static function getInstance(): Camera{
		return self::$instance;
	}

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		
		/* 아이템 추가 */
		ItemFactory::register(new CameraItem(), true);
		/* 아이템 추가 */
	}
}
