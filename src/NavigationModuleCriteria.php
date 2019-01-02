<?php namespace Anomaly\NavigationModule;

use Anomaly\Streams\Platform\Addon\Plugin\PluginCriteria;

/**
 * Class NavigationModuleCriteria
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class NavigationModuleCriteria extends PluginCriteria
{

    /**
     * Set options for Bootstrap 4
     *
     * @return $this
     */
    public function bootstrap4()
    {
        $this->options['link_attributes_dropdown'] = ['data-toggle' => 'dropdown'];
        $this->options['list_class']               = 'nav justify-content-end';
        $this->options['child_list_class']         = 'dropdown-menu';
        $this->options['child_linkClass']          = 'dropdown-item';
        $this->options['item_class']               = 'nav-item';
        $this->options['link_class']               = 'nav-link';

        return $this;
    }

    /**
     * Set options for Bootstrap 3
     *
     * @return $this
     */
    public function bootstrap3()
    {
        $this->options['link_attributes_dropdown'] = ['data-toggle' => 'dropdown'];
        $this->options['list_class']               = 'nav navbar-nav navbar-right';
        $this->options['child_list_class']         = 'dropdown-menu';

        return $this;
    }

}
