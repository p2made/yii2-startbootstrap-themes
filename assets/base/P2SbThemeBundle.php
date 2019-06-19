<?php
/**
 * P2SbThemeBundle.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\SB\base\P2SbThemeBundle
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2m\SB\assets\base;

class P2SbThemeBundle extends \p2m\base\assets\P2AssetBase
{
	/*
	 * @var string
	 * protected $_p2mProjectId;
	 */
	protected $_p2mProjectId = 'yii2-startbootstrap-themes';

	/*
	 * @var string
	 * protected $version;
	 */
	protected $version; // = '0.0.0'

	/*
	 * @var array
	 * protected $assetData;
	 */

	/**
	 * Yii asset properties
	 *
	 * @var string
	 * public $sourcePath;
	 *
	 * @var string
	 * public $baseUrl;
	 *
	 * @var array
	 * public $css = [];
	 *
	 * @var array
	 * public $cssOptions = [];
	 *
	 * @var array
	 * public $js = [];
	 *
	 * @var array
	 * public $jsOptions = [];
	 *
	 * @var array
	 * public $depends = [];
	 *
	 * @var array
	 * public $publishOptions = [];
	 */

	/*
	 * P2 asset data structure

	'assetName' => array(
		'version' => 'version',
		'sourcePath' => 'sourcePath',
		'baseUrl' => 'baseUrl',
		'css' => [
		],
		'js' => [
		],
		'cssOptions' => [
		],
		'jsOptions' => [
		],
		'depends' => [
		],
		'publishOptions' => [
		],
		'cssIntegrity' => [
			'published' => 'published-hash',
			'static' => 'static-hash',
		],
		'jsIntegrity' => [
			'published' => 'published-hash',
			'static' => 'static-hash',
		],
	),

	 */

	public function __construct()
	{
		$allAssetsData = require(__DIR__ . '/_assetsData.php');

		if(!isset($allAssetsData[get_class($this)])) {
			return;
		}

		$this->assetData = $allAssetsData[$assetName];
		$allAssetsData = null;
	}
}
