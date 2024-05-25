<?php 
namespace Risehandaddons; 
/**
 * The admin class
 */
class Admin
{ 
    /**
     * Initialize the class
     */
    public function __construct() {  
        new Core\Functions; 
        new Performance\Performance;   
    }   
}
