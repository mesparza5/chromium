<?php
namespace Concrete\Package\Chromium\Theme\Chromium;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function registerAssets()
    {
        $this->requireAsset('css', 'font-awesome');
    }

    public function getThemeName()
    {
        return t('Chromium');
    }

    public function getThemeDescription()
    {
        return t('A new Chromium Theme');
    }
}