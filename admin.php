def add_product(name, price, stock):
    cursor.execute("INSERT INTO Products (name, price, stock) VALUES (%s, %s, %s)", (name, price, stock))
    conn.commit()
    print("Product added successfully.")
def update_stock(product_id, new_stock):
    cursor.execute("UPDATE Products SET stock = %s WHERE product_id = %s", (new_stock, product_id))
    conn.commit()
    print("Stock updated successfully.")
def view_orders():
    cursor.execute("SELECT * FROM Orders")
    for order in cursor.fetchall():
        print(f"Order ID: {order[0]}, Customer ID: {order[1]}, Total: {order[3]}")
