SELECT u.id user_id, u.name user_name, count(m.user_id) message_count
FROM user u
INNER JOIN message m ON u.id = m.user_id
Where m.message_date_time > '2020-01-01'
GROUP BY m.user_id;