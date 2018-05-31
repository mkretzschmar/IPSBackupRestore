<?

/**
 * 
 */
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
        $this->RegisterPropertyString("ReportReceiver", "marekre@fh-zwickau.de");
        
        
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
        echo "MountUSBStick: Leider noch nicht implementiert/n";
        //sudo apt-get -y install ntfs-3g hfsutils hfsprogs exfat-fuse
        //sudo mkdir /media/usbstick
        //FAT32: sudo mount -t vfat -o utf8,uid=pi,gid=pi,noatime /dev/sda1 /media/usbstick
        //NTFS: sudo mount -t ntfs-3g -o utf8,uid=pi,gid=pi,noatime /dev/sda1 /media/usbstick

    }

    /**
     *
     * BAC_DoBackup($id);
     *
     */
    public function DoBackup() {
        $srcDir = $this->ReadPropertyString("SourceDir");
        $destDir = $this->ReadPropertyString("DestinationDir");
        $prefix = $this->ReadPropertyString("Prefix");
        
        echo "DoBackup: ".$srcDir." -> ".$destDir;
        $date = date("Ymd-Gi");
        $cmd = 'cd '.$srcDir.' && zip -r '.$destDir.$prefix.$date.'.zip *';
		return shell_exec($cmd);
    }
}
?>
