# trac_a_mac
The aim with this project is to create a solution that allows us to track where MAC numbers connect to our network. This will be done by probing the network switches periodically, and retrieving their ForwardingTables (or equivalent). Using the collected information, we want to have a solution that we can search (WEB/RESTapi) for a specific MAC address (including wildcards). If a match is found, the response should return what switches, vlans and ports are aware of the MAC address, and if possible identify what port is the connection port. (If no VLAN is used, then use VLAN ID as 1) 

 

To detect the connection port, the MAC number should be the only MAC on that port. Furthermore, the port may not be a trunk between two switches. (I.e. if MAC x is detected on S1.p2 and S2.p24, if we know that S1.p2 connects to S2.p1 (for instance, there are multiple MAC addresses associated with S1.p2) the S1.p2 is not the connection port.)
