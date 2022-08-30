CREATE TABLE `users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`mobilenumber` varchar(50) NOT NULL,
	`password` varchar(255) NOT NULL,
	`token` varchar(255) NOT NULL,
	`is_active` enum('0','1') NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `incomes` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL AUTO_INCREMENT,
	`transaction` enum('MPESA', 'Cash', 'Bank', 'PayPal', 'Stripe') NOT NULL AUTO_INCREMENT,
	`income_name` varchar(255) NOT NULL,
	`charges` INT(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `expenses` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL AUTO_INCREMENT,
	`transaction` enum NOT NULL,
	`expense_name` varchar(255) NOT NULL,
	`charges` INT(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `transactions` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`expense_id` int NOT NULL AUTO_INCREMENT,
	`income_id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL AUTO_INCREMENT,
	`transaction_name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `incomes` ADD CONSTRAINT `incomes_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `incomes` ADD CONSTRAINT `incomes_fk1` FOREIGN KEY (`transaction`) REFERENCES `users`(`id`);

ALTER TABLE `expenses` ADD CONSTRAINT `expenses_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `transactions` ADD CONSTRAINT `transactions_fk0` FOREIGN KEY (`expense_id`) REFERENCES `expenses`(`id`);

ALTER TABLE `transactions` ADD CONSTRAINT `transactions_fk1` FOREIGN KEY (`income_id`) REFERENCES `incomes`(`id`);

ALTER TABLE `transactions` ADD CONSTRAINT `transactions_fk2` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);





