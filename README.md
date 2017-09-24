# Sistem-Aset v0.2
'Sistem Aset v0.2 ' is an Web-Based asset management system that can handle your asset data or record. 

Tutorial for setup 
1. Clone/Download this repo to your local machine
example syntax :
- git clone https://github.com/cybeast2404/Sistem-Aset.git <filename>

2. Change directory to the file that has the clone file

3. Install composer on the file

Example syntax :
- composer install

4. Create new text file called ".env" and then
   Copy the entire code in the ".env.example" file
   and paste it into ".env" file. 
   *IMPORTANT!
   - Please use text editor to create the new file and save as ".env" and then file type is "All File"
   - It will not work if you just create without using text editor and rename it.

5. Create your database.
   
5. Setup your database Connection in the ".env" file
   at line 8,9,10,11,12,13 which is
   - DB_HOST  
   - DB_PORT
   - DB_DATABASE
   - DB_USERNAME
   - DB_PASSWORD
   
 6. Generate APP key using php artisan command 
 - Make sure your terminal/CMD/CLI on the file directory  
 
 - Syntax
 - php artisan key:generate
 
 7. Execute the migration command to import all the table structure on the database
 - php artisan migrate
  

Bug Fix
--------
- User cannot access directly to other page from URL if they are not log in first.
- More easy & maintainable code structure 


