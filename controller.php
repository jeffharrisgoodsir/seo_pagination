<?php
namespace Concrete\Package\SeoPagination;

use Concrete\Core\Package\Package;
use Core;

class Controller extends Package
{
	protected $pkgHandle = 'seo_pagination';
	protected $appVersionRequired = '5.7.5.4';
	protected $pkgVersion = '0.9.1';

	public function getPackageName()
	{
		return t("SEO Pagination");
	}

	public function getPackageDescription()
	{
		return t("SEO friendly pagination");
	}

	public function on_start()
	{
		Core::bind('manager/view/pagination', function($app) {
			return new \Concrete\Package\SeoPagination\Src\Search\Pagination\View\Manager($app);
		});
	}
}
