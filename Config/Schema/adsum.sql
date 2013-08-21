SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `extid` VARCHAR(255) NULL DEFAULT NULL ,
  `email` VARCHAR(150) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `display_name` VARCHAR(200) NOT NULL ,
  `first_name` VARCHAR(100) NULL DEFAULT NULL ,
  `last_name` VARCHAR(100) NULL DEFAULT NULL ,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1 ,
  `last_seen` DATETIME NULL DEFAULT NULL ,
  `is_admin` TINYINT(1) NOT NULL DEFAULT 0 ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Stores registered user accounts.';


-- -----------------------------------------------------
-- Table `event_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `event_types` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(150) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Holds event category types.';


-- -----------------------------------------------------
-- Table `events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `events` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `event_type_id` INT(11) UNSIGNED NOT NULL ,
  `uuid` CHAR(36) NOT NULL ,
  `extid` VARCHAR(255) NULL DEFAULT NULL ,
  `title` VARCHAR(255) NOT NULL ,
  `is_active` TINYINT(1) NULL DEFAULT 1 ,
  `start_time` DATETIME NULL DEFAULT NULL ,
  `end_time` DATETIME NULL DEFAULT NULL ,
  `attendee_count` INT NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `event_type_id` (`event_type_id` ASC) )
ENGINE = InnoDB
COMMENT = 'Stores event details.';


-- -----------------------------------------------------
-- Table `attendees`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendees` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `uuid` CHAR(36) NOT NULL ,
  `extid` VARCHAR(255) NULL DEFAULT NULL ,
  `first_name` VARCHAR(125) NOT NULL ,
  `last_name` VARCHAR(125) NOT NULL ,
  `display_name` VARCHAR(250) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Event attendees and guests.';


-- -----------------------------------------------------
-- Table `attendance_status_states`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendance_status_states` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Statuses for attendees at events.';


-- -----------------------------------------------------
-- Table `attendee_status_logs`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendee_status_logs` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `attendee_id` INT(11) UNSIGNED NOT NULL ,
  `attendance_status_state_id` INT(11) UNSIGNED NOT NULL ,
  `event_id` INT(11) UNSIGNED NOT NULL ,
  `logged_by` INT(11) UNSIGNED NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `attendee_id` (`attendee_id` ASC) ,
  INDEX `event_id` (`event_id` ASC) ,
  INDEX `attendance_status_state_id` (`attendance_status_state_id` ASC) ,
  INDEX `logged_by` (`logged_by` ASC) )
ENGINE = InnoDB
COMMENT = 'Records attendee event registration and status.';


-- -----------------------------------------------------
-- Table `attendees_events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendees_events` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `attendee_id` INT(11) UNSIGNED NOT NULL ,
  `event_id` INT(11) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `attendee_id` (`attendee_id` ASC) ,
  INDEX `event_id` (`event_id` ASC) )
ENGINE = InnoDB
COMMENT = 'Attendees registered for events.';


-- -----------------------------------------------------
-- Table `attendee_meta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendee_meta` (
  `id` INT NOT NULL ,
  `key` VARCHAR(100) NOT NULL ,
  `value` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `key` (`key` ASC) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `event_types`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `event_types` (`id`, `title`) VALUES (1, 'Conference');
INSERT INTO `event_types` (`id`, `title`) VALUES (2, 'Meeting');
INSERT INTO `event_types` (`id`, `title`) VALUES (3, 'Webinar');

COMMIT;

-- -----------------------------------------------------
-- Data for table `attendance_status_states`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (6, 'Registered');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (7, 'Arrived');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (3, 'Cancelled');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (4, 'No Show');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (5, 'Substituted');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (1, 'Check-In');
INSERT INTO `attendance_status_states` (`id`, `title`) VALUES (2, 'Check-Out');

COMMIT;
