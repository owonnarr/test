/*
 * https://github.com/madflow/jquery-slugify
 * Генерация URL
 * Copyright (c) 2015-2017 Florian Reiss
 * Licensed under the MIT license.
 */

(function($) {
    $.fn.slugify = function(source, options) {
        return this.each(function() {
            var $target = $(this),
                $source = $(source);

            $target.on('keyup change', function() {
                if ($target.val() !== '' && $target.val() !== undefined) {
                    $target.data('locked', true);
                } else {
                    $target.data('locked', false);
                }
            });

            $source.on('keyup change', function() {
                // If the target is empty - it cannot be locked
                if ($target.val() === '' || $target.val() === undefined) {
                    $target.data('locked', false);
                }

                if (true === $target.data('locked')) {
                    return;
                }
                if ($target.is('input') || $target.is('textarea')) {
                    $target.val($.slugify($source.val(), options));
                } else {
                    $target.text($.slugify($source.val(), options));
                }
            });
        });
    };

    // Static method.
    $.slugify = function(sourceString, options) {
        // Override default options with passed-in options.
        options = $.extend({}, $.slugify.options, options);

        // Guess language specifics from html.lang attribute
        // when options.lang is not defined
        options.lang = options.lang || $('html').prop('lang');

        // Apply preSlug function - if exists
        if (typeof options.preSlug === 'function') {
            sourceString = options.preSlug(sourceString);
        }

        sourceString = options.slugFunc(sourceString, options);

        // Apply postSlug function - if exists
        if (typeof options.postSlug === 'function') {
            sourceString = options.postSlug(sourceString);
        }

        return sourceString;
    };

    // Default plugin options
    $.slugify.options = {
        preSlug: null,
        postSlug: null,
        slugFunc: function(input, opts) {
            return window.getSlug(input, opts);
        }
    };
})(jQuery);

/*! jquery-slugify - v1.2.5 - 2017-10-06
* Copyright (c) 2017 madflow; Licensed  */
(function($) {
    $.fn.slugify = function(source, options) {
        return this.each(function() {
            var $target = $(this),
                $source = $(source);

            $target.on('keyup change', function() {
                if ($target.val() !== '' && $target.val() !== undefined) {
                    $target.data('locked', true);
                } else {
                    $target.data('locked', false);
                }
            });

            $source.on('keyup change', function() {
                // If the target is empty - it cannot be locked
                if ($target.val() === '' || $target.val() === undefined) {
                    $target.data('locked', false);
                }

                if (true === $target.data('locked')) {
                    return;
                }
                if ($target.is('input') || $target.is('textarea')) {
                    $target.val($.slugify($source.val(), options));
                } else {
                    $target.text($.slugify($source.val(), options));
                }
            });
        });
    };

    // Static method.
    $.slugify = function(sourceString, options) {
        // Override default options with passed-in options.
        options = $.extend({}, $.slugify.options, options);

        // Guess language specifics from html.lang attribute
        // when options.lang is not defined
        options.lang = options.lang || $('html').prop('lang');

        // Apply preSlug function - if exists
        if (typeof options.preSlug === 'function') {
            sourceString = options.preSlug(sourceString);
        }

        sourceString = options.slugFunc(sourceString, options);

        // Apply postSlug function - if exists
        if (typeof options.postSlug === 'function') {
            sourceString = options.postSlug(sourceString);
        }

        return sourceString;
    };

    // Default plugin options
    $.slugify.options = {
        preSlug: null,
        postSlug: null,
        slugFunc: function(input, opts) {
            return window.getSlug(input, opts);
        }
    };
})(jQuery);

jQuery(function($) {
    $.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
    $('#link').slugify('#inputCatName'); // Type as you slug

    $('#slug-target-1').slugify('#slug-source-1', {
        separator: '_' // If you want to change separator from hypen (-) to underscore (_)
    });

});