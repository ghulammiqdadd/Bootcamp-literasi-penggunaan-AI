// public/js/app.js

class BootcampAI {
    constructor() {
        this.init();
    }

    init() {
        this.bindEvents();
        this.loadStats();
        this.startStatsUpdate();
    }

    bindEvents() {
        const form = document.getElementById('kuesionerForm');
        if (form) {
            form.addEventListener('submit', (e) => this.handleSubmit(e));
        }
    }

    async handleSubmit(e) {
        e.preventDefault();
        
        const formData = {
            nama: document.getElementById('nama').value,
            email: document.getElementById('email').value,
            institusi: document.getElementById('institusi').value,
            q1: parseInt(document.getElementById('q1').value),
            q2: parseInt(document.getElementById('q2').value),
            q3: parseInt(document.getElementById('q3').value),
            q4: parseInt(document.getElementById('q4').value),
            feedback: document.getElementById('feedback').value
        };

        try {
            const response = await fetch('/kuesioner', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();
            
            if (result.success) {
                alert('Terima kasih! Kuesioner Anda telah berhasil dikirim.');
                form.reset();
                this.loadStats();
            } else {
                alert('Terjadi kesalahan. Silakan coba lagi.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengirim kuesioner.');
        }
    }

    async loadStats() {
        try {
            const response = await fetch('/hasil-kuesioner');
            const stats = await response.json();
            this.updateStatsDisplay(stats);
        } catch (error) {
            console.error('Error loading stats:', error);
        }
    }

    updateStatsDisplay(stats) {
        if (stats && stats.total_responden) {
            document.getElementById('totalResponden').textContent = stats.total_responden;
            document.getElementById('avgQ1').textContent = parseFloat(stats.avg_q1).toFixed(2);
            document.getElementById('avgQ2').textContent = parseFloat(stats.avg_q2).toFixed(2);
            document.getElementById('avgQ3').textContent = parseFloat(stats.avg_q3).toFixed(2);
            document.getElementById('avgQ4').textContent = parseFloat(stats.avg_q4).toFixed(2);
        }
    }

    startStatsUpdate() {
        setInterval(() => this.loadStats(), 5000);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new BootcampAI();
});