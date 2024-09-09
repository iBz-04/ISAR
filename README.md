## Images
<img src="https://res.cloudinary.com/diekemzs9/image/upload/v1725881708/Screenshot_9-9-2024_142249_localhost_ja0re7.jpg" alt="My Image" width="950"/>
<img src="https://res.cloudinary.com/diekemzs9/image/upload/v1725881735/Screenshot_9-9-2024_142411_localhost_tbnjuf.jpg" alt="My Image" width="950"/>
<img src="https://res.cloudinary.com/diekemzs9/image/upload/v1725881723/Screenshot_9-9-2024_142318_localhost_cuaojv.jpg" alt="My Image" width="950"/>


# Project Overview

This web application is designed to manage the daily operations of a library catalog system, providing user-friendly interfaces and essential functionalities for both administrators and users. It leverages a combination of frontend and backend technologies to ensure efficient library management, robust data handling, and secure user access. The system also features a responsive UI for users, allowing seamless access across devices, and includes state management to keep track of book availability, borrowings, and returns in real-time.

## Pages

1. **Dashboard**: Provides an overview of key statistics, such as borrowing and return activities, to help administrators monitor library operations.
2. **Login**: Allows administrators to securely access their dashboard and manage the system.
3. **Admin Dashboard**: Exclusively accessible to administrators for managing users, books, courses, and system settings.
4. **Books Management**: Facilitates the uploading and categorization of books by their ISBN number and categories such as Mathematics, Science, etc.
5. **Borrowing and Returns**: Enables the tracking and management of borrowed books and their return dates, with detailed logs available for review.
6. **Students and Courses Management**: Allows the addition of students, their IDs, and the courses they are enrolled in, along with managing course codes.
7. **Settings**: Admins can update their information, preferences, and system configurations as needed.
8. **Reports and Analytics**: Provides visual representations, diagrams, and graphs showcasing borrowing and return transactions for data-driven decisions.

## User Roles

1. **Admin**: The administrator has the primary role of managing the entire library system. They can:
   - Add, update, and delete student accounts.
   - Manage course details, including adding new courses and their corresponding codes.
   - Upload and categorize books based on their ISBN number and subjects.
   - Track and manage the borrowing and return of books.
   - View detailed transaction logs and access reports in graphical form to visualize the borrowing and return patterns.
   - Update their personal information and make changes to system settings as required.
   - Monitor the status of books in real-time using state management to determine whether a book is available, borrowed, or returned.

2. **User**: Users (students) have restricted access with the following capabilities:
   - Search the library catalog for available books.
   - Borrow books from the library.
   - Return borrowed books within the stipulated time frame.
   - View the current status of books (available, borrowed, or returned) in real-time thanks to the state management system.

## Other Features

- **Responsive UI**: A fully responsive user interface that ensures a smooth experience for users on any device.
- **State Management**: Real-time updates on the status of books, allowing both admins and users to see if a book is available, borrowed, or returned at any given time.
- **Search filter**: Search and get answers/queries quickly- this is available to both user and admin

## Tech Stack

**Client**: LESS, jQuery, PHP, JavaScript,  
**Server**: PHP, MySQL

## Authors

- [@iBz-04](https://github.com/iBz-04)

