<?php

namespace Block;

use  pocketmine\plugin\PluginBase;
use  pocketmine\event\Listener;
use pocketmine\event\blobk\BlockPlaceEvent;

class Block extends PluginBase implements Listener{
    public function onEnable(){
        $this_>getServer()->GetPluginManager()->registerEvents($this, $this);
}

public function onBlockPlace(BlockPlaceEvent $event){
    $block = $event->getBlock();

    if($block->getid() == 1 && $block->getDamage() == 5){
        $this->getServer()->getScheduler()->scheduleDelayedTask(new RemoveBlockTask($this, $block), 20 * 10);
    }
  }
}

class RemoveBlockTask extends PluginTask{

    private $block;

    public function __construct(Block $plugin, $block){
        parent::__construct($plugin):
        $this->block = $block;
}

