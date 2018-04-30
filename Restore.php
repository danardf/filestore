<?php
namespace FreePBX\modules\Filestore;
use FreePBX\modules\Backup as Base;
class Restore Extends Base\RestoreBase{
  public function runRestore($jobid){
    $settings = $this->getConfigs();
		$ids = [];
		foreach ($settings as $key => $value) {
			$this->FreePBX->Filestore->setMultiConfig($value,$key);
		}
  }
}