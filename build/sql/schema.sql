
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- work
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS work;

CREATE TABLE work
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL COMMENT 'Titre du livre',
    description VARCHAR(2048) COMMENT 'description',
    height INTEGER NOT NULL COMMENT 'height',
    width INTEGER NOT NULL COMMENT 'width',
    price FLOAT NOT NULL COMMENT 'Work price',
    filename VARCHAR(100) NOT NULL COMMENT 'filename',
    filesize FLOAT NOT NULL COMMENT 'filesize',
    stock INTEGER NOT NULL COMMENT 'stock',
    rate FLOAT NOT NULL COMMENT 'rate',
    date_post DATE NOT NULL COMMENT 'datepost',
    artist_id INTEGER NOT NULL COMMENT 'artist_id',
    category_id INTEGER NOT NULL COMMENT 'category_id',
    PRIMARY KEY (id),
    INDEX work_FI_1 (artist_id),
    INDEX work_FI_2 (category_id),
    CONSTRAINT work_FK_1
        FOREIGN KEY (artist_id)
        REFERENCES artist (id),
    CONSTRAINT work_FK_2
        FOREIGN KEY (category_id)
        REFERENCES category (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS user;

CREATE TABLE user
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL COMMENT 'name',
    firstname VARCHAR(255) NOT NULL COMMENT 'firstname',
    address VARCHAR(1024) NOT NULL COMMENT 'address',
    postal_code VARCHAR(5) NOT NULL COMMENT 'postalCode',
    city VARCHAR(128) NOT NULL COMMENT 'city',
    civility VARCHAR(4) NOT NULL COMMENT 'civility',
    email VARCHAR(128) NOT NULL COMMENT 'email',
    password VARCHAR(32) NOT NULL COMMENT 'Password',
    date_joined DATE NOT NULL COMMENT 'dateJoined',
    date_update DATE NOT NULL COMMENT 'dateUpdate',
    date_lastlog DATE NOT NULL COMMENT 'dateLastLog',
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- artist
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS artist;

CREATE TABLE artist
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(50 ) COMMENT 'pseudo',
    statut VARCHAR(30) COMMENT 'statut',
    description VARCHAR(1024) COMMENT 'the description',
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- category
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS category;

CREATE TABLE category
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) COMMENT 'categoryname',
    description VARCHAR(1024) COMMENT 'categorydescription',
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS history;

CREATE TABLE history
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    total_price FLOAT COMMENT 'orderTotalPrice',
    Nb_Work INTEGER COMMENT 'orderNbWork',
    date_Payement DATE COMMENT 'datePayement',
    user_id INTEGER NOT NULL COMMENT 'user_id',
    work_id INTEGER(255) NOT NULL COMMENT 'work_id',
    PRIMARY KEY (id),
    INDEX history_FI_1 (user_id),
    CONSTRAINT history_FK_1
        FOREIGN KEY (user_id)
        REFERENCES user (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- order_work_byid
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS order_work_byid;

CREATE TABLE order_work_byid
(
    history_id INTEGER NOT NULL,
    work_id INTEGER NOT NULL,
    PRIMARY KEY (history_id,work_id),
    INDEX order_work_byid_FI_2 (work_id),
    CONSTRAINT order_work_byid_FK_1
        FOREIGN KEY (history_id)
        REFERENCES history (id),
    CONSTRAINT order_work_byid_FK_2
        FOREIGN KEY (work_id)
        REFERENCES work (id)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
