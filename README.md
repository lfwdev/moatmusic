#### Project scope

Simple music collection app using the given API where the selection of artists is limited to the provided by the API.
Any user can edit and add albums, only admins can delete.


- To run clean copy of this project on your local environment

    ```sh 
        php artisan migrate:fresh 
    ```
    
    ```sh 
        php artisan db:seed 
    ```

- To run this project on your local environment

    ```sh 
        php artisan serve 
    ```

    As this project relies on SSL it's also necessary to have an <a href="https://curl.se/docs/caextract.html"> origin certificate </a> on the local server.

#### Disclaimer

This is by no means a completed project and it has not been thoroughly tested, it is solely a demo.  