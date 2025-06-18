<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vikas Saroj - Freelance Laravel, Website & API Developer</title>

    <meta name="description"
        content="Vikas Saroj is a passionate freelance Laravel developer with 3 years of experience, specializing in robust website development and scalable API solutions. Available for new projects.">
    <meta name="keywords"
        content="Vikas Saroj, freelance Laravel developer, website development, API development, PHP developer, web applications, full-stack developer, remote developer, India">
    <meta name="author" content="Vikas Saroj">

    <meta property="og:title" content="Vikas Saroj - Freelance Laravel, Website & API Developer">
    <meta property="og:description"
        content="Vikas Saroj is a passionate freelance Laravel developer with 3 years of experience, specializing in robust website development and scalable API solutions. Available for new projects.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vikassaroj.com/">
    <meta property="og:image" content="https://www.vikassaroj.com/images/og-image.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #121212;
            color: #E0E0E0;
        }

        .hero-bg {
            background-color: #1F1F1F;
        }

        .card-bg {
            background-color: #282828;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-bg:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            border-bottom: 2px solid #6200EE;
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #6200EE;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #333;
        }

        .skill-badge {
            background-color: #3A3A3A;
            color: #E0E0E0;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            transition: background-color 0.3s ease;
        }

        .skill-badge:hover {
            background-color: #6200EE;
        }
    </style>
</head>

<body class="antialiased">

    <header class="bg-black/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold tracking-wider text-white">Vikas Saroj</a>
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#about" class="nav-link text-lg" data-lang-key="navAbout">About</a>
                <!-- <a href="#skills" class="nav-link text-lg" data-lang-key="navSkills">Skills</a> -->
                <a href="#projects" class="nav-link text-lg" data-lang-key="navProjects">Projects</a>
                <!-- <a href="#blog" class="nav-link text-lg" data-lang-key="navBlog">Blog</a> -->
                <!-- <a href="#contact" class="nav-link text-lg" data-lang-key="navContact">Contact</a> -->
                <div class="relative inline-block text-left ml-4">
                    <select id="language-switcher"
                        class="bg-gray-700 text-white text-sm py-2 px-3 rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="en">English</option>
                        <option value="hi">हिंदी</option>
                        <option value="gu">ગુજરાતી</option>
                    </select>
                </div>
            </nav>
            <button id="mobile-menu-button" class="md:hidden focus:outline-none text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-black/90">
            <a href="#about" class="block py-2 px-6 text-center hover:bg-gray-900" data-lang-key="navAbout">About</a>
            <a href="#skills" class="block py-2 px-6 text-center hover:bg-gray-900" data-lang-key="navSkills">Skills</a>
            <a href="#projects" class="block py-2 px-6 text-center hover:bg-gray-900"
                data-lang-key="navProjects">Projects</a>
            <a href="#blog" class="block py-2 px-6 text-center hover:bg-gray-900" data-lang-key="navBlog">Blog</a>
            <a href="#contact" class="block py-2 px-6 text-center hover:bg-gray-900"
                data-lang-key="navContact">Contact</a>
            <div class="px-6 py-2">
                <select id="mobile-language-switcher"
                    class="w-full bg-gray-700 text-white text-sm py-2 px-3 rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="en">English</option>
                    <option value="hi">हिंदी</option>
                    <option value="gu">ગુજરાતી</option>
                </select>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-6 pt-16">
        <section id="about" class="hero-bg rounded-lg py-16 md:py-24 text-center my-16 shadow-lg">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4 text-white" data-lang-key="heroTitle">
                Vikas Saroj</h1>
            <p id="bio-text" class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto" data-lang-key="heroBio" style="margin-bottom: 43px;">
                A passionate **Laravel Developer** with 3 years of experience in building **robust and scalable web
                applications**. I specialize in crafting efficient backend solutions and seamless user experiences.
            </p>
            <!-- <a href="#projects"
                class="mt-8 inline-block bg-[#6200EE] text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-[#7b1fa2] transition-colors duration-300 transform hover:scale-105"
                data-lang-key="heroButton">View My Work</a> -->
                 <div class="flex flex-wrap justify-center gap-4">
                <span class="skill-badge">Laravel</span>
                <span class="skill-badge">PHP</span>
                <span class="skill-badge">MySQL</span>
                <span class="skill-badge">Vue.js</span>
                <span class="skill-badge">JavaScript</span>
                <span class="skill-badge">RESTful APIs</span>
                <span class="skill-badge">Git</span>
                <span class="skill-badge">Tailwind CSS</span>
                <span class="skill-badge">AWS (S3, EC2)</span>
                <span class="skill-badge">Docker</span>
            </div>
        </section>

        

        <!-- <section id="skills" class="my-24">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center section-title" data-lang-key="skillsTitle">My
                Skills</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="skill-badge">Laravel</span>
                <span class="skill-badge">PHP</span>
                <span class="skill-badge">MySQL</span>
                <span class="skill-badge">Vue.js</span>
                <span class="skill-badge">JavaScript</span>
                <span class="skill-badge">RESTful APIs</span>
                <span class="skill-badge">Git</span>
                <span class="skill-badge">Tailwind CSS</span>
                <span class="skill-badge">AWS (S3, EC2)</span>
                <span class="skill-badge">Docker</span>
            </div>
        </section> -->

        

        <section id="projects" class="my-24">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center section-title" data-lang-key="projectsTitle">My
                Projects</h2>
            <div id="project-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                </div>
        </section>

        

        <!-- <section id="blog" class="my-24">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center section-title" data-lang-key="blogTitle">My
                Blog</h2>
            <div class="card-bg rounded-lg shadow-lg p-8 text-center">
                <p class="text-xl text-gray-400" data-lang-key="blogComingSoon">New posts coming soon! Stay tuned for
                    insights on web development, Laravel, and more.</p>
                </div>
        </section> -->

       

        <!-- <section id="contact" class="my-24 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 section-title" data-lang-key="contactTitle">Get In Touch
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto" data-lang-key="contactText">I'm currently available
                for freelance work and open to new opportunities. If you have a project in mind or just want to say
                hello, feel free to reach out.</p>
            <a href="mailto:vikas.saroj@example.com"
                class="bg-[#6200EE] text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-[#7b1fa2] transition-colors duration-300 inline-block transform hover:scale-105"
                data-lang-key="contactButton">Email Me</a>
            <div class="flex justify-center space-x-6 mt-8">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="GitHub">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.477 2 12.013c0 4.418 2.865 8.167 6.839 9.492.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.03-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12.013C22 6.477 17.523 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Twitter">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"
                    aria-label="LinkedIn">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.206v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.225-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.47 1.763h2.94v8.59H3.535v-8.59zM17.638 2H6.362A4.362 4.362 0 002 6.362v11.276A4.362 4.362 0 006.362 22h11.276A4.362 4.362 0 0022 17.638V6.362A4.362 4.362 0 0017.638 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </section> -->
    </main>

    <footer class="border-t border-gray-800 py-6">
        <div class="container mx-auto px-6 text-center text-gray-500">
            <p>&copy; <span id="year"></span> <span data-lang-key="footerName">Vikas Saroj</span>. <span
                    data-lang-key="footerRights">All Rights Reserved</span>.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Configuration & State ---
            const projects = [{
                project_name: "Catigo",
                image: "Catigo.webp",
                dis: 'Develop a comprehensive app with features for user authentication, event management, and administrative controls, aimed at improving user engagement and event discovery.',
                links: [{
                    type: 'play_store',
                    url: 'https://play.google.com/store/apps/details?id=com.catigo'
                }, {
                    type: 'website',
                    url: 'https://www.catigo.com'
                }]
            }, {
                project_name: "SuSu App",
                image: "Susu.webp",
                dis: "Susu App modernizes the traditional 'sou sou' savings practice, allowing users to easily create, manage, and track collective wealth-building activities with friends and family.",
                links: [{
                    type: 'app_store',
                    url: 'https://apps.apple.com/us/app/susu-app/id1234567890'
                }]
            }, {
                project_name: "Course Catalogue",
                image: "Course_Catalogue.webp",
                dis: 'A streamlined platform that integrates admin control and user interaction for course management, competency tracking, and dynamic roadmaps, enhancing efficiency and user engagement.',
                links: [{
                    type: 'website',
                    url: 'https://course-catalogue-demo.com'
                }]
            }, {
                project_name: "FBY",
                image: "FBY.webp",
                dis: 'The FBY Team App simplifies shift management, time-off requests, and time tracking for FBY Security Services, boosting efficiency with mobile self-scheduling and management.',
                links: [] // No links for this project
            }, ];

            // --- Language Translations ---
            const translations = {
                en: {
                    navAbout: 'About',
                    navSkills: 'Skills',
                    navProjects: 'Projects',
                    navBlog: 'Blog',
                    navContact: 'Contact',
                    heroTitle: 'Vikas Saroj',
                    heroBio: 'A passionate **Laravel Developer** with 3 years of experience in building **robust and scalable web applications**. I specialize in crafting efficient backend solutions and seamless user experiences.',
                    heroButton: 'View My Work',
                    skillsTitle: 'My Skills',
                    projectsTitle: 'My Projects',
                    blogTitle: 'My Blog',
                    blogComingSoon: 'New posts coming soon! Stay tuned for insights on web development, Laravel, and more.',
                    contactTitle: 'Get In Touch',
                    contactText: "I'm currently available for freelance work and open to new opportunities. If you have a project in mind or just want to say hello, feel free to reach out.",
                    contactButton: 'Email Me',
                    footerName: 'Vikas Saroj',
                    footerRights: 'All Rights Reserved',
                    appStore: 'App Store',
                    playStore: 'Play Store',
                    website: 'Website'
                },
                hi: {
                    navAbout: 'परिचय',
                    navSkills: 'कौशल',
                    navProjects: 'परियोजनाएं',
                    navBlog: 'ब्लॉग',
                    navContact: 'संपर्क करें',
                    heroTitle: 'विकास सरोज',
                    heroBio: 'एक भावुक **लारवेल डेवलपर**, जिनके पास मजबूत और स्केलेबल **वेब एप्लिकेशन** बनाने का 3 साल का अनुभव है। मैं कुशल बैकएंड समाधान और सहज उपयोगकर्ता अनुभव बनाने में माहिर हूं।',
                    heroButton: 'मेरा काम देखें',
                    skillsTitle: 'मेरे कौशल',
                    projectsTitle: 'मेरी परियोजनाएं',
                    blogTitle: 'मेरा ब्लॉग',
                    blogComingSoon: 'नई पोस्ट जल्द ही आ रही हैं! वेब विकास, लारवेल और बहुत कुछ पर अंतर्दृष्टि के लिए बने रहें।',
                    contactTitle: 'संपर्क करें',
                    contactText: 'मैं वर्तमान में फ्रीलांस काम के लिए उपलब्ध हूं और नए अवसरों के लिए खुला हूं। यदि आपके पास कोई परियोजना है या आप नमस्ते कहना चाहते हैं, तो बेझिझक संपर्क करें।',
                    contactButton: 'मुझे ईमेल करें',
                    footerName: 'विकास सरोज',
                    footerRights: 'सभी अधिकार सुरक्षित',
                    appStore: 'ऐप स्टोर',
                    playStore: 'प्ले स्टोर',
                    website: 'वेबसाइट'
                },
                gu: {
                    navAbout: 'પરિચય',
                    navSkills: 'કુશળતા',
                    navProjects: 'પ્રોજેક્ટ્સ',
                    navBlog: 'બ્લોગ',
                    navContact: 'સંપર્ક કરો',
                    heroTitle: 'વિકાસ સરોજ',
                    heroBio: 'એક ઉત્સાહી **લારાવેલ ડેવલપર**, જેમની પાસે મજબૂત અને સ્કેલેબલ **વેબ એપ્લિકેશન્સ** બનાવવાનો 3 વર્ષનો અનુભવ છે. હું કાર્યક્ષમ બેકએન્ડ સોલ્યુશન્સ અને સીમલેસ યુઝર અનુભવો બનાવવામાં નિષ્ણાત છું.',
                    heroButton: 'મારું કામ જુઓ',
                    skillsTitle: 'મારી કુશળતા',
                    projectsTitle: 'મારા પ્રોજેક્ટ્સ',
                    blogTitle: 'મારો બ્લોગ',
                    blogComingSoon: 'નવી પોસ્ટ્સ ટૂંક સમયમાં આવી રહી છે! વેબ ડેવલપમેન્ટ, લારાવેલ અને વધુ પર આંતરદૃષ્ટિ માટે જોડાયેલા રહો.',
                    contactTitle: 'સંપર્કમાં રહો',
                    contactText: 'હું હાલમાં ફ્રીલાન્સ કામ માટે ઉપલબ્ધ છું અને નવી તકો માટે ખુલ્લો છું. જો તમારા મનમાં કોઈ પ્રોજેક્ટ હોય અથવા ફક્ત હાય કહેવા માંગતા હો, તો નિઃસંકોચ સંપર્ક કરો.',
                    contactButton: 'મને ઇમેઇલ કરો',
                    footerName: 'વિકાસ સરોજ',
                    footerRights: 'બધા હકો સુરક્ષિત',
                    appStore: 'એપ સ્ટોર',
                    playStore: 'પ્લે સ્ટોર',
                    website: 'વેબસાઇટ'
                }
            };

            // --- Element References ---
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
            const yearSpan = document.getElementById('year');
            const projectGrid = document.getElementById('project-grid');
            const languageSwitcher = document.getElementById('language-switcher');
            const mobileLanguageSwitcher = document.getElementById('mobile-language-switcher');


            // --- Language Switching Logic ---
            const setLanguage = (lang) => {
                document.querySelectorAll('[data-lang-key]').forEach(element => {
                    const key = element.getAttribute('data-lang-key');
                    if (translations[lang] && translations[lang][key]) {
                        // Special handling for heroBio if it contains markdown (like **bold**)
                        if (key === 'heroBio') {
                            element.innerHTML = translations[lang][key].replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
                        } else {
                            element.textContent = translations[lang][key];
                        }
                    }
                });

                // Update project card link texts as they are dynamic
                populateProjects(); // Re-render projects to ensure link text updates

                // Set selected option in both dropdowns
                languageSwitcher.value = lang;
                mobileLanguageSwitcher.value = lang;

                // Save preference
                localStorage.setItem('lang', lang);
            };

            // --- Project Card Generation Logic ---
            const populateProjects = () => {
                projectGrid.innerHTML = ''; // Clear existing projects
                const currentLang = localStorage.getItem('lang') || 'en'; // Get current language

                projects.forEach(project => {
                    const card = document.createElement('div');
                    card.className = 'card-bg rounded-lg shadow-lg overflow-hidden flex flex-col';

                    // Make sure your images/thumbnail folder exists in your project
                    const imageUrl = `images/thumbnail/${project.image}`;

                    let linksHtml = '';
                    if (project.links && project.links.length > 0) {
                        linksHtml = '<div class="mt-4 flex gap-3 flex-wrap">'; // Added flex-wrap for responsiveness
                        project.links.forEach(link => {
                            let iconClass = '';
                            let linkTextKey = ''; // Key for translation
                            if (link.type === 'app_store') {
                                iconClass = 'fab fa-apple';
                                linkTextKey = 'appStore';
                            } else if (link.type === 'play_store') {
                                iconClass = 'fab fa-google-play';
                                linkTextKey = 'playStore';
                            } else if (link.type === 'website') {
                                iconClass = 'fas fa-globe';
                                linkTextKey = 'website';
                            }

                            // Use the current language to get the link text
                            const translatedLinkText = translations[currentLang][linkTextKey] || linkTextKey;

                            linksHtml += `
                                <a href="${link.url}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center px-4 py-2 bg-[#6200EE] text-white text-sm font-medium rounded-md hover:bg-[#7b1fa2] transition-colors duration-300">
                                    <i class="${iconClass} mr-2"></i> ${translatedLinkText}
                                </a>
                            `;
                        });
                        linksHtml += '</div>';
                    }

                    card.innerHTML = `
                        <img src="${imageUrl}" alt="Image for ${project.project_name}" class="project-image">
                        <div class="p-6 card-content">
                            <div class="card-text">
                                <h3 class="text-2xl font-bold mb-2 text-white">${project.project_name}</h3>
                                <p class="text-gray-400 min-h-[70px]">${project.dis}</p>
                            </div>
                            ${linksHtml}
                        </div>
                    `;
                    projectGrid.appendChild(card);
                });
            };

            // --- Initial Setup ---
            const initializePage = () => {
                // Mobile menu toggle
                mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
                });

                // Set current year in footer
                yearSpan.textContent = new Date().getFullYear();

                // Language switcher event listeners
                languageSwitcher.addEventListener('change', (event) => setLanguage(event.target.value));
                mobileLanguageSwitcher.addEventListener('change', (event) => setLanguage(event.target.value));

                // Load saved language or default to English and apply
                const savedLang = localStorage.getItem('lang') || 'en';
                setLanguage(savedLang); // This will also call populateProjects internally
            };

            initializePage();
        });
    </script>
</body>

</html>