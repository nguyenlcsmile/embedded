import mysql.connector
import datetime
import time
import board
import adafruit_dht

# Initial the dht device, with data pin connected to:
dhtDevice = adafruit_dht.DHT22(board.D4)

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="123456",
  database="users"
)

mycursor = mydb.cursor()

while True: 
	for i in range(100000):
		try:
			time.sleep(2)
			temperature = dhtDevice.temperature
			humidity = dhtDevice.humidity    
			print("Values: {},{}".format(temperature, humidity))
			sql = "INSERT INTO temp_humid (temperature, humidity) VALUES (%s, %s)"
			val = (temperature, humidity)
			mycursor.execute(sql, val)
			mydb.commit()
		except RuntimeError:
			pass
