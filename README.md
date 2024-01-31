<p><h3>Features</h3>
1. This module helps you to create a easy contact form with multiple fields in form of widget which can be placed anywhere in the website. <br>
2. Its provides a admin grid view with functionality like edit/delete of the entries that were made by this form.<br>
3. All the form fields and its placeholder titles can me update form admin.
</p>

<h3>Installation</h3> 
1. Unzip the extension package file into the root folder of your Magento 2 installation. <br>
2. Connect to the SSH console of your server: <br>
  a. Navigate to the root folder of your Magento 2 setup <br>
  b. Run the command as per the below sequence <br>
        1. php -f bin/magento setup:upgrade <br>
        2. php -f bin/magento module:enable Solwin_EasyContactFormWidget <br> 
        3. php -f bin/magento setup:static-content:deploy -f <br>
        4. php -f bin/magento cache: clean <br>
3. log out from the backend and log in again <br>

<h3>Widget Setup (Admin Side)</h3>
1. Log in to the Magento 2 admin page and go to Content > Widget <br>
2. Click on the Add Widget button. After that, we’ll be redirected to the Settings tab, where we have to select Type and Design options and themes.<br>
3. Second tab which includes widget options in which we have add textboxes to remane the form fields. <br>
4. A new admin menu is made named "Easy Contact Form" . This will contains all the form entries and have functionality like edit/delete. 
<br><br>
Screenshot for Reference: <br>
![image](https://github.com/khshipra92/EasyContactFormWidget/assets/158291385/d3d55106-52a5-405d-87c8-75804b2e584e)

<br><br>
![image](https://github.com/khshipra92/EasyContactFormWidget/assets/158291385/4a87cdd4-c241-49b0-879f-0e0650c08953)
<br><br>
![image](https://github.com/khshipra92/EasyContactFormWidget/assets/158291385/4200ac6a-1cd2-40e3-9e66-9741e4fd8075)
<br><br>
![image](https://github.com/khshipra92/EasyContactFormWidget/assets/158291385/2d6e79ff-51d0-4aa7-a940-ea71fc3dfaee)
