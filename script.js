let kanan = document.getElementById('kanan');
let kiri = document.getElementById('kiri');
let kananSecondary = document.getElementById('kananSecondary');
let kiriSecondary = document.getElementById('kiriSecondary');
let tagline = document.getElementById('tagline');
// let taglineSection = document.getElementById('taglineSection');
let navigation = document.getElementById('navigation');
let menuHome = document.getElementById('menuHome');
let menuAbout = document.getElementById('menuAbout');
let menuService = document.getElementById('menuService');
let menuContact = document.getElementById('menuContact');
let logoPrimary = document.getElementById('logoPrimary');
let logoSecondary = document.getElementById('logoSecondary');


// Neutral Colors
let neutral10 = "#ffffff";
let neutral20 = "#f5f5f5";
let neutral30 = "#ededed";
let neutral40 = "#e0e0e0";
let neutral50 = "#c2c2c2";
let neutral60 = "#9e9e9e";
let neutral70 = "#757575";
let neutral80 = "#616161";
let neutral90 = "#404040";
let neutral100 = "#0a0a0a";

// Primary Colors
let primary50 = "#fbffec";
let primary100 = "#f1ffc5";
let primary200 = "#ebffa6";
let primary300 = "#e2fe7d";
let primary400 = "#dcfe64";
let primary500 = "#d3fe3d";
let primary600 = "#c0e738";
let primary700 = "#96b42b";
let primary800 = "#748c22";
let primary900 = "#596b1b";

// Secondary Colors
let secondary50 = "#f0eefb";
let secondary100 = "#d1caf4";
let secondary200 = "#bab0ee";
let secondary300 = "#9b8ce6";
let secondary400 = "#8775e1";
let secondary500 = "#6953da";
let secondary600 = "#604cc6";
let secondary700 = "#4b3b9b";
let secondary800 = "#3a2e78";
let secondary900 = "#2c235c";

// Accent Colors
let accentA500 = "#d0e9f9";
let accentB500 = "#4d61f4";
let accentC500 = "#9c8eb7";
let accentD500 = "#2a330c";

function navigationHome() {
    logoSecondary.style.display = 'none';
    logoPrimary.style.display = 'block';

    navigation.style.background = secondary500;

    menuHome.style.color = primary500;
    menuHome.style.backgroundColor = secondary500;

    menuAbout.style.color = neutral10;
    menuAbout.style.backgroundColor = secondary500;

    menuService.style.color = neutral10;
    menuService.style.backgroundColor = secondary500;

    menuContact.style.color = neutral100;
    menuContact.style.backgroundColor = primary500;
}
function navigationAbout() {
    logoPrimary.style.display = 'none';
    logoSecondary.style.display = 'block';

    navigation.style.background = primary500;

    menuHome.style.color = accentD500;
    menuHome.style.backgroundColor = primary500;

    menuAbout.style.color = secondary500;
    menuAbout.style.backgroundColor = primary500;

    menuService.style.color = accentD500;
    menuService.style.backgroundColor = primary500;
    
    menuContact.style.color = neutral10;
    menuContact.style.backgroundColor = secondary500;
}
function navigationService() {
    logoSecondary.style.display = 'none';
    logoPrimary.style.display = 'block';

    navigation.style.background = secondary500;

    menuHome.style.color = neutral10;
    menuHome.style.backgroundColor = secondary500;

    menuAbout.style.color = neutral10;
    menuAbout.style.backgroundColor = secondary500;

    menuService.style.color = primary500;
    menuService.style.backgroundColor = secondary500;
    
    menuContact.style.color = neutral100;
    menuContact.style.backgroundColor = primary500;
}
function navigationContact() {
    logoPrimary.style.display = 'none';
    logoSecondary.style.display = 'block';

    navigation.style.background = primary500;

    menuHome.style.color = accentD500;
    menuHome.style.backgroundColor = primary500;

    menuAbout.style.color = accentD500;
    menuAbout.style.backgroundColor = primary500;

    menuService.style.color = accentD500;
    menuService.style.backgroundColor = primary500;
    
    menuContact.style.color = neutral10;
    menuContact.style.backgroundColor = secondary500;
}

let userScroll = window.scrollY;
let heightWindow = document.getElementById('home').offsetHeight;
if(userScroll < (heightWindow * 1)){
    navigationHome();
}
else if(userScroll < (heightWindow * 2)){
    navigationAbout();
}
else if(userScroll < (heightWindow * 3)){
    navigationService();
}
else if(userScroll >= (heightWindow * 3)){
    navigationContact();
}

window.addEventListener('scroll', () =>{
    let userScroll = window.scrollY;
    let heightWindow = document.getElementById('home').offsetHeight;
    let heightTaglineSection = document.getElementById('taglineSection').offsetHeight;
    console.log(heightTaglineSection);
    

    kiri.style.marginRight = (userScroll * 0.036) - 30 + '%';
    kanan.style.marginLeft = (userScroll * 0.036) - 30 + '%';
    
    kiriSecondary.style.marginRight = ((userScroll - heightWindow*2) * 0.036) - 30 + '%';
    kananSecondary.style.marginLeft = ((userScroll - heightWindow*2) * 0.036) - 30 + '%';

    tagline.style.marginTop = (userScroll / heightWindow) * ((75 + ((heightTaglineSection-75)/2))-17) + 'px';

    if(userScroll < (heightWindow * 0.9)){
        navigationHome();
    }
    else if(userScroll < (heightWindow * 1.9)){
        navigationAbout();
    }
    else if(userScroll < (heightWindow * 2.9)){
        navigationService();
    }
    else if(userScroll >= (heightWindow * 2.9)){
        navigationContact();
    }
});

