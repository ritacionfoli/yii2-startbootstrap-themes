<?php
/**
 * AgencyFontsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\AgencyFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\AgencyFontsAsset',
 */

namespace p2made\SB\assets;

class AgencyFontsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Montserrat:400,700',
				'css?family=Kaushan+Script',
				'css?family=Droid+Serif:400,700,400italic,700italic',
				'css?family=Roboto+Slab:400,100,300,700',
			],
			'js' => [],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
