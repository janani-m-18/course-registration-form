<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎓 Course Registration Form</h1>
            <p>Fill in the details below to register for your desired course</p>
        </div>

        <form id="registrationForm" action="process.php" method="POST">
            
            <div class="form-group">
                <label for="fullname">Full Name <span class="required">*</span></label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
                <span class="error-message" id="fullname-error"></span>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <span class="error-message" id="email-error"></span>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number <span class="required">*</span></label>
                <input type="text" id="phone" name="phone" placeholder="10-digit phone number" maxlength="10">
                <span class="error-message" id="phone-error"></span>
            </div>

            <div class="form-group">
                <label for="course">Select Course <span class="required">*</span></label>
                <select id="course" name="course">
                    <option value="">-- Select a Course --</option>
                    <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                    <option value="Object-Oriented Programming">Object-Oriented Programming</option>
                    <option value="Python Programming">Python Programming</option>
                    <option value="Database Management Systems">Database Management Systems</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Backend Development">Backend Development</option>
                    <option value="Operating Systems">Operating Systems</option>
                    <option value="Computer Networks">Computer Networks</option>
                    <option value="Cloud Computing">Cloud Computing</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Git and GitHub">Git and GitHub</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Data Science with Python">Data Science with Python</option>
                    <option value="Cybersecurity and Ethical Hacking">Cybersecurity and Ethical Hacking</option>
                </select>
                <span class="error-message" id="course-error"></span>
            </div>

            <div class="form-group">
                <label for="department">Department <span class="required">*</span></label>
                <select id="department" name="department">
                    <option value="">-- Select Department --</option>
                    <option value="CSE">CSE</option>
                    <option value="ISE">ISE</option>
                    <option value="ECE">ECE</option>
                    <option value="CSE(AIML)">CSE(AIML)</option>
                    <option value="CSE(Data Science)">CSE(Data Science)</option>
                    <option value="Basic Science">Basic Science</option>
                </select>
                <span class="error-message" id="department-error"></span>
            </div>

            <div class="form-group">
                <label for="semester">Semester <span class="required">*</span></label>
                <select id="semester" name="semester">
                    <option value="">-- Select Semester --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <span class="error-message" id="semester-error"></span>
            </div>

            <div class="form-group">
                <label for="reason">Reason for Choosing this Course <span class="required">*</span></label>
                <textarea id="reason" name="reason" rows="4" placeholder="Write your reason for choosing this course..."></textarea>
                <span class="error-message" id="reason-error"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Register Now</button>
                <button type="reset" class="reset-btn">Clear Form</button>
            </div>

        </form>
    </div>

    <script src="scripts.js"></script>
</body>
</html>