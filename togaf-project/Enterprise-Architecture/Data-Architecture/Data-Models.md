# Data Model

## Overview
The portfolio will use PHP to dynamically render content. The data model includes the following entities:

1. **Projects**:
   - Title: The name of the project.
   - Description: A brief overview of the project.
   - Link: A URL to the project (e.g., GitHub or live demo).

2. **Contact Form**:
   - Name: The name of the user submitting the form.
   - Email: The user's email address.
   - Message: The message submitted by the user.

## Example Data
### Projects
```php
$projects = [
    [
        "title" => "Project 1",
        "description" => "A web application built with PHP and Tailwind CSS.",
        "link" => "https://github.com/example/project1"
    ],
    [
        "title" => "Project 2",
        "description" => "A portfolio website showcasing my skills.",
        "link" => "https://github.com/example/project2"
    ]
];
```

# Standards

## Coding Standards
1. Follow PSR-12 coding standards for PHP.
2. Use Tailwind CSS utilities for styling instead of custom CSS.
3. Write clean and modular JavaScript for any interactivity.

## Deployment Standards
1. Use Docker Compose to manage containers for PHP, Node.js, and Nginx.
2. Ensure all containers are lightweight and optimized for performance.

## UI/UX Standards
1. Follow a minimalistic design approach.
2. Ensure the application is fully responsive and accessible.
3. Use consistent typography and color schemes for readability.