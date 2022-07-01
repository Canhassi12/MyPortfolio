
// document.getElementById('high-school').addEventListener('click', display1);

// document.getElementById('metro-sp').addEventListener('click', display2)

// function display1() {
//     document.getElementById('school-paragraph').classList.toggle('hidden');
//     document.getElementById('high-school').classList.toggle('onclic');
    
// }

// function removeDisplays() {
    
// }

// function display2() {
//     document.getElementById('metro-sp').classList.toggle('onclic');

//     document.getElementById('metro-paragraph').classList.toggle('hidden'); 
// }

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
  
// Whenever the user explicitly chooses light mode
localStorage.theme = 'light';

// Whenever the user explicitly chooses dark mode
localStorage.theme = 'dark';

// Whenever the user explicitly chooses to respect the OS preference
localStorage.removeItem('theme');

let buttonTheme = document.getElementById('themeToggle');

function themeSwitch() {
  if (document.documentElement.classList.contains("dark")) {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
    return;
  } 
  document.documentElement.classList.add("dark");
  localStorage.setItem("theme", "dark");
  return;
}

buttonTheme.addEventListener("click", () => {
    themeSwitch();
})