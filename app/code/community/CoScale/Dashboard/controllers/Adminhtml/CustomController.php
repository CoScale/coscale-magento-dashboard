<?php

class CoScale_Dashboard_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action
{
    //
    // The following vars need to be set with a CoScale public dashboard url
    // Instructions: https://github.com/CoScale/coscale-magento-dashboard
    //
    private $coscale_dashboard_main = '';
    private $coscale_dashboard_devops = '';
    private $coscale_dashboard_developers = '';

    public function indexAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mycustomtab')
            ->_title($this->__('Merchant View'));
        $block = $this->getLayout()
        ->createBlock('core/text', 'example-block')
        ->setText('<iframe src="'.$this->coscale_dashboard_main.'" name="Merchant" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="1600px" width="100%px"></iframe>');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function devopsAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mycustomtab')
            ->_title($this->__('Devops View'));
        $block = $this->getLayout()
        ->createBlock('core/text', 'example-block')
        ->setText('<iframe src="'.$this->coscale_dashboard_devops.'" name="Merchant" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="1600px" width="100%px"></iframe>');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function developersAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mycustomtab')
            ->_title($this->__('Developers View'));
        $block = $this->getLayout()
        ->createBlock('core/text', 'example-block')
        ->setText('<iframe src="'.$this->coscale_dashboard_devops.'" name="Merchant" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="1600px" width="100%px"></iframe>');
        $this->_addContent($block);
        $this->renderLayout();
    }
}
