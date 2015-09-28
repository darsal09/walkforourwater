
DROP PROCEDURE wfow_signin_user$$
CREATE PROCEDURE wfow_signin_user( IN email VARCHAR( 150 ) )
BEGIN
	SELECT 
		user_id,
		email,
		password,
		type,
		status,
		first,
		last
	FROM users
	WHERE email = email;
END$$


DROP PROCEDURE wfow_user_add$$
CREATE PROCEDURE wfow_user_add( IN firstname VARCHAR( 100), IN lastname VARCHAR( 100), IN email VARCHAR( 150 ), IN password VARCHAR( 128), IN type ENUM( 'Admin', 'Writer', 'Regular', 'IT' ), IN status ENUM( 'Active', 'Inactive' )  )
BEGIN
	INSERT INTO 
	users( first, last, email, password, type, status )
	VALUES( firstname, lastname, emal, password, type, status );

	SELECT LAST_INSERT_ID(); 
END$$

DROP PROCEDURE wfow_user_exist$$
CREATE PROCEDURE wfow_user_exist( IN email VARCHAR( 150 ) )
BEGIN
	SELECT
		user_id
	FROM users
	WHERE email = email;
END$$



DROP PROCEDURE wfow_update_user$$
CREATE PROCEDURE wfow_update_user( IN userID INT, IN firstname VARCHAR( 100), IN lastname VARCHAR( 100), IN email VARCHAR( 150 ), IN password VARCHAR( 128), IN type ENUM( 'Admin', 'Writer', 'Regular', 'IT' ), IN status ENUM( 'Active', 'Inactive' )  )
BEGIN
	UPDATE users
	SET  first = firstname, last = lastname, email = email, password = password, type = type, status = status
	WHERE user_id = userID
END$$

DROP PROCEDURE wfow_change_status_user$$
CREATE PROCEDURE wfow_change_status_user( IN userID INT, IN status ENUM( 'Active', 'Inactive' )  )
BEGIN
	UPDATE users
	SET status = status
	WHERE user_id = userID
END$$


DROP PROCEDURE wfow_change_type_user$$
CREATE PROCEDURE wfow_change_type_user( IN userID INT, IN type ENUM( 'Admin', 'Writer', 'Regular', 'IT'  )
BEGIN
	UPDATE users
	SET type = type
	WHERE user_id = userID
END$$

DROP PROCEDURE wfow_get_users$$
CREATE PROCEDURE wfow_get_users(  )
BEGIN
	SELECT
		*
	FROM users
	ORDER BY first, last;
END$$

