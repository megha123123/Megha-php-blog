use database;
CREATE TABLE author (
email varchar(255) primary key
, name varchar(255) not null
, password_hash varchar(255) not null
);

CREATE TABLE blog_lists (
    serial_num int primary key
    , post_name varchar(255)
    , post_content text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME 

); 

INSERT INTO author values("kierra.gentry@gmail.com","kierra","password");
INSERT INTO author values("miranda.shaffer@gmail.com","miranda","password");
INSERT INTO author values("thomas.crane@gmail.com","thomas","password");

INSERT INTO blog_lists values("1","kierra","This is the content","kierra.gentry@gmail.com",curdate());
INSERT INTO blog_lists values("2","miranda","This is the content","miranda.shaffer@gmail.com",curdate());
INSERT INTO blog_lists values("3","thomas","This is the content","thomas.crane@gmail.com",curdate());