<?php

namespace Umomega\Foundation\Http\Controllers;

class UtilitiesController extends Controller
{

    /**
     * Loads translations for the app
     *
     * @param string $locale
     * @return View
     */
    public function localization(string $locale)
    {
    	$strings = \Cache::rememberForever('lang.' . $locale . 'js', function () use ($locale) {
    		$strings = [];

            // This function can be dynamically defined for each app as a helper
    		foreach (get_locale_keywords() as $keyword) {
    			$strings[$locale . '.' . $keyword] = __($keyword, [], $locale);
    		}

    		return $strings;
    	});

    	header('Content-Type: text/javascript');
    	echo('window.messages = ' . json_encode($strings) . ';');
    	exit();
    }

}
