<?php

namespace AppBundle\Twig\Extension;

class FormFieldErrorExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('merge_errors_with_custom_error_css', [$this, 'mergeErrorsWithCustomErrorCss']),
        ];
    }

    public function mergeErrorsWithCustomErrorCss(array $attrs = [])
    {
        if (count($attrs) === 0) {
            return $attrs;
        }

        if (false === isset($attrs['class'])) {
            $attrs['class'] = '';
        }

        if (isset($attrs['data-custom-error-css-class'])) {
            $attrs['class'] .= sprintf(' %s', $attrs['data-custom-error-css-class']);
        }

        return $attrs;
    }
}