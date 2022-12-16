function setCookie() {
    name = document.getElementById("name").value;
    value = document.getElementById("value").value;
    document.cookie = `${name}=${value}`;
}

function removeCookie() {
    name = document.getElementById("name").value;
    value = document.getElementById("value").value;
    document.cookie = `${name}=${value}; expires=Thu, 2 Dec 2022 12:00:00 UTC;`;
}

function show() {
    let x = document.cookie;
    console.log(x);
    document.getElementById("container").innerHTML = x;
}