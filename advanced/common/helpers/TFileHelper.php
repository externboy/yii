<?php
namespace common\helpers;

class TFileHelper
{

	public static function buildPath($pathes, $withStart = true, $withEnd = false)
	{
		$ret = '';
		
		foreach ($pathes as $path)
		{
			$ret .= $path . DIRECTORY_SEPARATOR;
		}
		if ($withStart)
		{
			$ret = DIRECTORY_SEPARATOR . $ret;
		}
		if (! $withEnd)
		{
			$ret = rtrim($ret, DIRECTORY_SEPARATOR);
		}
		return $ret;
	}

	public static function getFile($path, $prefix = null)
	{
		if (is_array($path))
		{
			$path = self::buildPath($path);
		}
		
		$files = scandir($path);
		if ($prefix == null)
		{
			return $files;
		}
		
		$ret = [];
		foreach ($files as $file)
		{
			if (strpos($file, $prefix) === 0)
			{
				$ret[] = $file;
			}
		}
		
		return $ret;
	}

	public static function createFile($filePath, $content)
	{}

	public static function removeFile($filePath)
	{}

	public static function readFile($filePath)
	{
		if (is_array($filePath))
		{
			$filePath = self::buildPath($filePath, false);
		}
		
		return file_get_contents($filePath);
	}

	public static function writeFile($filePath, $content, $mode = 'w')
	{
		if (is_array($filePath))
		{
			$filePath = self::buildPath($filePath, false);
		}
		
		$f = fopen($filePath, $mode);
		fwrite($f, $content);
		fclose($f);
	}

	public static function createDir($dirPath)
	{}

	public static function removeDir($dirPath)
	{}
}