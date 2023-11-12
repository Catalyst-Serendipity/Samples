<?php

declare(strict_types=1);

namespace nicholass003\samples;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener{

    // terpanggil ketika player join ke server
    public function onPlayerJoin(PlayerJoinEvent $event) : void{
        // dapatkan player yg join
        $player = $event->getPlayer();
        // mengirim pesan ke player yg baru saja join
        $player->sendMessage("Selamat Datang Ke Server!");
    }
}