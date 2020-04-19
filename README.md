=== Wp Media Web Page Crawler ===
Contributors: prasannaeppa
Tags: wp-media-web-page-crawler
Requires at least: 5.0
Tested up to: 5.3
Stable tag: 1.0
License: GPLv3 or later

Wp Media Web Page Crawler is a plugin which crawls all internal links of website and shows in sitemap page.

== Description ==

Wp Media Web Page Crawler which crawls all internal links of website and shows in sitemap page. It will automatically crawls the links of home page every one hour and gives option for admin to check the link to improve their SEO rankings.

Major features in Wp Media Web Page Crawler include:

* Crawls all internal links of home page of website.
* Provides option for admin to view all links which gives admin ways to improve SEO of website. 
* Generates a sitemap url which provides visitor to check it in frontend.
* Automatically runs crawler task every one hour, so that sitemap links are updated based on dynamic content of home page.

== Installation ==

### INSTALL WP MEDIA WEB PAGE CRAWLER MANUALLY

* Download the plugin from this link https://github.com/PrasannaEppa1/Wp-Media-Web-Page-Crawler.
* Place it in wp-content/plugins folder of your wordpress instance.
* Activate the plugin through the 'Plugins' menu in Wordpress.
* Make sure the storage folder present in plugin folder is writable.

== Usage Instructions ==

### FOR ADMIN

* Under the Settings Menu in admin, you can see a new menu item called "Wp Media Crawler".
* Going to that sub menu, two buttons "Start Crawler" and "Reset Crawler" are shown.
* Clicking on Start Crawler, it crawls all internal links of home page and displays all links.
* It also triggers a task that runs every one hour, updating the links based on the content of home page.
* Reset Crawler button is used to reset everything like stopping all triggers,deleting all storage files.
* Resetting is helpful when there is some error and you want to reset everything.

### FOR VISITOR

* When you visit the url "{yourdomain/wmsitemap}", a page with the list of links that are crawled are shown (similar to sitemap page).