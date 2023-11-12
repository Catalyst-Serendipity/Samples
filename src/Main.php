<?php

declare(strict_types=1);

namespace nicholass003\samples;

// Main class harus wajib menggunakan PluginBase class
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    // salah satu dari onLoad atau onEnable harus ada, metode ini akan terpanggil ketika plugin aktif
    protected function onEnable() : void{
        // bikin log informasi ketika plugin aktif
        $this->getLogger()->info("Plugin Aktif!");

        // registrasi event
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);

        // aktifkan task (20 = 1 detik)
        $this->getScheduler()->scheduleRepeatingTask(new ExampleTask($this->getServer()), 20);

        // registrasi command
        $this->registerCommands();
    }

    private function registerCommands() : void{
        $this->getServer()->getCommandMap()->register("samples", new ExampleCommand($this));
    }
}