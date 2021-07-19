CREATE TABLE tx_games_domain_model_game (
	name varchar(255) DEFAULT '' NOT NULL,
	publishing_date date DEFAULT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	description text,
	link_to_steam varchar(255) DEFAULT '' NOT NULL,
	official_website varchar(255) DEFAULT '' NOT NULL,
	artwork int(11) unsigned NOT NULL default '0',
	screenshots int(11) unsigned DEFAULT '0' NOT NULL,
	score int(11) DEFAULT '0' NOT NULL,
	multiplayer smallint(5) unsigned DEFAULT '0' NOT NULL,
	cpu varchar(255) DEFAULT '' NOT NULL,
	gpu varchar(255) DEFAULT '' NOT NULL,
	ram varchar(255) DEFAULT '' NOT NULL,
	diskspace double(11,2) DEFAULT '0.00' NOT NULL,
	os varchar(255) DEFAULT '' NOT NULL,
	genre int(11) unsigned DEFAULT '0',
	characters text NOT NULL,
	publisher int(11) unsigned DEFAULT '0',
	usk int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_games_domain_model_character (
	name varchar(255) DEFAULT '' NOT NULL,
	photo int(11) unsigned NOT NULL default '0'
);

CREATE TABLE tx_games_domain_model_genre (
	name varchar(255) DEFAULT '' NOT NULL,
	description text
);

CREATE TABLE tx_games_domain_model_publisher (
	name varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0'
);

CREATE TABLE tx_games_domain_model_usk (
	age int(11) DEFAULT '0' NOT NULL
);
