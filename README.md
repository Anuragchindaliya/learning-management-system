# learnig-management-system

for my college project 

ALTER TABLE `course` ADD `course_category` VARCHAR(20) NOT NULL DEFAULT 'course_placeholder' AFTER `course_desc`, ADD `course_level` ENUM('0','1','2') NOT NULL AFTER `course_category`;