<?php

declare(strict_types=1);

namespace XGDAVIDYT\XGTAntiXRay;

use CortexPE\DiscordWebhookAPI\Message;
use CortexPE\DiscordWebhookAPI\Webhook;
use pocketmine\block\Diamond;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\event\entity;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\block\{DiamondOre, IronOre, GoldOre, EmeraldOre, RedstoneOre, CoalOre, LapisOre};
use pocketmine\utils\Config;
use pocketmine\utils\Utils;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginManager;

class Main extends PluginBase implements Listener{

	public function onEnable() : void{
		$this->saveResource("config.yml");
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML); //because that's what I wanted
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }



    public function onBreakOre(BlockBreakEvent $event){
	    $webhook = new Webhook($this->config->get("Webhook"));
	    $message = new Message();
	    $message->setUsername("PMnS Alert");
	    $message->setAvatarURL("https://cdn.discordapp.com/attachments/915920719655862342/915920799557357598/pmnsoldlogo.png");
		$player = $event->getPlayer();
		$name = $player->getName();
		$block = $event->getBlock();
		if($this->config->get("Break") == 1){
			if($this->config->get("IronOre") == 1){
				if($block instanceof IronOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
							$message->setContent($name . " break ". $block);
							$webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("CoalOre") == 1){
				if($block instanceof CoalOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("GoldOre") == 1){
				if($block instanceof GoldOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("RedstoneOre") == 1){
				if($block instanceof RedstoneOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("LapisOre") == 1){
				if($block instanceof LapisOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("EmeraldOre") == 1){
				if($block instanceof EmeraldOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
			if($this->config->get("DiamondOre") == 1){
				if($block instanceof DiamondOre or $block instanceof Diamond){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.break") or $op->isOp()){
							$op->sendMessage("§cAdmWarning: " . $name . "§c break " . $block ." !");
                            $message->setContent($name . " break ". $block);
                            $webhook->send($message);
						}
					}
				}
			}
		}
	}

	public function onPlaceOre(BlockPlaceEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		$block = $event->getBlock();
		if($this->config->get("Place") == 1){
			if($this->config->get("IronOre") == 1){
				if($block instanceof IronOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("CoalOre") == 1){
				if($block instanceof CoalOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("GoldOre") == 1){
				if($block instanceof GoldOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("RedstoneOre") == 1){
				if($block instanceof RedstoneOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("LapisOre") == 1){
				if($block instanceof LapisOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("EmeraldOre") == 1){
				if($block instanceof EmeraldOre){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place")){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
			if($this->config->get("DiamondOre") == 1){
				if($block instanceof DiamondOre or $block instanceof Diamond){
					foreach($this->getServer()->getOnlinePlayers() as $op) {
						if($op->hasPermission("xgtantixray.place") or $op->isOp()){
							$op->sendMessage("§cAdmWarning: " . $name . "§c placed " . $block ." !");
						}
					}
				}
			}
		}
	}
}
