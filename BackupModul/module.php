<?

class BackupExtension extends IPSModule {

    /**
     *
     */
    public function __construct($InstanceID) {
        parent::__construct($InstanceID);
    }

    /**
     *
     */
    public function Create() {
        parent::Create();
        $this->RegisterPropertyString("SourceDir", "/var/lib/symcon/");
        $this->RegisterPropertyString("DestinationDir", "/media/usbstick/");
        $this->RegisterPropertyString("Prefix", "ipsbackup_");
        
    }

    /**
     *
     */
    public function ApplyChanges() {
        parent::ApplyChanges();
    }

    /* -------------------------------------------------------------------------------- */

    /**
     *
     * BAC_PrepareBackup($id);
     *
     */
    public function PrepareBackup() {
        echo "PrepareBackup: ".$this->InstanceID;
    }

    /**
     *
     * BAC_MountUSBStick($id);
     *
     */
    public function MountUSBStick() {
        echo "MountUSBStick: ".$this->InstanceID;
    }

    /**
     *
     * BAC_MountUSBStick($id);
     *
     */
    public function DoBackup() {
        echo "DOBACKUP: ".$this->InstanceID;
        $date = date("Ymd-Gi");
        $cmd = 'cd /var/lib/symcon/ && zip -r /media/usbstick/ipsbackup_'.$date.'.zip *';
		return shell_exec($cmd);
    }
}
?>
