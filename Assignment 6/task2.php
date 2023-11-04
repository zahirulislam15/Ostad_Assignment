SELECT O.order_id, P.name AS product_name, OI.quantity, OI.quantity * OI.unit_price AS total_amount
FROM Order_Items OI
JOIN Products P ON OI.product_id = P.product_id
JOIN Orders O ON OI.order_id = O.order_id
ORDER BY O.order_id ASC;