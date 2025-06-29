
// Theme Toggle
let isDarkMode = false;

function toggleTheme() {
    isDarkMode = !isDarkMode;
    const body = document.body;
    const themeIcon = document.getElementById('theme-icon');
    
    if (isDarkMode) {
        body.setAttribute('data-theme', 'dark');
        themeIcon.className = 'fas fa-sun';
    } else {
        body.removeAttribute('data-theme');
        themeIcon.className = 'fas fa-moon';
    }
}

// Language System
let currentLanguage = 'en';

const translations = {
    en: {
        school_name: "Riad Elkheir",
        nav_home: "Home",
        nav_news: "News",
        nav_about: "About",
        nav_programs: "Programs",
        nav_gallery: "Gallery",
        nav_contact: "Contact",
        hero_title: "Excellence in Education",
        hero_subtitle1:"Shaping Tomorrow's Leaders Today",
        hero_subtitle2: "Nurturing young minds for a brighter future with innovative teaching methods and personalized attention",
        about_title: "About Our School",
        about_subtitle: "Committed to providing exceptional education .",
        about_heading: "Our Mission",
        about_text1: "At Excellence Academy, we believe every child deserves the best education. Our dedicated team of experienced educators works tirelessly to create an environment where students can thrive academically, socially, and emotionally.",
        about_text2: "We combine traditional values with modern teaching methods to prepare our students for the challenges of tomorrow while instilling strong moral foundations.",
        about_feature1: "Small Class Sizes",
        about_feature2: "Experienced Teachers",
        about_feature3: "Modern Facilities",
        about_feature4: "Individual Attention",
        about_image_caption: "Our Beautiful Campus",
        stat_students: "Students",
        stat_teachers: "Teachers",
        stat_years: "Years",
        stat_success: "Success Rate",
        programs_title: "Our Programs",
        programs_subtitle: "Comprehensive education from kindergarten to high school",
        program1_title: "Kindergarten",
        program1_desc: "Ages 3-5: Building foundational skills through play-based learning and creative activities that spark curiosity.",
        program2_title: "Primary school",
        program2_desc: "Grades 1-5: Core subjects with emphasis on literacy, numeracy, and critical thinking skills development.",
        program3_title: "Middle School",
        program3_desc: "Grades 6-8: Preparing students for high school with advanced curriculum and leadership opportunities.",
        program4_title: "High School",
        program4_desc: "Grades 9-12: College preparatory program with AP courses and university counseling services.",
        program5_title: "Arts Program",
        program5_desc: "Music, visual arts, and drama programs to nurture creativity and artistic expression in all students.",
        program6_title: "Sports",
        program6_desc: "Comprehensive athletics program promoting physical fitness, teamwork, and healthy competition.",
        gallery_title: "School Life",
        gallery_subtitle: "Glimpses of our vibrant school community",
        gallery_img1: "Modern Classrooms",
        gallery_img2: "Library",
        gallery_img3: "Science Laboratory",
        gallery_img4: "Sports Activities",
        gallery_img5: "Art Classes",
        gallery_img6: "School Events",
        contact_title: "Get In Touch",
        contact_subtitle: "Ready to join our school community? Contact us today!",
        contact_address_title: "Address",
        contact_address: "Mers Elkheir <br> Temara, Rabat",
        contact_phone_title: "Phone",
        contact_phone: "",
        contact_email_title: "Email",
        contact_email: "",
        contact_cta: "Schedule a Visit",
        footer_about_title: "RIAD ELKHEIR",
        footer_about_text: "Dedicated to providing exceptional education and nurturing the next generation of leaders, thinkers, and innovators.",
        footer_quick_links: "Quick Links",
        footer_programs_title: "Programs",
        footer_contact_title: "Contact Info",
        footer_copyright: "&copy; 2025 Riad Elkheir. All rights reserved.",
        footer_privacy: "Privacy Policy",
        footer_terms: "Terms of Service"
    },
    fr: {
        school_name: "Riad Elkheir",
        nav_home: "Accueil",
        nav_news: "Nouvelles",
        nav_time:"Emploi de temps",
        nav_about: "À propos",
        nav_programs: "Programmes",
        nav_gallery: "Galerie",
        nav_contact: "Contact",
        hero_title: "L'excellence en éducation",
        hero_subtitle1:"Façonner aujourd'hui les leaders de demain",
        hero_subtitle2: "Éveiller les jeunes esprits pour un avenir meilleur grâce à des méthodes d'enseignement innovantes et une attention personnalisée",
        about_title: "À propos de notre école",
        about_subtitle: "Engagés à fournir une éducation exceptionnelle .",
        about_heading: "Notre mission",
        about_text1: "À l'Académie de l'Excellence, nous croyons que chaque enfant mérite la meilleure éducation. Notre équipe dévouée d’enseignants expérimentés travaille sans relâche pour créer un environnement où les élèves peuvent s’épanouir académiquement, socialement et émotionnellement.",
        about_text2: "Nous combinons des valeurs traditionnelles avec des méthodes pédagogiques modernes pour préparer nos élèves aux défis de demain tout en leur inculquant de solides bases morales.",
        about_feature1: "Petites classes",
        about_feature2: "Enseignants expérimentés",
        about_feature3: "Installations modernes",
        about_feature4: "Attention individuelle",
        about_image_caption: "Notre beau campus",
        stat_students: "Élèves",
        stat_teachers: "Enseignants",
        stat_years: "Années",
        stat_success: "Taux de réussite",
        programs_title: "Nos programmes",
        programs_subtitle: "Éducation complète de la maternelle au lycée",
        program1_title: "Maternelle",
        program1_desc: "Âges 3-5 : Acquisition des compétences de base par l'apprentissage ludique et des activités créatives qui éveillent la curiosité.",
        program2_title: "Primaire",
        program2_desc: "Classes 1 à 5 : Matières fondamentales avec un accent sur la lecture, le calcul et le développement de la pensée critique.",
        program3_title: "Collège",
        program3_desc: "Classes 6 à 8 : Préparation au lycée avec un programme avancé et des opportunités de leadership.",
        program4_title: "Lycée",
        program4_desc: "Classes 9 à 12 : Programme préparatoire à l'université avec des cours avancés et un accompagnement personnalisé.",
        program5_title: "Programme artistique",
        program5_desc: "Musique, arts visuels et théâtre pour encourager la créativité et l'expression artistique chez tous les élèves.",
        program6_title: "Sports",
        program6_desc: "Programme sportif complet favorisant la condition physique, l’esprit d’équipe et la compétition saine.",
        gallery_title: "Vie scolaire",
        gallery_subtitle: "Aperçu de notre communauté scolaire dynamique",
        gallery_img1: "Salles de classe modernes",
        gallery_img2: "Bibliothèque",
        gallery_img3: "Laboratoire scientifique",
        gallery_img4: "Activités sportives",
        gallery_img5: "Cours d'art",
        gallery_img6: "Événements scolaires",
        contact_title: "Contactez-nous",
        contact_subtitle: "Prêt à rejoindre notre communauté scolaire ? Contactez-nous dès aujourd'hui !",
        contact_address_title: "Adresse",
        contact_address: "Mers Elkheir <br> Témara, Rabat",
        contact_phone_title: "Téléphone",
        contact_phone: "",
        contact_email_title: "E-mail",
        contact_email: "",
        contact_cta: "Planifier une visite",
        footer_about_title: "RIAD ELKHEIR",
        footer_about_text: "Dévoués à offrir une éducation exceptionnelle et à former la prochaine génération de leaders, de penseurs et d’innovateurs.",
        footer_quick_links: "Liens rapides",
        footer_programs_title: "Programmes",
        footer_contact_title: "Contact",
        footer_copyright: "&copy; 2025 Riad Elkheir. Tous droits réservés.",
        footer_privacy: "Politique de confidentialité",
        footer_terms: "Conditions d'utilisation"
    },

    ar: {
        school_name: "رياض الخير",
        nav_home: "الرئيسية",
        nav_news:"أخبار",
        nav_time:"الجدول الزمني",
        nav_about: "من نحن",
        nav_programs: "البرامج",
        nav_gallery: "المعرض",
        nav_contact: "اتصل بنا",
        hero_title: "التميز في التعليم",
        hero_subtitle1:"تشكيل قادة الغد اليوم",
        hero_subtitle2: "رعاية العقول الشابة لمستقبل أكثر إشراقًا بأساليب تعليمية مبتكرة واهتمام فردي",
        about_title: "عن مدرستنا",
        about_subtitle: ".ملتزمون بتقديم تعليم متميز",
        about_heading: "مهمتنا",
        about_text1: "في أكاديمية التميز، نؤمن بأن كل طفل يستحق أفضل تعليم. يعمل فريقنا المتفاني من المعلمين ذوي الخبرة بلا كلل لخلق بيئة يمكن للطلاب أن يزدهروا فيها أكاديميًا واجتماعيًا وعاطفيًا.",
        about_text2: "نمزج بين القيم التقليدية وأساليب التدريس الحديثة لإعداد طلابنا لتحديات المستقبل مع غرس أسس أخلاقية قوية.",
        about_feature1: "صفوف صغيرة",
        about_feature2: "معلمون ذوو خبرة",
        about_feature3: "مرافق حديثة",
        about_feature4: "اهتمام فردي",
        about_image_caption: "حرمنا الجميل",
        stat_students: "الطلاب",
        stat_teachers: "المعلمون",
        stat_years: "السنوات",
        stat_success: "نسبة النجاح",
        programs_title: "برامجنا",
        programs_subtitle: "تعليم شامل من الروضة إلى الثانوية",
        program1_title: "رياض الأطفال",
        program1_desc: "الأعمار 3-5: بناء المهارات الأساسية من خلال التعلم باللعب والأنشطة الإبداعية التي تثير الفضول.",
        program2_title: "المرحلة الابتدائية",
        program2_desc: "الصفوف 1-5: مواد أساسية مع التركيز على القراءة والحساب وتطوير التفكير النقدي.",
        program3_title: "المرحلة الإعدادية",
        program3_desc: "الصفوف 6-8: إعداد الطلاب للمرحلة الثانوية من خلال مناهج متقدمة وفرص قيادية.",
        program4_title: "المرحلة الثانوية",
        program4_desc: "الصفوف 9-12: برنامج تحضيري للجامعة يشمل دورات متقدمة وخدمات إرشاد جامعي.",
        program5_title: "البرنامج الفني",
        program5_desc: "برامج الموسيقى والفنون البصرية والمسرح لتنمية الإبداع والتعبير الفني لدى جميع الطلاب.",
        program6_title: "الرياضة",
        program6_desc: "برنامج رياضي شامل يعزز اللياقة البدنية والعمل الجماعي والمنافسة الصحية.",
        gallery_title: "الحياة المدرسية",
        gallery_subtitle: "لمحات من مجتمعنا المدرسي الحيوي",
        gallery_img1: "صفوف حديثة",
        gallery_img2: "مكتبة",
        gallery_img3: "مختبر علوم",
        gallery_img4: "أنشطة رياضية",
        gallery_img5: "دروس الفن",
        gallery_img6: "فعاليات مدرسية",
        contact_title: "تواصل معنا",
        contact_subtitle: "هل أنت مستعد للانضمام إلى مجتمعنا المدرسي؟ تواصل معنا اليوم!",
        contact_address_title: "العنوان",
        contact_address: "مرس الخير <br> تمارة، الرباط",
        contact_phone_title: "الهاتف",
        contact_phone: "",
        contact_email_title: "البريد الإلكتروني",
        contact_email: "",
        contact_cta: "احجز زيارة",
        footer_about_title:  "رياض الخير",
        footer_about_text: "ملتزمون بتقديم تعليم متميز ورعاية الجيل القادم من القادة والمفكرين والمبدعين.",
        footer_quick_links: "روابط سريعة",
        footer_programs_title: "البرامج",
        footer_contact_title: "معلومات الاتصال",
        footer_copyright: "&copy; 2025 رياض الخير. جميع الحقوق محفوظة.",
        footer_privacy: "سياسة الخصوصية",
        footer_terms: "شروط الخدمة"
    }

};

function changeLanguage(lang) {
    currentLanguage = lang;
    const langMap = {
        'en': 'EN',
        'fr': 'FR',
        'ar': 'ع'
    };
    
    document.getElementById('current-lang').textContent = langMap[lang];
    
    // Update HTML attributes
    document.documentElement.lang = lang;
    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
    
    // Add/remove RTL class
    if (lang === 'ar') {
        document.body.classList.add('rtl');
    } else {
        document.body.classList.remove('rtl');
    }
    
    // Update all translatable elements
    const elements = document.querySelectorAll('[data-translate]');
    elements.forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang] && translations[lang][key]) {
            element.innerHTML = translations[lang][key];
        }
    });
}

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.backgroundColor = 'rgba(44, 62, 80, 0.95)';
        navbar.style.backdropFilter = 'blur(10px)';
    } else {
        navbar.style.backgroundColor = 'var(--primary-color)';
        navbar.style.backdropFilter = 'none';
    }
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Set initial language
    changeLanguage('en');
});
    // Add smooth scrolling and interactive elements
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth button hover effects
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add parallax effect to floating badges
        document.addEventListener('mousemove', (e) => {
            const badges = document.querySelectorAll('.floating-badge');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            badges.forEach((badge, index) => {
                const xOffset = (mouseX - 0.5) * 20 * (index + 1);
                const yOffset = (mouseY - 0.5) * 20 * (index + 1);
                badge.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
            });
        });
    });