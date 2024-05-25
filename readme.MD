This is the main repository for the client side of Nurul Hasanah Website (YSP project).

You can clone or fork this repository to start working on it.

But, please keep in mind that there are several configurations that need to be adjusted in order to make it run properly in your local machine.

**DATABASE CONFIGURATION**

You can find the database file of this website in the **db** folder of this repository.

Note that each database file has its version. This version represents the date the database was updated.
It is important to use the appropriate database file based on the last commit that you are currently working on it.
You can see the database file version in the commit's description.

If in your commit you made a change to the database, please upload that database file to the db folder and do not forget to add its version, both in its name and in your commit description.

- DB_name: ysp_nurulhasanah
- DB_user: root
- DB_password:
- DB_host: localhost
- DB_charset: utf8mb4
- table_prefix: wp_client

**ROOT PATH CONFIGURATION**

The root path configuration in WordPress is really matters. There are two files that contain the root path:

- .htaccess
- database file (*you can find it in the db folder*)

In these files, the default root path is ***http://localhost/ysp/client***. Please change this to your own root path.