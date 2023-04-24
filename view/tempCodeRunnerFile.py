from djitellopy import tello
from time import sleep # add delays between each command

# create tello object to connect to tello
tl = tello.Tello()
tl.connect()

#check for battery of the drone
print(tl.get_battery())

tl.takeoff()
tl.send_rc_control(0,-20,0,0) # drone moves forward
sleep(2) #delay before landing

# tl.send_rc_control(20,0,0,60) #drone moves to the right
# sleep(2) # moves to the right for 2 sec



tl.send_rc_control(0,0,0,0) #to prevent drone from landing in forward motion | lands like a helicopter
tl.land()