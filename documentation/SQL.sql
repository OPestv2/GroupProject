--M1
	--E1
		--1	
				SELECT * 
				FROM Users 
				WHERE login = *login* 
				
	--E2
		--1
				SELECT logn, email
				FROM Users 
				WHERE login = *login*
				OR email = *email*
				
		--2
				INSERT INTO Users 
				(password_hash, login, email, first_name, last_name, phone_number, birth_date)
				VALUES
				(*password_hash*, *login*, *email*, *first_name*, *last_name*, *phone_number*, *birth_date*)
				
	--E3
		--1
				SELECT *
				FROM Users 
				WHERE login = *login*
				AND email = *email*
				
		--2
				UPDATE Users 
				SET 
				password_reset_hash = *password_reset_hash*,
				pass_res_hash_active = *pass_res_hash_active*
				WHERE login = *login*
				AND email = *email* 
	--E4
		--1
				SELECT login 
				FROM Users
				WHERE login = *new_login*
		--2
				UPDATE Users
				SET login = *new_login*
				WHERE login = *login*
				
				
		
		--3
				SELECT email
				FROM Users 
				WHERE login = *login*
		--4
				UPDATE Users
				SET
				email = *new_email*,
				activated_emai = 0
				WHERE login = *login*
		--5
				SELECT password_hash
				FROM Users 
				WHERE login = *login*
		--6
				UPDATE Users
				SET 
				password_hash = *new_password_hash*
				WHERE login = *login*
				
--M2
	--E1
		--1		
				INSERT INTO Multimedia
				(type, authors, title, descryption, add_date, page_amount, estimated_reading_time, language, price, est_year, est_house, age_recomm, genre, who_translated, multimedia_holder)
				VALUES
				(*type*, *authors*, *title*, *descryption*, *add_date*, *page_amount*, *estimated_reading_time*, *language*, *price*, *est_year*, *est_house*, *age_recomm*, *genre*, *who_translated*, *multimedia_holder*)
			
	--E2
		--1 
				SELECT multimedia_id
				FROM Multimedia
				WHERE *search_values*
	--E3
		--1
	
				INSERT INTO Subscryptions 
				(user_id, multimedia_id, start_date, end_date)
				VALUES 
				(*user_id*, *multimedia_id*, *start_date*, *end_date*)
	--E4
		--1
				INSERT INTO Opinions 
				(multimedia_id, user_id, content)
				VALUES
				(*multimedia_id*, *user_id*, *content*)
	--E5
		--1
				SELECT TOP(*n*) multimedia_id
				FROM Multimedia
				WHERE blocked = 0
				ORDER BY user_rating DESC
	--E6
		--1
				INSERT INTO Opinions 
				VALUES
				(*multimedia_id*, *user_id*, *content*)
	--E7
		--1
				SELECT multimedia_id
				FROM Subscryptions 
				WHERE user_id = *user_id*
	--E8
		--1
				INSERT INTO Subscryptions
				VALUES
				(*user_id*, *multimedia_id*, *czas_start*, *czas_koniec*)
	--E9
		--1
				SELECT estimated_reading_time
				FROM Multimedia
				WHERE multimedia_id = *multimedia_id*
	--E10
		--1
				INSERT INTO Whishlist 
				values 
				(*user_id*, *multimedia_id*, *time*)
	--E11
		--1
				SELECT user_id
				FROM Users 
				WHERE adres_activation_emal = *hashcode*
		--2
				UPDATE Users
				SET activated_emai = 1
				WHERE user_id = *user_id*
				
	--E12
		--1
				SELECT multimedia_id
				FROM Subscryptions
				WHERE user_id = *user_id*
				AND *time* < end_date
				AND suspended = 0