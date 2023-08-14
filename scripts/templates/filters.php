<?php
/**
 * Markdown Template
 *
 * @link      https://guides.github.com/features/mastering-markdown/
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

if ( ! isset( $documentor ) ) {
	return;
}

$filters = $documentor->get_filters();

$eol = "\n";

echo '# Hooks', $eol;

echo $eol;

echo '## Filters', $eol;

echo $eol;

if ( empty( $filters ) ) {
	echo '*This project does not contain any WordPress filters.*', $eol;
	echo $eol;
} else {
	foreach ( $filters as $hook ) {
		include __DIR__ . '/parts/markdown-hook.php';
	}
}

echo $eol;

echo '<p align="center">';

printf(
	'<a href="%s"><img src="%s" alt="Pronamic WordPress Documentor" width="32" height="32"></a>',
	'https://github.com/pronamic/wp-documentor',
	'https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg'
);

echo '<br>';

printf(
	'<em>Generated by <a href="%s">Pronamic WordPress Documentor</a> <code>%s</code></em>',
	'https://github.com/pronamic/wp-documentor',
	'1.2.0'
);

echo '<p>';

echo $eol;
