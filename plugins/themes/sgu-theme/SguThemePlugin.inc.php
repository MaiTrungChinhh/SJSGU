<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class SguThemePlugin extends ThemePlugin
{

    /**
     * Load the custom styles for our theme
     * @return null
     */
    public function init()
    {
        // Use the parent theme's unique plugin slug
        $this->setParent('defaultthemeplugin');

        // Change the ID of this stylesheet slug to
        // `child-stylesheet`. This ensures that it
        // won't clash with the parent's stylesheet.
        $this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
    }

    /**
     * Get the display name of this theme
     * @return string
     */
    function getDisplayName()
    {
        return __('plugins.themes.sgu-theme.name');
    }

    /**
     * Get the description of this plugin
     * @return string
     */
    function getDescription()
    {
        return __('plugins.themes.sgu-theme.description');
    }
}