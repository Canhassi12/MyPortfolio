
document.getElementById('high-school').addEventListener('click', display1);

document.getElementById('metro-sp').addEventListener('click', display2)

function display1() {
    document.getElementById('fds').classList.toggle('hidden');
}

function removeDisplays() {
    
}

function display2() {
    if (display1 == 1) {
        document.getElementById('fds').classList.add('hidden');
        return;
    }
    document.getElementById('fds2').classList.toggle('hidden'); 
      
}