<?php

namespace WC_Order_Search_Admin\Composer\Installers;

class VanillaInstaller extends \WC_Order_Search_Admin\Composer\Installers\BaseInstaller
{
    protected $locations = array('plugin' => 'plugins/{$name}/', 'theme' => 'themes/{$name}/');
}
