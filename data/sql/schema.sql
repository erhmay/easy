CREATE TABLE admin (id BIGINT AUTO_INCREMENT, firstname VARCHAR(100) NOT NULL, lastname VARCHAR(100) NOT NULL, username VARCHAR(100) NOT NULL, password VARCHAR(32) NOT NULL, email VARCHAR(100), type TINYINT DEFAULT 0 NOT NULL, last_logged_at DATETIME NOT NULL, created_at DATETIME NOT NULL, permission VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE job (id BIGINT AUTO_INCREMENT, category_id BIGINT NOT NULL, type VARCHAR(255), company VARCHAR(255) NOT NULL, logo VARCHAR(255), url VARCHAR(255), position VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, description TEXT NOT NULL, how_to_apply TEXT NOT NULL, token VARCHAR(255) NOT NULL UNIQUE, is_public TINYINT(1) DEFAULT '1' NOT NULL, is_activated TINYINT(1) DEFAULT '0' NOT NULL, email VARCHAR(255) NOT NULL, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE job_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE news (id BIGINT AUTO_INCREMENT, type TINYINT DEFAULT 1 NOT NULL, title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, body TEXT NOT NULL, location TEXT NOT NULL, is_featured TINYINT(1) DEFAULT '0' NOT NULL, sort_order SMALLINT DEFAULT 0 NOT NULL, is_active TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE page (id BIGINT AUTO_INCREMENT, parent_id BIGINT DEFAULT 0 NOT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, is_visible TINYINT(1) DEFAULT '1' NOT NULL, show_on_homepage TINYINT(1) DEFAULT '1' NOT NULL, is_featured TINYINT(1) DEFAULT '0' NOT NULL, is_clickable TINYINT(1) DEFAULT '0' NOT NULL, link VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, lft BIGINT DEFAULT 0 NOT NULL, rgt BIGINT DEFAULT 0 NOT NULL, level TINYINT DEFAULT 0 NOT NULL, sort_order SMALLINT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX parent_id_idx (parent_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, username VARCHAR(255), first_name VARCHAR(255), last_name VARCHAR(255), email VARCHAR(255) NOT NULL, type VARCHAR(255), status BIGINT, company_name VARCHAR(255) NOT NULL, company_description TEXT NOT NULL, logo VARCHAR(255), url VARCHAR(255), address TEXT NOT NULL, location VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE job ADD CONSTRAINT job_category_id_job_category_id FOREIGN KEY (category_id) REFERENCES job_category(id);
ALTER TABLE page ADD CONSTRAINT page_parent_id_page_id FOREIGN KEY (parent_id) REFERENCES page(id);