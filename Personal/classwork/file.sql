CREATE TABLE `attendance_db`.`students` (
    `student_id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `middle_name` VARCHAR(100) NULL,
    `department_id` INT NOT NULL,
    `mat_number` VARCHAR NOT NULL,
    `gender` VARCHAR(50) NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `level` INT(3) NOT NULL,
    `dob` DATE NOT NULL,
    `relationship_status` VARCHAR NULL,
    `state_of_origin` VARCHAR NOT NULL,
    PRIMARY KEY (`student_id`)
) ENGINE = InnoDB;