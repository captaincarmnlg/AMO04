function logout(){
    document.cookie = 'authtoken=; expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    window.location.reload();
}