# Reverse Proxy Security Interview
Our previous reverse proxy that we built was insecure and built in PHP!

# Assignment
What is this? Developer wants to build a proxy to fetch URLs for Segment's internal use (Segment employees). 

### Old Proxy.
 - What security issues does the old proxy have?
 - How does a reverse proxy work?
 - What are some security gotchas of this?

### New Proxy
 - Please build a working reverse proxy in the language of your choice.
 - Support Basic Authentication and some authentication scheme.
 - ~Add a "WAF" that blocks requests that contain "<script>" or "&ltimg&gt"~
 - ~Block IP addresses from 8.8.8.8~
 - Talk about preventing security issues associated with reverse proxies.
