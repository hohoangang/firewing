<?php

namespace FireWings;

use pocketmine\scheduler\PluginTask;
use pocketmine\level\particle\FlameParticle;

class SendWingsTask extends PluginTask{
	
	public function __construct(Main $main){
		$this->main = $main;
		parent::__construct($main);
	}
	
	// Осторожно! Говнокод!
	// Чуть ниже вы можете увидеть нечно ужасное. Из ваших
	// глаз польётся кровь, а те ужасы будут вам ещё долго
	// сниться по ночам. Автор этого алгоритма болен шизо-
	// френией и сейчас находится на лечении у лучших пси-
	// хиатров европы. Но шансов мало. Если вам дорого
	// ваше здоровье, то крайе не советую пускаться вниз.
	// Я вас предупредил.
	//
	// P.S. Автор этого плагина вполне здоровый и написал
	// этот код примерно за час. Были использованы циклы
	// foreach и немного хитрости. Так что не пытайтесь
	// ничего копировать отсюда плиз.
	
	public function onRun($currentTicks){
		foreach($this->getMain()->getServer()->getOnlinePlayers() as $player){
			if(isset($this->main->players[strtolower($player->getName())])){
				$playerPosition = $player->getPosition()->add(0, 1.2, 0);
				switch($player->getDirection()){
					case 0:
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10));
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()
