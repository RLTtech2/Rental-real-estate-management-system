# A web-based Rental House Management System
This is a web application for Rental House Management. It was originally designed for use in administrative reccords management in 2022, and was open to the public in 2024. The original version utilized SMS for communication and MPESA for payment.

Much has changed since its design to enhance its stability, security and performance. Not withstanding the changes, I believe that it still gives a solid foundation to anybody who is interested in learning the good old PHP and its application. It has instances for both imperative and OOP.

If you wish test the system, you can click the link below:

## [System Demo](https://test1.ukwaju.systems/admin/login.php)


# Original View
![Administrator dashboard](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/dashboard.png)



# Or the more stable Laravel version view...
![New Dashboard](./newdash.png)

developed under **[Ukwaju Systems](https://ukwaju.systems)** 
View a demonstration [here:](https://youtu.be/H1gM3E5sZPs)


# Included features
- a fancy landing page for display of vacant rooms/houses
- an administrator panel 
- a blog 
- a database

## Major Dependencies
**PHP Dependencies:**
- TextSMS
- daraja.

**CSS Dependencies**
- Bootstrap
- less
- Font awesome.
- W3.css

**JS dependencies**
- Bootstrap
- Hack
- jQuery navigation
- Fancy box
- Modernizer
- Ajax 

# THE USER'S GUIDE
## HOW TO INSTALL:
 - Ensure you install XAMPP/WAMPP (or a relevant php host with MYSQL)
 - Create a table named `Company`
 - import the `Company.sql` file, from the `database` folder into your `PHPmyadmin` table `Company`
 - copy all the contents of folder containing the `index.php` file into your server.
 - open the file `admin/functions/db.pdf`
 - edit the details of the following to match your server connection details:
 ```
$host= 'YourHost';
$user='YourDatabaseUserName';
$usrpassword='YourDBPassword';
$database='YourDBName';

 ``` 
 - To enable sending SMS via the system, update the variables under:
 ```
$sms_apiKey = "YourAPIKey";
$sms_partnerID = "YourPartinerID";
$sms_shortcode = "TextSMS";
 ```
 - run the `index.php` file
 - run the `admin/` folder to login into the admin panel

## TO TEST:
Admin panel login credentials are:
-   1.
 - USER NAME:  **leon1@co.ke**
 - PASSWORD:   **mimi**

-    2.
 - USERNAME:  **Raykrok1@co.ke**
 - PASSWORD: **123456**


## Test link ##
open, ("http://localhost/Rental-house-management-system/") to your browser 



# License
This is the original app as was developed in 2022. A few changes have been made ever since its deployment to enhance its security, stability, and efficiency. Even then, we took care to retain the stability of this application. It's my hope that you will find this app fun to use and easy to improve. 

Feel free to use it as it will suit you. To receive a complete version of the software, please reach out to me via:

# Need further support?
Reach out for a stable version or support via:
Email: *richieleon18@gmail.com* or 
Tel:   *+254112285341*

# By me some coffee
You can offer support via 
1. M-Pesa:  **+254112285341** or 
2. 
## 💰 You can help me by Donating
  [BuyMeACoffee](https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black) (https://buymeacoffee.com/Dev Leon) [![PayPal](https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white)](https://paypal.me/p) 

I wish you all the best as you explore this limited app!


# Views
## The Blog
![Blog](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/blog.png)

## Log IN
![Log IN](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/login.png)

## Admin Dashboard with notifications
![Administrator dashboard](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/dash1.png)

## Table Sample (House Listing)
![House Listing table](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/house_listings.png)

## Form Sample (Form for admitting a tenant)
![A Form for admitting tenants](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/add_tenant.png)

# Mobile phone views
## full mobile dashboard
![Administrator full dashboard](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/Dashboard_mobile.png)

## phone dashboard
![Administrator dashboard](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/mobile_dashboard.png)


## Phone form (admitting a tenant)
![Administrator adding a tenant](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/phone_tenants.png)

## Phone form (adding new house)
![Administrator adding a new house](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/mobile_add_house.png)

## mobile (View tenants) 
![mobile layout view tenants](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/View_tenants_mobile.png)


## Phone SMS notifications
![SMS Notifications](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/Screenshot_2021-06-09-09-02-47.png)

![SMS Notifications](https://github.com/RLTtech2/Rental-real-estate-management-system/blob/main/Screenshot_2021-06-09-09-03-02.png)

# ...And With a New, Secure, Stable Version!
Our improved premium version is now out, developed in Laravel. It contains features for:

## General
- Adding apartments
- Adding rental units to apartments
- Admitting tenants to Rental units.
- Automated invoicing to tenats.
- Manual addition of payments (currently working on an android platform for unified automated payments)
- Printable payment receipts and invoices

## Administration
In the new version, the administrator can create custom roles for other users in the system. I.e, a landlord can create a role of a "caretaker" or "accountant" and assign appropriate roles.

## Marketing
We added
- Bulk SMS incorporated for marketing (utilizes TextSMS vendor at 0.3 KES per SMS text)
- A landing page that can display all vacant rooms with their pricing.
- Theme color changes for better visibility

![New Dashboard](https://github.com/RLTtech2/Rental-house-management-system/blob/main/tablenew.png)

# Special Thanks to:
- [Dev Leon](https://github.com/RLTtech2) [Katw'a_Jnr] 
- [Ukwaju Systems](https://ukwaju.systems/)


# 💻 Tech Stack:
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Python](https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![AWS](https://img.shields.io/badge/AWS-%23FF9900.svg?style=for-the-badge&logo=amazon-aws&logoColor=white) ![Heroku](https://img.shields.io/badge/heroku-%23430098.svg?style=for-the-badge&logo=heroku&logoColor=white) ![Vercel](https://img.shields.io/badge/vercel-%23000000.svg?style=for-the-badge&logo=vercel&logoColor=white) ![FastAPI](https://img.shields.io/badge/FastAPI-005571?style=for-the-badge&logo=fastapi) ![Web3.js](https://img.shields.io/badge/web3.js-F16822?style=for-the-badge&logo=web3.js&logoColor=white) ![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white) ![Adobe](https://img.shields.io/badge/adobe-%23FF0000.svg?style=for-the-badge&logo=adobe&logoColor=white) ![Figma](https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white) ![Git](https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white) ![GitHub](https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white)
# 📊 GitHub Stats:
![](https://github-readme-stats.vercel.app/api?username=RLTtech2&theme=dark&hide_border=false&include_all_commits=false&count_private=false)<br/>
![](https://nirzak-streak-stats.vercel.app/?user=RLTtech2&theme=dark&hide_border=false)<br/>
![](https://github-readme-stats.vercel.app/api/top-langs/?username=RLTtech2&theme=dark&hide_border=false&include_all_commits=false&count_private=false&layout=compact)

## 🏆 GitHub Trophies
![](https://github-profile-trophy.vercel.app/?username=RLTtech2&theme=radical&no-frame=false&no-bg=true&margin-w=4)

---
[![](https://visitcount.itsvg.in/api?id=RLTtech2&icon=0&color=0)](https://visitcount.itsvg.in)

  

  
<!-- Proudly created with GPRM ( https://gprm.itsvg.in ) -->