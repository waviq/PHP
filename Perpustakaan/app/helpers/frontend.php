<?php

/**
 * macro untuk mmebuat divider
 */
HTML::macro('divider', function() {
    return "<hr class=\"uk-article-divider\">";
});

/**
 * Macro untuk membuat label dari UIKIT
 */
Form::macro('labelUk', function($name, $placeholder) {
    return Form::label($name, $placeholder, array('class' => 'uk-form-label'));
});

/**
 * Membuat macro text dengan UIKIT
 */
Form::macro('textUk', function($name, $placeholder = null, $icon = null) {
    $html = '';
    if ($icon) {
        $html .= "<div class\=\"uk-form-icon\">
            <i class=\"$icon\"></i>";
    } else {
        $html .= "<div class=\"uk-form-controls\">";
    }

    $html .= Form::text($name, null, array('placeholder'=>$placeholder));
    $html .= '</div>';

    return $html;
});

/**
 * Menampilkan tombol submit
 */

Form::macro('submitUk', function($title) {
    return "<input type=\"submit\" value=\"$title\" class=\"uk-button uk-button-primary\">";
});

/**
 * Macro membuat tombol tambah
 */

HTML::macro('buttonAdd', function($path = null) {
    if ($path) {
        $url = $path;
    } else {
        $url = explode('.', Route::currentRouteName());
        array_pop($url);
        array_push($url, 'create');
        $url = implode('.', $url);
        $url = route($url);
    }

    return '<a class="uk-button uk-button-primary" href="'.$url.'">Tambah</a>';
});