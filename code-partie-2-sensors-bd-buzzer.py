import machine
import time
import urequests
import network
from machine import Pin, ADC

number = 0



# Connect to WiFi
ssid = "TOPNET_6718"
password = "edilpew9p4"
sta_if = network.WLAN(network.STA_IF)
if not sta_if.isconnected():
    print("Connecting to WiFi...")
    sta_if.active(True)
    sta_if.connect(ssid, password)
    while not sta_if.isconnected():
        pass
print("WiFi connected! IP address:", sta_if.ifconfig()[0])

# Initialize pin for sensor input
sensor_pin = machine.Pin(12, machine.Pin.IN)
sensor_pin1 = machine.Pin(14, machine.Pin.IN)

# set up the PWM output
laser_pin = machine.Pin(25, machine.Pin.OUT)

ldr_pin = ADC(Pin(32))
laser_pin.value(1)

while True:
    # Read sensor value
    time.sleep(0.5)
    ldr_value = ldr_pin.read()
    if (ldr_value > 100) :
        print("buzzer off")
    else:
        print("buzzer on") 
    sensor_value = sensor_pin.value()
    sensor_value1 = sensor_pin1.value()
    if (sensor_value == 0):
        number-=1
        print(number)
        url = "http://192.168.1.15/nb_cars.php?number={}".format(number)
        response = urequests.get(url)
        time.sleep(1)
    if (sensor_value1 == 0):
        number+=1
        print(number)
        url = "http://192.168.1.15/nb_cars.php?number={}".format(number)
        response = urequests.get(url)
        time.sleep(1)


