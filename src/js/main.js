
import AOS from 'aos';
import headerService from './modules/header';

AOS.init.bind(this, {
    duration: 300,
    easing: 'ease-in-out',
    delay: 100,
}) 

headerService();
console.log("test");
