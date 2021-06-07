

## Documentation

Note that the csrf tokens were disabled at the cost of testing with postman. 
This  can be avoided if they were implemented as APIs

To check the validation make sure to enable "accept: application/json" headers

### URLS

#### Get Users

- Method
    
    GET
    
- URL
    
      /users/{id}

- URL Parameters

    - id: The id of the user to retrieved

#### Update User Comments

- Method
  
  POST
  
- URL
  
      /users
      
- Payload
    
        {
            "id":1,
            "comments": "your comment"
        }
        
#### Artisan Console Command
    
        php artisan user:update {user} {comments}
   
- Arguments     
    - user : The id of the user to retrieved
    - comments : The comment to be appended


#### Database
Set the database to "postgres" and port to 5432 in the .env file
