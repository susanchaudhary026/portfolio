document.addEventListener('DOMContentLoaded', () => {
  const term = document.getElementById('termOut');
  if (!term) return;

  const lines = [
    "$ php artisan serve",
    "Server running on [127.0.0.1:8000]",
    "$ nmap -sV target.local",
    "Scanning 1 host..."
  ];
  let li = 0, ci = 0, buf = [];

  function typeLine() {
    if (li >= lines.length) {
      li = 0; ci = 0; buf = []; term.innerHTML = '';
      setTimeout(typeLine, 900);
      return;
    }
    const line = lines[li];
    if (ci === 0) buf.push('');
    if (ci < line.length) {
      buf[buf.length - 1] = line.slice(0, ci + 1);
      term.innerHTML = buf
        .map(l => l.startsWith('$') ? '<span style="color:#ff6b5b">' + l + '</span>' : l)
        .join('<br>');
      
      term.scrollTop = term.scrollHeight;
      ci++;
      setTimeout(typeLine, 28);
    } else {
      li++; ci = 0;
      setTimeout(typeLine, 350);
    }
  }
  typeLine();
});
