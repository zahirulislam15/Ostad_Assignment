Task 1:


SELECT c.customer_id, c.name, c.email, c.location, COUNT(Orders.order_id) AS total_orders
FROM Customers c
LEFT JOIN Orders ON c.customer_id = Orders.customer_id
GROUP BY c.customer_id, c.name, c.email, c.location
ORDER BY total_orders DESC;
