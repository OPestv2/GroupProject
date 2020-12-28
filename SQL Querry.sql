	-------------------------------------------------------------------------------------
											--M1
	-------------------------------------------------------------------------------------													
--E1	
	--*password_hash*, *login*
	
	--IF EXISTS (SELECT login FROM Users WHERE login like '*login*')
	--	SELECT 1
	--ELSE
	--	SELECT 0
	
	SELECT login 
	FROM Users
	WHERE login like '*login*'
	
	SELECT login, password_hash 
	FROM Users 
	WHERE login like '*login*' 
	AND password_hash like '*password_hash*'
	
	SELECT activated_emai 
	FROM Users 
	WHERE login like '*login*' 
	AND password_hash like '*password_hash*'
	
--E2
	--*password_hash*, *login*, *email*, *first_name*, *last_name*, *phone_number*, *birth_date*
	
	SELECT login, email
	FROM Users
	WHERE login like '*login*'
	OR email like '*email*'
	
	INSERT INTO Users 
	(password_hash, login, email, first_name, last_name, phone_number, birth_date)
	VALUES
	(*password_hash*, *login*, *email*, *first_name*, *last_name*, *phone_number*, *birth_date*)
	
--E3
	--*login*, *email*, 
	
	SELECT login, email
	FROM Users 
	WHERE login like '*login*' 
	AND email like '*email*'
	
	SELECT activated_emai
	FROM Users 
	WHERE login like '*login*' 
	AND email like '*email*'
	
	SELECT password_reset_hash, pass_res_hash_active
	FROM Users 
	WHERE login like '*login*' 
	AND email like '*email*'
	
--E4
	--*login*, *value*, *password_hash*
	
	SELECT *value* 
	FROM Users
	WHERE login like '*login*'
	
	SELECT *password_hash*
	FROM Users
	WHERE login like '*login*'
	
	UPDATE Users
	SET *value* = *value*
	WHERE login like '*login*'
	
	-------------------------------------------------------------------------------------
											--M2
	-------------------------------------------------------------------------------------
--E1
	--*values*
	
	
	INSERT INTO Multimedia
	VALUES
	(*values*)
	
--E2
	--*search_values*
	
	SELECT multimedia_id
	FROM Multimedia
	WHERE *search_values*
	
--E3
	--*login*, *time*, *multimedia_id* 
	-- /czas/, /czas_koniec/, /user_id/
	
	--/user_id/ =
	SELECT user_id
	FROM Users Where login like '*login*'
	
	--/czas/ = 
	SELECT GETDATE
	
	--/czas_koniec/ =
	SELECT GETDATE+*time*
	
	INSERT INTO Subscryptions values (/user_id/, *multimedia_id*, /czas/, /czas_koniec/)
	
--E4 
	--*multimedia_id*, *value*
	UPDATE multimedia 
	SET user_rating value ( SELECT user_rating*value*
							FROM multimedia 
							WHERE multimedia_id = *multimedia_id*)
	WHERE multimedia_id = *multimedia_id*
	
	
	
	
	
--E5
	--*n*
	
	SELECT TOP(*n*) multimedia_id
	FROM Multimedia
	WHERE blocked = 0
	ORDER BY user_rating DESC
	
--E6
	--*multimedia_id*, *user_id*, *content*
	
	INSERT INTO Opinions values (*multimedia_id*, *user_id*, *content*)
	
--E7
	--*user_id*
	
	SELECT multimedia_id
	FROM Subscryptions 
	WHERE user_id = *user_id*
	
--E8
	--*login*, *time*, *multimedia_id* 
	-- /czas/, /czas_koniec/, /user_id/
	
	--/user_id/ =
	SELECT user_id
	FROM Users Where login like '*login*'
	
	--/czas/ = 
	SELECT GETDATE
	
	--/czas_koniec/ =
	SELECT GETDATE+*time*
	
	INSERT INTO Subscryptions values (/user_id/, *multimedia_id*, /czas/, /czas_koniec/)
	
--E9
	--*multimedia_id*
	
	SELECT estimated_reading_time
	FROM Multimedia
	WHERE multimedia_id = *multimedia_id*
	
--E10
	--*user_id*, *multimedia_id*
	
	INSERT INTO Whishlist values (*user_id*, *multimedia_id*, GETDATE)
	

	