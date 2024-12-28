<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dev's Profile</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      body {
        font-family: JetBrains Mono, JetBrains Mono - 500;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
      }

      nav {
        background-color: #0077b6;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
      }

      .nav-logo img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
      }

      .nav-menu {
        display: flex;
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .link-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
      }

      .link-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .link {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 80%;
        max-width: 400px;
        background-color: transparent;
        color: #0077b6;
        text-decoration: none;
        padding: 16px;
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .link:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        opacity: 0.1;
        z-index: -1;
      }

      .link:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .link-icon {
        width: 30px;
        height: 30px;
        margin-right: 8px;
      }

      .link-arrow {
        width: 16px;
        height: 16px;
        margin-left: 8px;
        color: #0077b6;
        transition: transform 0.3s ease;
      }

      .link:active .link-arrow {
        transform: translateX(40px);
      }

      .button-container {
        display: flex;
        justify-content: center;
        margin-top: 24px;
      }

      .button {
        display: block;
        width: 80px;
        height: 80px;
        background-color: transparent;
        color: #0077b6;
        border: none;
        border-radius: 50%;
        padding: 0;
        margin: 0 12px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .button:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        opacity: 0.1;
        z-index: -1;
      }

      .button:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-4px);
      }

      .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #0077b6;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 8px;
        width: 60px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 1s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      }

      .openbtn:hover {
        background-color: #00b4d8;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
      }

      .contact-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
      }

      .contact-box {
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        color: #fff;
        padding: 32px;
        border-radius: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .contact-box h2 {
        margin-top: 0;
        font-size: 24px;
      }

      .contact-box p {
        margin-bottom: 24px;
      }

      .contact-box a {
        display: inline-block;
        background-color: #fff;
        color: #0077b6;
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
      }

      .contact-box a:hover {
        background-color: #00b4d8;
        color: #fff;
      }

      .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
      }

      .popup-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 40px 20px;
        border: none;
        border-radius: 20px;
        width: 75%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        position: relative;
      }

      .close-button {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #888;
        background-color: #f1f1f1;
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        cursor: pointer;
        transition: color 0.3s ease, background-color 0.3s ease;
      }

      .close-button:hover,
      .close-button:focus {
        color: #333;
        background-color: #e0e0e0;
      }

      .popup-link {
        display: block;
        text-align: center;
        text-decoration: none;
        color: #0077b6;
        font-size: 18px;
        padding: 10px 0;
        transition: color 0.3s ease;
      }

      .popup-link:hover {
        color: #00b4d8;
      }

      .instagram-icon {
        font-size: 48px;
        color: #0077b6;
        margin-bottom: 20px;
        transition: color 0.3s ease;
      }

      .instagram-icon:hover {
        color: #00b4d8;
      }
      .instagram-icon {
        font-size: 48px;
        margin-bottom: 20px;
        animation: colorChange 3s infinite linear;
      }
      @keyframes colorChange {
        0% {
          color: #e1306c;
        }
        25% {
          color: #fd1d1d;
        }
        50% {
          color: #f77737;
        }
        75% {
          color: #c13584;
        }
        100% {
          color: #e1306c;
        }
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="nav-logo">
        <img src="assets/images/Dev-1.jpg" alt="Profile Image" />
      </div>
      <button class="openbtn" onclick="togglePopup()">&#9776;</button>

      <div id="popup" class="popup">
        <div class="popup-content">
          <div class="close-button" onclick="closePopup()">&times;</div>
          <a href="https://portfolio.devai.in/resume" class="popup-link"
            >Resume</a
          >
        </div>
      </div>
    </nav>

    <main>
      <div class="link-container">
        <i class="fab fa-instagram instagram-icon"></i>
        <a href="https://www.linkedin.com/in/webydev" class="link">
          <img
            src="assets/images/icons8-linkedin-48.png"
            alt="LinkedIn"
            class="link-icon"
          />
          LinkedIn
          <i class="fas fa-arrow-right link-arrow"></i>
        </a>
        <a href="https://github.com/weby-dev" class="link">
          <img
            src="assets/images/icons8-github-60.png"
            alt="Website"
            class="link-icon"
          />
          GitHub
          <i class="fas fa-arrow-right link-arrow"></i>
        </a>
        <a href="https://portfolio.devai.in/resume" class="link">
          <img
            src="assets/images/icons8-resume-100.png"
            alt="Resume"
            class="link-icon"
          />
          Resume
          <i class="fas fa-arrow-right link-arrow"></i>
        </a>
        <a href="https://portfolio.devai.in/project" class="link">
          <img
            src="assets/images/icons8-project-96.png"
            alt="Project"
            class="link-icon"
          />
          Projects
          <i class="fas fa-arrow-right link-arrow"></i>
        </a>
        <a href="https://portfolio.devai.in/certificate" class="link">
          <img
            src="assets/images/icons8-certificate.svg"
            alt="Certificate"
            class="link-icon"
          />
          Certificate
          <i class="fas fa-arrow-right link-arrow"></i>
        </a>
      </div>

      <div class="contact-container">
        <div class="contact-box">
          <h2>Contact Us</h2>
          <p>Get in touch for more information.</p>
          <a href="mailto:info@devai.in">Send Message</a>
        </div>
      </div>
    </main>

    <script>
      let popupVisible = false;

      function togglePopup() {
        const popup = document.getElementById("popup");
        if (!popupVisible) {
          popup.style.display = "block";
        } else {
          popup.style.display = "none";
        }
        popupVisible = !popupVisible;
      }

      function closePopup() {
        const popup = document.getElementById("popup");
        popup.style.display = "none";
        popupVisible = false;
      }
    </script>
  </body>
</html>