<?php
class ResumeGenerator {
    private $fullResume = <<<EOD
Dev Varshney
Hathras | +91.9411041558 | dev05vars@outlook.com

EDUCATION
- Bachelor of Technology in Computer Science
  GLA University, Mathura
  CGPA - 7.3 (1st Year), Expected Graduation: June 2027

- Intermediate, BLS International School, Hathras
  Percentage - 80% (May 2023)

- High School, BLS International School, Hathras
  Percentage - 85% (May 2021)

INTERNSHIP EXPERIENCE
National Physical Laboratory – CSIR, Delhi (June 2024 – Aug 2024)
Cloud and Arduino Intern
- Developed Android Application for Magnetic Field Measurement via Bluetooth using Arduino
- Participated in requirement gathering and prototype building process

PROJECTS
- PG Search Application
- AI Chatbot hosted on Cloud Server
- Android Application with Arduino Hardware
- File System similar to Google Drive
- Automated Artificial Attendance System

SKILLS
Technical Skills:
- JavaScript
- PHP
- Bash
- MySQL
- Python
- Cloud Computing

Professional Skills:
- Effective Communication
- Team Work
- Interpersonal Skills

ACHIEVEMENTS
- Certified in Machine Learning by Stanford
- Attended Python Programming and Backend Development Workshop
- 2 Years Experience in Cloud Computing
- Server Management Services Freelancing

CO-CURRICULAR ACTIVITIES
- Coordinated SRIJAN (Cultural Fest, GLA, September 2022)
- Participated in MAITREE (Sports Fest, GLA, October 2022)
- Table Tennis District Level Gold Medalist
EOD;

    public function generateTypingEffect() {
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Resume Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes blink {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }
        .cursor::after {
            content: '|';
            animation: blink 0.7s infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-gray-900 to-black min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-6 max-w-4xl">
        <div class="bg-black bg-opacity-70 p-6 rounded-lg text-green-400 font-mono">
            <div id="resume-content" class="h-[600px] overflow-auto"></div>
            <div id="cursor" class="cursor text-green-400"></div>
        </div>
        <button onclick="startTyping()" class="mt-4 bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700">
            Generate AI Resume
        </button>
    </div>

    <script>
    function startTyping() {
        const content = `<?php echo addslashes($this->fullResume); ?>`;
        const resumeElement = document.getElementById('resume-content');
        const cursorElement = document.getElementById('cursor');
        let index = 0;

        resumeElement.innerHTML = '';
        
        function typeWriter() {
            if (index < content.length) {
                resumeElement.innerHTML += content.charAt(index);
                index++;
                setTimeout(typeWriter, 30);
            } else {
                cursorElement.style.display = 'none';
            }
        }

        typeWriter();
    }
    </script>
</body>
</html>
        <?php
    }
}

// Usage
$generator = new ResumeGenerator();
$generator->generateTypingEffect();
?>