<?php
/**
 * Plugin Name: Revisions CLI
 * Plugin URI: https://github.com/yannicklin-ctm/wp-revisions-cli/
 * Description: Plugin wrapper for WP CLI command, WP Revisions CLI
 * Version: 0.1.1
 * Author: Yannick Lin
 * License: MIT
 * TextDomain:
 * DomainPath:
 * Network:
 *
 * @package yannicklin-ctm/wp-revisions-cli
 */

if ( ! defined( 'WP_CLI' ) ) return;

require_once __DIR__ . '/inc/class-revisions-cli.php';

WP_CLI::add_command( 'revisions', 'Revisions_CLI' );
