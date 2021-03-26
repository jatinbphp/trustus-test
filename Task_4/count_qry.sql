SELECT u.id user_id, u.name user_name, count(m.user_id) message_count
FROM user u
INNER JOIN message m ON u.id = m.user_id
GROUP BY m.user_id;