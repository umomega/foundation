<?php

namespace Umomega\Foundation\Http\Controllers;

class UtilitiesController extends Controller
{

    /**
     * Shows the dashboard
     *
     * @param string $locale
     * @return View
     */
    public function localization(string $locale)
    {
    	$strings = \Cache::rememberForever('lang.' . $locale . 'js', function () use ($locale) {
    		$strings = [];

    		foreach (config('app.locale-keywords') as $keyword) {
    			$strings[$locale . '.' . $keyword] = __($keyword, [], $locale);
    		}

    		return $strings;
    	});

    	header('Content-Type: text/javascript');
    	echo('window.messages = ' . json_encode($strings) . ';');
    	exit();
    }

}
