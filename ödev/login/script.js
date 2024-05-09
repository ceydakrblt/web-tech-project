document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Form submission prevented
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Do client-side validation if needed

    // Send login credentials to server
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        var response = JSON.parse(xhr.responseText);
        if (xhr.status === 200 && response.success) {
            window.location.href = 'dashboard.html'; // Redirect to dashboard on successful login
        } else {
            document.getElementById('message').innerHTML = response.message;
        }
    };
    xhr.send(JSON.stringify({username: username, password: password}));
});
