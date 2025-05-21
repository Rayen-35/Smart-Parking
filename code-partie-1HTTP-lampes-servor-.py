import utime
import ure
import socket
import network
import time
import machine
import urequests
from machine import Pin, ADC

number = 0

laser_pin = machine.Pin(25, machine.Pin.OUT)

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

# Set up the server socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind(('0.0.0.0', 80))
s.listen(5)
s.setblocking(False)

# Initialize pin for sensor input
sensor_pin = machine.Pin(12, machine.Pin.IN)
sensor_pin1 = machine.Pin(14, machine.Pin.IN)

servo_pin = machine.Pin(16, machine.Pin.OUT)
servo_pwm = machine.PWM(servo_pin, freq=50)
servo_pin1 = machine.Pin(17, machine.Pin.OUT)
servo_pwm1 = machine.PWM(servo_pin1, freq=50)

led4 = machine.Pin(2, machine.Pin.OUT)
led3 = machine.Pin(15, machine.Pin.OUT)
led1 = machine.Pin(5, machine.Pin.OUT)
led2 = machine.Pin(4, machine.Pin.OUT)

def set_servo_angle(angle):
    duty = int((angle / 180) * 1023 + 1023 / 20)
    servo_pwm.duty(duty)
def set_servo_angle1(angle):
    duty1 = int((angle / 180) * 1023 + 1023 / 20)
    servo_pwm1.duty(duty1)    
while True:
    time.sleep(0.5)
    new_number = number
    sensor_value = sensor_pin.value()
    sensor_value1 = sensor_pin1.value()
    if sensor_value == 0:
        new_number -= 1
    if sensor_value1 == 0:
        new_number += 1
    if new_number != number:
        number = new_number
        url = "http://192.168.1.15/nb_cars.php?number={}".format(number)
        response = urequests.get(url)
        print(number)
    try:
        conn, addr = s.accept()
        data = conn.recv(1024)
        if data:
            servor1 = ure.search("GET /servor1", data)
            servor2 = ure.search("GET /servor2", data)
            led4_on = ure.search("GET /led4_on", data)
            led4_off = ure.search("GET /led4_off", data)
            led3_on = ure.search("GET /led3_on", data)
            led3_off = ure.search("GET /led3_off", data)
            led1_on = ure.search("GET /led1_on", data)
            led1_off = ure.search("GET /led1_off", data)
            led2_on = ure.search("GET /led2_on", data)
            led2_off = ure.search("GET /led2_off", data)
            laser_on = ure.search("GET /laser_on", data)
            laser_off = ure.search("GET /laser_off", data)
            if servor1:
                set_servo_angle(0)   # Set servo to 0 degrees
                utime.sleep(1)       # Wait for 1 second
                set_servo_angle(90)  # Set servo to 90 degrees
                utime.sleep(1)
            if servor2:
                set_servo_angle1(0)   # Set servo to 0 degrees
                utime.sleep(1)       # Wait for 1 second
                set_servo_angle1(90)  # Set servo to 90 degrees
                utime.sleep(1)
            if led4_on:
                led4.on()
            if led3_on:
                led3.on()
            if led1_on:
                led1.on()
            if led2_on:
                led2.on()
            if led4_off:
                led4.off()
            if led3_off:
                led3.off()
            if led1_off:
                led1.off()
            if led2_off:
                led2.off()
            if laser_on:
                laser_pin.value(1)
            if laser_off:
                laser_pin.value(0)
    except:
        pass     
