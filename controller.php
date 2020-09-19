<?php
namespace Concrete\Package\Chromium;

use Concrete5\ContentLibrary\ServiceProvider;
use Concrete\Core\Foundation\Service\ProviderList;
use Concrete\Core\Package\Package;
use Concrete\Theme\Concrete\PageTheme;

class Controller extends Package
{
    protected $pkgHandle = 'chromium';
    protected $appVersionRequired = '8.2.1';
    protected $pkgVersion = '0.1.0';
    protected $pkgAutoloaderRegistries = [
        'src/ContentLibrary' => '\Concrete5\ContentLibrary',
    ];

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

    public function on_start()
    {
        $list = $this->app->make(ProviderList::class);
        $list->registerProvider(ServiceProvider::class);
    }

}