let currentURL = window.location.href;
let regex = /shorts\/(.+)/;
let match = regex.exec(currentURL);
window. location.href = "https://www.youtube.com/watch?v="+match[1];

