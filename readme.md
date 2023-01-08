![Evade hunger](https://user-images.githubusercontent.com/75977813/211202924-e5d0a7d1-0bd2-4333-843a-5b5d44f0f973.png)
## Working of the project
[Youtube Link](https://youtu.be/F8etilSuOPM)
## How to run the project 
- Create a new virtual machine with desired configuration ( Here I have used Ubuntu ).
- SSH into the virtual machine.
- Install XAMPP server using wget.
- Once installed, run the command `/opt/lampp lampp start` to start the server.
- To check if the server is working, click on the external IP. External IP can be found in the VM instance information page.
- Once the XAMPP (LAMPP in linux) navigate to htdocs folder in the ssh window.
- Paste all the requried codes(html or php) in a directory created in the htdocs file.
- In the browser paste the `external-IP-address/filename`. make sure the main or landing page should be named index.html or index.php.
