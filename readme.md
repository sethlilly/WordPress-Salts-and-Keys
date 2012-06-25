###Introduction
---
_WordPress Salts and Keys_ is a plugin for [Coda](http://panic.com/coda/) (versions 1 and 2) designed to generate a set of salts and keys for use in wp-config.php.

###Usage
---
In Coda, select the existing set of salts and keys in wp-config.php. Alternatively, you may simply place the cursor at the desired location in your document. Typically, the existing salts and keys are located in a block which looks like this:

	/**#@+
 	* Authentication Unique Keys and Salts.
 	*
 	* Change these to different unique phrases!
 	* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 	* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 	*
 	* @since 2.6.0
 	*/
 	define('AUTH_KEY',         'RZ}o9ne~a;d3oWCI>jJS?rN%5/pgsV$bYZ`Nt/E+QcT*$$.`T+yug_DR$^.$+42o');
	define('SECURE_AUTH_KEY',  '46I`q_fUMrr[(qes ?3[TiRuz!s((8/3.j5q$)GIUbLEM:<f,,Twgr|)!_]};g-n');
	define('LOGGED_IN_KEY',    'VRL;>-WxYu}e`(|/xLJxXK{Eq=jRat.b1[y8(-7l^85/p&,&DREe7xfdiX|D=dUb');
	define('NONCE_KEY',        'lt6H!#u-#bE[++lYTpPeU l>z,`X,8RNKHeRkKq`FK~X$IpQ8W1/QfwA#.&S}&S,');
	define('AUTH_SALT',        '$;i<Wg@h2b#aJL-^[%|740bmB,egqv>+yjlQ05+q)sWTo%VnHMrU[WEWaj}BcDXx');
	define('SECURE_AUTH_SALT', 'TNF?Nq4l^*mxT- x8|z|sGZJ*FWa>,S%sIg`:p*gCQM$N9(V52z<lj[+|zH5@q]>');
	define('LOGGED_IN_SALT',   'gZ188{X&]LaC-_)oW*=q~Q)*S7QSmfO!-rszQ}U.qau5YluT%>WBWQ1S!vr..|GG');
	define('NONCE_SALT',       '|,@oA#h8hx=o4:Oi(Pu}hQ(zL&eRGtaJN:z.j7EH`:g4+Mw2A<L0Fcn{*dv:5}O1');

With the block of code selected or your cursor placed at the desired location, select _Generate WordPress Salts and Keys_ from the Plugin menu. The plugin will replace the current selection with randomly generated strings for each of the keys. The plugin handles the generation of strings locally, without calling the [WordPress Secret Key Generator](https://api.wordpress.org/secret-key/1.1/salt/), so it may be used offline.

###License
----
Released under the GPL v3 license. Fork, iterate, release. Have fun! Want to help make it better? Make your changes, then [submit a pull request](https://github.com/sethlilly/WordPress-Salts-and-Keys/pulls).

###Version Information
----
Current version: 1.0  
Release date: 2012-06-25


###Credits
----
Based on the [WordPress Secret Key Generator](https://api.wordpress.org/secret-key/1.1/salt/) from [WordPress](http://wordpress.org/).

&copy; 2011-2012 Seth Lilly for [Inceptiv](http://inceptiv.com/).