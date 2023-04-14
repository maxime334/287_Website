function processLogin() {
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;
  let userAgent = navigator.userAgent;
  let loginTime = new Date();

  if (username === 'foo' && password === 'foo') {
    sessionStorage.setItem('Username', username);
    sessionStorage.setItem('Password', password);
    sessionStorage.setItem('User-Agent', userAgent);
    sessionStorage.setItem('Login Time', loginTime);
    window.location.replace('./adminIndex.html');
  } else {
    alert('Error! Your login or password was incorrect. Please try again.');
  }
}
