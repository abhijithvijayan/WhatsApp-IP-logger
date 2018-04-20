# ip-log

# WhatsApp Bug 

(founded and reported by [Rahul Kankrale](https://medium.com/@kankrale.rahul))

HOSTED [here](https://abhijithvijayan.me/ip/xx.php)

DOWNLOAD LOG FILE from [here](https://abhijithvijayan.me/ip/visitors.log)

**Whatsapp user’s IP disclosure with Link Preview feature**

- Simple php code can disclose *Whatsapp users* **IP** and **App version** and save disclosed information to attackers server.

# Step to reproduce:

1. Clone this repo
```
$ git clone https://github.com/abhijithvijayan/ip-log.git .
```
2. Create a new log file '**visitors.log**' (Delete the current one)

3. Upload the php file and log file to the server(within same file dir)

4. Open WhatsApp and type this php file's URL (eg: https://abhijithvijayan.me/ip/xx.php) and Wait for the Link Preview to generate.
  - You can see IP get captured and at the same time this IP is written over the LOG file on the Server.
 
5. **OR** you can forward the link
(eg: https://api.whatsapp.com/send?phone=+918921436161&text=http%3A%2F%2Fabhijithvijayan.me%2Fip%2Fxx.php )
and wait for people to click it which then will generate the link preview 
  
**SCREENSHOTS**

WhatsApp Screenshot of Link Preview
![gen](.assets/gen.png?raw=true "gen")

Server log for captured IP.
![iplist](.assets/iplist.jpeg?raw=true "iplist")

Website on Browser
![site](.assets/site.png?raw=true "site")

- WhatsApp is not planning on fixing this bug any time soon

