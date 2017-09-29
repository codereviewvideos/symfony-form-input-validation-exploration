<?php

namespace AppBundle\Twig\Extension;

class FilterArrayExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('filter_array_by_key', [$this, 'filterArrayByKey']),
        ];
    }

    public function filterArrayByKey(array $array, $key)
    {
        return array_filter(
            $array,
            function ($k) use ($key) {
                return $k !== $key;
            },
            ARRAY_FILTER_USE_KEY
        );
    }
}