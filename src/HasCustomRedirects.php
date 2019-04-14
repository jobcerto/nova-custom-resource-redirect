<?php

namespace Jobcerto\CustomResourceRedirect;

use Illuminate\Http\Request;

trait HasCustomRedirects
{
    /**
     * Get meta information about this resource for client side comsumption.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static function additionalInformation(Request $request)
    {
        return [
            'afterCreatinRedirectTo' => static::afterCreatinRedirectTo($request),
            'afterUpdateRedirectTo'  => static::afterUpdateRedirectTo($request),
        ];
    }

    public static function afterCreatinRedirectTo(Request $request)
    {
        //
    }

    public static function afterUpdateRedirectTo(Request $request)
    {
        //
    }
}
