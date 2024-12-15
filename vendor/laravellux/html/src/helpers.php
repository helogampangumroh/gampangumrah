<?php

use Illuminate\Support\HtmlString;

if (! function_exists('link_to')) {
    /**
     * Generate a HTML link.
     *
     * @param string $url
     * @param string|null $title
     * @param array $attributes
     * @param bool|null $secure
     * @param bool $escape
     *
     * @return string
     */
    function link_to(string $url, string|null $title = null, array $attributes = [], bool|null $secure = null, bool $escape = true): string
    {
        return app('html')->link($url, $title, $attributes, $secure, $escape);
    }
}

if (! function_exists('link_to_asset')) {
    /**
     * Generate a HTML link to an asset.
     *
     * @param string $url
     * @param string|null $title
     * @param array $attributes
     * @param bool|null $secure
     *
     * @return string
     */
    function link_to_asset(string $url, string $title = null, array $attributes = [], bool $secure = null): string
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if (! function_exists('link_to_route')) {
    /**
     * Generate a HTML link to a named route.
     *
     * @param string $name
     * @param string|null $title
     * @param mixed $parameters
     * @param array $attributes
     *
     * @return string
     */
    function link_to_route(string $name, string $title = null, mixed $parameters = [], array $attributes = []): string
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if (! function_exists('link_to_action')) {
    /**
     * Generate a HTML link to a controller action.
     *
     * @param string $action
     * @param string|null $title
     * @param array $parameters
     * @param array $attributes
     *
     * @return string
     */
    function link_to_action(string $action, string $title = null, array $parameters = [], array $attributes = []): string
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}
