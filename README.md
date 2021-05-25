# pci_dashboard

### Requirements

- [x] Server based, stored locally **pcidash.local to access Apache server
- [x] Simple to access and process **see above, also added a simple browse to upload file
- [ ] Input PPT file 
- [ ] Display data using Raspberry Pi
- [ ] Display on multiple screens, use multiple Pi's
- [ ] Access data from a single node, server node

### Process

1. After researching for a few hours I stumbled uplon [this](https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/) link. This would be the perfect solution, I've never ran a server from home other than for minecraft. A LAMP server is perfect because if I decided to track data I have a MySQL db readily available for access.
2. Since I work remotely most of the time I had to establish a SSH connection. In addition to that, I had to figure out how to transfer documents over ssh. I followed [this](https://unix.stackexchange.com/questions/188285/how-to-copy-a-file-from-a-remote-server-to-a-local-machine) stack post and [this](https://www.youtube.com/watch?v=q2OHvlr081s&t=408s) Youtube vid.
3. Setup a php upload file, was able to figure this out really quick. Used [this](https://www.w3schools.com/php/php_file_upload.asp) as a starting point.
4. Encountered a php upload issue when testing out in the field (aka Performance Composites Network). The fix was simple enough, add a flush at the end of each interaction with echo. Followed [this](https://stackoverflow.com/questions/11871301/php-possible-to-trickle-output-to-browser-while-waiting-for-database-query-to-e). Echo appear to be hanging, don't know the exact cause for hanging. Will proceed to upderstand why ""flush();"" fixed my issue.


### Tasks
- [ ] Figure out how to pop-up a message when ppt is uploaded. Rather than redirecting to php file [maybe??](https://www.geeksforgeeks.org/how-to-pop-an-alert-message-box-using-php/)
- [ ] Process a pptx file to play slideshow [this may help](https://stackoverflow.com/questions/21523267/how-to-convert-pptx-files-to-jpg-or-png-for-each-slide-on-linux)
- [ ] Determine if web slideshow or local slideshow (already have code for local slideshows)
- [ ] Set format of files allowed as PPT files only, (PPT, PPTX, **WHAT ELSE?**)
- [x] Fix upload connection timing out issue **See step 4 above for fix**

#### Resources
- CRON https://www.raspberrypi.org/documentation/linux/usage/cron.md https://opensource.com/article/17/11/how-use-cron-linux
