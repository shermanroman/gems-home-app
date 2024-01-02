# Exploring Yii2: A Developer's Diary

## Overview
Join me on this insightful journey into the creation of my Yii2 website. This narrative will cover the development stages, the obstacles I overcame, and the strategies I employed. Discover the intricacies of Yii2 with me!

## Contents
1. [Setting Up the Project](#setup)
2. [Crafting the Modal Form](#modal-implementation)
3. [Admin Controls for the Modal](#admin-controls)
4. [Launch and Testing Strategies](#launch-testing)
5. [Overcoming Development Challenges](#dev-challenges)

## 1. Setting Up the Project
### 1.1. Installing Yii2
My adventure started with Yii2's installation. This PHP framework, known for its robust capabilities, introduced me to new web development techniques and perspectives.

### 1.2. Configuring the Database
Setting up the database in Yii2 involved using the `db.php` file for defining the database details. This was key for maintaining secure and reliable data handling.
I have my own cluster on `AWS RDS`, so I used it.

### 1.3. Designing the Models
I developed two primary models in Yii2:
- `FormModelModal`: Handling user data like name, email, and ID.
- `ModalSettings`: Responsible for modal behavior settings, such as delay and mandatory fields.

## 2. Crafting the Modal Form
### 2.1. Developing the Modal
Using Yii2's Bootstrap 5, I designed an engaging modal form, complete with intuitive fields for Name, Email, and ID (numeric only).

### 2.2. Validating the Form
Ensuring user input validity, I incorporated email format checks and numeric ID validations to enhance user interactions.

### 2.3. AJAX Integration
For a fluid user experience, I implemented AJAX for asynchronous form submissions, enabling efficient server communication without reloading the page.

### 2.4. Managing Errors
I crafted user-centric error messages to provide clear feedback during form submissions, covering email format issues and submission statuses.

## 3. Admin Controls for the Modal
### 3.1. Controlling Admin Access
Access control for the admin page was implemented using Yii2's robust system, ensuring only authorized users could make changes.

### 3.2. Modal Behavior Settings
The `ModalSettings` model was created for detailed control over the modal, including delay settings and field requirements.

### 3.3. Admin Interface Design
The admin interface was designed for easy management of modal settings, offering customization options like delay, enable/disable feature, device targeting, and mandatory fields.

## 4. Launch and Testing Strategies
Pre-launch, I conducted extensive testing, including:
- Assessing modal functionality and data submission.
- Ensuring smooth operation of admin settings.
- Verifying robust access control mechanisms.
- Confirming secure data storage and handling.
- Testing compatibility across devices and browsers.

## 5. Overcoming Development Challenges
- Adapting to Yii2's routing system was initially challenging, especially given its unique methods compared to frameworks I'm more familiar with, like Laravel.
- Integrating Yii2's form-building approach required a significant shift from my experience with Laravel and Vue.js, posing a steep learning curve.
- Aligning with Yii2's best practices, which often merged HTML and PHP in a single file, was unconventional and required adapting my development approach.

## Final Thoughts
This journey with Yii2, from the initial challenges to the final satisfaction of completing the project, has been a profound learning experience. The framework's distinct implementation style, particularly in areas like the Bootstrap 5 component integration and the peculiar routing methods, presented numerous learning opportunities. Despite these hurdles, my commitment to adhering to best programming practices played a pivotal role in navigating these unfamiliar methodologies. Ultimately, the project was not only a testament to my ability to adapt and learn but also a valuable addition to my development repertoire. It underscored the importance of flexibility and resilience in the tech world, preparing me for future projects that may require stepping out of my comfort zone.
