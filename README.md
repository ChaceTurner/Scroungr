# scroungr.dev
CSE 201 project, Spring 2015 - Group 7
 
Here's what I did on my home computer to get sharing to work:

1) Download Ampps

2) Download Git Windows Client

3) Clone the scroungr.dev repository to: C:\Program Files (x86)\Ampps\www

4) Open up Ampps by typing "localhost/Ampps" into the web browser

5) Add a domain called "scroungr.dev" to path: C:\Program Files (x86)\Ampps\www\scroungr.dev

6) In phpMyAdmin, go to Users

  - Create user named "scroungr"; host:localhost (in dropdown); leave password field blank

7) Also in phpMyAdmin, create a new database named "scroungr"

8) In that database, click Import

  - Import the database at location: C:\Program Files (x86)\Ampps\www\scroungr.dev\sqlDatabase

      - We'll have to export the database to this location manually any time we make edits to the site and import on each update
          - Small annoyance but not a big deal as long as we remember

9) Click Wordpress, click Import

10) Import from path: C:\Program Files (x86)\Ampps\www\scroungr.dev\wp\

11) In browser, type in "scroungr.dev/wp/" to see the site and add "wp-admin" to the URL to see the admin page



After changes are made, we'll need to:

1) In phpMyAdmin, export the database to the sqlDatabase folder

2) Sync using the Git client



After the initial set-up, all we'll have to do to update our local repos (assuming changes have been made to remote repo) is:

1) Sync using the Git client

2) In phpMyAdmin, select scroungr database -> Check all tables -> Drop

3) After database is cleared, Import the updated database
