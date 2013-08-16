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
  `is_active` VARCHAR(45) NOT NULL DEFAULT 0 ,
  `last_seen` DATETIME NULL DEFAULT NULL ,
  `is_admin` VARCHAR(45) NOT NULL DEFAULT 0 ,
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
  `is_active` INT(2) NULL DEFAULT 1 ,
  `start_time` DATETIME NULL DEFAULT NULL ,
  `end_time` DATETIME NULL DEFAULT NULL ,
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
-- Table `attendee_bar_numbers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `attendee_bar_numbers` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `attendee_id` INT(11) UNSIGNED NOT NULL ,
  `bar_number` VARCHAR(150) NOT NULL ,
  `state` CHAR(2) NOT NULL COMMENT 'State postal abbreviation. See ISO 3166-2:US.' ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `attendee_id` (`attendee_id` ASC) )
ENGINE = InnoDB;