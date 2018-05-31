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
    }
}
?>
