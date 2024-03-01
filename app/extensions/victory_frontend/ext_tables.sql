--
-- Add SQL definition of database tables
--

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
  title varchar(255) DEFAULT '' NOT NULL,
  description text,
  link varchar(255) DEFAULT '' NOT NULL,
  link_text varchar(255) DEFAULT '' NOT NULL,
  image int(11) unsigned DEFAULT '0',
  media int(11) unsigned DEFAULT '0',
  background_color varchar(255) DEFAULT '' NOT NULL,

  teaser_item int(11) unsigned DEFAULT '0',
);

--
-- Table structure for table 'tx_victory_teaser_item'
--
CREATE TABLE tx_victory_teaser_item (
    tt_content int(11) unsigned DEFAULT '0',

    header varchar(255) DEFAULT '' NOT NULL,
    link varchar(255) DEFAULT '' NOT NULL,
    image int(11) unsigned DEFAULT '0',
);