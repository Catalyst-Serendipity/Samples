<?php

declare(strict_types=1);

namespace nicholass003\samples;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class ExampleTask extends Task{

    public function __construct(private Server $server){
        $this->server = $server;
    }

    // metode onRun wajib digunakan, metode ini akan terpanggil setiap tick berjalan (20 tick = 1 detik)
    public function onRun() : void{
        $this->server->broadcastMessage("Broadcast Message pada Tick: " . $this->server->getTick());
    }
}