<?

class ArchiveExtension extends IPSModule {
 
    public function __construct($InstanceID) {
        parent::__construct($InstanceID);
    }
 
    // Überschreibt die interne IPS_Create($id) Funktion
    public function Create() {
        parent::Create();
    }
 
    // Überschreibt die interne IPS_ApplyChanges($id) Funktion
    public function ApplyChanges() {
        parent::ApplyChanges();
    }
 
    /**
     *
     * AXT_RemoveZeroValues($id);
     *
     */
    public function RemoveZeroValues() {
        // Selbsterstellter Code
    }
}
?>
