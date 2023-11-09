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
            carouselBody : 'Republic Act No. 11934 and commonly referred to as the SIM card law, is a Philippine law mandating the registration of SIM cards before activation.',

            accordions : [
                {question: 'What is SIM Registration', answer: 'Republic Act No. 11934 the SIM Registration Act requires the registration of all SIMs, including those in card and electronic form, as a prerequisite to activation. Under the measure, users of all mobile devices, including prepaid broadband devices, must register their SIMs.'},
                {question: 'Is there a time limit for SIM registration?', answer: 'Republic Act No. 11934 the SIM Registration Act requires the registration of all SIMs, including those in card and electronic form, as a prerequisite to activation. Under the measure, users of all mobile devices, including prepaid broadband devices, must register their SIMs.'},
                {question: 'Can I register more than one SIM?', answer: 'Republic Act No. 11934 the SIM Registration Act requires the registration of all SIMs, including those in card and electronic form, as a prerequisite to activation. Under the measure, users of all mobile devices, including prepaid broadband devices, must register their SIMs.'},
                {question: 'Why do i need to register my sim?', answer: 'Republic Act No. 11934 the SIM Registration Act requires the registration of all SIMs, including those in card and electronic form, as a prerequisite to activation. Under the measure, users of all mobile devices, including prepaid broadband devices, must register their SIMs.'},
                {question: 'What will happens if I fail to register my SIM before the deadline?', answer: 'Republic Act No. 11934 the SIM Registration Act requires the registration of all SIMs, including those in card and electronic form, as a prerequisite to activation. Under the measure, users of all mobile devices, including prepaid broadband devices, must register their SIMs.'}

            ],

            help : 'Need help registering your SIM? Wed be more happy to help. You may contact us on our social media accounts. You may also call our hotline (02) 291-6542 / (02) 291-6567'
            
        };
    }
}).mount('body');