<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Yii2: A Developer's Diary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .website-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            color: #333;
            text-align: center;
        }

        h2, h3, h4 {
            font-size: 24px;
            color: #555;
            margin-bottom: inherit;
        }

        section {
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #777;
            line-height: 1.5;
        }

        ol {
            list-style: decimal inside;
            padding-left: 20px;
        }

        ul {
            list-style: disc inside;
            padding-left: 20px;
        }

        a {
            text-decoration: none;
            color: #0077b6;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="website-content">
    <h1>Exploring Yii2: A Developer's Diary</h1>

    <section class="intro">
        <h2>Overview</h2>
        <p>Join me on this insightful journey into the creation of my Yii2 website. This narrative will cover the development stages, the obstacles I overcame, and the strategies I employed. Discover the intricacies of Yii2 with me!</p>
    </section>

    <section class="contents">
        <h2>Contents</h2>
        <ol>
            <li><a href="#setup">Setting Up the Project</a></li>
            <li><a href="#modal-implementation">Crafting the Modal Form</a></li>
            <li><a href="#admin-controls">Admin Controls for the Modal</a></li>
            <li><a href="#launch-testing">Launch and Testing Strategies</a></li>
            <li><a href="#dev-challenges">Overcoming Development Challenges</a></li>
        </ol>
    </section>

    <section id="setup">
        <h3>1. Setting Up the Project</h3>

        <div class="yii-installation">
            <h4>1.1. Installing Yii2</h4>
            <p>My adventure started with Yii2's installation. This PHP framework, known for its robust capabilities, introduced me to new web development techniques and perspectives.</p>
        </div>

        <div class="database-config">
            <h4>1.2. Configuring the Database</h4>
            <p>Setting up the database in Yii2 involved using the <code>db.php</code> file for defining the database details. This was key for maintaining secure and reliable data handling.</p>
            <p>I have my own cluster on <code>AWS RDS</code>, so I used it. </p>
        </div>

        <div class="model-design">
            <h4>1.3. Designing the Models</h4>
            <p>I developed two primary models in Yii2:</p>
            <ul>
                <li><code>FormModelModal</code>: Handling user data like name, email, and ID.</li>
                <li><code>ModalSettings</code>: Responsible for modal behavior settings, such as delay and mandatory fields.</li>
            </ul>
        </div>
    </section>

    <section id="modal-implementation">
        <h3>2. Crafting the Modal Form</h3>

        <div class="modal-features">
            <h4>2.1. Developing the Modal</h4>
            <p>Using Yii2's Bootstrap 5, I designed an engaging modal form, complete with intuitive fields for Name, Email, and ID (numeric only).</p>
        </div>

        <div class="form-validations">
            <h4>2.2. Validating the Form</h4>
            <p>Ensuring user input validity, I incorporated email format checks and numeric ID validations to enhance user interactions.</p>
        </div>

        <div class="ajax-submission">
            <h4>2.3. AJAX Integration</h4>
            <p>For a fluid user experience, I implemented AJAX for asynchronous form submissions, enabling efficient server communication without reloading the page.</p>
        </div>

        <div class="error-management">
            <h4>2.4. Managing Errors</h4>
            <p>I crafted user-centric error messages to provide clear feedback during form submissions, covering email format issues and submission statuses.</p>
        </div>
    </section>

    <section id="admin-controls">
        <h3>3. Admin Controls for the Modal</h3>

        <div class="access-control">
            <h4>3.1. Controlling Admin Access</h4>
            <p>Access control for the admin page was implemented using Yii2's robust system, ensuring only authorized users could make changes.</p>
        </div>

        <div class="modal-behavior">
            <h4>3.2. Modal Behavior Settings</h4>
            <p>The <code>ModalSettings</code> model was created for detailed control over the modal, including delay settings and field requirements.</p>
        </div>

        <div class="admin-ui">
            <h4>3.3. Admin Interface Design</h4>
            <p>The admin interface was designed for easy management of modal settings, offering customization options like delay, enable/disable feature, device targeting, and mandatory fields.</p>
        </div>
    </section>

    <section id="launch-testing">
        <h3>4. Launch and Testing Strategies</h3>

        <div class="pre-launch-checks">
            <p>Pre-launch, I conducted extensive testing, including:</p>
            <ul>
                <li>Assessing modal functionality and data submission.</li>
                <li>Ensuring smooth operation of admin settings.</li>
                <li>Verifying robust access control mechanisms.</li>
                <li>Confirming secure data storage and handling.</li>
                <li>Testing compatibility across devices and browsers.</li>
            </ul>
        </div>
    </section>

    <section id="dev-challenges">
        <h3>5. Overcoming Development Challenges</h3>
        <ul>
            <li>Adapting to Yii2's routing system was initially challenging, especially given its unique methods compared to frameworks I'm more familiar with, like Laravel.</li>
            <li>Integrating Yii2's form-building approach required a significant shift from my experience with Laravel and Vue.js, posing a steep learning curve.</li>
            <li>Aligning with Yii2's best practices, which often merged HTML and PHP in a single file, was unconventional and required adapting my development approach.</li>
        </ul>
    </section>

    <section>
        <h2>Final Thoughts</h2>
        <p>This journey with Yii2, from the initial challenges to the final satisfaction of completing the project, has been a profound learning experience. The framework's distinct implementation style, particularly in areas like the Bootstrap 5 component integration and the peculiar routing methods, presented numerous learning opportunities. Despite these hurdles, my commitment to adhering to best programming practices played a pivotal role in navigating these unfamiliar methodologies. Ultimately, the project was not only a testament to my ability to adapt and learn but also a valuable addition to my development repertoire. It underscored the importance of flexibility and resilience in the tech world, preparing me for future projects that may require stepping out of my comfort zone.</p>
    </section>

</div>
</body>
</html>
