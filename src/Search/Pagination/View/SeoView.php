<?php
namespace Concrete\Package\SeoPagination\Src\Search\Pagination\View;

use Pagerfanta\View\TwitterBootstrap3View;
use Concrete\Core\Search\Pagination\View\ViewInterface;

class SeoView extends TwitterBootstrap3View implements ViewInterface
{
    public function getName()
    {
        return 'seo';
    }

    protected function createDefaultTemplate()
    {
        return new SeoTemplate();
    }

    public function getArguments()
    {
        return [
            'previous_message'   => 'Previous',
            'next_message'       => 'Next',
            'css_disabled_class' => 'disabled',
            'css_dots_class'     => 'dots',
            'css_current_class'  => 'current',
            'dots_text'          => '...',
            'container_template' => '<div class="pagination">%pages%</div>',
            'page_template'      => '<a href="%href%"%rel%>%text%</a>',
            'span_template'      => '<span class="%class%">%text%</span>',
            'rel_previous'        => 'prev',
            'rel_next'            => 'next'
        ];
    }
}
