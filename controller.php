<?php
namespace Concrete\Package\Chromium;

use Concrete\Core\Package\Package;
use Concrete\Theme\Concrete\PageTheme;

class Controller extends Package
{
    protected $pkgHandle = 'chromium';
    protected $appVersionRequired = '8.2.1';
    protected $pkgVersion = '0.0.1';

    public function getPackageDescription()
    {
        return t('Chromium Theme');
    }

    public function getPackageName()
    {
        return t('Chromium');
    }

    public function install()
    {
        $pkg = parent::install();
        PageTheme::add('chromium', $pkg);
    }

}