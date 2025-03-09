function submitclientInfo(){
    document.getElementById('lang').value = navigator.language;
    document.getElementById('time').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
};
document.addEventListener('DOMContentLoaded', function(){
    submitclientInfo();
});