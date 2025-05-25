<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Leap - CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>

    </style>

<link href="../../css/animate.min.css" rel="stylesheet">
<link href="../../css/owl.carousel.min.css" rel="stylesheet">
<link href="../../css/bootst.css" rel="stylesheet">
<link href="../../css/about.css" rel="stylesheet">

<!-- Specific for notes sections -->
<link href="../../css/notes.css" rel="stylesheet">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
</head>
<body>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" style="opacity: 50%;">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap - CSS</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <!-- <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">Blog</a>
                    <a href="courses.php" class="nav-item nav-link">Courses</a>                         
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="join_now.php" class="nav-item nav-link">Join Now</a> -->
                    <a href="join_now.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
                
            </div>
        </nav>
        <!-- Navbar End -->
    <div class="app-container">
        <!-- Left Sidebar Navigation -->
        <div class="sidebar">
            <ul class="sidebar-menu">             
                    <select id="courseMenu" onchange="goToPage()">
                        <option value="">-- Select a Course --</option>
                        <option value="html-notes.html">HTML COURSE</option>
                        <option value="css-notes.html">CSS COURSE</option>
                        <option value="js-notes.html">JavaScript COURSE</option>
                    </select>                
                    <li class="menu-item active">
                        <a href="#"><i class="fas fa-code me-2"></i>Introduction to CSS</a>
                        <ul class="submenu active">
                            <li class="active"><a href="#" data-content="css-basics"><i style="font-size: 8px;"></i>What is CSS</a></li>
                            <li><a href="#" data-content="css-role"><i style="font-size: 8px;"></i>Role of CSS in web development </a></li>
                            <li><a href="#" data-content="html-css-integration"><i style="font-size: 8px;"></i>How HTML and CSS work together</a></li>
                            <li><a href="#" data-content="stylesheet-types"><i style="font-size: 8px;"></i>Inline, internal, external stylesheets – pros/cons</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-code me-2"></i>Syntax & Selectors</a>
                        <ul class="submenu">
                            <li class="active"><a href="#" data-content="syntax-structure"><i style="font-size: 8px;"></i>Basic syntax structure</a></li>
                            <li><a href="#" data-content="selector-types"><i style="font-size: 8px;"></i>Selector Types</a></li>
                    
                            <!-- Sub-selector types -->
                            <li><a href="#" data-content="element-selectors"><i style="font-size: 8px;"></i>Element (div, p)</a></li>
                            <li><a href="#" data-content="class-selectors"><i style="font-size: 8px;"></i>Class (.class)</a></li>
                            <li><a href="#" data-content="id-selectors"><i style="font-size: 8px;"></i>ID (#id)</a></li>
                            <li><a href="#" data-content="universal-selectors"><i style="font-size: 8px;"></i>Universal (*)</a></li>
                            <li><a href="#" data-content="attribute-selectors"><i style="font-size: 8px;"></i>Attribute selectors ([type="text"])</a></li>
                            <li><a href="#" data-content="pseudo-class-selectors"><i style="font-size: 8px;"></i>Pseudo-classes (:hover, :nth-child, :focus)</a></li>
                            <li><a href="#" data-content="pseudo-element-selectors"><i style="font-size: 8px;"></i>Pseudo-elements (::before, ::after)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-code me-2"></i>Styling Text</a>        
                        <ul class="submenu">
                            <li><a href="#" data-content="font-properties"><i style="font-size: 8px;"></i>Font properties</a></li>
                                <!-- font-family, font-size, font-weight, font-style -->
                    
                            <li><a href="#" data-content="text-alignment"><i style="font-size: 8px;"></i>Text alignment:</a></li>
                                <!-- text-align, text-transform, text-decoration -->
                    
                            <li><a href="#" data-content="line-height-spacing"><i style="font-size: 8px;"></i>Line height and spacing</a></li>
                    
                            <li><a href="#" data-content="web-safe-google-fonts"><i style="font-size: 8px;"></i>Web-safe Fonts vs Google Fonts</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-palette me-2"></i>Colors and Backgrounds</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="color-formats"><i style="font-size: 8px;"></i>Color formats</a></li>
                                <!-- named, hex, RGB, HSL, RGBA, HSLA -->
                    
                            <li><a href="#" data-content="background-properties"><i style="font-size: 8px;"></i>Background properties</a></li>
                                <!-- background-color, background-image, background-repeat, background-position, background-size -->
                    
                            <li><a href="#" data-content="gradients"><i style="font-size: 8px;"></i>Gradients</a></li>
                                <!-- linear, radial -->
                    
                            <li><a href="#" data-content="opacity-vs-rgba"><i style="font-size: 8px;"></i>Opacity vs rgba</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-cube me-2"></i>Box Model</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="box-model-components"><i style="font-size: 8px;"></i>Understanding content, padding, border, margin</a></li>
                            <li><a href="#" data-content="box-sizing"><i style="font-size: 8px;"></i>box-sizing: content-box vs border-box</a></li>
                            <li><a href="#" data-content="margin-collapsing"><i style="font-size: 8px;"></i>Margin collapsing</a></li>
                            <li><a href="#" data-content="shorthand-values"><i style="font-size: 8px;"></i>Shorthand values for padding/margin</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-eye-slash me-2"></i>Display and Visibility</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="display-property"><i style="font-size: 8px;"></i>display: block, inline, inline-block, none</a></li>
                            <li><a href="#" data-content="visibility-property"><i style="font-size: 8px;"></i>visibility: visible, hidden, collapse</a></li>
                            <li><a href="#" data-content="display-vs-visibility"><i style="font-size: 8px;"></i>Difference between display: none and visibility: hidden</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-ruler me-2"></i>CSS Units</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="absolute-units"><i style="font-size: 8px;"></i>Absolute units: px, pt</a></li>
                            <li><a href="#" data-content="relative-units"><i style="font-size: 8px;"></i>Relative units: em, rem, %, vw, vh, vmin, vmax</a></li>
                            <li><a href="#" data-content="unit-use-cases"><i style="font-size: 8px;"></i>When to use which unit</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-layer-group me-2"></i>Positioning</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="position-types"><i style="font-size: 8px;"></i>position: static, relative, absolute, fixed, sticky</a></li>
                            <li><a href="#" data-content="z-index-stacking"><i style="font-size: 8px;"></i>Z-index and stacking context</a></li>
                            <li><a href="#" data-content="centering-elements"><i style="font-size: 8px;"></i>Centering elements with positioning</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-water me-2"></i>Floats and Clearing</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="float-layout"><i style="font-size: 8px;"></i>Legacy layout technique using float</a></li>
                            <li><a href="#" data-content="clear-property"><i style="font-size: 8px;"></i>clear property</a></li>
                            <li><a href="#" data-content="clearfix-hack"><i style="font-size: 8px;"></i>Clearfix hack</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-th-large me-2"></i>Flexbox Layout</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="flexbox-overview"><i style="font-size: 8px;"></i>Introduction to Flexbox</a></li>
                            <li><a href="#" data-content="flex-container"><i style="font-size: 8px;"></i>Flex container: display: flex</a></li>
                            <li><a href="#" data-content="main-cross-axis"><i style="font-size: 8px;"></i>Main axis vs cross axis</a></li>
                            <li><a href="#" data-content="flex-direction"><i style="font-size: 8px;"></i>flex-direction</a></li>
                            <li><a href="#" data-content="justify-content"><i style="font-size: 8px;"></i>justify-content</a></li>
                            <li><a href="#" data-content="align-items"><i style="font-size: 8px;"></i>align-items</a></li>
                            <li><a href="#" data-content="flex-wrap"><i style="font-size: 8px;"></i>flex-wrap</a></li>
                            <li><a href="#" data-content="flex-grow-shrink-basis"><i style="font-size: 8px;"></i>flex-grow, flex-shrink, flex-basis</a></li>
                            <li><a href="#" data-content="order-align-self"><i style="font-size: 8px;"></i>order, align-self</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-th me-2"></i>Grid Layout</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="grid-overview"><i style="font-size: 8px;"></i>Introduction to CSS Grid</a></li>
                            <li><a href="#" data-content="grid-container"><i style="font-size: 8px;"></i>Grid container: display: grid</a></li>
                            <li><a href="#" data-content="rows-columns"><i style="font-size: 8px;"></i>Defining rows and columns</a></li>
                            <li><a href="#" data-content="fr-unit"><i style="font-size: 8px;"></i>fr unit</a></li>
                            <li><a href="#" data-content="repeat-function"><i style="font-size: 8px;"></i>repeat() function</a></li>
                            <li><a href="#" data-content="grid-gap-auto-flow"><i style="font-size: 8px;"></i>grid-gap, grid-auto-flow</a></li>
                            <li><a href="#" data-content="grid-lines-areas"><i style="font-size: 8px;"></i>Grid lines, areas, and naming</a></li>
                            <li><a href="#" data-content="responsive-grids"><i style="font-size: 8px;"></i>Responsive grids with media queries</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-mobile-alt me-2"></i>Responsive Design Basics</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="mobile-first"><i style="font-size: 8px;"></i>Mobile-first approach</a></li>
                            <li><a href="#" data-content="media-queries"><i style="font-size: 8px;"></i>Media queries</a></li>
                            <li><a href="#" data-content="breakpoints"><i style="font-size: 8px;"></i>Breakpoints and device sizes</a></li>
                            <li><a href="#" data-content="fluid-layouts"><i style="font-size: 8px;"></i>Fluid layouts using percentages and relative units</a></li>
                        </ul>
                    </li>

                    <!-- Advanced CSS Technique -->

                    <li class="menu-item">
                        <a href="#"><i class="fas fa-arrows-alt me-2"></i>Transforms and Transitions</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="2d-transforms"><i style="font-size: 8px;"></i>2D transforms</a></li>
                                <!-- translate, scale, rotate, skew -->
                    
                            <li><a href="#" data-content="3d-transforms"><i style="font-size: 8px;"></i>3D transforms</a></li>
                    
                            <li><a href="#" data-content="transition-basics"><i style="font-size: 8px;"></i>Transition basics</a></li>
                                <!-- transition-property, transition-duration, ease-in-out -->
                    
                            <li><a href="#" data-content="transition-shorthand"><i style="font-size: 8px;"></i>Transition shorthand</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-film me-2"></i>Animations</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="keyframes-intro"><i style="font-size: 8px;"></i>Keyframes @keyframes</a></li>
                    
                            <li><a href="#" data-content="animation-properties"><i style="font-size: 8px;"></i>Animation properties</a></li>
                                <!-- animation-name, animation-duration, animation-timing-function, animation-delay -->
                                <!-- animation-iteration-count, animation-direction, animation-fill-mode, animation-play-state -->
                    
                            <li><a href="#" data-content="combine-animations"><i style="font-size: 8px;"></i>Combining animations for effects</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-hashtag me-2"></i>Custom Properties (CSS Variables)</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="declare-use-vars"><i style="font-size: 8px;"></i>Declaring and using variables</a></li>
                                <!-- --main-color -->
                    
                            <li><a href="#" data-content="scope-variables"><i style="font-size: 8px;"></i>Scoping variables</a></li>
                                <!-- global vs local -->
                    
                            <li><a href="#" data-content="vars-vs-preprocessors"><i style="font-size: 8px;"></i>Benefits over preprocessor variables</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-adjust me-2"></i>Filters and Blend Modes</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="css-filters"><i style="font-size: 8px;"></i>filter: blur, brightness, contrast, grayscale, etc.</a></li>
                    
                            <li><a href="#" data-content="mix-blend-modes"><i style="font-size: 8px;"></i>mix-blend-mode</a></li>
                    
                            <li><a href="#" data-content="background-blend-modes"><i style="font-size: 8px;"></i>background-blend-mode</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-vector-square me-2"></i>SVG and Icon Styling</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="embed-svg-html"><i style="font-size: 8px;"></i>Embedding SVG in HTML</a></li>
                    
                            <li><a href="#" data-content="style-svg-css"><i style="font-size: 8px;"></i>Styling SVG with CSS</a></li>
                    
                            <li><a href="#" data-content="icon-libraries"><i style="font-size: 8px;"></i>Using icon libraries</a></li>
                                <!-- Font Awesome, Heroicons -->
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-universal-access me-2"></i>Accessibility in CSS</a>
                        <ul class="submenu">
                            <li><a href="#" data-content="semantic-html-css"><i style="font-size: 8px;"></i>Semantic HTML + CSS</a></li>
                    
                            <li><a href="#" data-content="focus-keyboard-nav"><i style="font-size: 8px;"></i>Focus states and keyboard navigation</a></li>
                    
                            <li><a href="#" data-content="contrast-readability"><i style="font-size: 8px;"></i>Contrast and readability</a></li>
                    
                            <li><a href="#" data-content="invisible-text"><i style="font-size: 8px;"></i>Avoiding invisible text or off-screen elements that are not accessible</a></li>
                        </ul>
                    </li>

        </div>

        <!-- Main Content Area -->
        <div class="main-content">

            

            <div id="css-basics-content" class="content-section active">
                <h2>What is CSS</h2>
                <p>CSS (Cascading Style Sheets) is a stylesheet language used to describe the presentation of a document written in HTML or XML.</p>
                <p>It controls the visual appearance of web pages, including layout, colors, fonts, and other stylistic aspects.</p>
                <p>CSS separates content from design, allowing developers to maintain and update styles independently of the HTML structure.</p>
            
                <h4>Purpose</h4>
                <ul>
                    <li>Defines how HTML elements are displayed on screen, in print, or other media.</li>
                    <li>Enables consistent styling across multiple pages or elements.</li>
                    <li>Improves user experience by enhancing visual appeal and readability.</li>
                </ul>
            
                <h4>Accessibility</h4>
                <ul>
                    <li>Use high-contrast colors and readable fonts to ensure text is legible for users with visual impairments.</li>
                    <li>Avoid relying solely on CSS for critical content, as screen readers may ignore purely stylistic elements.</li>
                    <li>Test styles with assistive technologies to ensure they don’t obscure content.</li>
                </ul>
            
                <h4>Best Practices</h4>
                <ul>
                    <li>Keep CSS modular and organized for maintainability.</li>
                    <li>Use semantic HTML alongside CSS to ensure meaningful structure.</li>
                    <li>Validate CSS using tools like the W3C CSS Validator to catch errors.</li>
                    <li>Minimize specificity conflicts by using clear, targeted selectors.</li>
                </ul>
            
                <div class="code-display">
                    <div class="code-container">
                        <h3>Usage</h3>
                        <div class="code-block">
                            <pre>
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;title&gt;CSS Example&lt;/title&gt;
                &lt;style&gt;
                    h1 {
                        color: blue;
                        font-family: Arial, sans-serif;
                    }
                    p {
                        font-size: 16px;
                        line-height: 1.5;
                    }
                &lt;/style&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h1&gt;Welcome to CSS&lt;/h1&gt;
                &lt;p&gt;This paragraph is styled with CSS.&lt;/p&gt;
            &lt;/body&gt;
            &lt;/html&gt;
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>
                    </div>
                </div>
            
                <div class="preview-container">
                    <h3>Result</h3>
                    <div class="preview-frame">
                        <h1 style="color: blue; font-family: Arial, sans-serif;">Welcome to CSS</h1>
                        <p style="font-size: 16px; line-height: 1.5;">This paragraph is styled with CSS.</p>
                    </div>
                </div>
            
                <div class="preview-frame">
                    <h4>Key Elements</h4>
                    <ul>
                        <li>CSS rules consist of a selector (e.g., &lt;code&gt;h1&lt;/code&gt) and declarations (e.g., &lt;code&gt;color: blue&lt;/code&gt;).</li>
                        <li>Styles can be applied via internal (&lt;code&gt;&lt;style&gt;&lt/code&gt;), external (CSS files), or inline methods.</li>
                        <li>CSS cascades, meaning styles can inherit or override based on specificity and order.</li>
                        <li>Use vendor prefixes for experimental features to ensure cross-browser compatibility.</li>
                    </ul>
                </div>
            
                <div class="exercise-container">
                    <h3>Practical Exercise</h3>
                    <p>Create a simple webpage that:</p>
                    <ul>
                        <li>Includes a heading (&lt;code&gt;&lt;h1&gt;&lt;/code&gt) and a paragraph (&lt;code&gt;&lt;p&gt;&lt;/code&gt;).</li>
                        <li>Uses internal CSS to style the heading with a color and font, and the paragraph with font size and line height.</li>
                        <li>Tests the page in a browser to verify the styles are applied correctly.</li>
                    </ul>
                </div>
            </div>


            <!--Role of css-->
            <div id="css-role-content" class="content-section">
                <h2>Role of CSS in Web Development</h2>
                <p>CSS is a cornerstone of web development, responsible for styling and laying out web pages to create visually appealing and functional user interfaces.</p>
                <p>It enables developers to control the look and feel of a website, ensuring consistency and responsiveness across devices.</p>
                <p>CSS enhances user engagement by improving aesthetics and usability.</p>
            
                <h4>Purpose</h4>
                <ul>
                    <li>Separates presentation from content, improving maintainability and scalability.</li>
                    <li>Supports responsive design, adapting layouts for different screen sizes.</li>
                    <li>Enables animations, transitions, and interactive effects to enhance user experience.</li>
                </ul>
            
                <h4>Accessibility</h4>
                <ul>
                    <li>Ensure CSS layouts maintain content order for screen readers.</li>
                    <li>Use relative units (e.g., <code>rem</code>, <code>em</code>) to support text resizing for accessibility.</li>
                    <li>Avoid hiding content with CSS in ways that prevent assistive technology access.</li>
                </ul>
            
                <h4>Best Practices</h4>
                <ul>
                    <li>Use CSS frameworks (e.g., Bootstrap) for rapid development, but customize to avoid bloat.</li>
                    <li>Optimize CSS for performance by minimizing file size and reducing reflows.</li>
                    <li>Document CSS code with comments for team collaboration.</li>
                    <li>Test across browsers to ensure consistent rendering.</li>
                </ul>
            
                <div class="code-display">
                    <div class="code-container">
                        <h3>Usage</h3>
                        <div class="code-block">
                            <pre>
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;title&gt;Role of CSS&lt;/title&gt;
                &lt;style&gt;
                    .container {
                        max-width: 800px;
                        margin: 0 auto;
                        padding: 20px;
                    }
                    .header {
                        background-color: #f0f0f0;
                        padding: 10px;
                        text-align: center;
                    }
                &lt;/style&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;div class="container"&gt;
                    &lt;div class="header"&gt;
                        &lt;h1&gt;Website Header&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Content styled with CSS for layout and design.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/body&gt;
            &lt;/html&gt;
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>
                    </div>
                </div>
            
                <div class="preview-container">
                    <h3>Result</h3>
                    <div class="preview-frame">
                        <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
                            <div style="background-color: #f0f0f0; padding: 10px; text-align: center;">
                                <h1>Website Header</h1>
                            </div>
                            <p>Content styled with CSS for layout and design.</p>
                        </div>
                    </div>
                </div>
            
                <div class="preview-frame">
                    <h4>Key Elements</h4>
                    <ul>
                        <li>CSS enables modular design, allowing style changes without altering HTML.</li>
                        <li>Responsive layouts adapt to various devices using media queries and flexible units.</li>
                        <li>Performance optimization reduces load times and improves user experience.</li>
                        <li>Cross-browser testing ensures consistent styling across platforms.</li>
                    </ul>
                </div>
            
                <div class="exercise-container">
                    <h3>Practical Exercise</h3>
                    <p>Create a webpage that:</p>
                    <ul>
                        <li>Uses a container div to center content with a maximum width.</li>
                        <li>Styles a header section with a background color and centered text using internal CSS.</li>
                        <li>Tests the layout in multiple browsers to ensure consistent rendering.</li>
                    </ul>
                </div>
            </div>

            <!--how html work with css-->
            <div id="html-css-integration-content" class="content-section">
                <h2>How HTML and CSS Work Together</h2>
                <p>HTML provides the structure and content of a webpage, while CSS defines its visual presentation and layout.</p>
                <p>The two languages work in tandem to create functional and aesthetically pleasing websites.</p>
                <p>CSS targets HTML elements using selectors, applying styles to enhance the user interface.</p>
            
                <h4>Purpose</h4>
                <ul>
                    <li>HTML defines the semantic structure, while CSS controls the visual styling.</li>
                    <li>Combining both ensures content is both meaningful and visually appealing.</li>
                    <li>Allows for flexible design updates without altering the HTML content.</li>
                </ul>
            
                <h4>Accessibility</h4>
                <ul>
                    <li>Use semantic HTML to ensure content is accessible before CSS is applied.</li>
                    <li>Ensure CSS styles do not disrupt the logical order of content for screen readers.</li>
                    <li>Test with CSS disabled to verify content remains usable and accessible.</li>
                </ul>
            
                <h4>Best Practices</h4>
                <ul>
                    <li>Use classes and IDs in HTML to target specific elements with CSS.</li>
                    <li>Maintain a clear separation of concerns: HTML for structure, CSS for style.</li>
                    <li>Avoid inline CSS in HTML to keep code maintainable.</li>
                    <li>Use external stylesheets for larger projects to improve scalability.</li>
                </ul>
            
                <div class="code-display">
                    <div class="code-container">
                        <h3>Usage</h3>
                        <div class="code-block">
                            <pre>
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;title&gt;HTML and CSS&lt;/title&gt;
                &lt;style&gt;
                    .content {
                        border: 1px solid #ccc;
                        padding: 15px;
                        background-color: #f9f9f9;
                    }
                    h2 {
                        color: #333;
                    }
                &lt;/style&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;div class="content"&gt;
                    &lt;h2&gt;Page Title&lt;/h2&gt;
                    &lt;p&gt;This content is styled with CSS.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/body&gt;
            &lt;/html&gt;
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>
                    </div>
                </div>
            
                <div class="preview-container">
                    <h3>Result</h3>
                    <div class="preview-frame">
                        <div style="border: 1px solid #ccc; padding: 15px; background-color: #f9f9f9;">
                            <h2 style="color: #333;">Page Title</h2>
                            <p>This content is styled with CSS.</p>
                        </div>
                    </div>
                </div>
            
                <div class="preview-frame">
                    <h4>Key Elements</h4>
                    <ul>
                        <li>HTML provides the structure (e.g., &lt;code&gt;&lt;div&gt;&lt;/code&gt;, &lt;code&gt;&lt;h2&gt;&lt;/code&gt;), while CSS applies styles.</li>
                        <li>Selectors like classes (&lt;code&gt;.content&lt;/code&gt;) link CSS to specific HTML elements.</li>
                        <li>Semantic HTML enhances accessibility and SEO, complementing CSS styling.</li>
                        <li>Testing with and without CSS ensures robust integration.</li>
                    </ul>
                </div>
            
                <div class="exercise-container">
                    <h3>Practical Exercise</h3>
                    <p>Create a webpage that:</p>
                    <ul>
                        <li>Uses semantic HTML (e.g., &lt;code&gt;&lt;header&gt;&lt;/code&gt;, &lt;code&gt;&lt;main&gt;&lt;/code&gt;) for structure.</li>
                        <li>Applies CSS styles to a specific class to style a section with borders and background color.</li>
                        <li>Tests the page with CSS disabled to ensure content remains accessible.</li>
                    </ul>
                </div>
            </div>

            <!--stylesheet-types-->
            <div id="stylesheet-types-content" class="content-section">
                <h2>Inline, Internal, External Stylesheets – Pros/Cons</h2>
                <p>CSS can be applied to HTML using three methods: inline (within HTML tags), internal (within a &lt;code&gt;&lt;style&gt;&lt;/code&gt; tag), and external (in a separate .css file).</p>
                <p>Each method has specific use cases, advantages, and disadvantages.</p>
            
                <h4>Purpose</h4>
                <ul>
                    <li><strong>Inline CSS</strong>: Applies styles directly to individual HTML elements using the &lt;code&gt;&style&lt;/code&gt;& attribute.</li>
                    <li><strong>Internal CSS</strong>: Defines styles within a &lt;code&gt;&&lt;style&gt;&&lt;/code&gt;& tag in the HTML <code><head></code>.</li>
                    <li><strong>External CSS</strong>: Stores styles in a separate .css file, linked to HTML via a <code><link></code> tag.</li>
                </ul>
            
                <h4>Accessibility</h4>
                <ul>
                    <li>Avoid inline CSS for critical content, as it can be harder to override for accessibility needs.</li>
                    <li>Ensure external stylesheets are accessible and load correctly to maintain consistent styling.</li>
                    <li>Test all methods to ensure styles don’t interfere with assistive technologies.</li>
                </ul>
            
                <h4>Best Practices</h4>
                <ul>
                    <li>Use external stylesheets for large projects to improve maintainability and scalability.</li>
                    <li>Limit inline CSS to quick fixes or one-off styles, as it’s hard to maintain.</li>
                    <li>Use internal CSS for small projects or single-page applications to keep everything in one file.</li>
                    <li>Ensure external CSS files are optimized and cached for performance.</li>
                </ul>
            
                <div class="code-display">
                    <div class="code-container">
                        <h3>Usage</h3>
                        <div class="code-block">
                            <pre>
            &lt;!-- Inline CSS --&gt;
            &lt;p style="color: red; font-size: 16px;">Inline styled paragraph.&lt;/p&gt;
            
            &lt;!-- Internal CSS --&gt;
            &lt;head&gt;
                &lt;style&gt;
                    p {
                        color: blue;
                        font-size: 16px;
                    }
                &lt;/style&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;p>Internally styled paragraph.&lt;/p&gt;
            &lt;/body&gt;
            
            &lt;!-- External CSS --&gt;
            &lt;head&gt;
                &lt;link rel="stylesheet" href="styles.css"&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;p>Externally styled paragraph.&lt;/p&gt;
            &lt;/body&gt;
            
            /* styles.css */
            p {
                color: green;
                font-size: 16px;
            }
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>
                    </div>
                </div>
            
                <div class="preview-container">
                    <h3>Result</h3>
                    <div class="preview-frame">
                        <p style="color: red; font-size: 16px;">Inline styled paragraph.</p>
                        <p style="color: blue; font-size: 16px;">Internally styled paragraph.</p>
                        <p style="color: green; font-size: 16px;">Externally styled paragraph.</p>
                    </div>
                </div>
            
                <div class="preview-frame">
                    <h4>Key Elements</h4>
                    <ul>
                        <li><strong>Inline Pros</strong>: Quick to apply, no separate file needed. <strong>Cons</strong>: Hard to maintain, overrides other styles.</li>
                        <li><strong>Internal Pros</strong>: Contained in HTML, good for small projects. <strong>Cons</strong>: Clutters HTML, not reusable across pages.</li>
                        <li><strong>External Pros</strong>: Reusable, maintainable, scalable. <strong>Cons</strong>: Requires separate file, additional HTTP request.</li>
                        <li>Choose the method based on project size and maintenance needs.</li>
                    </ul>
                </div>
            
                <div class="exercise-container">
                    <h3>Practical Exercise</h3>
                    <p>Create a webpage that:</p>
                    <ul>
                        <li>Uses inline CSS to style one paragraph.</li>
                        <li>Uses internal CSS to style a second paragraph.</li>
                        <li>Uses an external CSS file to style a third paragraph.</li>
                        <li>Compares the maintainability of each method by updating the styles.</li>
                    </ul>
                </div>
            </div>

           <!--syntax-structure-->
<div id="syntax-structure-content" class="content-section">
    <h2>Basic Syntax Structure</h2>
    <p>CSS syntax consists of rules that define how HTML elements are styled.</p>
    <p>Each rule includes a selector to target elements and declarations to specify styles, enclosed in curly braces.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Selectors identify which HTML elements to style.</li>
        <li>Declarations specify the properties (e.g., <code>color</code>) and values (e.g., <code>blue</code>) to apply.</li>
        <li>Rules are applied in a cascading manner based on specificity and order.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure selectors target elements accurately to avoid unintended styling that could affect accessibility.</li>
        <li>Use clear, semantic selectors to maintain readable code for assistive technologies.</li>
        <li>Test CSS rules to ensure they don’t disrupt content accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use consistent formatting (e.g., indentation) for readability.</li>
        <li>Group related selectors to reduce redundancy.</li>
        <li>Comment complex rules to explain their purpose.</li>
        <li>Avoid overly specific selectors to maintain flexibility.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;CSS Syntax&lt;/title&gt;
    &lt;style&gt;
        /* Selector targets h1 elements */
        h1 {
            color: navy; /* Declaration: property and value */
            font-size: 24px;
        }
        /* Multiple declarations for p elements */
        p {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;CSS Syntax Example&lt;/h1&gt;
    &lt;p&gt;This paragraph uses CSS rules.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="color: navy; font-size: 24px;">CSS Syntax Example</h1>
            <p style="font-family: Arial, sans-serif; line-height: 1.6;">This paragraph uses CSS rules.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>A CSS rule includes a selector and one or more declarations.</li>
            <li>Declarations are written as <code>property: value;</code>.</li>
            <li>Curly braces <code>{}</code> enclose declarations.</li>
            <li>Comments (e.g., <code>/* comment */</code>) improve code clarity.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Includes a heading and paragraph.</li>
            <li>Uses CSS rules with selectors to style the heading (color, font-size) and paragraph (font-family, line-height).</li>
            <li>Adds comments to explain each rule.</li>
            <li>Tests the styles in a browser.</li>
        </ul>
    </div>
</div>

<!--selector-types-->
<div id="selector-types-content" class="content-section">
    <h2>Selector Types</h2>
    <p>CSS selectors are used to target specific HTML elements for styling.</p>
    <p>Different selector types allow precise control over which elements are styled.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Enable targeting of elements based on tag names, classes, IDs, attributes, or states.</li>
        <li>Allow grouping and combining selectors for efficient styling.</li>
        <li>Support dynamic styling through pseudo-classes and pseudo-elements.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use semantic selectors to ensure styles align with content meaning.</li>
        <li>Avoid overly complex selectors that may confuse assistive technologies.</li>
        <li>Ensure pseudo-class selectors (e.g., <code>:focus</code>) enhance accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Prefer class selectors for reusable styles.</li>
        <li>Use ID selectors sparingly due to high specificity.</li>
        <li>Combine selectors efficiently to reduce CSS file size.</li>
        <li>Test selectors across browsers for consistency.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Selector Types&lt;/title&gt;
    &lt;style&gt;
        h1 { /* Element selector */
            color: green;
        }
        .highlight { /* Class selector */
            background-color: yellow;
        }
        #unique { /* ID selector */
            font-weight: bold;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Heading&lt;/h1&gt;
    &lt;p class="highlight"&gt;Highlighted text.&lt;/p&gt;
    &lt;p id="unique"&gt;Unique paragraph.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="color: green;">Heading</h1>
            <p style="background-color: yellow;">Highlighted text.</p>
            <p style="font-weight: bold;">Unique paragraph.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Element selectors target HTML tags (e.g., <code>h1</code>).</li>
            <li>Class selectors (<code>.class</code>) are reusable across multiple elements.</li>
            <li>ID selectors (<code>#id</code>) are unique to one element.</li>
            <li>Other selectors include universal, attribute, pseudo-classes, and pseudo-elements.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Includes elements styled with element, class, and ID selectors.</li>
            <li>Applies different styles (e.g., color, background, font-weight) to demonstrate selector usage.</li>
            <li>Tests the page to ensure selectors target the correct elements.</li>
        </ul>
    </div>
</div>

<!--element-selectors-->
<div id="element-selectors-content" class="content-section">
    <h2>Element Selectors (div, p)</h2>
    <p>Element selectors target HTML elements based on their tag names, such as <code>div</code> or <code>p</code>.</p>
    <p>They are simple and apply styles to all instances of the specified element.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Apply styles to all elements of a specific type.</li>
        <li>Useful for setting default styles for common elements.</li>
        <li>Provide a broad, low-specificity way to style elements.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure element selectors don’t override more specific styles needed for accessibility.</li>
        <li>Use semantic elements to maintain accessibility when applying styles.</li>
        <li>Test to ensure styles don’t disrupt content readability.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use element selectors for global styles, but combine with classes for specific cases.</li>
        <li>Avoid overuse, as they affect all instances of an element.</li>
        <li>Keep specificity low to allow overrides by more targeted selectors.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Element Selectors&lt;/title&gt;
    &lt;style&gt;
        div {
            border: 1px solid #ccc;
            padding: 10px;
        }
        p {
            color: #444;
            font-size: 14px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div&gt;Div content&lt;/div&gt;
    &lt;p&gt;Paragraph content&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="border: 1px solid #ccc; padding: 10px;">Div content</div>
            <p style="color: #444; font-size: 14px;">Paragraph content</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Element selectors are written as the tag name (e.g., <code>div</code>, <code>p</code>).</li>
            <li>They have low specificity, making them easy to override.</li>
            <li>Useful for setting baseline styles for elements.</li>
            <li>Can lead to unintended styling if not used carefully.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses element selectors to style all <code>div</code> and <code>p</code> elements.</li>
            <li>Applies distinct styles (e.g., border for div, color for p).</li>
            <li>Tests the page to ensure all elements are styled correctly.</li>
        </ul>
    </div>
</div>

<!--class selectors-->
<div id="class-selectors-content" class="content-section">
    <h2>Class Selectors (.class)</h2>
    <p>Class selectors target HTML elements with a specific <code>class</code> attribute, prefixed with a dot (e.g., <code>.class</code>).</p>
    <p>They are reusable and allow styling multiple elements with the same class.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Apply styles to multiple elements with the same class attribute.</li>
        <li>Enable reusable and modular styling.</li>
        <li>Provide moderate specificity, balancing flexibility and control.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use descriptive class names to maintain clarity for accessibility tools.</li>
        <li>Ensure class-based styles don’t obscure content for screen readers.</li>
        <li>Test class styles to ensure consistent application across elements.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use meaningful class names (e.g., <code>.button</code>, <code>.highlight</code>) for clarity.</li>
        <li>Avoid overusing classes for single elements; use IDs if unique.</li>
        <li>Combine classes for flexible styling (e.g., <code>class="btn primary"</code>).</li>
        <li>Keep class selectors specific but not overly complex.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Class Selectors&lt;/title&gt;
    &lt;style&gt;
        .highlight {
            background-color: #ff0;
            padding: 5px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p class="highlight"&gt;Highlighted paragraph&lt;/p&gt;
    &lt;div class="highlight"&gt;Highlighted div&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <p style="background-color: #ff0; padding: 5px;">Highlighted paragraph</p>
            <div style="background-color: #ff0; padding: 5px;">Highlighted div</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Class selectors are written as <code>.classname</code>.</li>
            <li>Multiple elements can share the same class.</li>
            <li>Classes are reusable and have moderate specificity.</li>
            <li>Multiple classes can be applied to a single element.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a class selector to style multiple elements (e.g., <code>p</code>, <code>div</code>) with the same class.</li>
            <li>Applies styles like background color and padding.</li>
            <li>Tests the page to verify all elements with the class are styled.</li>
        </ul>
    </div>
</div>

<!--id selectors-->
<div id="id-selectors-content" class="content-section">
    <h2>ID Selectors (#id)</h2>
    <p>ID selectors target a single HTML element with a specific <code>id</code> attribute, prefixed with a hash (e.g., <code>#id</code>).</p>
    <p>They are unique to one element per page and have high specificity.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Apply styles to a single, unique element.</li>
        <li>Useful for targeting specific sections or components.</li>
        <li>Provide high specificity for overriding other styles.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure ID selectors don’t override accessibility-focused styles (e.g., focus states).</li>
        <li>Use descriptive ID names to maintain clarity for assistive technologies.</li>
        <li>Verify IDs are unique to avoid conflicts.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use IDs sparingly due to high specificity, which can complicate overrides.</li>
        <li>Ensure each ID is unique within a page.</li>
        <li>Prefer class selectors for reusable styles.</li>
        <li>Use IDs for JavaScript targeting or unique styling needs.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;ID Selectors&lt;/title&gt;
    &lt;style&gt;
        #main-header {
            color: #800080;
            font-size: 28px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 id="main-header"&gt;Main Header&lt;/h1&gt;
    &lt;h1&gt;Other Header&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="color: #800080; font-size: 28px;">Main Header</h1>
            <h1>Other Header</h1>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>ID selectors are written as <code>#idname</code>.</li>
            <li>Each ID must be unique within a page.</li>
            <li>IDs have high specificity, overriding most other selectors.</li>
            <li>Commonly used for unique elements like headers or footers.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses an ID selector to style a unique element (e.g., a header).</li>
            <li>Applies styles like color and font-size.</li>
            <li>Ensures the ID is unique and tests the styling.</li>
        </ul>
    </div>
</div>

<!--universal selectors-->
<div id="universal-selectors-content" class="content-section">
    <h2>Universal Selectors (*)</h2>
    <p>The universal selector (<code>*</code>) targets all elements on a page.</p>
    <p>It is used for applying global styles but has low specificity.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Apply styles to every element, often for resetting or default styles.</li>
        <li>Useful for setting base properties like margins or box-sizing.</li>
        <li>Can be combined with other selectors for specific contexts.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid using universal selectors for critical accessibility styles, as they may override specific rules.</li>
        <li>Test to ensure global styles don’t disrupt content readability or navigation.</li>
        <li>Use cautiously to avoid unintended side effects.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use for CSS resets (e.g., removing default margins) or global properties.</li>
        <li>Avoid overuse due to performance impact on large pages.</li>
        <li>Combine with specific selectors to limit scope (e.g., <code>.container *</code>).</li>
        <li>Test thoroughly to ensure no unintended styling.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Universal Selector&lt;/title&gt;
    &lt;style&gt;
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Heading&lt;/h1&gt;
    &lt;p&gt;Paragraph&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="margin: 0; padding: 0; box-sizing: border-box;">Heading</h1>
            <p style="margin: 0; padding: 0; box-sizing: border-box;">Paragraph</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>The universal selector is written as <code>*</code>.</li>
            <li>It has the lowest specificity, easily overridden.</li>
            <li>Commonly used in CSS resets to normalize styles.</li>
            <li>Can impact performance if overused on complex pages.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses the universal selector to reset margins and padding.</li>
            <li>Adds a specific style to one element to override the universal selector.</li>
            <li>Tests the page to ensure the reset applies globally.</li>
        </ul>
    </div>
</div>

<!--attribute selectors-->
<div id="attribute-selectors-content" class="content-section">
    <h2>Attribute Selectors ([type="text"])</h2>
    <p>Attribute selectors target elements based on their attributes or attribute values, using square brackets (e.g., <code>[type="text"]</code>).</p>
    <p>They are useful for styling elements with specific attributes, like form inputs.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Target elements with specific attributes or values (e.g., <code>type</code>, <code>href</code>).</li>
        <li>Allow precise styling of elements without relying on classes or IDs.</li>
        <li>Support partial matching for flexible targeting.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure attribute selectors don’t disrupt accessibility-focused attributes (e.g., <code>aria-*</code>).</li>
        <li>Use attribute selectors to enhance form accessibility (e.g., styling required fields).</li>
        <li>Test to ensure styles apply correctly to targeted elements.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use attribute selectors for elements with unique attributes (e.g., form inputs).</li>
        <li>Combine with other selectors for specificity (e.g., <code>input[type="text"]</code>).</li>
        <li>Avoid overly complex attribute selectors for performance.</li>
        <li>Use partial matching (e.g., <code>[class^="btn"]</code>) for flexibility.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Attribute Selectors&lt;/title&gt;
    &lt;style&gt;
        input[type="text"] {
            border: 2px solid #00f;
            padding: 5px;
        }
        [data-role="button"] {
            background-color: #008000;
            color: #fff;
            padding: 10px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;input type="text" placeholder="Text input"&gt;
    &lt;div data-role="button"&gt;Button&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <input type="text" placeholder="Text input" style="border: 2px solid #00f; padding: 5px;">
            <div style="background-color: #008000; color: #fff; padding: 10px;">Button</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Attribute selectors target elements with specific attributes (e.g., <code>[type="text"]</code>).</li>
            <li>Support exact, partial, or pattern-based matching.</li>
            <li>Useful for styling form elements or custom attributes.</li>
            <li>Have moderate specificity, depending on the selector structure.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses attribute selectors to style form inputs with <code>type="text"</code> and elements with a custom <code>data-</code> attribute.</li>
            <li>Applies distinct styles (e.g., border, background).</li>
            <li>Tests the page to ensure only targeted elements are styled.</li>
        </ul>
    </div>
</div>

<!--pseudo class selectors-->
<div id="pseudo-class-selectors-content" class="content-section">
    <h2>Pseudo-classes (:hover, :nth-child, :focus)</h2>
    <p>Pseudo-classes are keywords added to selectors to style elements based on their state or position (e.g., <code>:hover</code>, <code>:nth-child</code>).</p>
    <p>They enable dynamic and interactive styling.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Style elements based on user interactions (e.g., <code>:hover</code>, <code>:focus</code>).</li>
        <li>Target elements based on their position or structure (e.g., <code>:nth-child</code>).</li>
        <li>Enhance user experience with interactive feedback.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>:focus</code> styles are visible for keyboard navigation.</li>
        <li>Use <code>:hover</code> cautiously, as it’s not applicable on touch devices.</li>
        <li>Test pseudo-class styles with assistive technologies to ensure compatibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Always define <code>:focus</code> alongside <code>:hover</code> for accessibility.</li>
        <li>Use <code>:nth-child</code> for consistent patterns (e.g., alternating row colors).</li>
        <li>Avoid complex pseudo-class chains for performance.</li>
        <li>Test across devices to ensure pseudo-classes behave as expected.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Pseudo-classes&lt;/title&gt;
    &lt;style&gt;
        a:hover {
            color: #ff0000;
            text-decoration: underline;
        }
        input:focus {
            border-color: #00f;
            outline: none;
        }
        li:nth-child(odd) {
            background-color: #f0f0f0;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;a href="#"&gt;Hover me&lt;/a&gt;
    &lt;input type="text" placeholder="Focus here"&gt;
    &lt;ul&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
        &lt;li&gt;Item 3&lt;/li&gt;
    &lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <p><em>(Hover effect not shown statically)</em></p>
            <input type="text" placeholder="Focus here" style="border-color: #00f;">
            <ul>
                <li style="background-color: #f0f0f0;">Item 1</li>
                <li>Item 2</li>
                <li style="background-color: #f0f0f0;">Item 3</li>
            </ul>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Pseudo-classes are prefixed with a colon (e.g., <code>:hover</code>).</li>
            <li>Common pseudo-classes include <code>:hover</code>, <code>:focus</code>, <code>:nth-child</code>.</li>
            <li>They add interactivity and positional styling.</li>
            <li><code>:focus</code> is critical for accessibility.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>:hover</code> and <code>:focus</code> to style links and inputs.</li>
            <li>Uses <code>:nth-child</code> to style alternating list items.</li>
            <li>Tests the page to ensure interactive styles work correctly.</li>
        </ul>
    </div>
</div>

<!--pseudo element selector-->
<div id="pseudo-element-selectors-content" class="content-section">
    <h2>Pseudo-elements (::before, ::after)</h2>
    <p>Pseudo-elements allow styling of specific parts of an element or adding content before or after it (e.g., <code>::before</code>, <code>::after</code>).</p>
    <p>They are used for decorative or structural enhancements.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Add content or style parts of an element without extra HTML.</li>
        <li>Enhance design with icons, counters, or decorative elements.</li>
        <li>Support complex layouts and effects.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid using pseudo-elements for critical content, as screen readers may ignore them.</li>
        <li>Ensure pseudo-element styles don’t obscure accessible content.</li>
        <li>Test to verify pseudo-elements don’t interfere with navigation.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Always include the <code>content</code> property for <code>::before</code> and <code>::after</code>.</li>
        <li>Use pseudo-elements for decorative purposes, not essential content.</li>
        <li>Combine with other selectors for precise targeting.</li>
        <li>Test across browsers, as pseudo-element support varies.</li>
    </ul>

    <div class="code-display">
        <div class="code-containerFaults: none;">Usage</h3>
            <div class="code-block">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Pseudo-elements&lt;/title&gt;
    &lt;style&gt;
        p::before {
            content: "★ ";
            color: #ff0;
        }
        p::after {
            content: "!";
            color: #f00;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p&gt;Decorated text&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <p><span style="color: #ff0;">★ </span>Decorated text<span style="color: #f00;">!</span></p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Pseudo-elements are written with double colons (e.g., <code>::before</code>).</li>
            <li>The <code>content</code> property is required for <code>::before</code> and <code>::after</code>.</li>
            <li>Used for adding decorative content or styling parts of an element.</li>
            <li>Not suitable for critical content due to accessibility limitations.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>::before</code> and <code>::after</code> to add decorative content to a paragraph.</li>
            <li>Styles the pseudo-elements with colors or symbols.</li>
            <li>Tests the page to ensure the decorations appear correctly.</li>
        </ul>
    </div>
</div>

<!--font properties-->
<div id="font-properties-content" class="content-section">
    <h2>Font Properties</h2>
    <p>Font properties in CSS control the appearance of text, defining the typeface, size, weight, and style.</p>
    <p>They are essential for creating a consistent typographic hierarchy and ensuring text is readable and visually appealing.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Specify the typeface with <code>font-family</code> to ensure consistent typography.</li>
        <li>Adjust text size with <code>font-size</code> for readability and hierarchy.</li>
        <li>Control text emphasis with <code>font-weight</code> and <code>font-style</code> for stylistic effects.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>font-size</code> is at least 16px for body text to meet readability guidelines.</li>
        <li>Choose legible <code>font-family</code> options to avoid confusion for assistive technologies.</li>
        <li>Test font styles with screen readers to ensure clarity and compatibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use a fallback font stack in <code>font-family</code> for cross-device compatibility.</li>
        <li>Prefer relative units (e.g., <code>rem</code>, <code>em</code>) for <code>font-size</code> to support scaling.</li>
        <li>Limit <code>font-weight</code> and <code>font-style</code> variations to maintain consistency.</li>
        <li>Test font rendering across browsers for consistent display.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Font Properties&lt;/title&gt;
                        &lt;style&gt;
                            /* Serif heading with bold weight */
                            h1 {
                                font-family: "Georgia, serif";
                                font-size: 2rem;
                                font-weight: 700;
                                font-style: normal;
                            }
                            /* Sans-serif paragraph with italic style */
                            p {
                                font-family: "Arial, sans-serif";
                                font-size: 16px;
                                font-weight: 400;
                                font-style: italic;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Font Properties Example&lt;/h1&gt;
                        &lt;p&gt;This paragraph uses font properties.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                    
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="font-family: Georgia, serif; font-size: 2rem; font-weight: 700; font-style: normal;">Font Properties Example</h1>
            <p style="font-family: Arial, sans-serif; font-size: 16px; font-weight: 400; font-style: italic;">This paragraph uses font properties.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>font-family</code> defines the typeface with a fallback stack.</li>
            <li><code>font-size</code> sets text size, preferably in relative units.</li>
            <li><code>font-weight</code> and <code>font-style</code> control emphasis and style.</li>
            <li>Legible fonts and sizes ensure accessibility.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>font-family</code> to style a heading with a serif font and a paragraph with a sans-serif font.</li>
            <li>Applies different <code>font-size</code> values and uses <code>font-weight</code> and <code>font-style</code> for emphasis.</li>
            <li>Tests the page to ensure fonts render correctly across browsers.</li>
        </ul>
    </div>
</div>

<!--text alignment-->
<div id="text-alignment-content" class="content-section">
    <h2>Text Alignment</h2>
    <p>Text alignment properties control the horizontal positioning, capitalization, and decorative effects of text.</p>
    <p>They enhance the visual structure and stylistic consistency of a webpage.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Align text with <code>text-align</code> to create balanced layouts.</li>
        <li>Modify text case with <code>text-transform</code> for stylistic consistency.</li>
        <li>Add or remove decorative lines with <code>text-decoration</code> for emphasis or link styling.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid <code>text-align: justify</code> for large text blocks to maintain readability.</li>
        <li>Ensure links with <code>text-decoration: none</code> have alternative visual cues for accessibility.</li>
        <li>Test with keyboard navigation to ensure focus states are clear.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>text-align: left</code> or <code>center</code> for body text and headings, respectively.</li>
        <li>Apply <code>text-transform</code> sparingly to avoid visual strain in long text.</li>
        <li>Replace default link underlines with <code>border-bottom</code> for clarity.</li>
        <li>Test alignment across screen sizes for responsiveness.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Text Alignment&lt;/title&gt;
                        &lt;style&gt;
                            /* Centered, uppercase heading */
                            h1 {
                                text-align: center;
                                text-transform: uppercase;
                                text-decoration: underline;
                            }
                            /* Left-aligned paragraph */
                            p {
                                text-align: left;
                                text-transform: capitalize;
                                text-decoration: none;
                            }
                            /* Link with custom styling */
                            a {
                                text-decoration: none;
                                border-bottom: 1px solid blue;
                            }
                            a:hover, a:focus {
                                text-decoration: underline;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Text Alignment Example&lt;/h1&gt;
                        &lt;p&gt;This paragraph demonstrates text properties.&lt;/p&gt;
                        &lt;a href="#"&gt;Styled link&lt;/a&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                    
                    
                    
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="text-align: center; text-transform: uppercase; text-decoration: underline;">Text Alignment Example</h1>
            <p style="text-align: left; text-transform: capitalize; text-decoration: none;">This paragraph demonstrates text properties.</p>
            <a href="#" style="text-decoration: none; border-bottom: 1px solid blue;">Styled link</a>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>text-align</code> controls horizontal text positioning.</li>
            <li><code>text-transform</code> modifies text case for style.</li>
            <li><code>text-decoration</code> adds or removes decorative lines.</li>
            <li>Accessible link styling requires visual cues beyond color.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>text-align</code> to center a heading and left-align a paragraph.</li>
            <li>Applies <code>text-transform</code> and <code>text-decoration</code> to style text and links.</li>
            <li>Tests the page to ensure alignment and decorations render correctly.</li>
        </ul>
    </div>
</div>

<!--line height and spacing-->
<div id="line-height-spacing-content" class="content-section">
    <h2>Line Height and Spacing</h2>
    <p>Line height and spacing properties control the vertical and horizontal spacing of text.</p>
    <p>They improve readability and create a balanced typographic layout.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Adjust line spacing with <code>line-height</code> for better readability.</li>
        <li>Fine-tune character spacing with <code>letter-spacing</code> for style or legibility.</li>
        <li>Control word spacing with <code>word-spacing</code> for typographic refinement.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>line-height</code> is at least 1.5 for body text to meet readability guidelines.</li>
        <li>Avoid excessive <code>letter-spacing</code> or <code>word-spacing</code> to maintain text coherence.</li>
        <li>Test spacing with screen readers to ensure navigability.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use a <code>line-height</code> of 1.5 to 1.8 for body text to balance readability.</li>
        <li>Apply <code>letter-spacing</code> sparingly for headings or emphasis.</li>
        <li>Use <code>word-spacing</code> cautiously due to inconsistent browser rendering.</li>
        <li>Test spacing across devices for consistency.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Line Height and Spacing&lt;/title&gt;
                        &lt;style&gt;
                            /* Heading with increased letter spacing */
                            h1 {
                                line-height: 1.4;
                                letter-spacing: 1px;
                                word-spacing: 2px;
                            }
                            /* Paragraph with comfortable line height */
                            p {
                                line-height: 1.6;
                                letter-spacing: normal;
                                word-spacing: normal;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Line Height and Spacing&lt;/h1&gt;
                        &lt;p&gt;This paragraph demonstrates spacing properties.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                    
                    
                    
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="line-height: 1.4; letter-spacing: 1px; word-spacing: 2px;">Line Height and Spacing</h1>
            <p style="line-height: 1.6; letter-spacing: normal; word-spacing: normal;">This paragraph demonstrates spacing properties.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>line-height</code> sets vertical spacing between lines.</li>
            <li><code>letter-spacing</code> adjusts space between characters.</li>
            <li><code>word-spacing</code> controls space between words.</li>
            <li>Adequate spacing enhances readability and accessibility.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>line-height</code> to set spacing for a heading and paragraph.</li>
            <li>Applies <code>letter-spacing</code> to the heading and keeps <code>word-spacing</code> normal.</li>
            <li>Tests the page to ensure spacing enhances readability.</li>
        </ul>
    </div>
</div>

<!--web-safe google fonts-->
<div id="web-safe-google-fonts-content" class="content-section">
    <h2>Web-safe Fonts vs Google Fonts</h2>
    <p>Web-safe fonts are pre-installed on most devices, ensuring consistent rendering without external resources.</p>
    <p>Google Fonts offer a wide variety of web-hosted typefaces for enhanced design flexibility.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Use web-safe fonts for reliable, fast-loading typography.</li>
        <li>Integrate Google Fonts for modern, unique typefaces to enhance branding.</li>
        <li>Combine both with fallbacks to ensure compatibility and performance.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure web-safe font fallbacks are legible if Google Fonts fail to load.</li>
        <li>Test Google Fonts with screen readers for compatibility.</li>
        <li>Minimize Google Font weights to reduce load time for accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use web-safe fonts for body text in performance-critical applications.</li>
        <li>Limit Google Fonts to 1-2 families to optimize performance.</li>
        <li>Include a fallback stack (e.g., <code>"Roboto, Arial, sans-serif"</code>).</li>
        <li>Test fonts across browsers and devices for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Web-safe Fonts vs Google Fonts&lt;/title&gt;
                        &lt;link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"&gt;
                        &lt;style&gt;
                            /* Google Font with web-safe fallback */
                            h1 {
                                font-family: "Roboto, Arial, sans-serif";
                                font-size: 2rem;
                                font-weight: 700;
                            }
                            /* Web-safe font */
                            p {
                                font-family: "Verdana, sans-serif";
                                font-size: 16px;
                                font-weight: 400;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Using Roboto from Google Fonts&lt;/h1&gt;
                        &lt;p&gt;This paragraph uses Verdana, a web-safe font.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                                        
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="font-family: Roboto, Arial, sans-serif; font-size: 2rem; font-weight: 700;">Using Roboto from Google Fonts</h1>
            <p style="font-family: Verdana, sans-serif; font-size: 16px; font-weight: 400;">This paragraph uses Verdana, a web-safe font.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Web-safe fonts ensure reliability without external resources.</li>
            <li>Google Fonts provide diverse typefaces via CDN.</li>
            <li>Fallback stacks ensure compatibility if fonts fail to load.</li>
            <li>Performance optimization is key for accessibility.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a Google Font for a heading with a web-safe fallback.</li>
            <li>Applies a web-safe font to a paragraph.</li>
            <li>Tests the page with and without internet to ensure fallbacks work.</li>
        </ul>
    </div>
</div>

<!--color formats-->
<div id="color-formats-content" class="content-section">
    <h2>Color Formats</h2>
    <p>Color formats in CSS define how colors are applied to elements like text or backgrounds.</p>
    <p>They offer varying levels of precision, flexibility, and transparency support.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Use named colors, Hex, RGB, or HSL for precise color specification.</li>
        <li>Apply RGBA or HSLA for transparency effects.</li>
        <li>Create consistent color schemes across a webpage.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure sufficient contrast between text and background (4.5:1 for normal text).</li>
        <li>Avoid relying solely on color to convey information.</li>
        <li>Test colors with color-blindness simulators for inclusivity.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use Hex or RGB for consistency in precise color definitions.</li>
        <li>Apply HSL for intuitive color scheme adjustments.</li>
        <li>Use RGBA/HSLA for subtle transparency without compromising readability.</li>
        <li>Test colors across devices for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Color Formats&lt;/title&gt;
                        &lt;style&gt;
                            /* Named color */
                            h1 {
                                color: navy;
                            }
                            /* Hex color */
                            p.hex {
                                color: #FF4500;
                            }
                            /* RGB color */
                            p.rgb {
                                color: rgb(0, 128, 0);
                            }
                            /* HSL color */
                            p.hsl {
                                color: hsl(240, 100%, 50%);
                            }
                            /* RGBA background */
                            p.rgba {
                                background-color: rgba(255, 0, 0, 0.5);
                            }
                            /* HSLA background */
                            p.hsla {
                                background-color: hsla(120, 100%, 50%, 0.3);
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Color Formats Example&lt;/h1&gt;
                        &lt;p class="hex"&gt;This text uses Hex color.&lt;/p&gt;
                        &lt;p class="rgb"&gt;This text uses RGB color.&lt;/p&gt;
                        &lt;p class="hsl"&gt;This text uses HSL color.&lt;/p&gt;
                        &lt;p class="rgba"&gt;This text has an RGBA background.&lt;/p&gt;
                        &lt;p class="hsla"&gt;This text has an HSLA background.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                    
                    
                    
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="color: navy;">Color Formats Example</h1>
            <p style="color: #FF4500;">This text uses Hex color.</p>
            <p style="color: rgb(0, 128, 0);">This text uses RGB color.</p>
            <p style="color: hsl(240, 100%, 50%);">This text uses HSL color.</p>
            <p style="background-color: rgba(255, 0, 0, 0.5);">This text has an RGBA background.</p>
            <p style="background-color: hsla(120, 100%, 50%, 0.3);">This text has an HSLA background.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Named colors are simple but limited in variety.</li>
            <li>Hex, RGB, and HSL offer precise color control.</li>
            <li>RGBA and HSLA add transparency via an alpha channel.</li>
            <li>Contrast and accessibility are critical for color choices.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses different color formats to style text and backgrounds.</li>
            <li>Applies at least one transparent color using RGBA or HSLA.</li>
            <li>Tests the page to ensure colors maintain sufficient contrast.</li>
        </ul>
    </div>
</div>

<!--background properties-->
<div id="background-properties-content" class="content-section">
    <h2>Background Properties</h2>
    <p>Background properties control the appearance of an element’s background, including colors and images.</p>
    <p>They are key for creating visually engaging designs.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Set solid colors with <code>background-color</code> for visual consistency.</li>
        <li>Apply images with <code>background-image</code> for decorative or thematic effects.</li>
        <li>Control image behavior with <code>background-repeat</code>, <code>background-position</code>, and <code>background-size</code>.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>background-color</code> contrasts with text for readability.</li>
        <li>Avoid critical content in <code>background-image</code>, as it’s inaccessible to screen readers.</li>
        <li>Test backgrounds in high-contrast mode for accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>background-color</code> as a fallback for <code>background-image</code>.</li>
        <li>Optimize images for performance (e.g., use WebP format).</li>
        <li>Set <code>background-repeat: no-repeat</code> for non-tiling images.</li>
        <li>Test backgrounds across devices for responsiveness.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Background Properties&lt;/title&gt;
                        &lt;style&gt;
                            /* Solid color background */
                            h1 {
                                background-color: #f0f0f0;
                                padding: 10px;
                            }
                            /* Image background with positioning */
                            div {
                                background-image: url('https://via.placeholder.com/150');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 200px;
                                color: white;
                                text-align: center;
                                padding-top: 80px;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Background Properties Example&lt;/h1&gt;
                        &lt;div&gt;Image Background&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                                        
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="background-color: #f0f0f0; padding: 10px;">Background Properties Example</h1>
            <div style="background-image: url('https://via.placeholder.com/150'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 200px; color: white; text-align: center; padding-top: 80px;">Image Background</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>background-color</code> sets a solid color.</li>
            <li><code>background-image</code> applies an image.</li>
            <li><code>background-repeat</code>, <code>background-position</code>, and <code>background-size</code> control image behavior.</li>
            <li>Contrast and accessibility are critical for backgrounds.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>background-color</code> for a heading and <code>background-image</code> for a div.</li>
            <li>Applies <code>background-repeat</code>, <code>background-position</code>, and <code>background-size</code> to control the image.</li>
            <li>Tests the page to ensure backgrounds render correctly.</li>
        </ul>
    </div>
</div>

<!--gradients-->
<div id="gradients-content" class="content-section">
    <h2>Gradients</h2>
    <p>Gradients in CSS create smooth transitions between colors, used as backgrounds or decorative effects.</p>
    <p>They include linear and radial gradients for versatile design options.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create linear gradients for directional color transitions.</li>
        <li>Use radial gradients for circular or elliptical color spreads.</li>
        <li>Enhance visual appeal without relying on images.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure gradient backgrounds maintain sufficient contrast with text.</li>
        <li>Avoid critical content in gradients, as they’re inaccessible to screen readers.</li>
        <li>Test gradients in high-contrast mode for readability.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>background-color</code> as a fallback for gradients.</li>
        <li>Keep gradients simple (2-3 colors) to avoid visual clutter.</li>
        <li>Specify direction or shape for precise gradient effects.</li>
        <li>Test gradients across browsers for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Gradients&lt;/title&gt;
                        &lt;style&gt;
                            /* Linear gradient */
                            h1 {
                                background: linear-gradient(to right, #ff0000, #0000ff);
                                color: white;
                                padding: 10px;
                            }
                            /* Radial gradient */
                            div {
                                background: radial-gradient(circle, #00ff00, #ffff00);
                                height: 200px;
                                text-align: center;
                                padding-top: 80px;
                                color: black;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Linear Gradient Example&lt;/h1&gt;
                        &lt;div&gt;Radial Gradient Example&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                    
                                        
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="background: linear-gradient(to right, #ff0000, #0000ff); color: white; padding: 10px;">Linear Gradient Example</h1>
            <div style="background: radial-gradient(circle, #00ff00, #ffff00); height: 200px; text-align: center; padding-top: 80px; color: black;">Radial Gradient Example</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Linear gradients transition colors in a direction (e.g., <code>to right</code>).</li>
            <li>Radial gradients spread colors from a center point.</li>
            <li>Gradients enhance design but require contrast for accessibility.</li>
            <li>Fallbacks ensure compatibility if gradients fail.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a linear gradient for a heading background.</li>
            <li>Applies a radial gradient to a div.</li>
            <li>Tests the page to ensure gradients render correctly.</li>
        </ul>
    </div>
</div>

<!--opacity vs rgba-->
<div id="opacity-vs-rgba-content" class="content-section">
    <h2>Opacity vs RGBA</h2>
    <p>Opacity and RGBA control transparency in CSS, but they differ in scope and application.</p>
    <p>Opacity affects an entire element, while RGBA applies transparency to specific properties like color.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Use <code>opacity</code> to make an entire element and its children transparent.</li>
        <li>Apply RGBA for transparent colors on specific properties (e.g., background, text).</li>
        <li>Create subtle visual effects like overlays or faded text.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure transparent elements maintain sufficient contrast with backgrounds.</li>
        <li>Avoid low <code>opacity</code> or RGBA values that reduce text readability.</li>
        <li>Test transparency in high-contrast mode for accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>opacity</code> for whole-element effects like hover transitions.</li>
        <li>Apply RGBA for targeted transparency (e.g., background or border).</li>
        <li>Combine with solid fallbacks to ensure visibility if transparency fails.</li>
        <li>Test across browsers, as transparency rendering may vary.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Opacity vs RGBA&lt;/title&gt;
                        &lt;style&gt;
                            /* Opacity affects entire element */
                            h1 {
                                opacity: 0.5;
                                background-color: #0000ff;
                                color: white;
                                padding: 10px;
                            }
                            /* RGBA for background transparency */
                            div {
                                background-color: rgba(255, 0, 0, 0.3);
                                color: black;
                                padding: 10px;
                                margin-top: 20px;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Opacity Example&lt;/h1&gt;
                        &lt;div&gt;RGBA Background Example&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                                        
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1 style="opacity: 0.5; background-color: #0000ff; color: white; padding: 10px;">Opacity Example</h1>
            <div style="background-color: rgba(255, 0, 0, 0.3); color: black; padding: 10px; margin-top: 20px;">RGBA Background Example</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>opacity</code> affects an element and its children (0 to 1).</li>
            <li>RGBA applies transparency to a specific color property.</li>
            <li>Both require careful contrast for readability.</li>
            <li>Fallbacks ensure visibility if transparency fails.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>opacity</code> to fade an entire element.</li>
            <li>Applies RGBA to a background or text color.</li>
            <li>Tests the page to ensure transparency maintains readability.</li>
        </ul>
    </div>
</div>

<!--Box Model Components-->
<div id="box-model-components-content" class="content-section">
    <h2>Understanding Content, Padding, Border, Margin</h2>
    <p>The CSS Box Model defines elements as boxes with four key components: content, padding, border, and margin, which determine size and spacing.</p>
    <p>Each component plays a specific role in an element's layout and interaction with other elements.</p>

    <h4>Purpose</h4>
    <ul>
        <li><strong>Content</strong>: Holds the element’s text, images, or other media.</li>
        <li><strong>Padding</strong>: Creates space between content and border for visual clarity.</li>
        <li><strong>Border</strong>: Surrounds padding, adding visible or stylistic edges.</li>
        <li><strong>Margin</strong>: Provides outer spacing to separate elements.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure padding doesn’t reduce touch target sizes for interactive elements.</li>
        <li>Use margins to prevent elements from overlapping or crowding.</li>
        <li>Test layouts for responsiveness to maintain component integrity.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Define explicit content dimensions (e.g., width, height) for consistency.</li>
        <li>Use padding to enhance readability and aesthetics.</li>
        <li>Apply borders sparingly to avoid visual clutter.</li>
        <li>Test margins for consistent spacing across devices.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Box Model Components&lt;/title&gt;
                        &lt;style&gt;
                            div {
                                width: 200px;
                                height: 100px;
                                padding: 15px;
                                border: 3px solid navy;
                                margin: 20px;
                                background-color: lightgray;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div&gt;Box Model Components&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 200px; height: 100px; padding: 15px; border: 3px solid navy; margin: 20px; background-color: lightgray;">Box Model Components</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>width</code>/<code>height</code>: Define content area size.</li>
            <li><code>padding</code>: Adds inner spacing, extends element size.</li>
            <li><code>border</code>: Surrounds padding, adds to total size.</li>
            <li><code>margin</code>: Creates outer spacing, doesn’t affect element size.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Styles a div with specific content dimensions, padding, border, and margin.</li>
            <li>Ensures the components are visually distinct (e.g., colored border, background).</li>
            <li>Tests the layout for accessibility and responsiveness.</li>
        </ul>
    </div>
</div>

<!--Box Sizing-->
<div id="box-sizing-content" class="content-section">
    <h2>Box-Sizing: Content-Box vs Border-Box</h2>
    <p>The <code>box-sizing</code> property controls how an element’s total width and height are calculated, affecting content, padding, and border.</p>
    <p><code>content-box</code> and <code>border-box</code> are the two main values, each with distinct sizing behaviors.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>content-box</code>: Width/height apply to content only; padding and border add to total size.</li>
        <li><code>border-box</code>: Width/height include content, padding, and border for predictable sizing.</li>
        <li>Simplify layout calculations and ensure consistent element sizes.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>border-box</code> to prevent unexpected size increases that may break layouts.</li>
        <li>Ensure elements remain accessible with consistent sizing across devices.</li>
        <li>Test for overflow issues when using <code>content-box</code>.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Apply <code>box-sizing: border-box</code> globally for easier size management.</li>
        <li>Use <code>content-box</code> only for specific cases requiring content-only sizing.</li>
        <li>Test layouts with both values to understand their impact.</li>
        <li>Include fallbacks for older browsers with limited <code>box-sizing</code> support.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Box Sizing Example&lt;/title&gt;
                        &lt;style&gt;
                            .content-box {
                                box-sizing: content-box;
                                width: 200px;
                                padding: 20px;
                                border: 5px solid green;
                                margin: 10px;
                                background-color: lightyellow;
                            }
                            .border-box {
                                box-sizing: border-box;
                                width: 200px;
                                padding: 20px;
                                border: 5px solid blue;
                                margin: 10px;
                                background-color: lightcoral;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="content-box"&gt;Content-Box Example&lt;/div&gt;
                        &lt;div class="border-box"&gt;Border-Box Example&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;




                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="box-sizing: content-box; width: 200px; padding: 20px; border: 5px solid green; margin: 10px; background-color: lightyellow;">Content-Box Example</div>
            <div style="box-sizing: border-box; width: 200px; padding: 20px; border: 5px solid blue; margin: 10px; background-color: lightcoral;">Border-Box Example</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>content-box</code>: Total size = content + padding + border.</li>
            <li><code>border-box</code>: Total size = width/height (includes padding, border).</li>
            <li><code>border-box</code> simplifies responsive design.</li>
            <li>Global <code>* { box-sizing: border-box; }</code> is common practice.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Compares two divs: one with <code>content-box</code>, one with <code>border-box</code>.</li>
            <li>Uses identical width, padding, and border values for both.</li>
            <li>Tests the visual and functional differences in layout.</li>
        </ul>
    </div>
</div>

<!--Margin Collapsing-->
<div id="margin-collapsing-content" class="content-section">
    <h2>Margin Collapsing</h2>
    <p>Margin collapsing occurs when vertical margins of adjacent block-level elements combine into a single margin, equal to the larger of the two.</p>
    <p>This behavior applies only to vertical margins, not horizontal, and occurs under specific conditions.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Prevent excessive vertical spacing between elements for cleaner layouts.</li>
        <li>Ensure consistent spacing in content stacks (e.g., paragraphs, headings).</li>
        <li>Optimize visual hierarchy without manual margin adjustments.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure collapsed margins don’t cause elements to overlap or misalign.</li>
        <li>Test spacing for readability, especially in dense content areas.</li>
        <li>Avoid relying solely on collapsing for critical spacing needs.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Understand collapsing conditions: adjacent block elements, no padding/border separation.</li>
        <li>Use padding or borders to prevent unwanted collapsing.</li>
        <li>Test layouts to confirm margins behave as expected.</li>
        <li>Document margin collapsing in complex layouts to avoid confusion.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Margin Collapsing Example&lt;/title&gt;
                        &lt;style&gt;
                            .box1 {
                                margin-bottom: 30px;
                                background-color: lightgreen;
                                padding: 10px;
                            }
                            .box2 {
                                margin-top: 20px;
                                background-color: lightpink;
                                padding: 10px;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="box1"&gt;Box 1 (30px bottom margin)&lt;/div&gt;
                        &lt;div class="box2"&gt;Box 2 (20px top margin)&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="margin-bottom: 30px; background-color: lightgreen; padding: 10px;">Box 1 (30px bottom margin)</div>
            <div style="margin-top: 20px; background-color: lightpink; padding: 10px;">Box 2 (20px top margin)</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Margins collapse to the larger value (e.g., 30px instead of 30px + 20px).</li>
            <li>Collapsing occurs between adjacent block elements without separation.</li>
            <li>Padding, borders, or inline content prevent collapsing.</li>
            <li>Parent-child margins may also collapse under specific conditions.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Stacks two divs with different vertical margins to demonstrate collapsing.</li>
            <li>Adds a third div with padding or border to prevent collapsing.</li>
            <li>Tests the layout to observe margin behavior differences.</li>
        </ul>
    </div>
</div>

<!--Shorthand Values for Padding/Margin-->
<div id="shorthand-values-content" class="content-section">
    <h2>Shorthand Values for Padding/Margin</h2>
    <p>Shorthand properties for <code>padding</code> and <code>margin</code> allow setting all sides (top, right, bottom, left) in a single declaration.</p>
    <p>These properties reduce code verbosity and improve maintainability.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Simplify CSS by combining multiple padding/margin values.</li>
        <li>Ensure consistent spacing with fewer lines of code.</li>
        <li>Enhance readability and maintainability of stylesheets.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure shorthand values don’t accidentally reduce touch target sizes.</li>
        <li>Test shorthand margins for proper spacing in responsive designs.</li>
        <li>Verify shorthand padding maintains content readability.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use 1–4 value syntax (e.g., <code>padding: 10px 20px</code>) for clarity.</li>
        <li>Apply consistent units (e.g., px, rem) across shorthand declarations.</li>
        <li>Test shorthand values to avoid unintended spacing issues.</li>
        <li>Combine with <code>box-sizing: border-box</code> for predictable layouts.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Shorthand Padding/Margin&lt;/title&gt;
                        &lt;style&gt;
                            .box {
                                padding: 10px 20px 15px 25px; /* top, right, bottom, left */
                                margin: 20px 10px; /* top/bottom, left/right */
                                background-color: lightblue;
                                border: 2px solid black;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="box"&gt;Shorthand Example&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="padding: 10px 20px 15px 25px; margin: 20px 10px; background-color: lightblue; border: 2px solid black;">Shorthand Example</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>1 value: Applies to all sides (e.g., <code>padding: 10px</code>).</li>
            <li>2 values: Top/bottom, left/right (e.g., <code>margin: 20px 10px</code>).</li>
            <li>3 values: Top, left/right, bottom.</li>
            <li>4 values: Top, right, bottom, left (clockwise).</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses shorthand <code>padding</code> and <code>margin</code> for a div.</li>
            <li>Applies different values for each side using 2–4 value syntax.</li>
            <li>Tests the layout for visual consistency and responsiveness.</li>
        </ul>
    </div>
</div>

<!--Display Property-->
<div id="display-property-content" class="content-section">
    <h2>Display: Block, Inline, Inline-Block, None</h2>
    <p>The <code>display</code> property controls how an element is rendered in the layout, affecting its flow and interaction with other elements.</p>
    <p>Common values include <code>block</code>, <code>inline</code>, <code>inline-block</code>, and <code>none</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>block</code>: Takes full width, starts on a new line (e.g., div, p).</li>
        <li><code>inline</code>: Flows within text, no width/height settings (e.g., span, a).</li>
        <li><code>inline-block</code>: Inline flow but allows width/height (e.g., buttons).</li>
        <li><code>none</code>: Removes element from layout entirely.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>display: none</code> doesn’t hide critical content from screen readers.</li>
        <li>Use <code>inline-block</code> for touch-friendly elements with proper sizing.</li>
        <li>Test layouts for semantic correctness with different display values.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>block</code> for structural elements, <code>inline</code> for text-level elements.</li>
        <li>Apply <code>inline-block</code> for elements needing inline flow with dimensions.</li>
        <li>Avoid <code>display: none</code> for content that should remain accessible.</li>
        <li>Test across browsers for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Display Property Example&lt;/title&gt;
                        &lt;style&gt;
                            .block { display: block; background: lightblue; margin: 5px; }
                            .inline { display: inline; background: lightgreen; margin: 5px; }
                            .inline-block { display: inline-block; width: 100px; background: lightcoral; margin: 5px; }
                            .none { display: none; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="block"&gt;Block Element&lt;/div&gt;
                        &lt;span class="inline"&gt;Inline Element&lt;/span&gt;
                        &lt;div class="inline-block"&gt;Inline-Block Element&lt;/div&gt;
                        &lt;div class="none"&gt;Hidden Element&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: block; background: lightblue; margin: 5px;">Block Element</div>
            <span style="display: inline; background: lightgreen; margin: 5px;">Inline Element</span>
            <div style="display: inline-block; width: 100px; background: lightcoral; margin: 5px;">Inline-Block Element</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>block</code>: Full-width, new line, supports all box model properties.</li>
            <li><code>inline</code>: No width/height, flows with text.</li>
            <li><code>inline-block</code>: Inline flow with block-like sizing.</li>
            <li><code>none</code>: Removes element from rendering and layout.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>block</code>, <code>inline</code>, and <code>inline-block</code> for different elements.</li>
            <li>Hides an element with <code>display: none</code>.</li>
            <li>Tests the layout for visual and accessibility consistency.</li>
        </ul>
    </div>
</div>

<!--Visibility Property-->
<div id="visibility-property-content" class="content-section">
    <h2>Visibility: Visible, Hidden, Collapse</h2>
    <p>The <code>visibility</code> property controls whether an element is visible while still occupying space in the layout.</p>
    <p>Values include <code>visible</code>, <code>hidden</code>, and <code>collapse</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>visible</code>: Element is fully visible (default).</li>
        <li><code>hidden</code>: Element is invisible but reserves space.</li>
        <li><code>collapse</code>: Hides table rows/columns, removing space (mainly for tables).</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>visibility: hidden</code> doesn’t hide critical content from screen readers.</li>
        <li>Test <code>collapse</code> for table layouts to maintain data integrity.</li>
        <li>Verify hidden elements don’t disrupt navigation or focus order.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>visibility: hidden</code> for toggling visibility without affecting layout.</li>
        <li>Apply <code>collapse</code> only for table elements to avoid unexpected behavior.</li>
        <li>Combine with transitions for smooth visibility effects.</li>
        <li>Test across browsers for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Visibility Property Example&lt;/title&gt;
                        &lt;style&gt;
                            .visible { visibility: visible; background: lightblue; padding: 10px; margin: 5px; }
                            .hidden { visibility: hidden; background: lightgreen; padding: 10px; margin: 5px; }
                            table { border-collapse: collapse; }
                            .collapse { visibility: collapse; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="visible"&gt;Visible Element&lt;/div&gt;
                        &lt;div class="hidden"&gt;Hidden Element&lt;/div&gt;
                        &lt;table border="1"&gt;
                            &lt;tr&gt;&lt;td&gt;Row 1&lt;/td&gt;&lt;/tr&gt;
                            &lt;tr class="collapse"&gt;&lt;td&gt;Row 2 (Collapsed)&lt;/td&gt;&lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="visibility: visible; background: lightblue; padding: 10px; margin: 5px;">Visible Element</div>
            <div style="visibility: hidden; background: lightgreen; padding: 10px; margin: 5px;">Hidden Element</div>
            <table style="border-collapse: collapse;" border="1">
                <tr><td>Row 1</td></tr>
            </table>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>visible</code>: Default, element is fully rendered.</li>
            <li><code>hidden</code>: Invisible but occupies space.</li>
            <li><code>collapse</code>: Removes space for table rows/columns.</li>
            <li>Unlike <code>display: none</code>, <code>hidden</code> preserves layout.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>visibility: hidden</code> to hide an element while preserving space.</li>
            <li>Applies <code>visibility: collapse</code> to a table row.</li>
            <li>Tests accessibility and layout consistency.</li>
        </ul>
    </div>
</div>

<!--Display vs Visibility-->
<div id="display-vs-visibility-content" class="content-section">
    <h2>Difference Between Display: None and Visibility: Hidden</h2>
    <p>Both <code>display: none</code> and <code>visibility: hidden</code> hide elements, but they differ in layout impact and rendering.</p>
    <p>Understanding their differences is key to choosing the right property for specific use cases.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>display: none</code>: Removes element from layout, no space reserved.</li>
        <li><code>visibility: hidden</code>: Hides element but reserves its space.</li>
        <li>Control visibility for dynamic interfaces or conditional content.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>display: none</code> doesn’t hide content needed by screen readers.</li>
        <li>Test <code>visibility: hidden</code> for focusable elements to avoid navigation issues.</li>
        <li>Verify hidden elements don’t disrupt content flow or semantics.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>display: none</code> for elements that should not affect layout (e.g., modals).</li>
        <li>Apply <code>visibility: hidden</code> for toggling visibility without reflow.</li>
        <li>Combine with CSS transitions for smooth effects (works better with <code>visibility</code>).</li>
        <li>Test both properties for performance and rendering consistency.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Display vs Visibility Example&lt;/title&gt;
                        &lt;style&gt;
                            .display-none { display: none; background: lightblue; padding: 10px; margin: 5px; }
                            .visibility-hidden { visibility: hidden; background: lightgreen; padding: 10px; margin: 5px; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="display-none"&gt;Display: None (No Space)&lt;/div&gt;
                        &lt;div class="visibility-hidden"&gt;Visibility: Hidden (Space Reserved)&lt;/div&gt;
                        &lt;p&gt;Paragraph after hidden elements.&lt;/p&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="visibility: hidden; background: lightgreen; padding: 10px; margin: 5px;">Visibility: Hidden (Space Reserved)</div>
            <p>Paragraph after hidden elements.</p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>display: none</code>: No rendering, no space, no accessibility.</li>
            <li><code>visibility: hidden</code>: Invisible, space reserved, potentially accessible.</li>
            <li><code>display: none</code> causes layout reflow, <code>visibility</code> does not.</li>
            <li>Use based on whether space reservation is needed.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Compares <code>display: none</code> and <code>visibility: hidden</code> on two elements.</li>
            <li>Observes layout differences with surrounding content.</li>
            <li>Tests accessibility and rendering behavior.</li>
        </ul>
    </div>
</div>

<!--Absolute Units-->
<div id="absolute-units-content" class="content-section">
    <h2>Absolute Units: px, pt</h2>
    <p>Absolute units in CSS are fixed measurements that do not scale with other elements or viewport properties.</p>
    <p>Common absolute units include <code>px</code> (pixels) and <code>pt</code> (points).</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>px</code>: Standard for screen-based designs, roughly 1/96 inch.</li>
        <li><code>pt</code>: Used in print stylesheets, 1pt = 1/72 inch.</li>
        <li>Provide precise control for fixed-size elements.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid small <code>px</code> values for text to ensure readability.</li>
        <li>Test absolute units in high-DPI displays for clarity.</li>
        <li>Ensure layouts using <code>pt</code> are consistent in print outputs.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>px</code> for consistent sizing in web interfaces.</li>
        <li>Apply <code>pt</code> for print stylesheets or specific design needs.</li>
        <li>Combine with relative units for responsive designs.</li>
        <li>Test across devices for rendering accuracy.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Absolute Units Example&lt;/title&gt;
                        &lt;style&gt;
                            .px { font-size: 16px; padding: 10px; background: lightblue; margin: 5px; }
                            .pt { font-size: 12pt; padding: 10px; background: lightgreen; margin: 5px; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="px"&gt;Pixel (16px) Example&lt;/div&gt;
                        &lt;div class="pt"&gt;Point (12pt) Example&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="font-size: 16px; padding: 10px; background: lightblue; margin: 5px;">Pixel (16px) Example</div>
            <div style="font-size: 12pt; padding: 10px; background: lightgreen; margin: 5px;">Point (12pt) Example</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>px</code>: Device-dependent, widely used for screens.</li>
            <li><code>pt</code>: Fixed, ideal for print or precise sizing.</li>
            <li>Absolute units don’t scale with parent or viewport.</li>
            <li>Use sparingly for responsive designs.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>px</code> for font and padding sizes.</li>
            <li>Applies <code>pt</code> to a print-specific element.</li>
            <li>Tests rendering on screen and print outputs.</li>
        </ul>
    </div>
</div>

<!--Relative Units-->
<div id="relative-units-content" class="content-section">
    <h2>Relative Units: em, rem, %, vw, vh, vmin, vmax</h2>
    <p> porre units scale relative to other properties, such as parent elements, root elements, or the viewport.</p>
    <p>Common relative units include <code>em</code>, <code>rem</code>, <code>%</code>, <code>vw</code>, <code>vh</code>, <code>vmin</code>, and <code>vmax</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>em</code>: Scales relative to parent’s font-size.</li>
        <li><code>rem</code>: Scales relative to root (html) font-size.</li>
        <li><code>%</code>: Scales relative to parent’s dimensions.</li>
        <li><code>vw</code>/<code>vh</code>: Scales relative to viewport width/height (1vw = 1% of viewport width).</li>
        <li><code>vmin</code>/<code>vmax</code>: Scales relative to smaller/larger viewport dimension.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>rem</code> for font sizes to respect user-defined browser settings.</li>
        <li>Ensure <code>vw</code>/<code>vh</code> don’t cause overflow or unreadable text.</li>
        <li>Test relative units for scalability across devices and zoom levels.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>rem</code> for consistent, scalable typography.</li>
        <li>Apply <code>em</code> for component-specific sizing relative to parent.</li>
        <li>Use <code>vw</code>/<code>vh</code> for full-screen layouts, with fallbacks.</li>
        <li>Test <code>%</code> for fluid layouts within containers.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Relative Units Example&lt;/title&gt;
                        &lt;style&gt;
                            html { font-size: 16px; }
                            .em { font-size: 1.5em; padding: 1em; background: lightblue; margin: 5px; }
                            .rem { font-size: 1.5rem; padding: 1rem; background: lightgreen; margin: 5px; }
                            .vw { width: 50vw; background: lightcoral; padding: 10px; margin: 5px; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="em"&gt;EM Example (1.5em)&lt;/div&gt;
                        &lt;div class="rem"&gt;REM Example (1.5rem)&lt;/div&gt;
                        &lt;div class="vw"&gt;VW Example (50vw)&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="font-size: 1.5em; padding: 1em; background: lightblue; margin: 5px;">EM Example (1.5em)</div>
            <div style="font-size: 1.5rem; padding: 1rem; background: lightgreen; margin: 5px;">REM Example (1.5rem)</div>
            <div style="width coul50vw; background: lightcoral; padding: 10px; margin: 5px;">VW Example (50vw)</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>em</code>: Compounds with nested elements, use cautiously.</li>
            <li><code>rem</code>: Predictable, based on root font-size.</li>
            <li><code>vw</code>/<code>vh</code>: Ideal for responsive, viewport-based designs.</li>
            <li><code>vmin</code>/<code>vmax</code>: Useful for adaptive layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>rem</code> for typography and <code>em</code> for padding.</li>
            <li>Applies <code>vw</code> or <code>vh</code> for a full-width/height section.</li>
            <li>Tests scalability and accessibility across devices.</li>
        </ul>
    </div>
</div>

<!--Unit Use Cases-->
<div id="unit-use-cases-content" class="content-section">
    <h2>When to Use Which Unit</h2>
    <p>Choosing the right CSS unit depends on the design goal, context, and responsiveness requirements.</p>
    <p>Absolute and relative units serve different purposes in web design.</p>

    <h4>Purpose</h4>
    <ul>
        <li><strong>Absolute Units</strong>: Fixed sizes for consistent, non-scaling elements.</li>
        <li><strong>Relative Units</strong>: Scalable sizes for responsive, adaptive layouts.</li>
        <li>Ensure designs are flexible and accessible across devices.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>rem</code> for fonts to support user zoom and browser settings.</li>
        <li>Avoid small absolute units for text to ensure readability.</li>
        <li>Test units for consistency in responsive and high-DPI displays.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>px</code> for fixed-size UI elements (e.g., borders, icons).</li>
        <li>Apply <code>rem</code> for typography and spacing in scalable designs.</li>
        <li>Use <code>vw</code>/<code>vh</code> for viewport-based layouts, with fallbacks.</li>
        <li>Test unit combinations for performance and rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Unit Use Cases Example&lt;/title&gt;
                        &lt;style&gt;
                            html { font-size: 16px; }
                            .text { font-size: 1.2rem; margin: 1rem; }
                            .border { border: 2px solid black; padding: 10px; }
                            .viewport { width: 80vw; background: lightcoral; padding: 1rem; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="text"&gt;REM for Text (1.2rem)&lt;/div&gt;
                        &lt;div class="border"&gt;PX for Border (2px)&lt;/div&gt;
                        &lt;div class="viewport"&gt;VW for Width (80vw)&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="font-size: 1.2rem; margin: 1rem;">REM for Text (1.2rem)</div>
            <div style="border: 2px solid black; padding: 10px;">PX for Border (2px)</div>
            <div style="width: 80vw; background: lightcoral; padding: 1rem;">VW for Width (80vw)</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>px</code>: Precise, non-scaling UI elements.</li>
            <li><code>rem</code>/<code>em</code>: Scalable typography and spacing.</li>
            <li><code>vw</code>/<code>vh</code>: Viewport-driven layouts.</li>
            <li>Choose units based on context and scalability needs.</li>
        </ul>
    </div>

    <div class "exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>px</code> for fixed borders, <code>rem</code> for text, and <code>vw</code> for layout.</li>
            <li>Combines units for a responsive design.</li>
            <li>Tests accessibility and rendering across devices.</li>
        </ul>
    </div>
</div>

<!--Position Types-->
<div id="position-types-content" class="content-section">
    <h2>Position: Static, Relative, Absolute, Fixed, Sticky</h2>
    <p>The <code>position</code> property controls how an element is positioned in the document flow.</p>
    <p>Values include <code>static</code>, <code>relative</code>, <code>absolute</code>, <code>fixed</code>, and <code>sticky</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>static</code>: Default, follows normal flow.</li>
        <li><code>relative</code>: Offset from its normal position, stays in flow.</li>
        <li><code>absolute</code>: Removed from flow, positioned relative to nearest positioned ancestor.</li>
        <li><code>fixed</code>: Positioned relative to viewport, stays in place on scroll.</li>
        <li><code>sticky</code>: Toggles between relative and fixed based on scroll.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>absolute</code> or <code>fixed</code> elements don’t obscure content.</li>
        <li>Test <code>sticky</code> for consistent behavior across browsers.</li>
        <li>Verify focusable elements remain accessible with positioning.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>relative</code> for minor offsets within the flow.</li>
        <li>Apply <code>absolute</code> with a positioned parent for precise control.</li>
        <li>Use <code>fixed</code> for persistent UI elements (e.g., navbars).</li>
        <li>Test <code>sticky</code> for compatibility and scroll behavior.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Position Types Example&lt;/title&gt;
                        &lt;style&gt;
                            .relative { position: relative; top: 10px; left: 20px; background: lightblue; padding: 10px; }
                            .absolute { position: absolute; top: 50px; left: 50px; background: lightgreen; padding: 10px; }
                            .fixed { position: fixed; bottom: 10px; right: 10px; background: lightcoral; padding: 10px; }
                            .container { position: relative; height: 200px; background: lightgray; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="container"&gt;
                            &lt;div class="relative"&gt;Relative Position&lt;/div&gt;
                            &lt;div class="absolute"&gt;Absolute Position&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="fixed"&gt;Fixed Position&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="position: relative; height: 200px; background: lightgray;">
                <div style="position: relative; top: 10px; left: 20px; background: lightblue; padding: 10px;">Relative Position</div>
                <div style="position: absolute; top: 50px; left: 50px; background: lightgreen; padding: 10px;">Absolute Position</div>
            </div>
            <div style="position: fixed; bottom: 10px; right: 10px; background: lightcoral; padding: 10px;">Fixed Position</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>static</code>: Normal flow, no positioning.</li>
            <li><code>relative</code>: Offsets without affecting other elements.</li>
            <li><code>absolute</code>: Requires positioned ancestor for context.</li>
            <li><code>fixed</code>/<code>sticky</code>: Viewport or scroll-based positioning.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>relative</code>, <code>absolute</code>, and <code>fixed</code> positioning.</li>
            <li>Includes a <code>sticky</code> header if supported.</li>
            <li>Tests accessibility and rendering across browsers.</li>
        </ul>
    </div>
</div>

<!--Z-Index and Stacking Context-->
<div id="z-index-stacking-content" class="content-section">
    <h2>Z-Index and Stacking Context</h2>
    <p>The <code>z-index</code> property controls the stacking order of positioned elements along the z-axis.</p>
    <p>Stacking context determines how elements overlap, influenced by <code>z-index</code> and other properties.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>z-index</code>: Sets stacking order for positioned elements (higher values appear on top).</li>
        <li>Stacking context: Created by properties like <code>position</code>, <code>opacity</code>, or <code>transform</code>.</li>
        <li>Manage overlapping elements in complex layouts.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure high <code>z-index</code> elements don’t obscure interactive content.</li>
        <li>Test stacking order for focusable elements to maintain navigation.</li>
        <li>Verify overlaps don’t hide critical content from screen readers.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>z-index</code> only for <code>position: relative</code>, <code>absolute</code>, <code>fixed</code>, or <code>sticky</code>.</li>
        <li>Keep <code>z-index</code> values manageable (e.g., 1–100) to avoid conflicts.</li>
        <li>Understand stacking context to predict overlap behavior.</li>
        <li>Test across browsers for consistent stacking.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Z-Index Example&lt;/title&gt;
                        &lt;style&gt;
                            .box1 { position: absolute; top: 20px; left: 20px; z-index: 10; background: lightblue; padding: 10px; }
                            .box2 { position: absolute; top: 40px; left: 40px; z-index: 20; background: lightgreen; padding: 10px; }
                            .box3 { position: absolute; top: 60px; left: 60px; z-index: 5; background: lightcoral; padding: 10px; }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="box1"&gt;Z-Index: 10&lt;/div&gt;
                        &lt;div class="box2"&gt;Z-Index: 20&lt;/div&gt;
                        &lt;div class="box3"&gt;Z-Index: 5&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="position: absolute; top: 20px; left: 20px; z-index: 10; background: lightblue; padding: 10px;">Z-Index: 10</div>
            <div style="position: absolute; top: 40px; left: 40px; z-index: 20; background: lightgreen; padding: 10px;">Z-Index: 20</div>
            <div style="position: absolute; top: 60px; left: 60px; z-index: 5; background: lightcoral; padding: 10px;">Z-Index: 5</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>z-index</code>: Higher values stack on top.</li>
            <li>Stacking context: Created by positioned elements or certain properties.</li>
            <li>Non-positioned elements follow document order.</li>
            <li>Child elements inherit parent’s stacking context.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>z-index</code> to stack three overlapping elements.</li>
            <li>Creates a new stacking context with a positioned parent.</li>
            <li>Tests stacking order and accessibility.</li>
        </ul>
    </div>
</div>

<!--Centering Elements with Positioning-->
<div id="centering-elements-content" class="content-section">
    <h2>Centering Elements with Positioning</h2>
    <p>Positioning techniques, combined with other CSS properties, allow precise centering of elements horizontally and vertically.</p>
    <p>Common methods include absolute positioning, flexbox, and grid.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Center elements within a container or viewport for balanced designs.</li>
        <li>Use positioning for precise control in complex layouts.</li>
        <li>Create visually appealing, user-friendly interfaces.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure centered elements remain focusable and navigable.</li>
        <li>Test centering for responsiveness across screen sizes.</li>
        <li>Verify centered content is not obscured by overlaps.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>position: absolute</code> with <code>top: 50%</code>, <code>left: 50%</code>, and <code>transform</code> for pixel-perfect centering.</li>
        <li>Apply flexbox or grid for simpler, responsive centering.</li>
        <li>Test centering methods for browser compatibility.</li>
        <li>Use fallbacks for older browsers if needed.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;title&gt;Centering Elements Example&lt;/title&gt;
                        &lt;style&gt;
                            .container { position: relative; height: 200px; background: lightgray; }
                            .absolute-center {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                background: lightblue;
                                padding: 10px;
                            }
                            .flex-center {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 200px;
                                background: lightgreen;
                                margin-top: 10px;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div class="container"&gt;
                            &lt;div class="absolute-center"&gt;Absolute Centered&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="flex-center"&gt;Flexbox Centered&lt;/div&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="position: relative; height: 200px; background: lightgray;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: lightblue; padding: 10px;">Absolute Centered</div>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; height: 200px; background: lightgreen; margin-top: 10px;">Flexbox Centered</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>absolute</code> with <code>transform</code>: Precise, works for fixed sizes.</li>
            <li>Flexbox: Simple, responsive, handles dynamic content.</li>
            <li>Grid: Similar to flexbox, ideal for complex layouts.</li>
            <li>Choose method based on layout and browser support.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Centers an element using <code>position: absolute</code> and <code>transform</code>.</li>
            <li>Centers another using flexbox or grid.</li>
            <li>Tests responsiveness and accessibility.</li>
        </ul>
    </div>
</div>

<!--Float Layout-->
<div id="float-layout" class="content-section">
    <h2>Legacy Layout Technique Using Float</h2>
    <p>The <code>float</code> property, historically used for layout, positions elements to the left or right, allowing content to wrap around them.</p>
    <p>While largely replaced by Flexbox and Grid, floats are still relevant for specific use cases like text wrapping around images.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create multi-column layouts or wrap text around images.</li>
        <li>Position elements outside the normal flow while allowing wrapping.</li>
        <li>Support older browsers or legacy codebases.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure floated elements don’t disrupt content flow or readability.</li>
        <li>Test layouts for responsiveness to avoid overlap or clipping.</li>
        <li>Verify floated interactive elements remain focusable.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>float: left</code> or <code>right</code> for specific layout needs.</li>
        <li>Apply <code>clear</code> or clearfix to manage float-related issues.</li>
        <li>Prefer Flexbox or Grid for modern layouts unless floats are required.</li>
        <li>Test across browsers for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Float Layout Example</title>
                        <style>
                            .float-left {
                                float: left;
                                width: 100px;
                                margin-right: 10px;
                                background: lightblue;
                                padding: 10px;
                            }
                            .content {
                                background: lightgray;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="float-left">Floated Element</div>
                        <div class="content">Content wraps around the floated element.</div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="float: left; width: 100px; margin-right: 10px; background: lightblue; padding: 10px;">Floated Element</div>
            <div style="background: lightgray; padding: 10px;">Content wraps around the floated element.</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>float: left</code>/<code>right</code>: Moves element, allows wrapping.</li>
            <li>Floated elements are partially removed from normal flow.</li>
            <li>Requires clearing to prevent layout issues.</li>
            <li>Best for text wrapping, not complex layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>float</code> to wrap text around an image or div.</li>
            <li>Ensures proper clearing for subsequent content.</li>
            <li>Tests layout for responsiveness and accessibility.</li>
        </ul>
    </div>
</div>

<!--Clear Property-->
<div id="clear-property" class="content-section">
    <h2>Clear Property</h2>
    <p>The <code>clear</code> property prevents elements from appearing next to floated elements, forcing them below.</p>
    <p>Values include <code>left</code>, <code>right</code>, and <code>both</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Ensure elements appear below floated content, maintaining layout integrity.</li>
        <li>Fix issues where non-floated content wraps unexpectedly.</li>
        <li>Support legacy float-based layouts.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Verify cleared elements maintain logical content flow.</li>
        <li>Test for overlap or clipping in responsive designs.</li>
        <li>Ensure cleared interactive elements remain accessible.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>clear: both</code> for elements following any floated content.</li>
        <li>Combine with clearfix for parent containers of floated children.</li>
        <li>Avoid overusing <code>clear</code> in modern layouts with Flexbox/Grid.</li>
        <li>Test across browsers for consistent behavior.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Clear Property Example</title>
                        <style>
                            .float-left {
                                float: left;
                                width: 100px;
                                background: lightblue;
                                padding: 10px;
                            }
                            .clear {
                                clear: both;
                                background: lightgray;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="float-left">Floated Element</div>
                        <div>Content wraps around float.</div>
                        <div class="clear">Cleared Element</div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="float: left; width: 100px; background: lightblue; padding: 10px;">Floated Element</div>
            <div>Content wraps around float.</div>
            <div style="clear: both; background: lightgray; padding: 10px;">Cleared Element</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>clear: left</code>/<code>right</code>: Clears specific float direction.</li>
            <li><code>clear: both</code>: Clears all floats, most common.</li>
            <li>Applied to non-floated elements after floats.</li>
            <li>Essential for float-based layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>float</code> for a layout with multiple elements.</li>
            <li>Applies <code>clear</code> to position content below floats.</li>
            <li>Tests for accessibility and responsive behavior.</li>
        </ul>
    </div>
</div>

<!--Clearfix Hack-->
<div id="clearfix-hack" class="content-section">
    <h2>Clearfix Hack</h2>
    <p>The clearfix hack ensures a parent container fully contains its floated children, preventing collapse.</p>
    <p>It uses a pseudo-element to clear floats without additional markup.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Fix parent container collapse caused by floated children.</li>
        <li>Maintain layout integrity in float-based designs.</li>
        <li>Support legacy layouts without extra HTML elements.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure clearfix doesn’t disrupt content flow or semantics.</li>
        <li>Test for proper rendering in responsive designs.</li>
        <li>Verify interactive elements remain accessible.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Apply clearfix to parent containers of floated elements.</li>
        <li>Use modern alternatives (Flexbox/Grid) for new projects.</li>
        <li>Test clearfix behavior across browsers.</li>
        <li>Document clearfix usage in legacy codebases.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Clearfix Hack Example</title>
                        <style>
                            .clearfix::after {
                                content: "";
                                display: table;
                                clear: both;
                            }
                            .float-left {
                                float: left;
                                width: 100px;
                                background: lightblue;
                                padding: 10px;
                            }
                            .container {
                                background: lightgray;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container clearfix">
                            <div class="float-left">Floated Element 1</div>
                            <div class="float-left">Floated Element 2</div>
                        </div>
                        <div>Content after container.</div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="background: lightgray; padding: 10px;">
                <div style="float: left; width: 100px; background: lightblue; padding: 10px;">Floated Element 1</div>
                <div style="float: left; width: 100px; background: lightblue; padding: 10px;">Floated Element 2</div>
                <div style="content: ''; display: table; clear: both;"></div>
            </div>
            <div>Content after container.</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Uses <code>::after</code> pseudo-element to clear floats.</li>
            <li>Prevents parent collapse without extra markup.</li>
            <li>Works in all modern browsers.</li>
            <li>Legacy technique, less needed with Flexbox/Grid.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a container with floated children and applies clearfix.</li>
            <li>Ensures the container fully contains floats.</li>
            <li>Tests for accessibility and responsive rendering.</li>
        </ul>
    </div>
</div>

<!--Flexbox Overview-->
<div id="flexbox-overview" class="content-section">
    <h2>Introduction to Flexbox</h2>
    <p>Flexbox is a CSS layout model for arranging items in a single dimension (row or column) with flexible sizing and alignment.</p>
    <p>It simplifies responsive design and dynamic content arrangement.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create flexible, responsive layouts with minimal code.</li>
        <li>Align and distribute items within a container efficiently.</li>
        <li>Handle dynamic content sizes and orientations.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure flex layouts maintain logical content order for screen readers.</li>
        <li>Test for touch target sizes in flexed interactive elements.</li>
        <li>Verify responsiveness across screen sizes.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use Flexbox for one-dimensional layouts (rows or columns).</li>
        <li>Combine with media queries for responsive designs.</li>
        <li>Test flex properties for browser compatibility.</li>
        <li>Document flex usage for maintainability.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Flexbox Overview Example</title>
                        <style>
                            .container {
                                display: flex;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: flex; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>display: flex</code>: Enables flexbox layout.</li>
            <li>Items align along a main axis, with flexible sizing.</li>
            <li>Supports responsive, dynamic layouts.</li>
            <li>Replaces older float-based layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses Flexbox to arrange items in a row.</li>
            <li>Adjusts layout for responsiveness with media queries.</li>
            <li>Tests for accessibility and rendering.</li>
        </ul>
    </div>
</div>

<!--Flex Container-->
<div id="flex-container" class="content-section">
    <h2>Flex Container: Display: Flex</h2>
    <p>The <code>display: flex</code> property turns an element into a flex container, enabling its children to use flexbox properties.</p>
    <p>It defines a flexible layout context for child items.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Establish a flexbox layout for child elements.</li>
        <li>Control alignment, direction, and distribution of items.</li>
        <li>Create responsive, one-dimensional layouts.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure flex container maintains logical content order.</li>
        <li>Test for touch target accessibility in flexed items.</li>
        <li>Verify responsiveness across devices.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>display: flex</code> on parent elements only.</li>
        <li>Combine with flex properties like <code>justify-content</code> and <code>align-items</code>.</li>
        <li>Test for browser compatibility and fallbacks.</li>
        <li>Avoid overuse in simple layouts better suited for block/inline.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Flex Container Example</title>
                        <style>
                            .container {
                                display: flex;
                                justify-content: space-between;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: flex; justify-content: space-between; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>display: flex</code>: Creates flex container.</li>
            <li>Children become flex items with flexible behavior.</li>
            <li>Enables properties like <code>flex-direction</code>, <code>justify-content</code>.</li>
            <li>Foundation for flexbox layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>display: flex</code> to create a flex container.</li>
            <li>Arranges child items with basic flex properties.</li>
            <li>Tests for accessibility and responsiveness.</li>
        </ul>
    </div>
</div>

<!--Main Axis vs Cross Axis-->
<div id="main-cross-axis" class="content-section">
    <h2>Main Axis vs Cross Axis</h2>
    <p>In Flexbox, the main axis is the primary direction of item arrangement, while the cross axis is perpendicular to it.</p>
    <p>The main axis is defined by <code>flex-direction</code>, affecting alignment properties.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Understand how flex items are aligned and distributed.</li>
        <li>Control layout orientation (row or column).</li>
        <li>Apply axis-specific properties like <code>justify-content</code> and <code>align-items</code>.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure axis changes don’t disrupt logical content order.</li>
        <li>Test for readability and touch targets in both axes.</li>
        <li>Verify responsiveness for axis-based layouts.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>flex-direction</code> to define the main axis (row or column).</li>
        <li>Apply <code>justify-content</code> for main axis alignment, <code>align-items</code> for cross axis.</li>
        <li>Test axis behavior with varying content sizes.</li>
        <li>Document axis usage for complex layouts.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Main vs Cross Axis Example</title>
                        <style>
                            .container {
                                display: flex;
                                flex-direction: row;
                                justify-content: space-around; /* Main axis */
                                align-items: center; /* Cross axis */
                                background: lightgray;
                                padding: 10px;
                                height: 150px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center; background: lightgray; padding: 10px; height: 150px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Main axis: Defined by <code>flex-direction</code> (row or column).</li>
            <li>Cross axis: Perpendicular to main axis.</li>
            <li><code>justify-content</code>: Aligns along main axis.</li>
            <li><code>align-items</code>: Aligns along cross axis.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses Flexbox with <code>flex-direction: row</code> and <code>column</code>.</li>
            <li>Applies <code>justify-content</code> and <code>align-items</code> for both axes.</li>
            <li>Tests for accessibility and responsiveness.</li>
        </ul>
    </div>
</div>

<!--Flex Direction-->
<div id="flex-direction" class="content-section">
    <h2>Flex-Direction</h2>
    <p>The <code>flex-direction</code> property defines the main axis direction for flex items.</p>
    <p>Values include <code>row</code>, <code>row-reverse</code>, <code>column</code>, and <code>column-reverse</code>.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Control whether items are arranged horizontally or vertically.</li>
        <li>Reverse item order for specific layouts.</li>
        <li>Create flexible, responsive layouts.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>row-reverse</code> or <code>column-reverse</code> maintains logical content order.</li>
        <li>Test for readability and navigation in all directions.</li>
        <li>Verify responsiveness across devices.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>row</code> for horizontal layouts, <code>column</code> for vertical.</li>
        <li>Apply <code>reverse</code> sparingly to avoid confusion.</li>
        <li>Combine with media queries for responsive direction changes.</li>
        <li>Test for consistent rendering across browsers.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Flex Direction Example</title>
                        <style>
                            .container {
                                display: flex;
                                flex-direction: column;
                                background: lightgray;
                                padding: 10px;
                                height: 200px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: flex; flex-direction: column; background: lightgray; padding: 10px; height: 200px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

   cientes de <code>flex-direction</code> para mantener un orden lógico del contenido.</li>
        <li>Prueba la responsividad en diferentes tamaños de pantalla.</li>
        <li>Verifica que los elementos interactivos permanezcan accesibles.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>justify-content: space-between</code> o <code>space-around</code> para distribuir elementos uniformemente.</li>
        <li>Combina con <code>align-items</code> para un control completo del diseño.</li>
        <li>Prueba diferentes valores para optimizar el espacio.</li>
        <li>Usa media queries para ajustar la distribución en diseños responsivos.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Justify-Content</title>
                        <style>
                            .container {
                                display: flex;
                                justify-content: space-around;
                                background: lightgray;
                                padding: 10px;
                                height: 100px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: flex; justify-content: space-around; background: lightgray; padding: 10px; height: 100px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>flex-start</code>: Alinea elementos al inicio del eje principal.</li>
            <li><code>center</code>: Centra elementos en el eje principal.</li>
            <li><code>space-between</code>: Espacio igual entre elementos, sin espacio en los extremos.</li>
            <li><code>space-around</code>: Espacio igual alrededor de cada elemento.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>justify-content</code> con diferentes valores (e.g., <code>center</code>, <code>space-between</code>).</li>
            <li>Ajuste la distribución para un diseño responsivo.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Align Items-->
<div id="align-items" class="content-section">
    <h2>Align-Items</h2>
    <p>La propiedad <code>align-items</code> controla la alineación de los elementos flex en el eje transversal dentro de un contenedor flex.</p>
    <p>Los valores incluyen <code>stretch</code>, <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, y <code>baseline</code>.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Alinear elementos verticalmente (en <code>flex-direction: row</code>) u horizontalmente (en <code>flex-direction: column</code>).</li>
        <li>Crear diseños visualmente equilibrados.</li>
        <li>Adaptarse a diferentes tamaños y contenidos de elementos.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que la alineación no afecte la legibilidad del contenido.</li>
        <li>Prueba los objetivos táctiles para elementos interactivos alineados.</li>
        <li>Verifica que la alineación sea consistente en diseños responsivos.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>align-items: center</code> para centrar elementos en el eje transversal.</li>
        <li>Aplica <code>stretch</code> para que los elementos ocupen todo el espacio disponible.</li>
        <li>Combina con <code>justify-content</code> para un control completo del diseño.</li>
        <li>Prueba en diferentes navegadores para asegurar consistencia.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Align-Items</title>
                        <style>
                            .container {
                                display: flex;
                                align-items: center;
                                background: lightgray;
                                padding: 10px;
                                height: 150px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: flex; align-items: center; background: lightgray; padding: 10px; height: 150px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>stretch</code>: Elementos ocupan todo el espacio en el eje transversal.</li>
            <li><code>center</code>: Centra elementos en el eje transversal.</li>
            <li><code>flex-start</code>/<code>flex-end</code>: Alinea al inicio o final del eje transversal.</li>
            <li>Funciona junto con <code>flex-direction</code> para determinar la alineación.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>align-items</code> con diferentes valores (e.g., <code>center</code>, <code>stretch</code>).</li>
            <li>Combine con <code>flex-direction</code> para probar diferentes alineaciones.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Flex Wrap-->
<div id="flex-wrap" class="content-section">
    <h2>Flex-Wrap</h2>
    <p>La propiedad <code>flex-wrap</code> controla si los elementos flex se ajustan en una sola línea o se envuelven en múltiples líneas.</p>
    <p>Los valores incluyen <code>nowrap</code>, <code>wrap</code>, y <code>wrap-reverse</code>.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Permitir que los elementos flex se envuelvan para diseños responsivos.</li>
        <li>Evitar desbordamiento en contenedores con muchos elementos.</li>
        <li>Controlar el orden de las líneas envueltas.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que los elementos envueltos mantengan un orden lógico.</li>
        <li>Prueba la legibilidad en diseños envueltos en pantallas pequeñas.</li>
        <li>Verifica que los elementos interactivos permanezcan accesibles.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>flex-wrap: wrap</code> para diseños responsivos con múltiples elementos.</li>
        <li>Evita <code>nowrap</code> si los elementos pueden desbordar el contenedor.</li>
        <li>Prueba <code>wrap-reverse</code> para casos específicos, pero úsalo con precaución.</li>
        <li>Combina con media queries para ajustar el comportamiento del envoltorio.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Flex-Wrap</title>
                        <style>
                            .container {
                                display: flex;
                                flex-wrap: wrap;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                                width: 100px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                            <div class="item">Item 4</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: flex; flex-wrap: wrap; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px; margin: 5px; width: 100px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px; width: 100px;">Item 2</div>
                <div style="background: lightblue; padding: 10px; margin: 5px; width: 100px;">Item 3</div>
                <div style="background: lightblue; padding: 10px; margin: 5px; width: 100px;">Item 4</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>nowrap</code>: Elementos en una sola línea, pueden desbordar.</li>
            <li><code>wrap</code>: Elementos se envuelven en múltiples líneas.</li>
            <li><code>wrap-reverse</code>: Invierte el orden de las líneas envueltas.</li>
            <li>Esencial para diseños responsivos con muchos elementos.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>flex-wrap: wrap</code> para un contenedor con múltiples elementos.</li>
            <li>Compare <code>nowrap</code> y <code>wrap</code> en diferentes tamaños de pantalla.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Flex Grow, Shrink, Basis-->
<div id="flex-grow-shrink-basis" class="content-section">
    <h2>Flex-Grow, Flex-Shrink, Flex-Basis</h2>
    <p>Las propiedades <code>flex-grow</code>, <code>flex-shrink</code>, y <code>flex-basis</code> controlan cómo los elementos flex se expanden, encogen, y definen su tamaño base.</p>
    <p>Estas propiedades permiten un control preciso sobre el comportamiento de los elementos en un contenedor flex.</p>

    <h4>Propósito</h4>
    <ul>
        <li><code>flex-grow</code>: Define cuánto puede crecer un elemento en relación con otros.</li>
        <li><code>flex-shrink</code>: Define cuánto puede encoger un elemento en relación con otros.</li>
        <li><code>flex-basis</code>: Establece el tamaño base de un elemento antes de crecer o encoger.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que los elementos que crecen o encogen mantengan la legibilidad.</li>
        <li>Prueba los objetivos táctiles para elementos interactivos.</li>
        <li>Verifica que el diseño sea responsivo en diferentes tamaños de pantalla.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>flex-grow: 1</code> para que los elementos ocupen el espacio disponible uniformemente.</li>
        <li>Establece <code>flex-shrink: 0</code> para evitar que los elementos se reduzcan demasiado.</li>
        <li>Define <code>flex-basis</code> con valores como <code>auto</code> o porcentajes para flexibilidad.</li>
        <li>Prueba combinaciones para optimizar diseños responsivos.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Flex-Grow, Shrink, Basis</title>
                        <style>
                            .container {
                                display: flex;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item1 {
                                flex-grow: 1;
                                flex-shrink: 0;
                                flex-basis: 100px;
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                            .item2 {
                                flex-grow: 2;
                                flex-shrink: 1;
                                flex-basis: 100px;
                                background: lightgreen;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item1">Item 1 (Grow: 1)</div>
                            <div class="item2">Item 2 (Grow: 2)</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: flex; background: lightgray; padding: 10px;">
                <div style="flex-grow: 1; flex-shrink: 0; flex-basis: 100px; background: lightblue; padding: 10px; margin: 5px;">Item 1 (Grow: 1)</div>
                <div style="flex-grow: 2; flex-shrink: 1; flex-basis: 100px; background: lightgreen; padding: 10px; margin: 5px;">Item 2 (Grow: 2)</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>flex-grow</code>: Proporción de crecimiento respecto al espacio disponible.</li>
            <li><code>flex-shrink</code>: Proporción de reducción cuando el espacio es limitado.</li>
            <li><code>flex-basis</code>: Tamaño inicial antes de ajustes.</li>
            <li>Propiedades clave para diseños dinámicos y responsivos.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>flex-grow</code>, <code>flex-shrink</code>, y <code>flex-basis</code> para diferentes elementos.</li>
            <li>Pruebe el comportamiento en contenedores de diferentes tamaños.</li>
            <li>Verifique la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Order, Align-Self-->
<div id="order-align-self" class="content-section">
    <h2>Order, Align-Self</h2>
    <p>Las propiedades <code>order</code> y <code>align-self</code> permiten un control granular sobre el orden y la alineación de elementos flex individuales.</p>
    <p><code>order</code> cambia la secuencia visual, mientras que <code>align-self</code> anula la alineación del eje transversal para un elemento.</p>

    <h4>Propósito</h4>
    <ul>
        <li><code>order</code>: Reordena elementos flex sin alterar el HTML.</li>
        <li><code>align-self</code>: Personaliza la alineación de un elemento en el eje transversal.</li>
        <li>Crear diseños flexibles con excepciones específicas.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que <code>order</code> no afecte el orden lógico para lectores de pantalla.</li>
        <li>Prueba la legibilidad y accesibilidad de elementos con <code>align-self</code>.</li>
        <li>Verifica que los diseños sean responsivos.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>order</code> con moderación para evitar confusión en el mantenimiento.</li>
        <li>Aplica <code>align-self</code> para excepciones específicas en lugar de <code>align-items</code>.</li>
        <li>Prueba en diferentes navegadores para asegurar consistencia.</li>
        <li>Documenta el uso de <code>order</code> para claridad.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Order y Align-Self</title>
                        <style>
                            .container {
                                display: flex;
                                align-items: flex-start;
                                background: lightgray;
                                padding: 10px;
                                height: 150px;
                            }
                            .item1 {
                                order: 2;
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                            .item2 {
                                order: 1;
                                align-self: center;
                                background: lightgreen;
                                padding: 10px;
                                margin: 5px;
                            }
                            .item3 {
                                order: 3;
                                background: lightcoral;
                                padding: 10px;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item1">Item 1 (Order: 2)</div>
                            <div class="item2">Item 2 (Order: 1, Align-Self: Center)</div>
                            <div class="item3">Item 3 (Order: 3)</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: flex; align-items: flex-start; background: lightgray; padding: 10px; height: 150px;">
                <div style="order: 2; background: lightblue; padding: 10px; margin: 5px;">Item 1 (Order: 2)</div>
                <div style="order: 1; align-self: center; background: lightgreen; padding: 10px; margin: 5px;">Item 2 (Order: 1, Align-Self: Center)</div>
                <div style="order: 3; background: lightcoral; padding: 10px; margin: 5px;">Item 3 (Order: 3)</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>order</code>: Cambia el orden visual (por defecto 0).</li>
            <li><code>align-self</code>: Anula <code>align-items</code> para un elemento específico.</li>
            <li>Útil para ajustes específicos en diseños flex.</li>
            <li>Mantén la accesibilidad al usar <code>order</code>.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>order</code> para reordenar elementos flex.</li>
            <li>Aplique <code>align-self</code> a un elemento para una alineación personalizada.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Grid Overview-->
<div id="grid-overview" class="content-section">
    <h2>Introducción a CSS Grid</h2>
    <p>CSS Grid es un sistema de diseño bidimensional que permite crear diseños complejos con filas y columnas.</p>
    <p>Es ideal para diseños de página completos y estructuras de cuadrícula responsivas.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Crear diseños de cuadrícula precisos y flexibles.</li>
        <li>Controlar la colocación de elementos en dos dimensiones.</li>
        <li>Simplificar diseños responsivos con menos código.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que el orden de la cuadrícula no afecte la lógica del contenido para lectores de pantalla.</li>
        <li>Prueba los objetivos táctiles para elementos interactivos en la cuadrícula.</li>
        <li>Verifica la responsividad en diferentes tamaños de pantalla.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa Grid para diseños bidimensionales, Flexbox para unidimensionales.</li>
        <li>Define cuadrículas explícitas con <code>grid-template</code> para claridad.</li>
        <li>Combina con media queries para diseños responsivos.</li>
        <li>Prueba la compatibilidad con navegadores y usa fallbacks si es necesario.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Introducción a CSS Grid</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: 1fr 1fr;
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                            <div class="item">Item 4</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
                <div style="background: lightblue; padding: 10px;">Item 4</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>display: grid</code>: Activa el diseño de cuadrícula.</li>
            <li>Permite control bidimensional con filas y columnas.</li>
            <li>Soporta diseños responsivos y complejos.</li>
            <li>Reemplaza técnicas de diseño más antiguas como floats.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use CSS Grid para crear un diseño de dos columnas.</li>
            <li>Ajuste la cuadrícula para responsividad con media queries.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Grid Container-->
<div id="grid-container" class="content-section">
    <h2>Grid Container: Display: Grid</h2>
    <p>La propiedad <code>display: grid</code> convierte un elemento en un contenedor de cuadrícula, habilitando propiedades de diseño de cuadrícula para sus hijos.</p>
    <p>Es la base para crear diseños de cuadrícula bidimensionales.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Establecer un contexto de cuadrícula para elementos hijos.</li>
        <li>Controlar la colocación de filas y columnas.</li>
        <li>Crear diseños complejos y responsivos.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que el contenedor de cuadrícula mantenga el orden lógico del contenido.</li>
        <li>Prueba los objetivos táctiles para elementos interactivos.</li>
        <li>Verifica la responsividad en diferentes dispositivos.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>display: grid</code> en elementos padre para definir la estructura de la cuadrícula.</li>
        <li>Combina con <code>grid-template</code> para especificar filas y columnas.</li>
        <li>Prueba la compatibilidad con navegadores y usa fallbacks si es necesario.</li>
        <li>Evita el uso excesivo en diseños simples que podrían usar Flexbox.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Grid Container</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: repeat(3, 1fr);
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>display: grid</code>: Crea un contenedor de cuadrícula.</li>
            <li>Hijos se convierten en elementos de la cuadrícula.</li>
            <li>Habilita propiedades como <code>grid-template-columns</code> y <code>gap</code>.</li>
            <li>Base para diseños de cuadrícula bidimensionales.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>display: grid</code> para crear un contenedor de cuadrícula.</li>
            <li>Defina una estructura simple de filas y columnas.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Rows and Columns-->
<div id="rows-columns" class="content-section">
    <h2>Definiendo Filas y Columnas</h2>
    <p>Las propiedades <code>grid-template-columns</code> y <code>grid-template-rows</code> definen el tamaño y número de columnas y filas en un contenedor de cuadrícula.</p>
    <p>Permiten un control preciso sobre la estructura de la cuadrícula.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Especificar el diseño de la cuadrícula con tamaños fijos o flexibles.</li>
        <li>Crear diseños complejos con filas y columnas personalizadas.</li>
        <li>Apoyar diseños responsivos con unidades como <code>fr</code>.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que la estructura de la cuadrícula mantenga el orden lógico del contenido.</li>
        <li>Prueba la legibilidad en diferentes tamaños de pantalla.</li>
        <li>Verifica que los elementos interactivos sean accesibles.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>fr</code> para proporciones flexibles, <code>px</code> o <code>%</code> para tamaños fijos.</li>
        <li>Define filas y columnas explícitamente para claridad.</li>
        <li>Combina con <code>gap</code> para espaciado consistente.</li>
        <li>Prueba la responsividad con media queries.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Filas y Columnas</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: 1fr 2fr;
                                grid-template-rows: 100px 100px;
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                            <div class="item">Item 4</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr 2fr; grid-template-rows: 100px 100px; gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
                <div style="background: lightblue; padding: 10px;">Item 4</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>grid-template-columns</code>: Define el tamaño y número de columnas.</li>
            <li><code>grid-template-rows</code>: Define el tamaño y número de filas.</li>
            <li>Unidades como <code>fr</code>, <code>px</code>, <code>%</code> ofrecen flexibilidad.</li>
            <li>Base para diseños de cuadrícula estructurados.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Defina una cuadrícula con <code>grid-template-columns</code> y <code>grid-template-rows</code>.</li>
            <li>Use diferentes unidades (e.g., <code>fr</code>, <code>px</code>) para las dimensiones.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Fr Unit-->
<div id="fr-unit" class="content-section">
    <h2>Fr Unit</h2>
    <p>La unidad <code>fr</code> (fraction) en CSS Grid representa una fracción del espacio disponible en el contenedor de la cuadrícula.</p>
    <p>Es ideal para crear diseños flexibles y proporcionales.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Distribuir el espacio disponible proporcionalmente entre filas o columnas.</li>
        <li>Crear diseños responsivos sin tamaños fijos.</li>
        <li>Simplificar la asignación de espacio en cuadrículas.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que los elementos con <code>fr</code> mantengan la legibilidad.</li>
        <li>Prueba la responsividad en diferentes tamaños de pantalla.</li>
        <li>Verifica que los elementos interactivos sean accesibles.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>fr</code> para proporciones relativas (e.g., <code>1fr 2fr</code>).</li>
        <li>Combina con <code>minmax()</code> para establecer límites de tamaño.</li>
        <li>Prueba el comportamiento con diferentes cantidades de contenido.</li>
        <li>Evita depender únicamente de <code>fr</code> para tamaños críticos.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Fr Unit</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: 1fr 2fr 1fr;
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr 2fr 1fr; gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>fr</code>: Divide el espacio disponible proporcionalmente.</li>
            <li>Ejemplo: <code>1fr 2fr</code> da el doble de espacio a la segunda columna.</li>
            <li>Flexible y responsivo para diseños dinámicos.</li>
            <li>Funciona con <code>grid-template</code> para definir la estructura.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use la unidad <code>fr</code> para definir columnas de diferentes proporciones.</li>
            <li>Combine con <code>minmax()</code> para establecer límites.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Repeat Function-->
<div id="repeat-function" class="content-section">
    <h2>Función Repeat()</h2>
    <p>La función <code>repeat()</code> en CSS Grid simplifica la definición de patrones repetitivos de filas o columnas.</p>
    <p>Es útil para crear cuadrículas con muchas pistas sin escribir código redundante.</p>

    <h4>Propósito</h4>
    <ul>
        <li>Definir múltiples filas o columnas con un solo valor repetido.</li>
        <li>Simplificar la sintaxis de cuadrículas grandes o complejas.</li>
        <li>Apoyar diseños responsivos con patrones consistentes.</li>
    </ul>

    <h4>Accesibilidad</h4>
    <ul>
        <li>Asegúrate de que las cuadrículas repetidas mantengan el orden lógico del contenido.</li>
        <li>Prueba la legibilidad y los objetivos táctiles en la cuadrícula.</li>
        <li>Verifica la responsividad en diferentes tamaños de pantalla.</li>
    </ul>

    <h4>Mejores Prácticas</h4>
    <ul>
        <li>Usa <code>repeat()</code> con <code>fr</code> o tamaños fijos para patrones uniformes.</li>
        <li>Combina con <code>auto-fit</code> o <code>auto-fill</code> para cuadrículas responsivas.</li>
        <li>Prueba el comportamiento con diferentes cantidades de contenido.</li>
        <li>Documenta patrones repetitivos para claridad.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Uso</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Ejemplo de Repeat Function</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: repeat(4, 1fr);
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                            <div class="item">Item 4</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copiar</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Resultado</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
                <div style="background: lightblue; padding: 10px;">Item 4</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Elementos Clave</h4>
        <ul>
            <li><code>repeat(n, size)</code>: Repite <code>n</code> pistas de tamaño <code>size</code>.</li>
            <li><code>auto-fit</code>/<code>auto-fill</code>: Ajusta pistas dinámicamente para responsividad.</li>
            <li>Simplifica la definición de cuadrículas grandes.</li>
            <li>Funciona con <code>fr</code>, <code>px</code>, y otras unidades.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Ejercicio Práctico</h3>
        <p>Crea una página web que:</p>
        <ul>
            <li>Use <code>repeat()</code> para definir una cuadrícula con múltiples columnas.</li>
            <li>Incorpore <code>auto-fit</code> o <code>auto-fill</code> para responsividad.</li>
            <li>Pruebe la accesibilidad y el renderizado.</li>
        </ul>
    </div>
</div>

<!--Grid Gap, Grid Auto Flow-->
<div id="grid-gap-auto-flow" class="content-section">
    <h2>Grid-Gap, Grid-Auto-Flow</h2>
    <p>The <code>grid-gap</code> (or <code>gap</code>) property sets the spacing between grid tracks, while <code>grid-auto-flow</code> controls how items are automatically placed in the grid.</p>
    <p>These properties enhance grid layouts by managing spacing and item placement efficiently.</p>

    <h4>Purpose</h4>
    <ul>
        <li><code>grid-gap</code>: Adds consistent spacing between rows and columns.</li>
        <li><code>grid-auto-flow</code>: Determines automatic placement (e.g., <code>row</code>, <code>column</code>, <code>dense</code>).</li>
        <li>Simplify responsive grid designs with automatic flow and spacing.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure <code>grid-gap</code> maintains readable content spacing.</li>
        <li>Test <code>grid-auto-flow: dense</code> to avoid disrupting logical content order for screen readers.</li>
        <li>Verify responsive behavior across screen sizes.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>gap</code> (shorthand for <code>row-gap</code> and <code>column-gap</code>) for simplicity.</li>
        <li>Apply <code>grid-auto-flow: row</code> for default row-based placement.</li>
        <li>Use <code>dense</code> cautiously to prevent visual confusion.</li>
        <li>Test gap and flow behavior with varying content amounts.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Grid Gap and Auto Flow Example</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: repeat(3, 1fr);
                                gap: 15px;
                                grid-auto-flow: row;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; grid-auto-flow: row; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>gap</code>: Sets spacing between grid tracks (e.g., <code>15px</code>).</li>
            <li><code>grid-auto-flow: row</code>: Places items in rows by default.</li>
            <li><code>grid-auto-flow: dense</code>: Fills gaps for compact layouts.</li>
            <li>Enhances grid usability and aesthetics.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>gap</code> to space grid items.</li>
            <li>Applies <code>grid-auto-flow: row</code> and <code>dense</code> to compare placement.</li>
            <li>Tests accessibility and responsive rendering.</li>
        </ul>
    </div>
</div>

<!--Grid Lines, Areas, and Naming-->
<div id="grid-lines-areas" class="content-section">
    <h2>Grid Lines, Areas, and Naming</h2>
    <p>Grid lines and areas allow precise placement of items in a CSS Grid, with naming for clarity and maintainability.</p>
    <p>Lines are numbered boundaries, and areas are named regions for placing content.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Position items using numbered grid lines or named areas.</li>
        <li>Simplify complex layouts with intuitive naming.</li>
        <li>Enhance code readability and maintainability.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure named areas maintain logical content order for screen readers.</li>
        <li>Test item placement for readability and touch target accessibility.</li>
        <li>Verify responsiveness with named areas and lines.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>grid-template-areas</code> for clear, visual layout definitions.</li>
        <li>Name lines with <code>[name]</code> syntax for precise control.</li>
        <li>Test layouts with varying content to ensure stability.</li>
        <li>Document named areas and lines for team collaboration.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Grid Lines and Areas Example</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: [start] 1fr [middle] 1fr [end];
                                grid-template-rows: [top] 100px [bottom] 100px;
                                grid-template-areas: 
                                    "header header"
                                    "main sidebar";
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .header { grid-area: header; background: lightblue; padding: 10px; }
                            .main { grid-area: main; background: lightgreen; padding: 10px; }
                            .sidebar { grid-area: sidebar; background: lightcoral; padding: 10px; }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="header">Header</div>
                            <div class="main">Main</div>
                            <div class="sidebar">Sidebar</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 100px 100px; grid-template-areas: 'header header' 'main sidebar'; gap: 10px; background: lightgray; padding: 10px;">
                <div style="grid-area: header; background: lightblue; padding: 10px;">Header</div>
                <div style="grid-area: main; background: lightgreen; padding: 10px;">Main</div>
                <div style="grid-area: sidebar; background: lightcoral; padding: 10px;">Sidebar</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Grid lines: Numbered or named boundaries for item placement.</li>
            <li><code>grid-template-areas</code>: Defines named regions for layout.</li>
            <li>Named lines: Use <code>[name]</code> for reusable references.</li>
            <li>Improves layout clarity and flexibility.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>grid-template-areas</code> to define a layout with named regions.</li>
            <li>Places items using grid lines or named areas.</li>
            <li>Tests accessibility and responsive rendering.</li>
        </ul>
    </div>
</div>

<!--Responsive Grids with Media Queries-->
<div id="responsive-grids" class="content-section">
    <h2>Responsive Grids with Media Queries</h2>
    <p>Responsive grids adapt to different screen sizes using CSS Grid combined with media queries.</p>
    <p>Media queries adjust grid properties like columns, rows, or gaps for optimal layouts.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create grids that adapt to various devices and screen sizes.</li>
        <li>Optimize user experience with flexible, responsive layouts.</li>
        <li>Simplify responsive design with Grid’s powerful features.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure responsive grids maintain logical content order.</li>
        <li>Test readability and touch targets across breakpoints.</li>
        <li>Verify accessibility at different screen sizes.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>minmax()</code> and <code>auto-fit</code> for flexible, responsive columns.</li>
        <li>Apply media queries to adjust <code>grid-template-columns</code> or <code>gap</code>.</li>
        <li>Test layouts across common breakpoints (e.g., 576px, 768px).</li>
        <li>Use mobile-first or desktop-first approaches consistently.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Responsive Grid Example</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                            @media (max-width: 600px) {
                                .container {
                                    grid-template-columns: 1fr;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>auto-fit</code>/<code>minmax()</code>: Creates flexible, responsive columns.</li>
            <li>Media queries: Adjust grid structure for specific screen sizes.</li>
            <li>Ensures optimal layout across devices.</li>
            <li>Combines Grid’s power with responsive design principles.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a responsive grid with <code>auto-fit</code> and <code>minmax()</code>.</li>
            <li>Applies media queries to adjust the grid for mobile and desktop.</li>
            <li>Tests accessibility and rendering across breakpoints.</li>
        </ul>
    </div>
</div>

<!--Mobile-First Approach-->
<div id="mobile-first" class="content-section">
    <h2>Mobile-First Approach</h2>
    <p>The mobile-first approach designs for smaller screens by default, then progressively adds styles for larger screens using media queries.</p>
    <p>It prioritizes performance and simplicity for mobile users.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Optimize layouts for mobile devices with minimal CSS.</li>
        <li>Improve performance by loading only necessary styles initially.</li>
        <li>Ensure a solid base for responsive design.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure mobile layouts maintain readable text and touch targets.</li>
        <li>Test navigation and focus order on small screens.</li>
        <li>Verify accessibility across devices and screen sizes.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Start with base styles for mobile (no media queries).</li>
        <li>Use <code>min-width</code> media queries to add styles for larger screens.</li>
        <li>Keep mobile styles lean to reduce load times.</li>
        <li>Test across common mobile devices and breakpoints.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Mobile-First Example</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: 1fr;
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                            @media (min-width: 768px) {
                                .container {
                                    grid-template-columns: repeat(2, 1fr);
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr; gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Base styles: Designed for mobile without media queries.</li>
            <li><code>min-width</code>: Adds styles for larger screens.</li>
            <li>Performance-focused: Reduces initial CSS for mobile.</li>
            <li>Scales progressively for desktop layouts.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a mobile-first approach with a single-column layout.</li>
            <li>Adds a multi-column grid for larger screens via <code>min-width</code> media queries.</li>
            <li>Tests accessibility and rendering across devices.</li>
        </ul>
    </div>
</div>

<!--Media Queries-->
<div id="media-queries" class="content-section">
    <h2>Media Queries</h2>
    <p>Media queries apply CSS styles based on device characteristics like screen width, height, or orientation.</p>
    <p>They are essential for creating responsive designs that adapt to various devices.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Adjust layouts, typography, and spacing for different screen sizes.</li>
        <li>Support responsive design with conditional styling.</li>
        <li>Enhance user experience across devices.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure media queries maintain readable text and touch targets.</li>
        <li>Test content order and navigation at different breakpoints.</li>
        <li>Verify accessibility for users with varying devices or zoom levels.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>min-width</code> for mobile-first or <code>max-width</code> for desktop-first.</li>
        <li>Define clear breakpoints based on content needs, not arbitrary device sizes.</li>
        <li>Keep media queries organized and avoid excessive nesting.</li>
        <li>Test across common devices and screen resolutions.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Media Queries Example</title>
                        <style>
                            .container {
                                display: flex;
                                flex-direction: column;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                                margin: 5px;
                            }
                            @media (min-width: 768px) {
                                .container {
                                    flex-direction: row;
                                    justify-content: space-between;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: flex; flex-direction: column; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 1</div>
                <div style="background: lightblue; padding: 10px; margin: 5px;">Item 2</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>@media</code>: Defines conditions for applying styles.</li>
            <li><code>min-width</code>/<code>max-width</code>: Common for responsive breakpoints.</li>
            <li>Supports features like orientation, resolution, etc.</li>
            <li>Core tool for responsive design.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses media queries to adjust a layout for mobile and desktop.</li>
            <li>Applies <code>min-width</code> for a mobile-first approach.</li>
            <li>Tests accessibility and rendering across breakpoints.</li>
        </ul>
    </div>
</div>

<!--Breakpoints and Device Sizes-->
<div id="breakpoints" class="content-section">
    <h2>Breakpoints and Device Sizes</h2>
    <p>Breakpoints are specific screen sizes in media queries where layouts change to accommodate different devices.</p>
    <p>They are based on content needs and common device sizes (e.g., mobile, tablet, desktop).</p>

    <h4>Purpose</h4>
    <ul>
        <li>Adapt layouts for optimal display on various devices.</li>
        <li>Ensure usability and readability across screen sizes.</li>
        <li>Support responsive design with targeted style changes.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure breakpoints maintain readable text and touch targets.</li>
        <li>Test navigation and content order at each breakpoint.</li>
        <li>Verify accessibility for users with different devices or zoom settings.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Choose breakpoints based on content, not fixed device sizes (e.g., 576px, 768px, 992px).</li>
        <li>Use <code>min-width</code> for mobile-first breakpoints.</li>
        <li>Test breakpoints with real devices and browser tools.</li>
        <li>Document breakpoints for consistency across the project.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Breakpoints Example</title>
                        <style>
                            .container {
                                display: grid;
                                grid-template-columns: 1fr;
                                gap: 10px;
                                background: lightgray;
                                padding: 10px;
                            }
                            .item {
                                background: lightblue;
                                padding: 10px;
                            }
                            @media (min-width: 576px) {
                                .container {
                                    grid-template-columns: repeat(2, 1fr);
                                }
                            }
                            @media (min-width: 992px) {
                                .container {
                                    grid-template-columns: repeat(3, 1fr);
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                            <div class="item">Item 3</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="display: grid; grid-template-columns: 1fr; gap: 10px; background: lightgray; padding: 10px;">
                <div style="background: lightblue; padding: 10px;">Item 1</div>
                <div style="background: lightblue; padding: 10px;">Item 2</div>
                <div style="background: lightblue; padding: 10px;">Item 3</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Breakpoints: Common sizes like 576px (mobile), 768px (tablet), 992px (desktop).</li>
            <li>Content-driven: Adjust based on layout needs, not device presets.</li>
            <li>Tested with real devices for accuracy.</li>
            <li>Integral to responsive design workflows.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Defines breakpoints at 576px and 992px for a grid layout.</li>
            <li>Adjusts columns and spacing at each breakpoint.</li>
            <li>Tests accessibility and rendering across devices.</li>
        </ul>
    </div>
</div>

<!--Fluid Layouts Using Percentages and Relative Units-->
<div id="fluid-layouts" class="content-section">
    <h2>Fluid Layouts Using Percentages and Relative Units</h2>
    <p>Fluid layouts use percentages and relative units (e.g., <code>vw</code>, <code>vh</code>, <code>rem</code>, <code>%</code>) to create designs that scale smoothly across screen sizes.</p>
    <p>They adapt dynamically to viewport or parent dimensions.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create layouts that resize proportionally with the viewport or container.</li>
        <li>Ensure consistent appearance across devices without fixed sizes.</li>
        <li>Support responsive design with minimal media queries.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure fluid layouts maintain readable text and touch targets.</li>
        <li>Test for overflow or clipping on small screens.</li>
        <li>Verify accessibility with browser zoom and varying devices.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>%</code> for widths relative to parent containers.</li>
        <li>Apply <code>vw</code>/<code>vh</code> for viewport-based sizing, with fallbacks.</li>
        <li>Use <code>rem</code> for typography to scale with root font size.</li>
        <li>Test fluid layouts with <code>max-width</code> to prevent excessive stretching.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Fluid Layouts Example</title>
                        <style>
                            .container {
                                width: 90%;
                                max-width: 1200px;
                                margin: 0 auto;
                                background: lightgray;
                                padding: 1rem;
                            }
                            .item {
                                width: 100%;
                                background: lightblue;
                                padding: 10px;
                                margin-bottom: 10px;
                            }
                            @media (min-width: 768px) {
                                .item {
                                    width: 48%;
                                    display: inline-block;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="item">Item 1</div>
                            <div class="item">Item 2</div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 90%; max-width: 1200px; margin: 0 auto; background: lightgray; padding: 1rem;">
                <div style="width: 100%; background: lightblue; padding: 10px; margin-bottom: 10px;">Item 1</div>
                <div style="width: 100%; background: lightblue; padding: 10px; margin-bottom: 10px;">Item 2</div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>%</code>: Scales relative to parent container.</li>
            <li><code>vw</code>/<code>vh</code>: Scales with viewport dimensions.</li>
            <li><code>rem</code>/<code>em</code>: Scales with font sizes for consistency.</li>
            <li><code>max-width</code>: Prevents layouts from becoming too wide.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>%</code> and <code>rem</code> for a fluid layout.</li>
            <li>Includes <code>max-width</code> to constrain the container.</li>
            <li>Tests accessibility and rendering across screen sizes.</li>
        </ul>
    </div>
</div>

<!--2D Transforms-->
<div id="2d-transforms" class="content-section">
    <h2>2D Transforms</h2>
    <p>The <code>transform</code> property applies 2D transformations like <code>translate</code>, <code>scale</code>, <code>rotate</code>, and <code>skew</code> to elements, altering their appearance without affecting the document flow.</p>
    <p>These are used for visual effects like moving, resizing, or rotating elements.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create dynamic visual effects for user interactions.</li>
        <li>Position or reshape elements without changing layout.</li>
        <li>Enhance UI with subtle animations or transformations.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure transforms don’t obscure content or reduce readability.</li>
        <li>Test for usability with assistive technologies during transformations.</li>
        <li>Avoid excessive transforms that may cause motion sensitivity issues.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>translate</code> for movement, <code>scale</code> for resizing, <code>rotate</code> for rotation, and <code>skew</code> for distortion.</li>
        <li>Combine with <code>transition</code> for smooth effects.</li>
        <li>Test across browsers for consistent rendering.</li>
        <li>Use sparingly to avoid performance issues on low-end devices.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>2D Transforms Example</title>
                        <style>
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                margin: 20px;
                                transform: translate(50px, 50px) scale(1.2) rotate(45deg) skew(10deg);
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 100px; height: 100px; background: lightblue; margin: 20px; transform: translate(50px, 50px) scale(1.2) rotate(45deg) skew(10deg);"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>translate(x, y)</code>: Moves element along X and Y axes.</li>
            <li><code>scale(x, y)</code>: Resizes element horizontally and vertically.</li>
            <li><code>rotate(angle)</code>: Rotates element by specified angle.</li>
            <li><code>skew(x-angle, y-angle)</code>: Distorts element along axes.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Applies <code>translate</code>, <code>scale</code>, <code>rotate</code>, and <code>skew</code> to an element.</li>
            <li>Tests the effect with a hover interaction.</li>
            <li>Ensures accessibility and smooth rendering.</li>
        </ul>
    </div>
</div>

<!--3D Transforms-->
<div id="3d-transforms" class="content-section">
    <h2>3D Transforms</h2>
    <p>3D transforms extend 2D transforms with depth, using properties like <code>translate3d</code>, <code>scale3d</code>, <code>rotate3d</code>, and <code>perspective</code> to create three-dimensional effects.</p>
    <p>They require a 3D rendering context and are ideal for immersive visuals.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create visually engaging 3D effects for UI elements.</li>
        <li>Simulate depth and perspective in web designs.</li>
        <li>Enhance interactivity with dynamic transformations.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid 3D effects that obscure content or cause motion discomfort.</li>
        <li>Test with assistive technologies to ensure functionality.</li>
        <li>Provide fallbacks for browsers with limited 3D support.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>perspective</code> to define the 3D space depth.</li>
        <li>Apply <code>transform-style: preserve-3d</code> for nested 3D elements.</li>
        <li>Test performance, as 3D transforms can be resource-intensive.</li>
        <li>Use sparingly to maintain usability and accessibility.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>3D Transforms Example</title>
                        <style>
                            .container {
                                perspective: 600px;
                            }
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                margin: 50px;
                                transform: rotate3d(1, 1, 0, 45deg);
                                transform-style: preserve-3d;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="box"></div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="perspective: 600px;">
                <div style="width: 100px; height: 100px; background: lightblue; margin: 50px; transform: rotate3d(1, 1, 0, 45deg); transform-style: preserve-3d;"></div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>translate3d(x, y, z)</code>: Moves element in 3D space.</li>
            <li><code>rotate3d(x, y, z, angle)</code>: Rotates around a 3D axis.</li>
            <li><code>scale3d(x, y, z)</code>: Scales in three dimensions.</li>
            <li><code>perspective</code>: Sets depth for 3D effect.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>rotate3d</code> and <code>perspective</code> for a 3D effect.</li>
            <li>Triggers the transform on hover or click.</li>
            <li>Tests accessibility and performance.</li>
        </ul>
    </div>
</div>

<!--Transition Basics-->
<div id="transition-basics" class="content-section">
    <h2>Transition Basics</h2>
    <p>The <code>transition</code> property creates smooth changes between CSS property states, using <code>transition-property</code>, <code>transition-duration</code>, and <code>transition-timing-function</code> (e.g., <code>ease-in-out</code>).</p>
    <p>It’s ideal for hover effects or state changes.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Add smooth animations to property changes like color or size.</li>
        <li>Enhance user experience with subtle feedback.</li>
        <li>Simplify animation without keyframes.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid transitions that cause motion sickness or distract users.</li>
        <li>Ensure transitioned elements remain readable and accessible.</li>
        <li>Test with reduced motion preferences (<code>prefers-reduced-motion</code>).</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Specify <code>transition-property</code> to target specific properties.</li>
        <li>Use <code>transition-duration</code> between 0.2s–0.5s for subtle effects.</li>
        <li>Apply <code>ease-in-out</code> for natural timing.</li>
        <li>Test across browsers for consistent behavior.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Transition Basics Example</title>
                        <style>
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                transition-property: background-color, transform;
                                transition-duration: 0.3s;
                                transition-timing-function: ease-in-out;
                            }
                            .box:hover {
                                background-color: lightcoral;
                                transform: scale(1.2);
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 100px; height: 100px; background: lightblue; transition-property: background-color, transform; transition-duration: 0.3s; transition-timing-function: ease-in-out;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>transition-property</code>: Specifies properties to transition.</li>
            <li><code>transition-duration</code>: Sets animation length.</li>
            <li><code>transition-timing-function</code>: Defines speed curve (e.g., <code>ease-in-out</code>).</li>
            <li>Simple way to animate CSS changes.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses transitions for <code>background-color</code> and <code>transform</code> on hover.</li>
            <li>Applies <code>ease-in-out</code> with a 0.3s duration.</li>
            <li>Tests accessibility and smooth rendering.</li>
        </ul>
    </div>
</div>

<!--Transition Shorthand-->
<div id="transition-shorthand" class="content-section">
    <h2>Transition Shorthand</h2>
    <p>The <code>transition</code> shorthand combines <code>transition-property</code>, <code>transition-duration</code>, <code>transition-timing-function</code>, and <code>transition-delay</code> into a single declaration.</p>
    <p>It simplifies code for multiple transitions.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Streamline transition definitions for cleaner CSS.</li>
        <li>Apply multiple transitions efficiently.</li>
        <li>Enhance UI with smooth, concise animations.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure transitions don’t interfere with readability or usability.</li>
        <li>Test with <code>prefers-reduced-motion</code> to respect user preferences.</li>
        <li>Verify transitioned elements remain focusable.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use shorthand: <code>transition: property duration timing-function delay</code>.</li>
        <li>Specify multiple transitions with commas for different properties.</li>
        <li>Keep durations short (0.2s–0.5s) for responsiveness.</li>
        <li>Test for browser compatibility and performance.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Transition Shorthand Example</title>
                        <style>
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                transition: background-color 0.3s ease-in-out, transform 0.5s ease;
                            }
                            .box:hover {
                                background-color: lightcoral;
                                transform: rotate(45deg);
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 100px; height: 100px; background: lightblue; transition: background-color 0.3s ease-in-out, transform 0.5s ease;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Shorthand syntax: <code>property duration timing-function delay</code>.</li>
            <li>Multiple transitions: Separate with commas.</li>
            <li>Reduces code verbosity for complex effects.</li>
            <li>Supports all transition properties in one line.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses transition shorthand for multiple properties on hover.</li>
            <li>Includes different durations and timing functions.</li>
            <li>Tests accessibility and rendering.</li>
        </ul>
    </div>
</div>

<!--Keyframes @keyframes-->
<div id="keyframes-intro" class="content-section">
    <h2>Keyframes @keyframes</h2>
    <p>The <code>@keyframes</code> rule defines a sequence of styles for CSS animations, specifying how properties change over time.</p>
    <p>It’s used with the <code>animation</code> property to create complex animations.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create custom animations beyond simple transitions.</li>
        <li>Define multi-step or looping animations for dynamic effects.</li>
        <li>Enhance UI with engaging visual feedback.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Avoid animations that cause motion sickness or distraction.</li>
        <li>Respect <code>prefers-reduced-motion</code> with simplified alternatives.</li>
        <li>Ensure animated elements remain readable and focusable.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Define keyframes with <code>from</code>/<code>to</code> or percentage steps (e.g., <code>0%</code>, <code>100%</code>).</li>
        <li>Use descriptive keyframe names for clarity.</li>
        <li>Test performance, as complex animations can impact rendering.</li>
        <li>Combine with <code>animation</code> properties for control.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Keyframes Example</title>
                        <style>
                            @keyframes bounce {
                                0% { transform: translateY(0); }
                                50% { transform: translateY(-20px); }
                                100% { transform: translateY(0); }
                            }
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                animation: bounce 1s infinite;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <style>
                @keyframes bounce {
                    0% { transform: translateY(0); }
                    50% { transform: translateY(-20px); }
                    100% { transform: translateY(0); }
                }
            </style>
            <div style="width: 100px; height: 100px; background: lightblue; animation: bounce 1s infinite;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>@keyframes</code>: Defines animation steps.</li>
            <li>Percentage steps: Control property changes at specific points.</li>
            <li>Applied via <code>animation</code> property.</li>
            <li>Enables complex, multi-step animations.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Defines a <code>@keyframes</code> animation for a moving element.</li>
            <li>Applies it with the <code>animation</code> property.</li>
            <li>Tests accessibility and performance.</li>
        </ul>
    </div>
</div>

<!--Animation Properties-->
<div id="animation-properties" class="content-section">
    <h2>Animation Properties</h2>
    <p>CSS animation properties like <code>animation-name</code>, <code>animation-duration</code>, <code>animation-timing-function</code>, <code>animation-delay</code>, <code>animation-iteration-count</code>, <code>animation-direction</code>, <code>animation-fill-mode</code>, and <code>animation-play-state</code> control how <code>@keyframes</code> animations behave.</p>
    <p>They provide fine-grained control over animation execution.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Customize animation behavior, timing, and repetition.</li>
        <li>Create dynamic, interactive UI effects.</li>
        <li>Enhance user engagement with controlled animations.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>prefers-reduced-motion</code> to simplify animations for sensitive users.</li>
        <li>Ensure animations don’t obscure content or disrupt focus.</li>
        <li>Test with assistive technologies for compatibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>animation-name</code> to link to specific <code>@keyframes</code>.</li>
        <li>Set <code>animation-duration</code> and <code>animation-delay</code> for timing control.</li>
        <li>Apply <code>animation-fill-mode: forwards</code> to retain final state.</li>
        <li>Test <code>animation-play-state</code> for pause/resume functionality.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Animation Properties Example</title>
                        <style>
                            @keyframes slide {
                                from { transform: translateX(0); }
                                to { transform: translateX(100px); }
                            }
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                animation-name: slide;
                                animation-duration: 2s;
                                animation-timing-function: ease-in-out;
                                animation-delay: 0.5s;
                                animation-iteration-count: 2;
                                animation-direction: alternate;
                                animation-fill-mode: forwards;
                            }
                            .box:hover {
                                animation-play-state: paused;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <style>
                @keyframes slide {
                    from { transform: translateX(0); }
                    to { transform: translateX(100px); }
                }
            </style>
            <div style="width: 100px; height: 100px; background: lightblue; animation: slide 2s ease-in-out 0.5s 2 alternate forwards;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>animation-name</code>: Links to <code>@keyframes</code>.</li>
            <li><code>animation-iteration-count</code>: Sets repetition (e.g., <code>infinite</code>).</li>
            <li><code>animation-direction</code>: Controls playback direction (e.g., <code>alternate</code>).</li>
            <li><code>animation-fill-mode</code>: Defines state before/after animation.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses multiple animation properties for a keyframe animation.</li>
            <li>Includes <code>animation-play-state</code> for pause on hover.</li>
            <li>Tests accessibility and performance.</li>
        </ul>
    </div>
</div>

<!--Combining Animations for Effects-->
<div id="combine-animations" class="content-section">
    <h2>Combining Animations for Effects</h2>
    <p>Combining multiple <code>@keyframes</code> animations or animations with transitions creates complex, layered effects for engaging UI.</p>
    <p>This technique enhances visual storytelling and interactivity.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create sophisticated animations by layering effects.</li>
        <li>Enhance user engagement with dynamic, multi-part animations.</li>
        <li>Combine transitions for subtle changes with animations for bold effects.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Provide <code>prefers-reduced-motion</code> alternatives to simplify effects.</li>
        <li>Ensure combined animations don’t obscure content or cause discomfort.</li>
        <li>Test with assistive technologies for usability.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use multiple <code>animation</code> declarations for layered effects.</li>
        <li>Combine with <code>transition</code> for hover or state changes.</li>
        <li>Optimize performance by limiting complex animations.</li>
        <li>Test across devices for smooth rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Combined Animations Example</title>
                        <style>
                            @keyframes pulse {
                                0% { transform: scale(1); }
                                50% { transform: scale(1.2); }
                                100% { transform: scale(1); }
                            }
                            @keyframes fade {
                                0% { opacity: 1; }
                                50% { opacity: 0.5; }
                                100% { opacity: 1; }
                            }
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                animation: pulse 2s infinite, fade 3s infinite;
                                transition: background-color 0.3s ease;
                            }
                            .box:hover {
                                background-color: lightcoral;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <style>
                @keyframes pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.2); }
                    100% { transform: scale(1); }
                }
                @keyframes fade {
                    0% { opacity: 1; }
                    50% { opacity: 0.5; }
                    100% { opacity: 1; }
                }
            </style>
            <div style="width: 100px; height: 100px; background: lightblue; animation: pulse 2s infinite, fade 3s infinite; transition: background-color 0.3s ease;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Multiple animations: Apply via comma-separated <code>animation</code> values.</li>
            <li>Transitions: Add for state changes like hover.</li>
            <li>Creates rich, layered visual effects.</li>
            <li>Requires careful optimization for performance.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Combines two <code>@keyframes</code> animations for an element.</li>
            <li>Adds a <code>transition</code> for a hover effect.</li>
            <li>Tests accessibility and performance.</li>
        </ul>
    </div>
</div>

<!--Declaring and Using Variables-->
<div id="declare-use-vars" class="content-section">
    <h2>Declaring and Using Variables</h2>
    <p>CSS custom properties (variables) are declared with <code>--variable-name</code> and used with <code>var(--variable-name)</code>, enabling reusable values across stylesheets.</p>
    <p>They simplify maintenance and dynamic theming.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Centralize reusable values like colors or sizes.</li>
        <li>Support dynamic theming and responsive designs.</li>
        <li>Reduce repetition and improve maintainability.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure variables for colors maintain sufficient contrast.</li>
        <li>Test variable-driven styles for readability across themes.</li>
        <li>Verify fallback values for browsers with limited support.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Declare variables in <code>:root</code> for global scope.</li>
        <li>Use descriptive names (e.g., <code>--primary-color</code>).</li>
        <li>Provide fallback values in <code>var()</code> for robustness.</li>
        <li>Test dynamic updates with JavaScript or media queries.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>CSS Variables Example</title>
                        <style>
                            :root {
                                --primary-color: lightblue;
                                --padding: 10px;
                            }
                            .box {
                                background: var(--primary-color, #add8e6);
                                padding: var(--padding);
                                width: 100px;
                                height: 100px;
                            }
                            @media (prefers-color-scheme: dark) {
                                :root {
                                    --primary-color: darkblue;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="background: lightblue; padding: 10px; width: 100px; height: 100px;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>--variable-name</code>: Declares a custom property.</li>
            <li><code>var(--variable-name)</code>: Uses the variable value.</li>
            <li><code>:root</code>: Global scope for variables.</li>
            <li>Enables theming and maintainable CSS.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Declares CSS variables for colors and spacing.</li>
            <li>Uses variables in multiple elements.</li>
            <li>Tests dynamic updates with media queries or JavaScript.</li>
        </ul>
    </div>
</div>

<!--Scoping Variables-->
<div id="scope-variables" class="content-section">
    <h2>Scoping Variables</h2>
    <p>CSS custom properties (variables) can be defined globally (in <code>:root</code>) or locally (within specific selectors), allowing flexible scoping for different contexts.</p>
    <p>Global variables are accessible everywhere, while local variables override them in specific scopes.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Define reusable values globally or for specific components.</li>
        <li>Enable modular theming by scoping variables to elements.</li>
        <li>Improve maintainability with context-specific styles.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure scoped variables maintain sufficient contrast for readability.</li>
        <li>Test local overrides to avoid unintended visual issues.</li>
        <li>Verify fallback values for robust accessibility.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use <code>:root</code> for global variables like colors or typography.</li>
        <li>Define local variables in component selectors for specific styling.</li>
        <li>Document variable scopes to clarify usage for teams.</li>
        <li>Test scoped variables with dynamic updates (e.g., via JavaScript).</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Scoping Variables Example</title>
                        <style>
                            :root {
                                --main-color: lightblue;
                                --padding: 10px;
                            }
                            .container {
                                --main-color: lightcoral;
                                background: var(--main-color);
                                padding: var(--padding);
                            }
                            .box {
                                background: var(--main-color);
                                padding: var(--padding);
                                margin: 10px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="box">Local Scope</div>
                        </div>
                        <div class="box">Global Scope</div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="background: lightcoral; padding: 10px;">
                <div style="background: lightcoral; padding: 10px; margin: 10px;">Local Scope</div>
            </div>
            <div style="background: lightblue; padding: 10px; margin: 10px;">Global Scope</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Global scope: Defined in <code>:root</code>, accessible everywhere.</li>
            <li>Local scope: Defined in selectors, overrides global variables.</li>
            <li>Enables modular and context-specific styling.</li>
            <li>Supports dynamic theming with scoped overrides.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Defines global variables in <code>:root</code>.</li>
            <li>Overrides variables locally in a component.</li>
            <li>Tests accessibility and dynamic updates.</li>
        </ul>
    </div>
</div>

<!--Benefits Over Preprocessor Variables-->
<div id="vars-vs-preprocessors" class="content-section">
    <h2>Benefits Over Preprocessor Variables</h2>
    <p>CSS custom properties (variables) offer advantages over preprocessor variables (e.g., Sass, Less) due to their native CSS nature, dynamic updates, and scoping capabilities.</p>
    <p>They integrate seamlessly with the browser’s rendering engine.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Enable dynamic style updates via JavaScript or media queries.</li>
        <li>Support cascading and scoping natively in CSS.</li>
        <li>Reduce reliance on build tools for variable management.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure dynamic variable updates maintain contrast and readability.</li>
        <li>Test variable fallbacks for browsers with partial support.</li>
        <li>Verify accessibility during theme changes or dynamic updates.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use CSS variables for dynamic theming over static preprocessor variables.</li>
        <li>Leverage scoping for modular designs, unlike preprocessor globals.</li>
        <li>Combine with preprocessor variables for hybrid workflows if needed.</li>
        <li>Test performance and compatibility across browsers.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>CSS Variables vs Preprocessors Example</title>
                        <style>
                            :root {
                                --main-color: lightblue;
                            }
                            .box {
                                background: var(--main-color, #add8e6);
                                padding: 10px;
                                width: 100px;
                                height: 100px;
                            }
                            @media (prefers-color-scheme: dark) {
                                :root {
                                    --main-color: darkblue;
                                }
                            }
                            /* JavaScript can update: document.documentElement.style.setProperty('--main-color', 'lightcoral'); */
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="background: lightblue; padding: 10px; width: 100px; height: 100px;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Dynamic updates: CSS variables can change at runtime (e.g., via JavaScript).</li>
            <li>Scoping: Supports global and local scopes, unlike preprocessor globals.</li>
            <li>Native CSS: No build step required, unlike Sass/Less.</li>
            <li>Cascading: Inherits and overrides like regular CSS properties.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses CSS variables for theming with dynamic updates.</li>
            <li>Compares with static preprocessor-like values.</li>
            <li>Tests accessibility and runtime changes.</li>
        </ul>
    </div>
</div>

<!--CSS Filters-->
<div id="css-filters" class="content-section">
    <h2>CSS Filters</h2>
    <p>The <code>filter</code> property applies graphical effects like <code>blur</code>, <code>brightness</code>, <code>contrast</code>, <code>grayscale</code>, and more to elements, altering their visual appearance.</p>
    <p>Filters are useful for image manipulation or UI enhancements.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Enhance visuals with effects like blurring or color adjustments.</li>
        <li>Create hover effects or dynamic image styling.</li>
        <li>Reduce reliance on image editing software for simple effects.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure filters don’t reduce text readability or contrast.</li>
        <li>Test with assistive technologies to avoid usability issues.</li>
        <li>Provide fallbacks for browsers with limited filter support.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use filters like <code>blur(5px)</code> or <code>grayscale(100%)</code> for subtle effects.</li>
        <li>Combine with <code>transition</code> for smooth filter changes.</li>
        <li>Test performance, as filters can be resource-intensive.</li>
        <li>Avoid overuse to maintain clarity and accessibility.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>CSS Filters Example</title>
                        <style>
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                filter: blur(2px) brightness(120%) grayscale(50%);
                                transition: filter 0.3s ease;
                            }
                            .box:hover {
                                filter: none;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 100px; height: 100px; background: lightblue; filter: blur(2px) brightness(120%) grayscale(50%); transition: filter 0.3s ease;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>blur(px)</code>: Applies a Gaussian blur.</li>
            <li><code>brightness(%)</code>: Adjusts light intensity.</li>
            <li><code>contrast(%)</code>: Modifies color contrast.</li>
            <li><code>grayscale(%)</code>: Converts to grayscale.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Applies multiple filters to an element or image.</li>
            <li>Uses <code>transition</code> for smooth filter changes on hover.</li>
            <li>Tests accessibility and performance.</li>
        </ul>
    </div>
</div>

<!--Mix Blend Modes-->
<div id="mix-blend-modes" class="content-section">
    <h2>Mix Blend Mode</h2>
    <p>The <code>mix-blend-mode</code> property defines how an element’s content blends with its background, using modes like <code>multiply</code>, <code>screen</code>, <code>overlay</code>, etc.</p>
    <p>It creates visually rich effects for layered content.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create complex visual effects by blending elements with backgrounds.</li>
        <li>Enhance design with artistic layering techniques.</li>
        <li>Apply dynamic effects for interactive UI.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure blend modes maintain readable text and sufficient contrast.</li>
        <li>Test with assistive technologies to avoid usability issues.</li>
        <li>Provide fallbacks for browsers with limited support.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use modes like <code>multiply</code> or <code>overlay</code> for subtle effects.</li>
        <li>Test blend modes with different background colors or images.</li>
        <li>Avoid overuse to prevent visual clutter.</li>
        <li>Combine with <code>transition</code> for smooth blending changes.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Mix Blend Mode Example</title>
                        <style>
                            .container {
                                width: 150px;
                                height: 150px;
                                background: lightcoral;
                                position: relative;
                            }
                            .box {
                                width: 100px;
                                height: 100px;
                                background: lightblue;
                                mix-blend-mode: multiply;
                                position: absolute;
                                top: 25px;
                                left: 25px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="box"></div>
                        </div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 150px; height: 150px; background: lightcoral; position: relative;">
                <div style="width: 100px; height: 100px; background: lightblue; mix-blend-mode: multiply; position: absolute; top: 25px; left: 25px;"></div>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>multiply</code>: Darkens by multiplying colors.</li>
            <li><code>screen</code>: Lightens by inverting and multiplying.</li>
            <li><code>overlay</code>: Combines multiply and screen based on background.</li>
            <li>Blends element with its background or parent.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>mix-blend-mode</code> to blend an element with its background.</li>
            <li>Tests different blend modes (e.g., <code>multiply</code>, <code>screen</code>).</li>
            <li>Ensures accessibility and visual clarity.</li>
        </ul>
    </div>
</div>

<!--Background Blend Modes-->
<div id="background-blend-modes" class="content-section">
    <h2>Background Blend Mode</h2>
    <p>The <code>background-blend-mode</code> property defines how an element’s background layers (e.g., images, colors) blend together, using modes like <code>multiply</code>, <code>screen</code>, or <code>overlay</code>.</p>
    <p>It’s ideal for creating textured or artistic background effects.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Blend multiple background images or colors for unique effects.</li>
        <li>Enhance visual design with layered background styling.</li>
        <li>Create dynamic backgrounds without external image editing.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure blended backgrounds don’t reduce text readability.</li>
        <li>Test contrast ratios for overlaid content.</li>
        <li>Provide fallbacks for browsers with limited support.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use modes like <code>multiply</code> or <code>soft-light</code> for subtle blending.</li>
        <li>Test with multiple background layers for desired effects.</li>
        <li>Ensure foreground content remains legible over blended backgrounds.</li>
        <li>Combine with <code>transition</code> for dynamic blending changes.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Background Blend Mode Example</title>
                        <style>
                            .box {
                                width: 200px;
                                height: 200px;
                                background: url('https://via.placeholder.com/200') no-repeat, lightblue;
                                background-blend-mode: overlay;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="box"></div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="width: 200px; height: 200px; background: url('https://via.placeholder.com/200') no-repeat, lightblue; background-blend-mode: overlay;"></div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>multiply</code>: Darkens background layers.</li>
            <li><code>screen</code>: Lightens background layers.</li>
            <li><code>overlay</code>: Combines multiply and screen effects.</li>
            <li>Blends multiple background layers within an element.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses <code>background-blend-mode</code> with multiple background layers.</li>
            <li>Tests different blend modes for visual effects.</li>
            <li>Ensures accessibility with readable foreground content.</li>
        </ul>
    </div>
</div>

<!--Embedding SVG in HTML-->
<div id="embed-svg-html" class="content-section">
    <h2>Embedding SVG in HTML</h2>
    <p>Scalable Vector Graphics (SVG) can be embedded in HTML using the <code>&lt;svg&gt;</code> tag, <code>&lt;img&gt;</code>, or inline via <code>&lt;object&gt;</code> or <code>&lt;embed&gt;</code>.</p>
    <p>SVGs are resolution-independent and stylable with CSS.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Create scalable, lightweight graphics for icons or illustrations.</li>
        <li>Enable CSS and JavaScript interactions with SVG elements.</li>
        <li>Support responsive designs with vector-based graphics.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>&lt;title&gt;</code> and <code>&lt;desc&gt;</code> in SVGs for screen reader support.</li>
        <li>Ensure SVGs have proper ARIA attributes if interactive.</li>
        <li>Test visibility and usability across devices.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use inline <code>&lt;svg&gt;</code> for full CSS/JavaScript control.</li>
        <li>Embed via <code>&lt;img&gt;</code> for simple, non-interactive SVGs.</li>
        <li>Optimize SVGs to reduce file size using tools like SVGO.</li>
        <li>Include fallback images for older browsers.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Embedding SVG Example</title>
                    </head>
                    <body>
                        <svg width="100" height="100" aria-label="Circle icon">
                            <title>Circle</title>
                            <desc>A blue circle</desc>
                            <circle cx="50" cy="50" r="40" fill="lightblue"/>
                        </svg>
                        <img src="circle.svg" alt="Circle image" width="100" height="100">
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <svg width="100" height="100" aria-label="Circle icon">
                <title>Circle</title>
                <desc>A blue circle</desc>
                <circle cx="50" cy="50" r="40" fill="lightblue"/>
            </svg>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Inline <code>&lt;svg&gt;</code>: Fully stylable and interactive.</li>
            <li><code>&lt;img&gt;</code>: Simple embedding, limited interactivity.</li>
            <li><code>&lt;title&gt;</code>/<code>&lt;desc&gt;</code>: Improves accessibility.</li>
            <li>Scalable and resolution-independent graphics.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Embeds an SVG inline and via <code>&lt;img&gt;</code>.</li>
            <li>Includes accessibility features like <code>&lt;title&gt;</code> and ARIA.</li>
            <li>Tests rendering and accessibility across browsers.</li>
        </ul>
    </div>
</div>

<!--Styling SVG with CSS-->
<div id="style-svg-css" class="content-section">
    <h2>Styling SVG with CSS</h2>
    <p>SVGs can be styled with CSS properties like <code>fill</code>, <code>stroke</code>, <code>stroke-width</code>, and more, applied via inline styles, external CSS, or SVG attributes.</p>
    <p>This enables dynamic and responsive SVG styling.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Customize SVG appearance with CSS for consistent design.</li>
        <li>Create interactive effects like hover or animations.</li>
        <li>Integrate SVGs seamlessly into web designs.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure styled SVGs maintain visibility and contrast.</li>
        <li>Test with screen readers to verify accessibility features.</li>
        <li>Avoid styling that obscures SVG content or functionality.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use CSS for <code>fill</code> and <code>stroke</code> to style SVG shapes.</li>
        <li>Apply <code>transition</code> for smooth style changes on interaction.</li>
        <li>Use CSS custom properties for reusable SVG styles.</li>
        <li>Test across browsers for consistent rendering.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Styling SVG Example</title>
                        <style>
                            .circle {
                                fill: lightblue;
                                stroke: darkblue;
                                stroke-width: 2;
                                transition: fill 0.3s ease;
                            }
                            .circle:hover {
                                fill: lightcoral;
                            }
                        </style>
                    </head>
                    <body>
                        <svg width="100" height="100" aria-label="Styled circle">
                            <circle class="circle" cx="50" cy="50" r="40"/>
                        </svg>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <svg width="100" height="100" aria-label="Styled circle">
                <circle style="fill: lightblue; stroke: darkblue; stroke-width: 2; transition: fill 0.3s ease;" cx="50" cy="50" r="40"/>
            </svg>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>fill</code>: Sets the interior color of SVG shapes.</li>
            <li><code>stroke</code>/<code>stroke-width</code>: Defines outline color and thickness.</li>
            <li>CSS transitions: Enable smooth SVG style changes.</li>
            <li>Supports dynamic and interactive SVG styling.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Styles an SVG with <code>fill</code>, <code>stroke</code>, and <code>transition</code>.</li>
            <li>Applies hover effects to change SVG appearance.</li>
            <li>Tests accessibility and rendering.</li>
        </ul>
    </div>
</div>

<!--Using Icon Libraries-->
<div id="icon-libraries" class="content-section">
    <h2>Using Icon Libraries</h2>
    <p>Icon libraries like Font Awesome, Material Icons, or Feather Icons provide pre-designed SVG or font-based icons for web projects, simplifying icon integration.</p>
    <p>They offer consistent, customizable icons for UI design.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Add professional, scalable icons without custom design.</li>
        <li>Enhance UI with consistent iconography.</li>
        <li>Support styling and interactivity with CSS or JavaScript.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use ARIA attributes (e.g., <code>aria-label</code>) for icon accessibility.</li>
        <li>Ensure icons have descriptive text for screen readers.</li>
        <li>Test visibility and contrast for styled icons.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use SVG-based libraries for better scalability and styling.</li>
        <li>Load only needed icons to optimize performance.</li>
        <li>Style icons with CSS for consistency with design system.</li>
        <li>Include fallbacks for browsers with limited support.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Icon Libraries Example</title>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                        <style>
                            .icon {
                                font-size: 2rem;
                                color: lightblue;
                                transition: color 0.3s ease;
                            }
                            .icon:hover {
                                color: lightcoral;
                            }
                        </style>
                    </head>
                    <body>
                        <i class="fas fa-star icon" aria-label="Star icon"></i>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <i style="font-size: 2rem; color: lightblue; transition: color 0.3s ease;" class="fas fa-star" aria-label="Star icon"></i>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>SVG/font icons: Scalable and stylable via CSS.</li>
            <li>Libraries: Font Awesome, Material Icons, etc., provide ready-to-use icons.</li>
            <li>ARIA attributes: Enhance accessibility for screen readers.</li>
            <li>Customizable with CSS for color, size, and transitions.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses an icon library like Font Awesome for SVG icons.</li>
            <li>Styles icons with CSS and adds hover effects.</li>
            <li>Tests accessibility with ARIA and screen readers.</li>
        </ul>
    </div>
</div>

<!--Semantic HTML + CSS-->
<div id="semantic-html-css" class="content-section">
    <h2>Semantic HTML + CSS</h2>
    <p>Semantic HTML uses meaningful elements (e.g., <code>&lt;nav&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code>) to convey structure and purpose, enhanced by CSS for styling without compromising accessibility.</p>
    <p>It ensures content is understandable by screen readers and other assistive technologies.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Improve accessibility by providing clear document structure.</li>
        <li>Enhance SEO with meaningful markup.</li>
        <li>Allow CSS to style content without altering its semantic meaning.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use semantic elements to define roles (e.g., <code>&lt;main&gt;</code> for primary content).</li>
        <li>Ensure CSS doesn’t hide or obscure semantic elements for screen readers.</li>
        <li>Test with assistive technologies to verify structure and navigation.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Choose semantic elements over generic <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>.</li>
        <li>Use ARIA landmarks (e.g., <code>role="navigation"</code>) only when semantics are insufficient.</li>
        <li>Style with CSS to enhance, not replace, semantic meaning.</li>
        <li>Validate HTML to ensure proper nesting and semantics.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Semantic HTML Example</title>
                        <style>
                            nav {
                                background: lightblue;
                                padding: 10px;
                            }
                            main {
                                margin: 20px;
                            }
                            footer {
                                background: lightgray;
                                padding: 10px;
                                text-align: center;
                            }
                        </style>
                    </head>
                    <body>
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </nav>
                        <main>
                            <article>
                                <h1>Welcome</h1>
                                <p>This is the main content.</p>
                            </article>
                        </main>
                        <footer>
                            <p>&copy; 2025 Example</p>
                        </footer>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <nav style="background: lightblue; padding: 10px;">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <main style="margin: 20px;">
                <article>
                    <h1>Welcome</h1>
                    <p>This is the main content.</p>
                </article>
            </main>
            <footer style="background: lightgray; padding: 10px; text-align: center;">
                <p>&copy; 2025 Example</p>
            </footer>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Semantic tags: <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code>.</li>
            <li>CSS: Enhances visual design without altering meaning.</li>
            <li>Accessibility: Clear structure for screen readers.</li>
            <li>SEO: Improves content discoverability.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses semantic HTML elements for a blog layout.</li>
            <li>Applies CSS to style the semantic structure.</li>
            <li>Tests accessibility with a screen reader.</li>
        </ul>
    </div>
</div>

<!--Focus States and Keyboard Navigation-->
<div id="focus-keyboard-nav" class="content-section">
    <h2>Focus States and Keyboard Navigation</h2>
    <p>Focus states and keyboard navigation ensure interactive elements (e.g., links, buttons) are accessible via keyboard, with clear visual indicators using CSS <code>:focus</code> and <code>:focus-visible</code>.</p>
    <p>This is critical for users relying on keyboards or assistive devices.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Enable navigation for keyboard-only users.</li>
        <li>Provide clear visual feedback for focused elements.</li>
        <li>Enhance accessibility for users with motor or visual impairments.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Ensure all interactive elements are focusable (e.g., via <code>tabindex</code>).</li>
        <li>Use high-contrast focus styles for visibility.</li>
        <li>Test keyboard navigation with screen readers and assistive devices.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Style <code>:focus</code> and <code>:focus-visible</code> with outlines or borders.</li>
        <li>Avoid removing default focus outlines without replacements.</li>
        <li>Use <code>tabindex="0"</code> for non-interactive elements needing focus.</li>
        <li>Test focus order to ensure logical navigation.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Focus States Example</title>
                        <style>
                            button {
                                background: lightblue;
                                padding: 10px;
                                border: 2px solid transparent;
                                transition: border 0.2s ease;
                            }
                            button:focus, button:focus-visible {
                                outline: none;
                                border: 2px solid darkblue;
                            }
                            a {
                                color: darkblue;
                                text-decoration: none;
                            }
                            a:focus, a:focus-visible {
                                outline: 3px solid lightcoral;
                            }
                        </style>
                    </head>
                    <body>
                        <button>Click Me</button>
                        <a href="#">Link</a>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <button style="background: lightblue; padding: 10px; border: 2px solid transparent; transition: border 0.2s ease;">Click Me</button>
            <a href="#" style="color: darkblue; text-decoration: none;">Link</a>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>:focus</code>/<code>:focus-visible</code>: Styles for focused elements.</li>
            <li>Keyboard navigation: Ensures tab order and focusability.</li>
            <li>High-contrast outlines: Improves visibility for users.</li>
            <li>Logical focus order: Matches visual layout.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Styles focus states for buttons and links with <code>:focus-visible</code>.</li>
            <li>Ensures keyboard navigation with logical tab order.</li>
            <li>Tests accessibility with keyboard and screen reader.</li>
        </ul>
    </div>
</div>

<!--Contrast and Readability-->
<div id="contrast-readability" class="content-section">
    <h2>Contrast and Readability</h2>
    <p>Contrast and readability in CSS involve ensuring sufficient color contrast between text and backgrounds, using appropriate font sizes and spacing for legibility.</p>
    <p>This is essential for users with visual impairments or low-vision conditions.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Ensure text is legible for all users, including those with visual impairments.</li>
        <li>Meet WCAG (Web Content Accessibility Guidelines) contrast requirements.</li>
        <li>Enhance user experience with clear, readable content.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Aim for WCAG AA contrast ratios (4.5:1 for normal text, 3:1 for large text).</li>
        <li>Use tools like contrast checkers to verify ratios.</li>
        <li>Test readability across devices, lighting conditions, and zoom levels.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Use high-contrast colors (e.g., dark text on light backgrounds).</li>
        <li>Set font sizes to at least 16px for body text.</li>
        <li>Apply adequate line spacing (e.g., <code>line-height: 1.5</code>).</li>
        <li>Avoid low-contrast combinations like light gray on white.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Contrast and Readability Example</title>
                        <style>
                            body {
                                background: #fff;
                                color: #333;
                                font-size: 16px;
                                line-height: 1.5;
                            }
                            .highlight {
                                background: darkblue;
                                color: white;
                                padding: 10px;
                                font-size: 18px;
                            }
                        </style>
                    </head>
                    <body>
                        <p>This is a readable paragraph with good contrast.</p>
                        <p class="highlight">Highlighted text with high contrast.</p>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <div style="background: #fff; color: #333; font-size: 16px; line-height: 1.5;">
                <p>This is a readable paragraph with good contrast.</p>
                <p style="background: darkblue; color: white; padding: 10px; font-size: 18px;">Highlighted text with high contrast.</p>
            </div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Contrast ratio: 4.5:1 for normal text, 3:1 for large text (WCAG AA).</li>
            <li>Font size: Minimum 16px for readability.</li>
            <li>Line spacing: <code>line-height: 1.5</code> for legibility.</li>
            <li>Tested with contrast tools and user feedback.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses high-contrast colors for text and backgrounds.</li>
            <li>Applies readable font sizes and line spacing.</li>
            <li>Tests contrast ratios with a WCAG-compliant tool.</li>
        </ul>
    </div>
</div>

<!--Avoiding Invisible Text or Off-Screen Elements-->
<div id="invisible-text" class="content-section">
    <h2>Avoiding Invisible Text or Off-Screen Elements</h2>
    <p>Invisible text or off-screen elements must be carefully managed to remain accessible to screen readers and avoid confusing users, using techniques like <code>clip-path</code> or visually hidden classes.</p>
    <p>Improper handling can break accessibility for assistive technology users.</p>

    <h4>Purpose</h4>
    <ul>
        <li>Hide content visually while keeping it accessible to screen readers.</li>
        <li>Prevent off-screen elements from disrupting navigation or focus.</li>
        <li>Ensure hidden content is intentionally accessible when needed.</li>
    </ul>

    <h4>Accessibility</h4>
    <ul>
        <li>Use <code>.visually-hidden</code> class for text meant for screen readers.</li>
        <li>Avoid <code>display: none</code> or <code>visibility: hidden</code> for accessible content.</li>
        <li>Test off-screen elements to ensure they don’t interfere with focus order.</li>
    </ul>

    <h4>Best Practices</h4>
    <ul>
        <li>Apply <code>clip-path: inset(100%)</code> or <code>position: absolute</code> for visually hidden content.</li>
        <li>Ensure off-screen elements are focusable only when intended.</li>
        <li>Use ARIA attributes (e.g., <code>aria-hidden="true"</code>) for non-accessible hidden content.</li>
        <li>Test with screen readers to verify hidden content behavior.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Invisible Text Example</title>
                        <style>
                            .visually-hidden {
                                position: absolute;
                                width: 1px;
                                height: 1px;
                                padding: 0;
                                margin: -1px;
                                overflow: hidden;
                                clip: rect(0, 0, 0, 0);
                                border: 0;
                            }
                            .off-screen {
                                position: absolute;
                                left: -9999px;
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Main Heading</h1>
                        <span class="visually-hidden">Screen reader only: Welcome message</span>
                        <div class="off-screen" aria-hidden="true">This is not accessible</div>
                    </body>
                    </html>
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <h1>Main Heading</h1>
            <span style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); border: 0;">Screen reader only: Welcome message</span>
            <div style="position: absolute; left: -9999px;" aria-hidden="true">This is not accessible</div>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li><code>.visually-hidden</code>: Hides content visually but keeps it accessible.</li>
            <li><code>aria-hidden="true"</code>: Removes content from assistive technologies.</li>
            <li>Off-screen positioning: Avoids focus or navigation issues.</li>
            <li>Ensures intentional accessibility for hidden content.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage that:</p>
        <ul>
            <li>Uses a <code>.visually-hidden</code> class for screen reader content.</li>
            <li>Hides non-accessible content with <code>aria-hidden</code>.</li>
            <li>Tests accessibility with a screen reader.</li>
        </ul>
    </div>
</div>
      <!---->



<!--notes go here-->

    </div>

    <script>
        // Handle menu item clicks to toggle submenus
        document.querySelectorAll('.menu-item > a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const parent = this.parentElement;
                const submenu = parent.querySelector('.submenu');

                // Close all other submenus and remove active class
                document.querySelectorAll('.menu-item').forEach(item => {
                    if (item !== parent) {
                        item.classList.remove('active');
                        const otherSubmenu = item.querySelector('.submenu');
                        if (otherSubmenu) {
                            otherSubmenu.classList.remove('active');
                        }
                    }
                });

                // Toggle the current submenu
                parent.classList.toggle('active');
                if (submenu) {
                    submenu.classList.toggle('active');
                }
                
                // If no submenu, show the content directly
                if (!submenu) {
                    const contentId = this.getAttribute('data-content');
                    if (contentId) {
                        showContent(contentId);
                    }
                }
            });
        });

        // Handle submenu item clicks
        document.querySelectorAll('.submenu a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                // Remove active class from all submenu items
                document.querySelectorAll('.submenu li').forEach(li => li.classList.remove('active'));
                // Add active class to clicked item
                this.parentElement.classList.add('active');
                // Show the selected content
                const contentId = this.getAttribute('data-content');
                showContent(contentId);
            });
        });

        // Show content section
        function showContent(contentId) {
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(section => section.classList.remove('active'));
            // Show the selected content
            document.getElementById(`${contentId}-content`).classList.add('active');
            // Update progress
            updateLearningProgress();
        }

        // Copy button functionality
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', function() {
                const codeBlock = this.parentElement.querySelector('pre');
                navigator.clipboard.writeText(codeBlock.innerText).then(() => {
                    const originalText = this.textContent;
                    this.textContent = 'Copied!';
                    setTimeout(() => {
                        this.textContent = originalText;
                    }, 2000);
                }).catch(err => {
                    console.error('Failed to copy code: ', err);
                });
            });
        });

        // Track learning progress
        function updateLearningProgress() {
            const totalSections = document.querySelectorAll('.menu-item > a[data-content], .submenu a').length;
            let completedSections = 0;
            
            // Check which sections have been visited
            document.querySelectorAll('.menu-item > a[data-content], .submenu a').forEach(item => {
                if (item.parentElement.classList.contains('active')) {
                    completedSections++;
                }
            });
            
            // Update progress bar
            const progressPercent = Math.round((completedSections / totalSections) * 100);
            document.getElementById('progress-fill').style.width = progressPercent + '%';
            document.getElementById('progress-percent').textContent = progressPercent + '%';
            document.getElementById('completed-topics').textContent = 
                completedSections + ' of ' + totalSections + ' topics completed';
        }
        
        // Initialize progress
        updateLearningProgress();
    </script>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/easing.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
</body>
</html>
