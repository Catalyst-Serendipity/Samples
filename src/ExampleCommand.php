<?php

declare(strict_types=1);

namespace nicholass003\samples;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginOwned;

class ExampleCommand extends Command implements PluginOwned{

    public function __construct(private Main $main){
        $this->main = $main;
        // parent berisi (namaCommand, deskripsiCommand, usageCommand, aliasesCommand)
        parent::__construct("samples", "Samples Command", "/samples", ["sample"]);
        // permission command
        $this->setPermission("samples.command");
    }

    // metode execute wajib digunakan, akan terpanggil ketika command digunakan
    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if($sender instanceof Player){
            // mengirim pesan ke pengirim command
            $sender->sendMessage("Samples Command dieksekusi oleh player!");
        }else{
            // mengirim pesan ke pengirim command
            $sender->sendMessage("Samples Command dieksekusi bukan oleh player!");
        }
    }

    // tidak wajib jika interface PluginOwned tidak digunakan, tapi jika ingin berkontribusi ke poggit ini wajib digunakan
    public function getOwningPlugin() : Plugin{
        return $this->main;
    }
}