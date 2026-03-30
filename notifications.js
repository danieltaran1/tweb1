function showToast(message, type = 'success') {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
    
    toast.className = `${bgColor} text-white px-6 py-3 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full opacity-0 flex items-center justify-between min-w-[250px] mb-2`;
    
    toast.innerHTML = `
        <span>${message}</span>
        <button class="ml-4 font-bold" onclick="this.parentElement.remove()">×</button>
    `;

    container.appendChild(toast);

    setTimeout(() => {
        toast.classList.remove('translate-x-full', 'opacity-0');
        toast.classList.add('translate-x-0', 'opacity-100');
    }, 10);

    setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-x-full');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}

window.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    
    if (urlParams.has('error')) {
        const error = urlParams.get('error');
        if (error === 'wrong_pass') showToast("Parola este incorectă!", "error");
        if (error === 'user_not_found') showToast("Utilizatorul nu există!", "error");
        if (error === 'empty_fields') showToast("Completează toate câmpurile!", "error");
        if (error === 'email_exists') showToast("Email-ul este deja înregistrat!", "error");
    }

    if (urlParams.has('success')) {
        if (urlParams.get('success') === 'registered') {
            showToast("Cont creat! Acum te poți loga.", "success");
        }
    }
});