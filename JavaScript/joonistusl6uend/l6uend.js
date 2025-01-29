const canvas = document.getElementById('legoCanvas');
const ctx = canvas.getContext('2d');

function drawLEGOMan() {
    ctx.fillStyle = '#ffcc66';
    ctx.beginPath();
    ctx.arc(150, 60, 30, 0, Math.PI * 2);
    ctx.fill();

    ctx.fillStyle = '#ffcc66';
    ctx.fillRect(135, 20, 30, 10);

    ctx.fillStyle = 'black';
    ctx.beginPath();
    ctx.arc(140, 55, 4, 0, Math.PI * 2);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(160, 55, 4, 0, Math.PI * 2);
    ctx.fill();

    ctx.strokeStyle = 'black';
    ctx.beginPath();
    ctx.arc(150, 70, 10, 0, Math.PI);
    ctx.stroke();

    ctx.fillStyle = '#4CAF50';
    ctx.fillRect(120, 90, 60, 80);

    ctx.fillStyle = '#ffcc66';
    ctx.fillRect(100, 90, 20, 60);
    ctx.fillRect(180, 90, 20, 60);

    ctx.fillStyle = '#ffcc66';
    ctx.beginPath();
    ctx.arc(100, 150, 10, Math.PI / 2, Math.PI * 1.5);
    ctx.lineTo(100, 150);
    ctx.fill();

    ctx.beginPath();
    ctx.arc(200, 150, 10, -Math.PI / 2, Math.PI / 2);
    ctx.lineTo(200, 150);
    ctx.fill();

    ctx.fillStyle = '#2196F3';
    ctx.fillRect(120, 170, 20, 80);
    ctx.fillRect(160, 170, 20, 80);

    ctx.fillStyle = 'black';
    ctx.fillRect(120, 250, 20, 10);
    ctx.fillRect(160, 250, 20, 10);

    ctx.fillStyle = '#8B4513';
    ctx.beginPath();
    ctx.arc(150, 50, 30, Math.PI, Math.PI * 2);
    ctx.fill();

    ctx.fillStyle = 'yellow';
    ctx.beginPath();
    ctx.arc(150, 120, 5, 0, Math.PI * 2);
    ctx.fill();
}

drawLEGOMan();