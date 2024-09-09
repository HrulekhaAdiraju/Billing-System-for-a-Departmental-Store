import mysql.connector

def connect_to_database():
    conn = mysql.connector.connect(
        host="localhost",
        user="root",
        password="password",
        database="department_store"
    )
    return conn

conn = connect_to_database()
cursor = conn.cursor()
