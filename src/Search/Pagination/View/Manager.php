<?php
namespace Concrete\Package\SeoPagination\Src\Search\Pagination\View;

use Concrete\Core\Support\Manager as CoreManager;
use Concrete\Core\Search\Pagination\View\ConcreteBootstrap3View;

class Manager extends CoreManager
{
	protected function createApplicationDriver()
	{
		return new SeoView();
	}
	protected function createDashboardDriver()
	{
		return new ConcreteBootstrap3View();
	}
}
