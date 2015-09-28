DROP PROCEDURE wfow_get_messages$$
CREATE PROCEDURE wfw_get_messages()
BEGIN
	SELECT
		*
	FROM contact_us;
END$$