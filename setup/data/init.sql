use database;
CREATE TABLE blog_author (
author_name varchar(255) not null
,author_email varchar(255) primary key

);

CREATE TABLE blog_lists (
    serial_num int primary key
    , blog_name varchar(255)
    , blog_content text
    , author_email varchar(255) REFERENCES blog_author(author_email) 
    , publish_date DATETIME 

); 

INSERT INTO blog_author values("kierra","kierra.gentry@gmail.com");
INSERT INTO blog_author values("miranda","miranda.shaffer@gmail.com");
INSERT INTO blog_author values("thomas","thomas.crane@gmail.com");

INSERT INTO blog_lists values("1","kierra","This is the content","kierra.gentry@gmail.com",curdate());
INSERT INTO blog_lists values("2","miranda","This is the content","miranda.shaffer@gmail.com",curdate());
INSERT INTO blog_lists values("3","thomas","This is the content","thomas.crane@gmail.com",curdate());