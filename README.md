# Weather App

The Ticket App is an web application that allows user create new tickets and also edit and delete their own ticket.

The Admin has the access to all the tickets. The admin also can create tickets. When admin performs some action i.e. resolve, reject ticket, an email notification is sent to the user that the ticket has been updated by admin.

All of the above operations can be performed only when user or Admin is logged in. If not then Register and Login.

## Installation

1. Make sure you have installed Laravel, using Composer.
2. Also install XAMPP server in your system for Apache server and MYSQL Database.
3. Clone the Repo:

<ul>
    <li style=""> > git clone https://github.com/Krish123-lang/WeatherApp-Laravel.git</li>
    <li> > cd Ticketing-App</li>
    <li> > composer install or composer update</li>
    <li> > cp .env.example .env</li>
    <li> > Set up .env file</li>
    <li> > php artisan key:generate</li>
    <li> > php artisan migrate</li>
    <li> > php artisan serve</li>
    <li> <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a> </li>
</ul>

4. You may see a login page

![1login](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/3690e200-d548-477d-a56a-abe408174b62)

5. First you may need to register by clicking on Register Button.
   
![2register](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/f19358db-5d0e-48cc-8dab-d0d447d89f3d)

6. After Registering and Logging in user will be redirected to the home page, the URL will be `127.0.0.1:8000/ticket`.
7. There you may see a blank page with `Create New Ticket` button.

![3dash](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/76636138-a0ae-45a3-a1ef-05e8348aceaa)

8. You need to click on that button to create new Ticket.

![4createnew](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/49927cf9-fed4-41a0-8f05-99b9c236f800)

9. After creating new ticket, you'll be redirected to home page. There user will see their all tickets also with status: open, resolved and rejected. BWT, it will be handled by admin.

![5show](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/93796685-d514-4c04-b9db-52700f7cc666)

10. Users can also see their tickets by clicking on `Support Ticket` button on the top of the page.
    
15. When admin updated the status, user will get a notification email like this:

![6mail](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/3d7358e6-db39-4e18-91b8-5fb5379eec7f)

11. User and Admin also can change their details by clicking on their name on the top-right corner of the page.
![7profile](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/360ca920-3eef-4c8d-82ab-48bc6d95c563)
![8profile](https://github.com/Krish123-lang/Ticketing-App/assets/56486342/e819ec00-c8cb-4cc2-b227-4da3a2e08112)


Thank You ! 🙏
