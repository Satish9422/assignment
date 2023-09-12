**Steps to create environment on local and host on domain**	

Step 1: Provision EC2 instance on AWS and allow only Ports(22,80,443)	

	sudo ufw allow 22,80,443
	sudo ufw enable

Step 2: Install nginx, php, mysql on VPS.	

	sudo apt install nginx mysql-server php php-fpm php-curl php-mysql php-gd php-mbstring php-xml php-imagick php-zip php-xmlrpc

Step 3: Configure php-fpm

	nano /etc/php/8.1/fpm/php.ini	
	cgi.fix_pathinfo=0
	upload_max_filesize = 200M
	post_max_size = 200M
	memory_limit = 256M
	max_execution_time = 120   

Step 4:	Configure Database	

 	mysql
	CREATE DATABASE wpdb;
	CREATE USER 'wpuser'@'localhost' IDENTIFIED BY 'Testpassword@123';
	GRANT ALL ON wpdb.* TO 'wpuser'@'localhost';
	FLUSH PRIVILEGES;	
	EXIT;

Step 5:	Download and install wordpress 	

	cd /var/www/html
	wget https://wordpress.org/latest.tar.gz
	tar -zxvf latest.tar.gz
	chown -R www-data:www-data /var/www/html/wordpress
	chmod -R 755 /var/www/html/wordpress

Step 6:	Purchase domain from noip.com and add A record pointing to VPS public ip	

	assignment.zapto.org

Step 7: Configure nginx virtual host 	

	nano /etc/nginx/sites-enabled/wordpress.conf	
 

	server {
       	root /var/www/html/wordpress;
       	index index.html index.php;
       	server_name assignment.zapto.org;
       	location / {
        try_files $uri $uri/ /index.php?$args;
    	}
 	location ~ \.php$ {
               include snippets/fastcgi-php.conf;
               fastcgi_pass unix:/run/php/php8.1-fpm.sock;
          }
	}

Step 8: Secure nginx with SSL certificates	

	sudo snap install core; sudo snap refresh core
	sudo snap install --classic certbot
	sudo ln -s /snap/bin/certbot /usr/bin/certbot
	sudo certbot --nginx -d assignment.zapto.org

Step 9: verify certbot auto-renewal	

	sudo systemctl status snap.certbot.renew.service
	sudo certbot renew --dry-run

 **Steps for Github actions workflow**	
 
Step 1: Create a GitHub Repository	

Step 2: Clone the Repository

	git clone  <repository-url>
 
Step 3: Set Up GitHub Actions Workflow	

	Inside your repository, create a directory named .github/workflows.
	In this directory, create a YAML file deploy.yml for your GitHub Actions workflow.
 
Step 4: Configure GitHub Actions Workflow	

	Refer file deploy.yaml

Step 5: Add SSH key to github secrets 	

	add ssh private key to github repository secret and name it as "SSH_PRIVATE_KEY"

Step 6: Push Changes and Trigger Deployment	

	Commit and push your deploy.yml file to the repository
 	GitHub Actions will automatically run the workflow when you push changes to the main branch
 	
	
