# ip-log

# WhatsApp Bug 

(found and reported by [Rahul Kankrale](https://medium.com/@kankrale.rahul))

- Strictly for Educational Purposes

HOSTED on 000webhost [here](https://kutt.it/Bitcoin-Mining)
```
https://kutt.it/Bitcoin-Mining
```
SEE LOG FILE [here](https://crazyzycho.000webhostapp.com/visitors.log)

**Whatsapp user’s IP disclosure with Link Preview feature**

- Simple php code can disclose *Whatsapp users* **IP** and **App version** and save disclosed information to attackers server.

# Step to reproduce:

1. Clone this repo
```
$ git clone https://github.com/abhijithvijayan/WhatsApp-IP-logger.git .
```
2. Create a new log file '**visitors.log**' (Delete the current one)

3. Upload the php file and log file to the server(within same file dir)

4. Open WhatsApp and type the php file's URL

eg:
```
https://kutt.it/Bitcoin-Mining
```
OR
```
https://crazyzycho.000webhostapp.com/index.php
```
and Wait for the Link Preview to generate.

- You can see IP get captured and at the same time this IP is written over the LOG file on the Server.
 
5. **OR** you can forward the link
```
https://api.whatsapp.com/send?phone=+91_mobile_no&text=https%3A%2F%2Fkutt.it%2FBitcoin-Mining
```
and wait for people to click it which then will generate the link preview 
  
  *Replace +91_mobile_no with your mobile number in the link*
  
**SCREENSHOTS**

WhatsApp Screenshot of Link Preview
![gen](.assets/gen.jpg?raw=true "gen")

Server log for captured IP

![iplist](.assets/iplist.jpeg?raw=true "iplist")

Website on Browser
![site](.assets/site.png?raw=true "site")

- To avoid such instances, use a trusted VPN service always when visiting unknown websites
- If the IP is not being written to the log file, Change the file permission of 'visitors.log' to 666.
