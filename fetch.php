def fetch_products():
    cursor.execute("SELECT * FROM Products")
    for product in cursor.fetchall():
        print(f"Product ID: {product[0]}, Name: {product[1]}, Price: {product[2]}, Stock: {product[3]}")
