# External Affairs
The following read.me file outlines the development of the northeastern university external affairs web site.  Please read through this document thoroughly and let us know if there are any questions.


## Our Development Process
Our development process consists of the following tools:
* Wordpress.
* Github, usually simple public repositories.
* A modified feature branch repository structure based on individual developers (ex: dev/developer_name) rather than features and in which developers can branch and twig out as needed.  Anything ready for testing requires merge to dev/master.
* Deploy Buddy, to automagically push edits merged to the development master branch to the test server.
* WP Migrate DB Pro, to synchronize any database and media changes from development to test and vice-versa.

Our repositories only contain the theme and plugin files.  WP Core is not captured in this and a starter zip of these files will be required in order to properly begin development work.  Please note that in most cases we freeze the version of Wordpress being used until we reach a point of stability and a new set of core files can be introduced and tested.
