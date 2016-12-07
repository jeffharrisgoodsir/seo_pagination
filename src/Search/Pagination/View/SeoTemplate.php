<?php
namespace Concrete\Package\SeoPagination\Src\Search\Pagination\View;

use Pagerfanta\View\Template\TwitterBootstrapTemplate;

class SeoTemplate extends TwitterBootstrapTemplate
{

    public function container()
    {
        return $this->option('container_template');
    }

    public function page($page)
    {
        $text = $page;

        return $this->pageWithText($page, $text);
    }

    public function pageWithText($page, $text, $rel = null)
    {
        $search = array('%href%', '%text%', '%rel%');

        $href = $this->generateRoute($page);
        $replace = $rel ? array($href, $text, ' rel="' . $rel . '"') : array($href, $text, '');

        return str_replace($search, $replace, $this->option('page_template'));
    }

    public function previousDisabled()
    {
        return $this->generateSpan($this->option('css_disabled_class'), $this->option('previous_message'));
    }

    public function previousEnabled($page)
    {
        return $this->pageWithText($page, $this->option('previous_message'), $this->option('rel_previous'));
    }

    public function nextDisabled()
    {
        return $this->generateSpan($this->option('css_disabled_class'), $this->option('next_message'));
    }

    public function nextEnabled($page)
    {
        return $this->pageWithText($page, $this->option('next_message'), $this->option('rel_next'));
    }

    public function first()
    {
        return $this->page(1);
    }

    public function last($page)
    {
        return $this->page($page);
    }

    public function current($page)
    {
        return $this->generateSpan($this->option('css_current_class'), $page);
    }

    public function separator()
    {
        return $this->generateSpan($this->option('css_dots_class'), $this->option('dots_text'));
    }

    private function generateSpan($class, $page)
    {
        $search = array('%class%', '%text%');
        $replace = array($class, $page);

        return str_replace($search, $replace, $this->option('span_template'));
    }
}
