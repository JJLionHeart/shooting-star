import sys
import socket

port = int(sys.argv[1])

serversocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

serversocket.bind(socket.gethostname(), port)

serversocket.listen(1)

while 1:
    (clientsocket, addr) = serversocket.accept()
    clientsocket.send("hai")

