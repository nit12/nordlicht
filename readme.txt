README
nordlicht version 0.2
copyright 2011 alpha vega llc

Licesned under the GNU GENERAL PUBLIC LICENSE Version 2

nordlicht is a new front end for AWStats

Instlation:
	1. Put all files into a directory on your server.
	2. Update the path to the AWStats  data files
	3. Navigate to the directory on your domain adding stats-YOUR.DOMAIN.COM to the URL
		3.1 To change the subdomain of your site, simple replace the YOUR.DOMAIN.COM with the one you wish to view
		3.2 To change the date add -MMYYYY after stats-YOUR.DOMAIN.COM
		3.3 You might need to modify the .htaccess file to reflect your setup if that's the case you can use these:
			3.3.1 ?stats=YOUR.DOMAIN.COM&time=MMYYYY
	4. Enjoy



=Changelog=

==nordlicht v0.2==
===Jan 08, 2011===
  * Made all tables made with the drawTable function that takes an associative array of values
  * Removed old code from funnns.php
  * Updated footer to include correct links

==nordlicht v0.1==
===Jan 01, 2011===
  * Inital release