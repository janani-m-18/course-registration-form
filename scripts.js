$(document).ready(function() {
    
    $('#registrationForm').on('submit', function(e) {
        
        // Clear all previous errors
        $('.error-message').text('');
        $('input, select, textarea').removeClass('error');
        
        let isValid = true;
        
        // Validate Full Name
        const fullname = $('#fullname').val().trim();
        if (fullname === '') {
            showError('fullname', 'Full name is required');
            isValid = false;
        } else if (fullname.length < 3) {
            showError('fullname', 'Name must be at least 3 characters');
            isValid = false;
        }
        
        // Validate Email
        const email = $('#email').val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
            showError('email', 'Email is required');
            isValid = false;
        } else if (!emailPattern.test(email)) {
            showError('email', 'Please enter a valid email address');
            isValid = false;
        }
        
        // Validate Phone Number
        const phone = $('#phone').val().trim();
        if (phone === '') {
            showError('phone', 'Phone number is required');
            isValid = false;
        } else if (phone.length !== 10) {
            showError('phone', 'Phone number must be exactly 10 digits');
            isValid = false;
        } else if (!/^[0-9]{10}$/.test(phone)) {
            showError('phone', 'Phone number must contain only digits');
            isValid = false;
        }
        
        // Validate Course
        const course = $('#course').val();
        if (course === '') {
            showError('course', 'Please select a course');
            isValid = false;
        }
        
        // Validate Department
        const department = $('#department').val();
        if (department === '') {
            showError('department', 'Please select a department');
            isValid = false;
        }
        
        // Validate Semester
        const semester = $('#semester').val();
        if (semester === '') {
            showError('semester', 'Please select a semester');
            isValid = false;
        }
        
        // Validate Reason
        const reason = $('#reason').val().trim();
        if (reason === '') {
            showError('reason', 'Reason is required');
            isValid = false;
        } else if (reason.length < 10) {
            showError('reason', 'Reason must be at least 10 characters');
            isValid = false;
        }
        
        // Prevent form submission if validation fails
        if (!isValid) {
            e.preventDefault();
            
            // Scroll to first error
            const firstError = $('.error').first();
            if (firstError.length) {
                $('html, body').animate({
                    scrollTop: firstError.offset().top - 100
                }, 500);
            }
        }
    });
    
    // Helper function to display errors
    function showError(fieldId, message) {
        $('#' + fieldId).addClass('error');
        $('#' + fieldId + '-error').text(message);
    }
    
    // Allow only numbers in phone field
    $('#phone').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    
    // Clear errors when user starts typing
    $('input, select, textarea').on('input change', function() {
        $(this).removeClass('error');
        $('#' + $(this).attr('id') + '-error').text('');
    });
    
});