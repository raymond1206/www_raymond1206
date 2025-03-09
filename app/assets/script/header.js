export function dispNav(){
    const menuButton = document.getElementById('nav-button');
    const nav = document.getElementById('display');
    const disp = 'flex';
    nav.style.display = 'none';
    menuButton.addEventListener('click', function(e){
        nav.style.display = nav.style.display === disp ? 'none' : disp;
        e.stopPropagation();
    });
    document.addEventListener('click', function(e) {
        if (!menuButton.contains(e.target) && !nav.contains(e.target)){
            nav.style.display = 'none';
        }
    });
};