<?php
App::uses('Component', 'Controller');
App::uses('String', 'Utility');
/**
 * Cake component to help manage UUIDs
 */
class UuidComponent extends Component {
    
    /**
     * Generate UUID
     * 
     * @return string
     */
    public function generateUuid() {
        return String::uuid();
    }
    
}