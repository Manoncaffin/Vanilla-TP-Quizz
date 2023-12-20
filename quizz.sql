CREATE TABLE `questions`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `questions` VARCHAR(255) NOT NULL
);
CREATE TABLE `user`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pseudo` VARCHAR(255) NOT NULL,
    `score` INT NOT NULL
);
CREATE TABLE `answer`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `question_id` INT NOT NULL,
    `good_answer` VARCHAR(255) NOT NULL,
    `autre1_answer` VARCHAR(255) NOT NULL,
    `autre2_answer` VARCHAR(255) NOT NULL,
    `autre3_answer` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `answer` ADD CONSTRAINT `answer_question_id_foreign` FOREIGN KEY(`question_id`) REFERENCES `questions`(`id`);