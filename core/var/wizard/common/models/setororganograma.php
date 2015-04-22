<?php
/**
 * 
 *
 * @category   Maestro
 * @package    UFJF
 * @subpackage common
 * @copyright  Copyright (c) 2003-2012 UFJF (http://www.ufjf.br)
 * @license    http://siga.ufjf.br/license
 * @version    
 * @since      
 */

namespace common\models;

class Setororganograma extends map\SetororganogramaMap {

    public static function config() {
        return array(
            'log' => array(  ),
            'validators' => array(
            ),
            'converters' => array()
        );
    }
    
    public function getDescription(){
        return $this->getIdSetorOrganograma();
    }

    public function listByFilter($filter){
        $criteria = $this->getCriteria()->select('*')->orderBy('idSetorOrganograma');
        if ($filter->idSetorOrganograma){
            $criteria->where("idSetorOrganograma LIKE '{$filter->idSetorOrganograma}%'");
        }
        return $criteria;
    }
}

?>