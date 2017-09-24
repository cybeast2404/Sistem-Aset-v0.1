# Sistem-Aset v0.2
'Sistem Aset v0.2 ' is an Web-Based asset management system that can handle your asset data or record. 

Tutorial for setup 
1. Clone/Download this repo to your local machine
example syntax :
- git clone https://github.com/cybeast2404/Sistem-Aset-v0.1.git <filename>

2. Change directory to the file that has the clone file

3. Install composer on the file

Example syntax :
- composer install

4. Create new file called ".env" and then
   Copy the entire code in the ".env.example" file
   and paste it into ".env" file.
   
5. Setup your database Connection in the ".env" file
   at line 8,9,10,11,12,13 which is
   - DB_HOST  
   - DB_PORT
   - DB_DATABASE
   - DB_USERNAME
   - DB_PASSWORD

Bug Fix
--------
- User cannot access directly to other page from URL if they are not log in first.
- More easy & maintainable code structure 


