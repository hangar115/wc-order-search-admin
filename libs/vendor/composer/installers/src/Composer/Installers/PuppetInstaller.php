<?php

namespace WC_Order_Search_Admin\Composer\Installers;

class PuppetInstaller extends \WC_Order_Search_Admin\Composer\Installers\BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/');
}
