<?php
/**
 * Initialization file for the Views extension.
 *
 * @file Views.php
 * @ingroup Views
 *
 * @licence GNU GPL v3
 * @author Vedmaka <god.vedmaka@gmail.com>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

if ( version_compare( $wgVersion, '1.17', '<' ) ) {
	die( '<b>Error:</b> This version of Views requires MediaWiki 1.17 or above.' );
}

global $wgViews;
$wgViewsDir = dirname( __FILE__ );

/* Credits page */
$wgExtensionCredits['specialpage'][] = array(
    'path' => __FILE__,
    'name' => 'Views',
    'version' => '0.1',
    'author' => 'Vedmaka',
    'url' => '',
    'descriptionmsg' => 'Views-credits',
);

/* Resource modules */
$wgResourceModules['ext.Views.main'] = array(
    'localBasePath' => dirname( __FILE__ ) . '/',
    'remoteExtPath' => 'Views/',
    'group' => 'ext.Views',
    'scripts' => '',
    'styles' => ''
);

/* Message Files */
$wgExtensionMessagesFiles['Views'] = dirname( __FILE__ ) . '/Views.i18n.php';

/* Autoload classes */
$wgAutoloadClasses['Views'] = dirname( __FILE__ ) . '/Views.class.php';
#$wgAutoloadClasses['ViewsHooks'] = dirname( __FILE__ ) . '/Views.hooks.php';

/* ORM,MODELS */
#$wgAutoloadClasses['Views_Model_'] = dirname( __FILE__ ) . '/includes/Views_Model_.php';

/* ORM,PAGES */
#$wgAutoloadClasses['ViewsSpecial'] = dirname( __FILE__ ) . '/pages/ViewsSpecial/ViewsSpecial.php';

/* Rights */
#$wgAvailableRights[] = 'example_rights';

/* Permissions */
#$wgGroupPermissions['sysop']['example_rights'] = true;

/* Special Pages */
#$wgSpecialPages['Views'] = 'ViewsSpecial';

/* Hooks */
#$wgHooks['example_hook'][] = 'ViewsHooks::onExampleHook';