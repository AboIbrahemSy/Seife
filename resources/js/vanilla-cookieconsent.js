import "vanilla-cookieconsent/dist/cookieconsent.css";
import * as CookieConsent from "vanilla-cookieconsent";
import "@orestbida/iframemanager";

document.body.innerHTML += `
    <style>
    .cc--light-funky {
        --cc-btn-primary-bg: #4CAF50;
        --cc-btn-primary-color: #fff; /* ذهبي داكن */
        --cc-btn-primary-border-color: #4CAF50;
        --cc-btn-primary-hover-bg: #66BB6A;
        --cc-btn-primary-hover-color: #fff; /* ذهبي فاتح */
        --cc-btn-primary-hover-border-color: #66BB6A;
    }
</style>

`;
let CookieConsentActive = false;

window.onload = () => {
    window.onscroll = () => {
        if (!CookieConsentActive) {
            CookieConsentActive = true;
            // Enable dark mode
            // document.documentElement.classList.add('cc--darkmode');
            document.documentElement.classList.add('cc--light-funky');
            // Define dataLayer and the gtag function.
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            // Set default consent to 'denied' as a placeholder
            // Determine actual values based on your own requirements
            gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
            });

            function updateGtagConsent(categories) {
                if (typeof window.gtag === "function") {
                    const gtagConsent = {};
                    gtagConsent['analytics_storage'] =
                        categories.includes('statistics') ? 'granted' : 'denied';

                    if (categories.includes('marketing')) {
                        gtagConsent['ad_storage'] = 'granted';
                        gtagConsent['ad_user_data'] = 'granted';
                        gtagConsent['ad_personalization'] = 'granted';
                    } else {
                        gtagConsent['ad_storage'] = 'denied';
                        gtagConsent['ad_user_data'] = 'denied';
                        gtagConsent['ad_personalization'] = 'denied';
                    }

                    console.log('gtagConsent', gtagConsent);
                    gtag('consent', 'update', gtagConsent);
                }
            }

            const im = iframemanager();

            // Example with youtube embed
            im.run({
                onChange: ({ changedServices, eventSource }) => {
                    if (eventSource.type === 'click') {
                        const servicesToAccept = [
                            ...CookieConsent.getUserPreferences().acceptedServices['marketing'],
                            ...changedServices
                        ];
                        CookieConsent.acceptService(servicesToAccept, 'marketing');
                    }
                },
                currLang: document.querySelector('html').getAttribute('lang'),
                autoLang: false,
                services: {
                    youtube: {
                        embedUrl: 'https://www.youtube-nocookie.com/embed/{data-id}',
                        thumbnailUrl: 'https://i3.ytimg.com/vi/{data-id}/hqdefault.jpg',
                        iframe: {
                            allow: 'accelerometer; encrypted-media; gyroscope; picture-in-picture; fullscreen;'
                        },
                        languages: {
                            en: {
                                notice: 'This content is hosted by a third party. By showing the external content you accept the <a rel="noreferrer noopener" href="https://www.youtube.com/t/terms" target="_blank">terms and conditions</a> of youtube.com.',
                                // loadBtn: 'Play video',
                                loadAllBtn: "Accept and load video"
                            },
                            sv: {
                                notice: 'Detta innehåll levereras av en tredje part. Genom att visa det externa innehållet accepterar du Youtubes <a rel="noreferrer noopener" href="https://www.youtube.com/t/terms" target="_blank">villkor och bestämmelser</a>',
                                // loadBtn: 'Spela video',
                                loadAllBtn: "Acceptera och ladda video"
                            }
                        }
                    },
                    googlemaps: {
                        embedUrl: 'https://www.google.com/maps/embed?pb={data-id}',
                        iframe: {
                            allow: 'picture-in-picture; fullscreen;'
                        },
                        languages: {
                            en: {
                                notice: 'This content is hosted by a third party. By showing the external content you accept the <a rel="noreferrer noopener" href="https://cloud.google.com/maps-platform/terms" target="_blank">terms and conditions</a> of Google Maps.',
                                // loadBtn: 'Load map',
                                loadAllBtn: "Accept and load map"
                            },
                            sv: {
                                notice: 'Detta innehåll levereras av en tredje part. Genom att visa det externa innehållet accepterar du Google Maps <a rel="noreferrer noopener" href="https://cloud.google.com/maps-platform/terms" target="_blank">villkor och bestämmelser</a>.',
                                // loadBtn: 'Load map',
                                loadAllBtn: "Acceptera och ladda karta"
                            }
                        }
                    }
                },
            });

            CookieConsent.run({

                onConsent: ({cookie}) => {
                    updateGtagConsent(cookie.categories);
                },

                onChange: ({cookie, changedCategories, changedServices}) => {
                    updateGtagConsent(cookie.categories);
                },

                // https://cookieconsent.orestbida.com/reference/configuration-reference.html#guioptions
                guiOptions: {
                    consentModal: {
                        layout: 'box wide',
                        position: 'middle center',
                        equalWeightButtons: false,
                        flipButtons: true
                    },
                    preferencesModal: {
                        layout: 'box',
                        equalWeightButtons: false,
                        flipButtons: true
                    }
                },

                categories: {
                    necessary: {
                        enabled: true, // this category is enabled by default
                        readOnly: true // this category cannot be disabled
                    },
                    statistics: {},
                    marketing: {
                        services: {
                            youtube: {
                                label: 'Youtube Embed',
                                onAccept: () => im.acceptService('youtube'),
                                onReject: () => im.rejectService('youtube')
                            },
                            googlemaps: {
                                label: 'Google Maps',
                                onAccept: () => im.acceptService('googlemaps'),
                                onReject: () => im.rejectService('googlemaps')
                            }
                        }
                    }
                },

                language: {
                    default: document.querySelector('html').getAttribute('lang'),
                    translations: {
                        'en': {
                            consentModal: {
                                title: 'This website uses cookies',
                                description: 'We use essential cookies to make our website work. With your consent, we also use non-essential cookies to improve the user experience and analyze website traffic. You can change your cookie settings at any time by clicking on "Cookie settings".',
                                acceptAllBtn: 'Accept all',
                                acceptNecessaryBtn: 'Necessary',
                                showPreferencesBtn: 'Settings'
                            },
                            preferencesModal: {
                                title: 'Manage cookie settings',
                                acceptAllBtn: 'Accept all',
                                acceptNecessaryBtn: 'Necessary',
                                savePreferencesBtn: 'Accept current selection',
                                closeIconLabel: 'Close cookie settings',
                                sections: [{
                                        title: ' ',
                                        description: 'We use different types of cookies to optimize your experience on our website. Click on the categories below to learn more about their purposes. You can choose which types of cookies to allow and can change your settings at any time. Remember that disabling cookies may affect your experience on the website.<br><br><strong>Which cookies do you want to accept?</strong>'
                                    },
                                    {
                                        title: 'Necessary',
                                        description: 'These cookies are essential for the proper functioning of the website and cannot be disabled. <br><br><strong>Cookies:</strong> Google Analytics (anonymized), Google Tag Manager (anonymized)',

                                        //this field will generate a toggle linked to the 'necessary' category
                                        linkedCategory: 'necessary'
                                    },
                                    {
                                        title: 'Statistics',
                                        description: 'These cookies collect information about how you use our website. All of the data is anonymized and cannot be used to identify you. <br><br><strong>Cookies:</strong> Google Analytics',
                                        linkedCategory: 'statistics'
                                    },
                                    {
                                        title: 'Marketing',
                                        description: 'These cookies collect information that can help us understand how our websites are used. This information may also be used to measure the effectiveness of our marketing campaigns or to create a customized website experience for you. All of the data is anonymized and cannot be used to identify you. <br><br><strong>Cookies:</strong> Google Tag Manager',
                                        linkedCategory: 'marketing'
                                    },
                                    {
                                        title: 'More information',
                                        description: 'For any queries in relation to our policy on cookies and your choices, please contact us.'
                                    }
                                ]
                            }
                        },
                        'ar': {
                            consentModal: {
                                title: "هذا الموقع يستخدم ملفات تعريف الارتباط",
                                description: "نستخدم ملفات تعريف الارتباط الأساسية لجعل موقعنا يعمل. بموافقتك، نستخدم أيضًا ملفات تعريف الارتباط غير الأساسية لتحسين تجربة المستخدم وتحليل حركة المرور على الموقع. يمكنك تغيير إعدادات ملفات تعريف الارتباط في أي وقت من خلال النقر على \"إعدادات ملفات تعريف الارتباط\".",
                                acceptAllBtn: "قبول الكل",
                                acceptNecessaryBtn: "ضرورية",
                                showPreferencesBtn: "إعدادات"
                            },
                            preferencesModal: {
                                title: "إدارة إعدادات ملفات تعريف الارتباط",
                                acceptAllBtn: "قبول الكل",
                                acceptNecessaryBtn: "ضرورية",
                                savePreferencesBtn: "قبول التحديد الحالي",
                                closeIconLabel: "إغلاق إعدادات ملفات تعريف الارتباط",
                                sections: [{
                                        title: " ",
                                        description: "نستخدم أنواعًا مختلفة من ملفات تعريف الارتباط لتحسين تجربتك على موقعنا. انقر على الفئات أدناه لمعرفة المزيد عن أغراضها. يمكنك اختيار أنواع ملفات تعريف الارتباط التي تريد السماح بها وتغيير إعداداتك في أي وقت. تذكر أن تعطيل ملفات تعريف الارتباط قد يؤثر على تجربتك على الموقع.<br><br><strong>أي ملفات تعريف الارتباط تريد قبولها؟</strong>"
                                    },
                                    {
                                        title: "ضرورية",
                                        description: "هذه الملفات ضرورية لعمل الموقع بشكل صحيح ولا يمكن تعطيلها. <br><br><strong>ملفات تعريف الارتباط:</strong> Google Analytics (مجهولة الهوية), Google Tag Manager (مجهولة الهوية)",
                                        linkedCategory: "necessary"
                                    },
                                    {
                                        title: "إحصائيات",
                                        description: "تجمع هذه الملفات معلومات حول كيفية استخدامك لموقعنا. جميع البيانات مجهولة ولا يمكن استخدامها للتعرف عليك. <br><br><strong>ملفات تعريف الارتباط:</strong> Google Analytics",
                                        linkedCategory: "statistics"
                                    },
                                    {
                                        title: "تسويق",
                                        description: "تجمع هذه الملفات معلومات يمكن أن تساعدنا في فهم كيفية استخدام مواقعنا. يمكن أيضًا استخدام هذه المعلومات لقياس فعالية حملاتنا التسويقية أو لإنشاء تجربة مخصصة لك على الموقع. جميع البيانات مجهولة ولا يمكن استخدامها للتعرف عليك. <br><br><strong>ملفات تعريف الارتباط:</strong> Google Tag Manager",
                                        linkedCategory: "marketing"
                                    },
                                    {
                                        title: "مزيد من المعلومات",
                                        description: "لأي استفسارات تتعلق بسياساتنا بشأن ملفات تعريف الارتباط واختياراتك، يرجى الاتصال بنا."
                                    }
                                ]
                            }
                        }
                    }
                }
            });
        }
    }
}
