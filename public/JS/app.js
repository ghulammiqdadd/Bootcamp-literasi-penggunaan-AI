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
                this.show