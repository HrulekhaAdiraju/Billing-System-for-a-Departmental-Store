def create_order(customer_id, items):
    cursor.execute("INSERT INTO Orders (customer_id, total) VALUES (%s, %s)", (customer_id, 0))
    order_id = cursor.lastrowid
    total = 0

    for product_id, quantity in items:
        cursor.execute("SELECT price FROM Products WHERE product_id = %s", (product_id,))
        price = cursor.fetchone()[0]
        total += price * quantity

        cursor.execute("INSERT INTO OrderDetails (order_id, product_id, quantity, price) VALUES (%s, %s, %s, %s)", 
                       (order_id, product_id, quantity, price))

    cursor.execute("UPDATE Orders SET total = %s WHERE order_id = %s", (total, order_id))
    conn.commit()

    print(f"Order placed successfully. Total amount: {total}")
