// display_data.js
window.onload = function() {
    // Function to fetch and display student data
    function displayStudentData() {
        fetch('get_student_data.php')
            .then(response => response.json())
            .then(data => {
                const studentDataContainer = document.getElementById('studentData');
                studentDataContainer.innerHTML = ''; // Clear previous data

                data.forEach(student => {
                    const studentDiv = document.createElement('div');
                    studentDiv.classList.add('student');
                    studentDiv.innerHTML = `
                        <p><strong>Name:</strong> ${STUDENT_NAME}</p>
                        <p><strong>ID:</strong> ${ID}</p>
                        <p><strong>Age:</strong> ${AGE}</p>
                        <p><strong>CGPA:</strong> ${CGPA}</p>
                        <p><strong>CGPA:</strong> ${SEMESTER}</p>

                    `; 
                    studentDataContainer.appendChild(studentDiv);
                });
            })
            .catch(error => console.error('Error fetching student data:', error));
    }

    // Call the function to display student data when the page loads
    displayStudentData();
};
