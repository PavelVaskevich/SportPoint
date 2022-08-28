SELECT `CODE`, `VALUE`
FROM `b_prop_value`
GROUP BY  `CODE`, `VALUE`
HAVING (count(`CODE`)>1 AND count(`CODE`)>1);





SELECT 
	*
FROM 
	`b_prop_value`
WHERE 
	`CODE` IN (SELECT `CODE` FROM `b_prop_value` GROUP BY `CODE` HAVING COUNT(*) > 1)
	AND `VALUE` IN (SELECT `VALUE` FROM `b_prop_value` GROUP BY `VALUE` HAVING COUNT(*) > 1)
ORDER BY
	`ID`