# How to connect to VNCserver

- Download vncclient (RealVNC, TigerVNC, ...)
- Copy content in file pool-id-.....-user-config into file ~/.ssh/config (create new if it not existed)
- ssh -L 5901:localhost:5901 -N -i pool-id-.......-user-key user@client
- In vncclient connect to `localhost:5901`
