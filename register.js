document.querySelector('button[type="submit"], .submit-btn').addEventListener('click', () => {
    const nickname = document.getElementById('nickname').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!nickname || !password) {
        showError('Please fill in all fields');
        return;
    }
    if (password.length < 6) {
        showError('Password must be at least 6 characters');
        return;
    }

});

function showError(msg) {
    let el = document.getElementById('error-msg');
    if (!el) {
        el = document.createElement('p');
        el.id = 'error-msg';
        el.className = 'text-red-500 text-sm text-center mt-2';
        document.querySelector('.submit-btn').before(el);
    }
    el.textContent = msg;
}

document.getElementById('toggle-password').addEventListener('click', () => {
    const input = document.getElementById('password');
    const btn = document.getElementById('toggle-password');
    if (input.type === 'password') {
        input.type = 'text';
        btn.textContent = 'Hide';
    } else {
        input.type = 'password';
        btn.textContent = 'Show';
    }
});