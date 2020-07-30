use database;
CREATE TABLE author (
email varchar(255) primary key
, name varchar(255) not null
, password_hash varchar(255) not null
);

CREATE TABLE blog_posts (
    slug varchar(40) primary key
    , post_name varchar(255)
    , post_content text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME 

); 