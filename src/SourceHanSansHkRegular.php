<?php
namespace ayiu\fonts;

class SourceHanSansHkRegular {
	public static function getFontFolderPath() {
		return realpath(__DIR__ . "/resources/fonts/") . "/";
	}

	public static function getFontPath() {
		return self::getFontFolderPath() . self::getFontFileName();
	}

	public static function getFontFileName() {
		return "SourceHanSansHK-Regular.ttf";
	}
}
