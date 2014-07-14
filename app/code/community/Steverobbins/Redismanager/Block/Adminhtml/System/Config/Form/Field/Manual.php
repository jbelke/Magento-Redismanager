<?php

class Steverobbins_Redismanager_Block_Adminhtml_System_Config_Form_Field_Manual
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    /**
     * Add columns
     */
    public function __construct()
    {
        $this->addColumn('name', array(
            'label'    => Mage::helper('adminhtml')->__('Name'),
            'style'    => 'width:120px'
        ));
        $this->addColumn('host', array(
            'label'    => Mage::helper('adminhtml')->__('Host'),
            'style'    => 'width:120px'
        ));
        $this->addColumn('port', array(
            'label'    => Mage::helper('adminhtml')->__('Port'),
            'style'    => 'width:120px'
        ));
        $this->addColumn('password', array(
            'label'    => Mage::helper('adminhtml')->__('Password'),
            'style'    => 'width:120px'
        ));
        $this->addColumn('db', array(
            'label'    => Mage::helper('adminhtml')->__('Database'),
            'style'    => 'width:120px'
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('adminhtml')->__('Add');
        parent::__construct();
    }
}