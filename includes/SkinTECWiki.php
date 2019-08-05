<?php
/**
 * SkinTemplate class for the BootstrapMediaWiki skin
 *
 * @ingroup Skins
 */
class SkinTECWiki extends SkinTemplate {
	public $skinname       = 'tecwiki';
	public $stylename      = 'tecwiki';
	public $template       = 'TECWikiTemplate';
	public $useHeadElement = true;

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta(
			'viewport',
			'width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$styles = [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.tecwiki',
		];

		$scripts = [
			'skins.tecwiki.js',
		];

		$out->addModuleStyles( $styles );
		$out->addModules( $scripts );
	}
}
