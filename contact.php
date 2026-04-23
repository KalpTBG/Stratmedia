<!doctype html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="title"
      content="Stratmedia – Creative Marketing That Drives Real Momentum"
    />
    <meta
      name="description"
      content="Stratmedia builds strategic marketing campaigns designed to generate real momentum, not just impressions. We create impactful creative and performance-driven media strategies for modern brands."
    />
    <meta
      name="keywords"
      content="Stratmedia, digital marketing agency, creative marketing, brand growth, performance marketing, strategic campaigns, media strategy"
    />
    <meta name="author" content="Stratmedia" />
    <meta name="robots" content="index, follow" />

    <meta
      property="og:title"
      content="Stratmedia – Marketing Built for Real Momentum"
    />
    <meta
      property="og:description"
      content="At Stratmedia, every campaign is designed to generate momentum, not vanity metrics. Strategic creative and performance marketing for ambitious brands."
    />
    <meta property="og:type" content="website" />
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" href="/src/output.css" /> -->
    <link rel="stylesheet" href="/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/png" href="/src/assets/favicon.png" />
    <!-- <link rel="stylesheet" href="/style.css" /> -->
    <script defer src="/app.js"></script>
    <!-- <script src="https://cdn.emailjs.com/dist/email.min.js"></script> -->
    <style>
      * {
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
      }
      body {
        background-color: #04070d;
        /* width:100vw; */
        /* height:100vh */
      }
      .contactSection {
        gap: 10px;
        padding: 5px 10px 5px 10px;
        font-size: 12px;
        border-radius: 20px;
        border-color: #16191b;
      }

      .Contactbox {
        background: linear-gradient(to right, #10131c, #13171d, #12151c);
        padding: 4px;
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
      }
      .Contactpara {
        color: #a6acb6;
        text-align: center;
      }
      .ContactLink {
        color: #aeb3bd;
        text-decoration: underline;
      }

      .form-container {
        background: #1a1f25;
        padding: 30px;
        border-radius: 10px;
        width: 100%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      }

      .form-container h2 {
        text-align: center;
        color: #d5dbe6;
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 6px;
        color: #d5dbe6;
        font-size: 14px;
      }

      input,
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #191e26;
        border-radius: 6px;
        background: #111418;
        color: #fff;
        font-size: 14px;
      }

      input:focus,
      textarea:focus {
        border-color: #4a90e2;
        outline: none;
      }

      textarea {
        resize: vertical;
        min-height: 100px;
      }

      .submit-btn {
        width: 100%;
        background: #4a90e2;
        border: none;
        padding: 12px;
        border-radius: 6px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
      }

      .submit-btn:hover {
        background: #357ab8;
      }
      /* .faq {
        background: linear-gradient(#06090f, #0c1016);
      } */
      .faqBox {
        background: linear-gradient(to right, #0c1016, #04070d, #04070d);
        border-radius: 6px;
        margin-top: 10px;
        padding: 10px 20px 10px 20px;
      }

      /* .questions {
        width: 45%;
      } */
      .answerColor {
        color: #7e828c;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition:
          max-height 0.4s ease,
          opacity 0.4s ease;
      }

      .faqBox.open .answerColor {
        max-height: 500px;
        opacity: 1;
      }

      .faqBox svg {
        transition: transform 0.2s ease;
      }

      .faqBox.open svg {
        transform: rotate(180deg);
      }

      .faqBox > .faqHeader {
        cursor: pointer;
        user-select: none;
      }

      .topGap {
        margin-top: 90px;
      }
      #business {
        width: 50%;
        padding: 8px;
        font-size: 16px;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
      }

      /* Placeholder style */
      #business::placeholder {
        color: #888; /* text color */
        font-style: italic; /* italic text */
        opacity: 1; /* ensure visibility in all browsers */
      }
    </style>
  </head>
  <body class="flex-1 h-full flex-col bg-[#07090a]">
    <div class="navbar">
      <div class="navbar-container">
        <!-- Logo -->
        <div class="logo">
          <a href="/index.html">
            <img
              src="/src/assets/Startmedia Vector-02.svg"
              alt="logo"
              style="height: 30px"
            />
          </a>
        </div>

        <!-- Hamburger -->
        <button class="navbar-toggle" id="menu-btn">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>

        <!-- Links -->
        <div class="navbar-links" id="menu">
          <ul>
            <li><a href="/index.html">Process</a></li>
            <li><a href="/index.html">Services</a></li>
            <!-- <li><a href="/contact.php">Contact</a></li> -->
            <li><a href="/contact.html">Contact</a></li>
            <!-- <li><a href="/blogs.html">Blog</a></li> -->
          </ul>
        </div>

        <!-- CTA Button -->
        <div class="navbar-cta" id="menu-btn2">
          <a href="#">Work with US</a>
          <div class="icon">
            <!-- your SVG -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 256 256"
              focusable="false"
              color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
              style="
                user-select: none;
                width: 20px;
                height: 20px;
                display: inline-block;
                fill: var(
                  --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                  rgb(255, 255, 255)
                );
                color: var(
                  --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                  rgb(255, 255, 255)
                );
                flex-shrink: 0;
              "
            >
              <g
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                weight="regular"
              >
                <path
                  d="M223.85,47.12a16,16,0,0,0-15-15c-12.58-.75-44.73.4-71.41,27.07L132.69,64H74.36A15.91,15.91,0,0,0,63,68.68L28.7,103a16,16,0,0,0,9.07,27.16l38.47,5.37,44.21,44.21,5.37,38.49a15.94,15.94,0,0,0,10.78,12.92,16.11,16.11,0,0,0,5.1.83A15.91,15.91,0,0,0,153,227.3L187.32,193A15.91,15.91,0,0,0,192,181.64V123.31l4.77-4.77C223.45,91.86,224.6,59.71,223.85,47.12ZM74.36,80h42.33L77.16,119.52,40,114.34Zm74.41-9.45a76.65,76.65,0,0,1,59.11-22.47,76.46,76.46,0,0,1-22.42,59.16L128,164.68,91.32,128ZM176,181.64,141.67,216l-5.19-37.17L176,139.31Zm-74.16,9.5C97.34,201,82.29,224,40,224a8,8,0,0,1-8-8c0-42.29,23-57.34,32.86-61.85a8,8,0,0,1,6.64,14.56c-6.43,2.93-20.62,12.36-23.12,38.91,26.55-2.5,36-16.69,38.91-23.12a8,8,0,1,1,14.56,6.64Z"
                ></path>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div
      class="flex flex-col items-center justify-center bg-[#07090a]"
      style="margin-top: 70px; gap: 20px"
    >
      <div class="flex flex-row items-center contactSection">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 256 256"
          focusable="false"
          color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
          style="
            user-select: none;
            width: 20px;
            height: 20px;
            display: inline-block;
            fill: var(
              --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
              rgb(213, 219, 230)
            );
            color: var(
              --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
              rgb(213, 219, 230)
            );
            flex-shrink: 0;
          "
        >
          <g
            color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
            weight="fill"
          >
            <path
              d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z"
            ></path>
          </g>
        </svg>
        <p class="text-white">CONTACT</p>
      </div>
      <p class="text-5xl text-white ContactRespPara">
        Contact <span class="italic" style="color: #fcaf17">Us</span>
      </p>
      <p class="text-white ContactRespPara">
        Have questions or need help? We’re here for you
      </p>
    </div>

    <div
      class="flex flex-row justify-center contactFormSection"
      style="gap: 30px; margin-top: 60px"
    >
      <div class="flex flex-col TwoBox">
        <div class="ContactEmailUs">
          <div class="flex flex-row items-center" style="gap: 20px">
            <div class="Contactbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                style="
                  user-select: none;
                  width: 32px;
                  height: 32px;
                  display: inline-block;
                  fill: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  color: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                  weight="regular"
                >
                  <path
                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="text-2xl text-white">Email Us</p>
          </div>

          <a href="" class="ContactLink">info@stratmedia.co</a>
        </div>
        <div class="ContactEmailUs" style="margin-top: 40px">
          <div class="flex flex-row items-center" style="gap: 20px">
            <div class="Contactbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                style="
                  user-select: none;
                  width: 32px;
                  height: 32px;
                  display: inline-block;
                  fill: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  color: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                  weight="regular"
                >
                  <path
                    d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="text-2xl text-white">Address</p>
          </div>
          <p class="Contactpara">
            <a
              href="https://www.google.com/maps?q=100+E+Big+Beaver+Rd+Troy,+MI+48083"
              target="_blank"
              rel="noopener noreferrer"
              style="text-decoration: none; color: inherit"
            >
              100 E Big Beaver Rd Troy, MI 48083
            </a>
          </p>
        </div>
      </div>
      <div class="ContactForm">
        <div class="Contactbox">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 256 256"
            focusable="false"
            color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
            style="
              user-select: none;
              width: 32px;
              height: 32px;
              display: inline-block;
              fill: var(
                --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                rgb(213, 219, 230)
              );
              color: var(
                --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                rgb(213, 219, 230)
              );
              flex-shrink: 0;
            "
          >
            <g
              color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
              weight="regular"
            >
              <path
                d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"
              ></path>
            </g>
          </svg>
        </div>
        <p class="text-white text-center font-semibold text-[20px]">
          We’d love to help! Let us know how
        </p>
        <form
          id="contactForm"
          action="send.php"
          method="POST"
          style="width: 90%"
        >
        <form
          id="contactForm"
          action="send.php"
          method="POST"
          style="width: 90%"
        >
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required />

          <label for="business">Type of Business</label>
          <input
            type="text"
            id="business"
            name="business"
            required
            style="width: 50%"
            placeholder="Eg: Real Estate"
          />

          <label for="services">What are you interested in?</label>
          <select
            id="services"
            name="services"
            required
            style="
              width: 100%;
              padding: 8px;
              font-size: 16px;
              border-radius: 4px;
              border: 1px solid #191e26;
              background-color: #111418;
              margin-bottom: 30px;
              color: #fff;
            "
          >
            <option value="" disabled selected style="color: #fff">
              Select an option
            </option>
            <option value="content_creation" style="color: #fff">
              Content Creation (Photo/Video)
            </option>
            <option value="paid_ads" style="color: #fff">
              Paid Ads & Growth Systems
            </option>
            <option value="ai_automation" style="color: #fff">
              AI & Automation Setup
            </option>
            <option value="website_funnel" style="color: #fff">
              Website / Funnel Build
            </option>
            <option value="consultation" style="color: #fff">
              Consultation or Partnership Inquiry
            </option>
            <option value="others" style="color: #fff">Others</option>
          </select>

          <div class="flex items-center justify-center">
            <button
              type="submit"
              class="relative bg-[#0d1117] text-white flex items-center justify-center font-bold px-6 py-3 rounded-[8px] text-sm md:text-base tracking-wide overflow-hidden group mt-[20px] hover:cursor-pointer"
              style="width: 100%; padding: 10px 0px"
            >
              <span class="relative z-10 flex items-center text-centers gap-2">
                Submit Inquiry
                <i class="fa-solid fa-arrow-right -rotate-45"></i>
              </span>
              <div
                class="absolute bottom-0 left-0 w-full h-[3px] bg-gradient-to-r from-transparent via-white to-transparent opacity-60 group-hover:opacity-100 transition duration-300"
              ></div>
            </button>
          </div>
        </form>
        <!-- <?php echo do_shortcode('[wpforms id="60"]'); ?> -->
      </div>
    </div>
    <div
      class="mt-[80px] border-t-2 border-[#1f2329] rounded-3xl bg-[#04070d] flex flex-col items-center justify-center gap-[20px] autoShow"
    >
      <div
        class="flex items-center justify-center border border-[#1f2329] rounded-full faqSection"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 256 256"
          focusable="false"
          color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
          style="
            user-select: none;
            width: 20px;
            height: 20px;
            display: inline-block;
            fill: var(
              --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
              rgb(213, 219, 230)
            );
            color: var(
              --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
              rgb(213, 219, 230)
            );
            flex-shrink: 0;
          "
        >
          <g
            color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
            weight="fill"
          >
            <path
              d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"
            ></path>
          </g>
        </svg>
        <p class="text-[#d5dbe6]">FAQ'S</p>
      </div>
      <p class="text-5xl text-white text-center returnSectionPara">
        Frequently Asked
        <span class="italic" style="color: #fcaf17"> Question </span>
      </p>
      <p class="text-center text-white">
        Find quick answers to the most common questions about our platform
      </p>
      <div
        class="flex flex-row items-center justify-center w-full questionSection"
        style="gap: 30px"
      >
        <div
          class="faq border-t-2 border-[#1f2329] border border-[#1c2229] rounded-3xl flex flex-col items-center gap-3 px-3 contactUsStillHaveQuestionSection"
        >
          <div class="faqBox px-3 py-3 border-t-2 border-[#1f2329]">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 256 256"
              focusable="false"
              color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
              style="
                user-select: none;
                width: 32px;
                height: 32px;
                display: inline-block;
                fill: var(
                  --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                  rgb(213, 219, 230)
                );
                color: var(
                  --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                  rgb(213, 219, 230)
                );
                flex-shrink: 0;
              "
            >
              <g
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                weight="regular"
              >
                <path
                  d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"
                ></path>
              </g>
            </svg>
          </div>
          <p class="text-2xl text-center" style="color: #d5dbe6">
            Still Have Questions?
          </p>
          <p class="text-center" style="color: #6e727b">
            Still have questions? Speak with a marketing expert on our team
            today.
          </p>
          <div
            class="flex flex-row items-center gap-2 px-2 py-1.5 border border-[#1f2329] faqBox"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 256 256"
              focusable="false"
              color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
              style="
                user-select: none;
                width: 18px;
                height: 20px;
                display: inline-block;
                fill: var(
                  --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                  rgb(255, 255, 255)
                );
                color: var(
                  --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                  rgb(255, 255, 255)
                );
                flex-shrink: 0;
              "
            >
              <g
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                weight="regular"
              >
                <path
                  d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"
                ></path>
              </g>
            </svg>
            <p style="color: #d5dbe6" class="font-medium">Contact Us</p>
          </div>
        </div>

        <div class="questions">
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                1. What services does Stratmedia provide?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Stratmedia offers full-service marketing solutions, including
              brand strategy, digital advertising, social media management,
              content creation, SEO, and performance analytics.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                2. What industries does Stratmedia specialize in?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              We work with growth-focused brands across home services, medical,
              construction, hospitality, and industrial sectors—as well as
              e-commerce, tech, and startups. If you’re ready to scale with
              strategy and creative that performs, you’re in the right place.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">3. How does the onboarding process work?</p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Once you reach out, we schedule a discovery session to understand
              your goals. Then we craft a custom strategy, align on objectives,
              and launch with precision.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                4. What makes Stratmedia different from other agencies?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              We don’t do cookie-cutter campaigns. At Stratmedia, we dive deep
              into your brand’s DNA to craft bold, performance-driven strategies
              that actually move the needle.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                5. What size businesses do you work with?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              We work with startups, mid-sized companies, and enterprise
              clients. Whether you’re scaling fast or rebranding, we adapt to
              your growth stage and vision.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                6. How much does it cost to work with STRATMEDIA?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Every engagement is tailored to the client’s goals and scope. Our
              partnerships range from one-off brand or campaign builds to
              long-term retainers that manage full-scale growth systems. <br />
              Pricing varies based on deliverables, strategy depth, and
              industry—most retainers begin around $3,000–$7,000/month, but
              larger scopes and full- service engagements may extend beyond
              that.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">7. Is there a minimum commitment?</p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              For retainer clients, we typically recommend a 6–12 month
              partnership to allow enough runway for strategy, optimization, and
              measurable results. <br />
              For one-off or campaign projects, timelines and deliverables are
              defined during onboarding to match your goals.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                8. Do you manage ad spend or is that separate?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Ad spend is billed directly to Meta, Google, TikTok, or LinkedIn.
              Our retainers cover creative, strategy, management, and reporting.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">
                9. Do you work with businesses outside Detroit/Michigan?
              </p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Yes. While we’re based in Michigan, we work with businesses
              nationwide.
            </p>
          </div>
          <div
            class="flex flex-col items-start gap-2 border-t-2 border-[#1f2329] border border-[#1c2229] w-full px-3 py-2 faqBox"
            style="border-radius: 10px"
          >
            <div class="flex flex-row items-center justify-between w-full">
              <p class="text-white">10. How do you measure success?</p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                style="
                  user-select: none;
                  width: 20px;
                  height: 20px;
                  display: inline-block;
                  fill: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  color: var(
                    --token-f195ea74-7512-4096-8d91-0e7c7e10d0ab,
                    rgb(213, 219, 230)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-f195ea74-7512-4096-8d91-0e7c7e10d0ab, rgb(213, 219, 230))"
                  weight="regular"
                >
                  <path
                    d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"
                    fill="#fcaf17"
                  ></path>
                </g>
              </svg>
            </div>
            <p class="answerColor">
              Every engagement comes with reporting dashboards and measurable
              KPIs — not vanity metrics. We track ROI, leads, and real growth.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div
      class="flex flex-row items-center justify-center"
      style="margin-top: 60px"
    >
      <div
        class="mt-[80px] border-t-2 border-[#1f2329] rounded-3xl bg-[#04070d] flex flex-col items-start justify-center gap-[20px] px-3"
        style="padding-bottom: 40px; width: 80%; padding: 30px"
      >
        <div
          class="flex flex-row items-center justify-between w-full mt-[30px] ContactFooterSection"
        >
          <a href="#" class="text-2xl text-[#fcaf17] font-bold">
            <img
              src="/src/assets/Startmedia Vector-02.svg"
              alt=""
              style="width: 100%; height: 30px"
            />
          </a>
          <div class="flex flex-row items-center" style="gap: 20px">
            <a href="https://www.instagram.com/stratmedia.co/" target="_blank">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                style="
                  user-select: none;
                  width: 24px;
                  height: 24px;
                  display: inline-block;
                  fill: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  color: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                  weight="regular"
                >
                  <path
                    d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                  ></path>
                </g>
              </svg>
            </a>
            <a
              href="https://www.linkedin.com/company/stratmedia-co"
              target="_blank"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 256 256"
                focusable="false"
                color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                style="
                  user-select: none;
                  width: 24px;
                  height: 24px;
                  display: inline-block;
                  fill: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  color: var(
                    --token-a85af9cb-7834-4006-a277-2dd1295ae376,
                    rgb(255, 255, 255)
                  );
                  flex-shrink: 0;
                "
              >
                <g
                  color="var(--token-a85af9cb-7834-4006-a277-2dd1295ae376, rgb(255, 255, 255))"
                  weight="regular"
                >
                  <path
                    d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                  ></path>
                </g>
              </svg>
            </a>
          </div>
        </div>
        <button
          class="w-[30%] relative bg-[#0d1117] text-white font-bold px-6 py-8 rounded-[8px] text-sm md:text-base tracking-wide overflow-hidden group mt-[20px] hover:cursor-pointer getInTouch"
        >
          <span class="relative z-10 flex items-center justify-center gap-2">
            <a href="<?php echo site_url('/contact'); ?>">
              Apply in 2 minutes
            </a>
            <i class="fa-solid fa-arrow-right -rotate-45"></i>
          </span>
          <!-- white glow highlight at the bottom -->
          <div
            class="absolute bottom-0 left-0 w-full h-[3px] bg-gradient-to-r from-transparent via-white to-transparent opacity-60 group-hover:opacity-100 transition duration-300"
          ></div>
        </button>
        <p class="w-full" style="height: 1.5px; background-color: #13171d"></p>
        <div
          class="flex flex-row items-center justify-between w-full ContactUsLastSection"
        >
          <p class="text-white">© 2026 Stratmedia, All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <script>
      // Event delegation: works for existing and future .faqBox items
      document.addEventListener("click", (e) => {
        
        const box = e.target.closest(".faqBox");
        if (!box) return;

        // If you click inside the answer text, do nothing (optional)
        if (e.target.closest(".answerColor")) return;

        // Toggle this one
        box.classList.toggle("open");

        // If you want accordion behavior (only one open), uncomment below:
        // document.querySelectorAll(".faqBox.open").forEach(b => {
        //   if (b !== box) b.classList.remove("open");
        // });
      });
    </script>

    <script>
      function showPara(num) {
        // hide all paras
        document
          .querySelectorAll(".tab-para")
          .forEach((p) => (p.style.display = "none"));

        // remove highlight from all buttons
        document
          .querySelectorAll(".PaidAidsBox")
          .forEach((btn) => btn.classList.remove("activeBtn"));

        // show the correct para
        document.getElementById("para" + num).style.display = "block";

        // highlight the clicked button
        document
          .querySelectorAll(".PaidAidsBox")
          [num - 1].classList.add("activeBtn");
      }

      // Show first para by default
      showPara(1);
    </script>

    <script>
      const cards = document.querySelectorAll(".card");
      const paras = document.querySelectorAll(".outside-para");

      cards.forEach((card) => {
        card.addEventListener("click", () => {
          // Remove active class from all cards
          cards.forEach((c) => c.classList.remove("active"));
          // Add active to clicked card
          card.classList.add("active");

          // Hide all paragraphs
          paras.forEach((p) => p.classList.remove("active"));
          // Show the target paragraph
          const targetId = card.getAttribute("data-target");
          document.getElementById(targetId).classList.add("active");
        });
      });
    </script>
    <script>
      document.querySelectorAll(".faqHeader").forEach((header) => {
        header.addEventListener("click", () => {
          const box = header.parentElement;
          box.classList.toggle("open");
        });
      });
    </script>

    <script type="module">
      // import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js";
      // import { OrbitControls } from "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/controls/OrbitControls.js";
      // import { GLTFLoader } from "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/loaders/GLTFLoader.js";
      import * as THREE from "three";
      import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";
      import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";
      const container = document.getElementById("viewer");

      // Renderer
      const renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true,
      });
      renderer.setSize(container.clientWidth, container.clientHeight);
      container.appendChild(renderer.domElement);

      // Scene
      const scene = new THREE.Scene();

      // Camera
      const camera = new THREE.PerspectiveCamera(
        60,
        container.clientWidth / container.clientHeight,
        0.01,
        2000,
      );
      camera.position.set(2, 2, 4);

      // Controls
      const controls = new OrbitControls(camera, renderer.domElement);
      controls.enableDamping = true;
      controls.enableRotate = true; // disable manual rotation if only auto-spin needed
      controls.enableZoom = false;
      controls.minPolarAngle = Math.PI / 2; // lock vertical angle
      controls.maxPolarAngle = Math.PI / 2; // lock vertical angle
      controls.autoRotate = true; // auto spin
      controls.autoRotateSpeed = 8.0;
      // Lights
      const hemiLight = new THREE.HemisphereLight(0xffffff, 0xffffff, 1);
      scene.add(hemiLight);
      const dirLight = new THREE.DirectionalLight(0xffffff, 1);
      dirLight.position.set(5, 10, 7.5);
      scene.add(dirLight);

      const spotLight = new THREE.SpotLight(0xffffff, 2); // color, intensity
      spotLight.position.set(0, 10, 0); // directly above the model
      spotLight.angle = Math.PI / 6; // spotlight cone angle
      spotLight.penumbra = 0.3; // softer edges
      spotLight.decay = 2; // realistic falloff
      spotLight.distance = 50; // how far the light reaches

      // make shadows work
      spotLight.castShadow = true;
      renderer.shadowMap.enabled = true;

      // optional: add helper to visualize spotlight
      // const spotHelper = new THREE.SpotLightHelper(spotLight);
      // scene.add(spotHelper);

      scene.add(spotLight);

      // Loader
      let model;
      const loader = new GLTFLoader();
      loader.load(
        "/src/assets/final-logo.glb", // adjust path if needed
        (gltf) => {
          model = gltf.scene;
          scene.add(model);

          // Frame & scale model
          const box = new THREE.Box3().setFromObject(model);
          const size = box.getSize(new THREE.Vector3()).length();
          const center = box.getCenter(new THREE.Vector3());

          model.position.sub(center); // center the model
          camera.position.set(size, size, size);
          model.scale.set(1.3, 1.5, 1);
          controls.update();
        },
        undefined,
        (error) => {
          console.error("Error loading GLB:", error);
        },
      );

      // Resize
      window.addEventListener("resize", () => {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
      });

      // Animate
      function animate() {
        requestAnimationFrame(animate);

       

        controls.update();
        renderer.render(scene, camera);
      }
      animate();
    </script>
  </body>
</html>
