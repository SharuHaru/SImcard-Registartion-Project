Vue.createApp({
    data() {
        return {
            title : 'Sim Registration',
            menus : [
                {name: 'HOME', url: './index.html'},
                {name: 'ABOUT', url: '/about-us.html'},
                {name: 'ACCOUNT', url: '/account.html'},
                {name: 'CONTACT US', url: '/about-us.html'},
                {name: 'FAQs', url: '/about-us.html'}

            ],
            carouselTitle : 'Register Your Sim Now!',
            carouselBody : 'Republic Act No. 11934 and commonly referred to as the SIM card law, is a Philippine law mandating the registration of SIM cards before activation.'
            
        };
    }
}).mount('body');