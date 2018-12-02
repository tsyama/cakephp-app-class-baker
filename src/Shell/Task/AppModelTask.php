<?php
namespace AppClassBaker\Shell\Task;

use Cake\Console\Shell;
use Bake\Shell\Task\BakeTask;

class AppModelTask extends BakeTask
{
    public $pathFragment = 'Model/';

    public $tasks = [
        'Bake.BakeTemplate',
    ];

    public function main($name = null)
    {
        parent::main();
        $this->bake();
    }

    public function bake()
    {
        $this->out("\n" . "Baking app-model files...", 1, Shell::QUIET);

        $out = $this->bakeAppEntity();
        $out = $this->bakeAppTable();
        return $out;
    }

    public function bakeAppEntity()
    {
        $contents = $this->BakeTemplate->generate('AppClassBaker.Model/Entity/app_entity');
        $path = $this->getPath();
        $filename = $path . 'Entity/AppEntity.php';
        $this->createFile($filename, $contents);

        return $contents;
    }

    public function bakeAppTable()
    {
        $contents = $this->BakeTemplate->generate('AppClassBaker.Model/Table/app_table');
        $path = $this->getPath();
        $filename = $path . 'Table/AppTable.php';
        $this->createFile($filename, $contents);

        return $contents;
    }

}