use database;
CREATE TABLE blog_author (
author_name varchar(255) not null
,author_email varchar(255) primary key

);

CREATE TABLE blog_lists (
    serial_num int primary key
    , blog_name varchar(255)
    , author_name varchar(50)
    , blog_content text
    , author_email varchar(255) REFERENCES blog_author(author_email) 
    , publish_date DATE

); 

INSERT INTO blog_author values("Kierra","kierra.gentry@gmail.com");
INSERT INTO blog_author values("Miranda","miranda.shaffer@gmail.com");
INSERT INTO blog_author values("Thomas","thomas.crane@gmail.com");
INSERT INTO blog_author values("Rayon","rayon.hopkins@gmail.com");
INSERT INTO blog_author values("Troy","troy.vincent@gmail.com");


INSERT INTO blog_lists values("1","Blog by Kierra","Kierra Gentry","This is the content....","kierra.gentry@gmail.com","2017-05-18");
INSERT INTO blog_lists values("2","Blog by Miranda","Miranda Shaffer","This is the content....","miranda.shaffer@gmail.com","2019-04-20");
INSERT INTO blog_lists values("3","Blog by Thomas","Thomas Crane","This is the content....","thomas.crane@gmail.com","2020-02-14");
INSERT INTO blog_lists values("4","Blog by Rayon","Rayon Hopkins","This is the content....","rayon.hopkins@gmail.com","2000-01-15");
INSERT INTO blog_lists values("5","Blog by Troy","Troy Vincent","This is the content....","troy.vincent@gmail.com","1999-03-11");
