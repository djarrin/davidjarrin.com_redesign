var URL = window.location.href;
var baseURL = window.location.protocol+'//'+window.location.host+window.location.pathname;

function goToTop (URL) {
switch(URL) {
    case baseURL+'#skills':
        scrollTo(0, 0);
        console.log('you are on skills');       
        break;
    case baseURL+'#experience':
        scrollTo(0, 0);
        console.log('you are on expereince');       
        break;
    case baseURL+'#works':
        scrollTo(0, 0);
        console.log('you are on works');        
        break;
}
}

