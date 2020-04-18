#!/usr/bin/env python
import RPi.GPIO as GPIO
import time
import os

GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.IN, pull_up_down=GPIO.PUD_UP)

while True:
    input_state = GPIO.input(23)
    if input_state == False:
        print('Button Pressed')
       # os.system('/home/pi/Downloads/PuttingItAllTogether.py')
        time.sleep(3)