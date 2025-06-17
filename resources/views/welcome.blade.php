<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vikas Saroj - Laravel Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000000;
            color: #FFFFFF;
        }
        .hero-bg {
            background-color: #0a0a0a;
        }
        .card-bg {
             background-color: #111111;
             display: flex;
             flex-direction: column;
             transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-bg:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.05);
        }
        .section-title {
            border-bottom: 2px solid #333;
            padding-bottom: 0.5rem;
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
            background-color: #FFFFFF;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .spinner {
            border: 2px solid #333;
            border-top: 2px solid #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .card-text {
            flex-grow: 1;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header -->
    <header class="bg-black/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold tracking-wider">Vikas Saroj</a>
            <nav class="hidden md:flex space-x-8">
                <a href="#about" class="nav-link text-lg">About</a>
                <a href="#projects" class="nav-link text-lg">Projects</a>
                <a href="#contact" class="nav-link text-lg">Contact</a>
            </nav>
            <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#about" class="block py-2 px-6 text-center hover:bg-gray-900">About</a>
            <a href="#projects" class="block py-2 px-6 text-center hover:bg-gray-900">Projects</a>
            <a href="#contact" class="block py-2 px-6 text-center hover:bg-gray-900">Contact</a>
        </div>
    </header>

    <main class="container mx-auto px-6 pt-24">
        <!-- Hero Section -->
        <section id="about" class="hero-bg rounded-lg py-16 md:py-24 text-center my-16">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">Vikas Saroj</h1>
            <p id="bio-text" class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto min-h-[100px] transition-opacity duration-500">
                A passionate Laravel Developer with 3 years of experience in building robust and scalable web applications.
            </p>
            <div class="mt-6">
                <p class="text-sm text-gray-400 mb-2">✨ See my bio from a different perspective:</p>
                <div class="flex justify-center flex-wrap gap-2">
                    <button class="bio-btn bg-gray-700/50 hover:bg-gray-600/50 px-3 py-1 rounded-md text-sm" data-perspective="a recruiter">For Recruiters</button>
                    <button class="bio-btn bg-gray-700/50 hover:bg-gray-600/50 px-3 py-1 rounded-md text-sm" data-perspective="a project manager">For PMs</button>
                    <button class="bio-btn bg-gray-700/50 hover:bg-gray-600/50 px-3 py-1 rounded-md text-sm" data-perspective="a fellow developer">For Devs</button>
                    <button id="reset-bio" class="bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-md text-sm">Reset</button>
                </div>
            </div>
            <a href="#projects" class="mt-8 inline-block bg-white text-black font-bold py-3 px-8 rounded-lg text-lg hover:bg-gray-200 transition-colors duration-300">View My Work</a>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="my-24">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center section-title inline-block">My Projects</h2>
            <div id="project-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project cards will be dynamically inserted here -->
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="my-24 text-center">
             <h2 class="text-3xl md:text-4xl font-bold mb-8 section-title inline-block">Get In Touch</h2>
             <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">I'm currently available for freelance work and open to new opportunities. If you have a project in mind or just want to say hello, feel free to reach out.</p>
             <a href="mailto:vikas.saroj@example.com" class="bg-white text-black font-bold py-3 px-8 rounded-lg text-lg hover:bg-gray-200 transition-colors duration-300 inline-block">Email Me</a>
             <div class="flex justify-center space-x-6 mt-8">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12.013c0 4.418 2.865 8.167 6.839 9.492.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.03-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12.013C22 6.477 17.523 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.206v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.225-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.47 1.763h2.94v8.59H3.535v-8.59zM17.638 2H6.362A4.362 4.362 0 002 6.362v11.276A4.362 4.362 0 006.362 22h11.276A4.362 4.362 0 0022 17.638V6.362A4.362 4.362 0 0017.638 2z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-6">
        <div class="container mx-auto px-6 text-center text-gray-500">
            <p>&copy; <span id="year"></span> Vikas Saroj. All Rights Reserved.</p>
        </div>
    </footer>
    
    <!-- Modal for Project Description Keywords -->
    <div id="keyword-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <div class="card-bg p-8 rounded-lg max-w-sm w-full mx-4">
            <h3 class="text-xl font-bold mb-4">✨ Generate Project Description</h3>
            <p class="text-gray-400 mb-4">Enter some keywords or technologies for <strong id="modal-project-name"></strong> to get a better description.</p>
            <input id="keywords-input" type="text" placeholder="e.g., REST API, Vue.js, Stripe" class="w-full bg-gray-800 border border-gray-700 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-white/50">
            <div class="flex justify-end gap-4">
                <button id="cancel-modal" class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-md">Cancel</button>
                <button id="submit-keywords" class="bg-white text-black font-bold px-4 py-2 rounded-md flex items-center gap-2">
                    Generate
                    <span id="modal-spinner" class="spinner hidden"></span>
                </button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Configuration & State ---
            const GEMINI_API_KEY = ""; // Provided by the environment
            const originalBio = "A passionate Laravel Developer with 3 years of experience in building robust and scalable web applications.";
            const projects = [
                "Wenue", "Catigo", "Susu", "Goomooz", "Course Catalogue",
                "FBY", "Meet-Mead Way", "Real 60 App"
            ];
            
            // --- Element References ---
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
            const yearSpan = document.getElementById('year');
            const bioText = document.getElementById('bio-text');
            const bioButtons = document.querySelectorAll('.bio-btn');
            const resetBioButton = document.getElementById('reset-bio');
            const projectGrid = document.getElementById('project-grid');
            
            // Modal elements
            const keywordModal = document.getElementById('keyword-modal');
            const modalProjectName = document.getElementById('modal-project-name');
            const keywordsInput = document.getElementById('keywords-input');
            const cancelModalButton = document.getElementById('cancel-modal');
            const submitKeywordsButton = document.getElementById('submit-keywords');
            const modalSpinner = document.getElementById('modal-spinner');
            let currentProjectCard = null;

            // --- Gemini API Call Function ---
            async function callGemini(prompt) {
                const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${GEMINI_API_KEY}`;
                
                try {
                    const response = await fetch(apiUrl, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ contents: [{ parts: [{ text: prompt }] }] })
                    });
                    
                    if (!response.ok) {
                        throw new Error(`API Error: ${response.statusText}`);
                    }

                    const result = await response.json();
                    
                    if (result.candidates && result.candidates.length > 0) {
                        return result.candidates[0].content.parts[0].text;
                    }
                    return "Sorry, I couldn't generate a response. Please try again.";
                } catch (error) {
                    console.error("Gemini API call failed:", error);
                    return "An error occurred while contacting the AI. Check the console for details.";
                }
            }

            // --- Bio Rewriter Logic ---
            const handleBioRewrite = async (perspective) => {
                bioText.style.opacity = '0.5';
                const prompt = `Rewrite the following bio for a Laravel developer from the perspective of ${perspective}. Make it professional, engaging, and about 2-3 sentences long. Bio: "${originalBio}"`;
                const newBio = await callGemini(prompt);
                bioText.textContent = newBio;
                bioText.style.opacity = '1';
            };

            bioButtons.forEach(button => {
                button.addEventListener('click', () => handleBioRewrite(button.dataset.perspective));
            });

            resetBioButton.addEventListener('click', () => {
                bioText.textContent = originalBio;
            });
            
            // --- Project Card Generation Logic ---
            const populateProjects = () => {
                projectGrid.innerHTML = '';
                projects.forEach(projectName => {
                    const card = document.createElement('div');
                    card.className = 'card-bg rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform duration-300';
                    const placeholderImageUrl = `https://placehold.co/600x400/111111/FFFFFF?text=${encodeURIComponent(projectName)}`;

                    card.innerHTML = `
                        <img src="${placeholderImageUrl}" alt="Placeholder image for ${projectName}" class="w-full h-48 object-cover">
                        <div class="p-6 card-content">
                            <div class="card-text">
                                <h3 class="text-2xl font-bold mb-2">${projectName}</h3>
                                <p class="text-gray-400 min-h-[70px]">A brief description of the ${projectName} project and my role in it. Highlight key technologies and achievements.</p>
                            </div>
                            <button class="generate-desc-btn mt-4 bg-gray-700/80 hover:bg-gray-600/80 px-4 py-2 rounded-md text-sm self-start flex items-center gap-2">
                               ✨ Generate Description <span class="spinner hidden"></span>
                            </button>
                        </div>
                    `;
                    projectGrid.appendChild(card);
                });
            };


            // --- Project Description Modal & Generation Logic ---
            projectGrid.addEventListener('click', (e) => {
                 // Use .closest() to handle clicks on the button or its children (like the spinner)
                const button = e.target.closest('.generate-desc-btn');
                if (button) {
                    currentProjectCard = button.closest('.card-bg');
                    const projectName = currentProjectCard.querySelector('h3').textContent;
                    modalProjectName.textContent = projectName;
                    keywordModal.classList.remove('hidden');
                    keywordsInput.focus();
                }
            });

            const closeKeywordModal = () => {
                keywordModal.classList.add('hidden');
                keywordsInput.value = '';
                currentProjectCard = null;
                 modalSpinner.classList.add('hidden');
            };
            
            cancelModalButton.addEventListener('click', closeKeywordModal);

            submitKeywordsButton.addEventListener('click', async () => {
                if (!currentProjectCard) return;

                const projectName = modalProjectName.textContent;
                const keywords = keywordsInput.value;
                const descriptionPara = currentProjectCard.querySelector('p');
                const button = currentProjectCard.querySelector('.generate-desc-btn');
                const spinner = button.querySelector('.spinner');

                // Show loading state
                button.disabled = true;
                modalSpinner.classList.remove('hidden');
                submitKeywordsButton.disabled = true;

                // Generate prompt
                let prompt = `I am a Laravel developer with 3 years of experience. Generate a professional, 2-3 sentence project description for my portfolio. The project is called "${projectName}".`;
                if (keywords) {
                    prompt += ` Key technologies and features to mention include: ${keywords}.`;
                }
                prompt += ` Highlight my skills and potential achievements on such a project.`;
                
                // Call API and update UI
                const newDescription = await callGemini(prompt);
                descriptionPara.textContent = newDescription;
                
                // Hide loading state and close modal
                button.disabled = false;
                submitKeywordsButton.disabled = false;
                closeKeywordModal();
            });

            // --- Initial Setup ---
            const initializePage = () => {
                mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
                });
                yearSpan.textContent = new Date().getFullYear();
                populateProjects();
            };

            initializePage();
        });
    </script>
</body>
</html>