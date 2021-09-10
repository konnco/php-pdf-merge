<?php namespace Konnco\PDFMerge;

/**
 * Description of PdfObject
 *
 * @author konnco
 */
class PdfObject {
    
    public $path;
    
    // all / array of pages
    public $pages = 'all';
    
    // horizontal / vertical / automatic
    public $orientation;
    
    /**
     * Set orientation
     * @return type
     */
    public function getOrientationCode() {
        if ($this->orientation == 'automatic') {
            return 'A';
        }

        if ($this->orientation == 'horizontal' || $this->orientation == 'landscape') {
            return 'L';
        }

        return 'P';
    }
    
}
