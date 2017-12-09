#  Cool Guy Shirt Co. CS3380 Documentation

### Team Members
* Andrew Kammerich
* Joe Timlin
* Jordan Whitbey
* Nicole Dillon
* Sam Ellison
* John Lund

### Application Description
This application is an online store for the "Cool Guy Shirt Company." The application can be used to purchase a shirt from three designs. The user can create an account with personal information, editing or deleting it later. Furthermore, the user can sign back in at a later date with their information stored in a database.

### Schema
#### Users Table
mysql> SHOW COLUMNS FROM Users;
+--------------+----------+------+-----+---------+-------+
| Field        | Type     | Null | Key | Default | Extra |
+--------------+----------+------+-----+---------+-------+
| Username     | char(20) | NO   | PRI | NULL    |       |
| Address      | char(40) | NO   |     | NULL    |       |
| State        | tinytext | NO   |     | NULL    |       |
| Password     | char(20) | NO   |     | NULL    |       |
| EmailAddress | tinytext | NO   |     | NULL    |       |
| Phone        | int(10)  | NO   |     | NULL    |       |
| ZipCode      | int(5)   | NO   |     | NULL    |       |
+--------------+----------+------+-----+---------+-------+
#### Products Table
| Tables        | Are           | Cool  |
| :-------------: |:-------------:| :-----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

### ERD

### CRUD explanation
The user can **create** a new account if they don't have one already, **retrieve** past user info by signing in, **update** their account information by editing it, and **delete** their user if they desire. The page also dynamically **reads** product information from products database.

### Video URL
[YouTube Link to Proof](https://)

