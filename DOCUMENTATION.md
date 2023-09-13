# API Documentation

## Introduction

This document provides detailed information on how to use the API for managing people. The API supports basic CRUD (Create, Read, Update, Delete) operations on a "person" resource.

## Table of Contents

- [Standard Request and Response Formats](#standard-request-and-response-formats)
- [Sample Usage](#sample-usage)
- [Limitations and Assumptions](#limitations-and-assumptions)
- [Local Setup and Deployment](#local-setup-and-deployment)

## Standard Request and Response Formats

### Create a New Person

**Request:**

- **Method:** POST
- **Endpoint:** `/api/`
- **Headers:** None (for simplicity; in practice, consider using authentication headers)
- **Request Body:**

```json
{
  "name": "Mark Essien",
  
}


Response:

Status Code: 201 Created
Response Body:

{
 
  "data": {
    "id": 1,
    "name": "Mark Essien",
    
  }
}







## Retrieve Details of a Person
Request:

Method: GET
Endpoint: /api/{id}
Headers: None (for simplicity; in practice, consider using authentication headers)
Response:

Status Code: 200 OK
Response Body:

{
  "id": 1,
  "name": "Mark Essien",
  
}




Update Details of an Existing Person
Request:

Method: PUT
Endpoint: /api/{id}
Headers: None (for simplicity; in practice, consider using authentication headers)
Request Body:

{
  "name": "Updated Mark Essien"
}



Response:

Status Code: 200 OK
Response Body:

{
  
  "data": {
    "id": 1,
    "name": "Updated Mark Essien",
   
  }
}



Delete a Person
Request:

Method: DELETE
Endpoint: /api/{id}
Headers: None (for simplicity; in practice, consider using authentication headers)
Response:

Status Code: 204 No Content
Resonse Body:

{
  "message": " Mark Essien deleted successfully"
}




Sample Usage
Here are some sample API requests and their expected responses:



Sample Usage Examples

Limitations and Assumptions

Authentication and authorization are not implemented in this API for simplicity. In a production environment, secure authentication mechanisms should be added.

Error handling for edge cases and validation is simplified for demonstration purposes. In a production API, detailed error responses should be implemented.

This API assumes that the "people" resource consists of a name. You can extend it to include additional fields as needed.


Local Setup and Deployment

For instructions on how to set up and deploy the API locally or on a server, please refer to the README.md file in the repository.





In this documentation, we've outlined the standard request and response formats for each endpoint, provided sample usage examples, highlighted limitations and assumptions, and referenced the `README.md` for setup and deployment instructions. 



