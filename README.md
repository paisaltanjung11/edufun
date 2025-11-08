
    
    # Installation Steps
    
    ## 1. Clone the Repository
    
    ```bash
    git clone https://github.com/username/EduFun.git
    cd EduFun
    ```
    
    ## 2. Install the Required Dependencies
    
    ```bash
    composer install
    ```
    
    ## 3. Set Up the Environment File
    
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    
    Then update your **.env** file with your MySQL database credentials.
    
    ## 4. Run Database Migrations and Seeders
    
    ```bash
    php artisan migrate --seed
    ```
    
    This command will create all necessary tables and insert initial data for categories, authors, and articles.
    
    ## 5. Start the Development Server
    
    ```bash
    php artisan serve
    ```
