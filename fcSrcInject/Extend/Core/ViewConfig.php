<?php
namespace FATCHIP\fcSrcInject\Extend\Core;
use OxidEsales\Eshop\Core\Registry;

class ViewConfig extends ViewConfig_parent
{

    public function fcSrcInject_getHead(){
        return Registry::getConfig()->getConfigParam("fcsrcinject_head");
    }

    public function fcSrcInject_getBody(){
        return Registry::getConfig()->getConfigParam("fcsrcinject_body");
    }

}