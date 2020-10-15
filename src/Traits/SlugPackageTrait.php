<?php
/**
 * Part of the Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.com
 */
namespace Sunveloper\TeeplussConsole\Traits;

use Sunveloper\TeeplussSupport\String;

/**
 * This is the SlugPackage class.
 *
 * @package        Sunveloper\TeeplussConsole
 * @version        1.0.0
 * @author         Robin Radic
 * @license        MIT License
 * @copyright      2015, Robin Radic
 * @link           https://github.com/robinradic
 */
trait SlugPackageTrait
{

    /**
     * validateSlug
     *
     * @param $slug
     * @return bool
     */
    protected function validateSlug($slug)
    {
        if ( ! preg_match('/([a-z]*)\/([a-z]*)/', $slug, $matches) or count($matches) !== 3 )
        {
            return false;
        }

        return true;
    }

    /**
     * getSlugVendorAndPackage
     *
     * @param $slug
     * @return string[]
     */
    protected function getSlugVendorAndPackage($slug)
    {
        preg_match('/([a-z\-]*)\/([a-z\-]*)/', $slug, $matches);

        return array_slice($matches, 1, 2);
    }

    protected function getStudlySlug($slug)
    {
        return String::namespacedStudly($slug);
    }
}
