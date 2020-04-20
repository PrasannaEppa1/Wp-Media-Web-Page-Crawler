### Requirement
To develop an app or wordpress plugin used to crawl all internal links of a website which helps admin to improve SEO rankings of their website.

### Implementation Details
Developed a new wordpress plugin in order to meet above requirement and following are the technical details.

== ADMIN ==
* Added a new menu item "Wp Media Crawler" under Settings Tab in Admin using inbuilt functions/hooks.
* On this page, added three buttons called "Start Crawler", "View Links" and "Reset Crawler".
* Start Crawler executes all the steps listed below using an ajax call (Used wp_ajax hook in wordpress).
    1. Deletes links data from previous crawl (Used transients in wordpress to store links data on each crawl).
    2. Delete the sitemap.html file created in previous crawl. (This file is stored in storage folder of plugin root).
    3. Retrieves all internal links of home page (used DomDocument library in PHP to get all anchor links from DOM).
    4. Storing links data in database using set_transient function in json format.
    5. Creating sitemap.html file with new links data under storage folder.
    6. Creating homepage.html file which saves the html content of home page under storage folder.
    7. Creates a trigger which runs every one hour executing all above steps. Used schedule events in WP to create this trigger.
    8. Displaying all the list of links to admin.
* View Links - triggers an ajax call executing all below operations.
    1. Retrieves links data stored in database.
    2. Decodes the json data.
    3. Show all the list of links on DOM.
    4. This button is shown only when crawler is already started and there is links data in database to show.
* Reset Crawler - triggers an ajax call to reset all crawler data as below.
    1. Deleting links data from database.
    2. Deleting cron schedule event that has been created.
    3. Deleting sitemap.html file from storage folder.
    4. This button is used when there is any error in crawling and if you want to reset everything and start crawler again.

== FRONTEND ==
* Added a new custom endpoint (using inbuilt hooks in WP) for sitemap page called "/wpsitemap".
* So when a visitor access "{yourdomain}/wmsitemap", it shows the sitemap.html file DOM listing all the links on the page.

### Why this approach is chosen
Reason to develop a plugin in Wordpress is most of the functionalities needed are inbuilt in WP like below
* Storing links data in database can be done using Transients concept.
* Can use cron schedules in WP to trigger crawl task every one hour.
* Homepage content to be dynamic, this is built in, as page content of home page can be edited from admin.
* Creating custom urls (endpoints) like "/wpsitemap" can be done using inbuilt function add_rewrite_endpoint.
* Ajax calls can be easily added for admin using wp_ajax hook.

### Explanation on plugin expectations
* Content on the home page is dynamic
* It lives in GitHub repo https://github.com/PrasannaEppa1/Wp-Media-Web-Page-Crawler
* It’s built using your package template.
* It’s built with modern OOP with PSR. Used PSR-4 for autoloading. 
* Not able to follow all PSR standards like class file names, method names as wp-coding-standards was not allowing few things in phpcs inspection.
* It’s complete and works.
* It delivers the right expected outcome per what the admin requested (per the user story).
* It does not generate errors, warnings, or notices.
* It runs on the following versions of PHP: 5.6, 7.0, 7.1, 7.2, 7.3, and 7.4.
* If built with WordPress, it runs on version 5.0 and up.
* It does not create new global variables.
* Use a MariaDB or MySQL database
* Plugin passes phpcs inspection.
* Unit tests are added.
* Travis CI is linked to the github repo running phpcs and unit tests on each commit.

### Usage Instructions
Below are the list of instructions on how to use the plugin.

== FOR ADMIN ==
* Under the Settings Menu in admin, you can see a new menu item called "Wp Media Crawler".
* Going to that sub menu, two buttons "Start Crawler" and "Reset Crawler" are shown.
* Clicking on Start Crawler, it crawls all internal links of home page and displays all links.
* It also triggers a task that runs every one hour, updating the links based on the content of home page.
* Reset Crawler button is used to reset everything like stopping all triggers,deleting all storage files.
* Resetting is helpful when there is some error and you want to reset everything.

== FOR VISITOR ==
* When you visit the url "{yourdomain/wmsitemap}", a page with the list of links that are crawled are shown (similar to sitemap page).

