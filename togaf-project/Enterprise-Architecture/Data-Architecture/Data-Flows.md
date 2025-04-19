# Data Flow

## Overview
The data flow in the developer portfolio involves the following components:
1. **Frontend**: Displays static and dynamic content to the user.
2. **Backend**: Processes dynamic content and form submissions.
3. **Build System**: Compiles Tailwind CSS into production-ready CSS.

## Data Flow Steps
1. **Page Request**:
   - The user requests a page (e.g., Home, About, Portfolio, Contact).
   - Nginx serves the PHP page, which dynamically renders content.

2. **Contact Form Submission**:
   - The user submits the contact form.
   - PHP processes the form data and provides a confirmation message.

3. **CSS Compilation**:
   - Tailwind CSS is compiled using Node.js into a production-ready CSS file.
   - The compiled CSS is served to the frontend for styling.