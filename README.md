# External Affairs
The following read.me file outlines the development of the northeastern university external affairs web site.  Please read through this document thoroughly and let us know if there are any questions.


### Our Development Process
Our development process consists of the following tools:
* Wordpress.
* Github, usually simple public repositories.
* A modified feature branch repository structure based on individual developers (ex: dev/developer_name) rather than features and in which developers can branch and twig out as needed.  Anything ready for testing requires merge to dev/master.
* Deploy Buddy, to automagically push edits merged to the development master branch to the test server.
* WP Migrate DB Pro, to synchronize any database and media changes from development to test and vice-versa.

Our repositories only contain the theme and plugin files.  WP Core is not captured in this and a starter zip of these files will be required in order to properly begin development work.  Please note that in most cases we freeze the version of Wordpress being used until we reach a point of stability and a new set of core files can be introduced and tested.

We utilize SourceTree for our day-to-day Git repository management.

We utilize SASS on all of our projects.  We use CodeKit for compiling and merging these files during development.  Both the raw SASS and compiled CSS files are contained in all development branches.  Raw files are ONLY removed when moving to stage or to production.


### Installation
Note: The most current branch, unless otherwise directed, will be the dev/master branch.

1. Log into the WordPress management interface on the test server using the credentials that were provided to you.  Using WP Migrate DB Pro, create an SQL dump of the site being sure to find and replace the site URL and the file path to match your development environment.
2. If you are a developer and do not already have your own development branch, please create it before continuing.  We use the convention first initial dot last name, EX: n.developer.  This branch will exist on your local machine and should also be pushed to origin.  Be sure that you have your developer branch checked out and then clone the dev/master branch into the /wp-content folder of your development site.  You should always work within this branch.
3. Navigate to your development sites WordPress management interface, and again go to WP Migrate DB Pro and this time you will pull down a copy of the database as well as all uploaded media from the test server.  This will require a private connection string that will be provided to you.
4. Your local development site should now be fully working.  As you are complete work or requested edits you can merge these changes to the dev/master branch.  Once there, that branch can be committed to origin and the test server will be automagically updated.  Should your edits require changes to the database or any uploaded media, you will use WP Migrate DB Pro to push changes to the test server.
