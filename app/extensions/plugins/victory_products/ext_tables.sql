--
-- Add SQL definition of database tables
--

CREATE TABLE tx_vshop_products (
   orderno varchar(255) DEFAULT '' NOT NULL,
   status varchar(255) DEFAULT '' NOT NULL,
   price varchar(255) DEFAULT '' NOT NULL,
   centprice varchar(255) DEFAULT '' NOT NULL,
   qty varchar(255) DEFAULT '' NOT NULL,
   labeltext text NOT NULL,
   description text NOT NULL,
   infotext text NOT NULL,
   text2 text NOT NULL,
   text3 text NOT NULL,
   weight tinytext NOT NULL,
   catalogno tinytext NOT NULL,
   image varchar(255) DEFAULT '' NOT NULL,
   category varchar(255) DEFAULT '' NOT NULL,
   article varchar(255) DEFAULT '' NOT NULL,
   material varchar(255) DEFAULT '' NOT NULL,
   catalogsearch varchar(255) DEFAULT '' NOT NULL,
);