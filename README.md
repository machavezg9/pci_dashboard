# pci_dashboard

### Requirements

- [ ] Server based, stored locally
- [ ] Simple to access and process
- [ ] Input PPT file
- [ ] Display data using Raspberry Pi
- [ ] Display on multiple screens, use multiple Pi's
- [ ] Access data from a single node, server node

### Process

1. After researching for a few hours I stumbled uplon [this](https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/) link. This would be the perfect solution, I've never ran a server from home other than for minecraft. A LAMP server is perfect because if I decided to track data I have a MySQL db readily available for access.
2. Since I work remotely most of the time I had to establish a SSH connection. In addition to that, I had to figure out how to transfer documents over ssh. I followed [this](https://unix.stackexchange.com/questions/188285/how-to-copy-a-file-from-a-remote-server-to-a-local-machine) stack post and [this](https://www.youtube.com/watch?v=q2OHvlr081s&t=408s) Youtube vid.

### Tasks
- [ ] Figure out how to pop-up a message when ppt is uploaded. Rather than redirecting to php file
- [ ] Process a pptx file to play slideshow [this may help](https://stackoverflow.com/questions/21523267/how-to-convert-pptx-files-to-jpg-or-png-for-each-slide-on-linux)
- [ ] Determine if web slideshow or local slideshow (already have code for local slideshows)

