#### Project scope

Music collection app

Apply basic UX patterns to the UI - don't worry too much about the design, but please use bootstrap or equivalent
It's highly recommended that you use a framework (any PHP framework should do the trick - we use Symphony)
We will look for your skills on Object-Oriented Programming (OOP), MVC (Model-View-Controller) pattern, SoC (Separation of Concerns), Best Practices for PHP and Migrations

#### Requirements 

###### Register

    Create a basic registration page
    
You should have:

    full name
    username
    password
    roles (you will have user and admin)

###### Login

    Create a basic login page with the fields username and password

    Once logged in the user should be able to access all internal pages of the music app

    If a not-logged in user tries to access any internal page he should be redirected to the login page


    After a successful login the user should be redirected to the Artists list page
    A failed login attempt will send the user back to the login page with the error: Sorry, we couldn't find an account with this username. Please check you're using the right username and try again.


###### Albums

    Create a CRUD for the albums
    Only admins can DELETE albums (users can add and edit)
Each album will contain the following fields:


    Artist (let user select from the list of existing artists)
    Album name
    Year

##### Artist List

    Only allowed artists should be accepted by the app. The app must load the list of artists from an API.

###### Endpoints:

    https://moat.ai/api/task/ - return a list of artists link

    https://moat.ai/api/task/?id=<artist_id> - return the artists data link
    
###### Authorization:

    None


###### Header:

    Set Basic ZGV2ZWxvcGVyOlpHVjJaV3h2Y0dWeQ== on Header



There's no need to cache the list. It is ok to pull it from the API whenever the list is needed.


This list should be used to populate the select box (or equivalent) used to select the artist of the album.