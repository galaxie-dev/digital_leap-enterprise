<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Leap - JavaScript</title>
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
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap - Advanced Javascript</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">Blog</a>
                    <a href="courses.php" class="nav-item nav-link">Courses</a>                         
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="join_now.php" class="nav-item nav-link">Join Now</a>
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
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Introduction to the DOM</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="what-is-dom"><i style="font-size: 8px;"></i> What is the DOM?</a></li>
                        <li><a href="#" data-content="select-elements"><i style="font-size: 8px;"></i> Selecting Elements</a></li>
                        <li><a href="#" data-content="dom-tree-traversal"><i style="font-size: 8px;"></i> Traversing the DOM Tree</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Manipulating Elements</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="change-text-content"><i style="font-size: 8px;"></i> Changing Text & Content</a></li>
                        <li><a href="#" data-content="modify-attributes"><i style="font-size: 8px;"></i> Modifying Attributes</a></li>
                        <li><a href="#" data-content="add-remove-elements"><i style="font-size: 8px;"></i> Adding/Removing Elements</a></li>
                        <li><a href="#" data-content="class-list"><i style="font-size: 8px;"></i> ClassList API</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Styling Elements</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="inline-styling"><i style="font-size: 8px;"></i> Inline Styling</a></li>
                        <li><a href="#" data-content="toggle-class"><i style="font-size: 8px;"></i> Toggling Classes</a></li>
                        <li><a href="#" data-content="computed-style"><i style="font-size: 8px;"></i> getComputedStyle</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Events & Listeners</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="event-types"><i style="font-size: 8px;"></i> Event Types</a></li>
                        <li><a href="#" data-content="add-event-listener"><i style="font-size: 8px;"></i> addEventListener</a></li>
                        <li><a href="#" data-content="event-propagation"><i style="font-size: 8px;"></i> Event Propagation</a></li>
                        <li><a href="#" data-content="event-delegation"><i style="font-size: 8px;"></i> Event Delegation</a></li>
                        <li><a href="#" data-content="prevent-default"><i style="font-size: 8px;"></i> preventDefault & stopPropagation</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Forms & Validation</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="form-access"><i style="font-size: 8px;"></i> Accessing Form Elements</a></li>
                        <li><a href="#" data-content="submit-form"><i style="font-size: 8px;"></i> Handling Form Submission</a></li>
                        <li><a href="#" data-content="validate-inputs"><i style="font-size: 8px;"></i> Input Validation</a></li>
                        <li><a href="#" data-content="form-data"><i style="font-size: 8px;"></i> FormData Object</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Timers & Intervals</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="settimeout"><i style="font-size: 8px;"></i> setTimeout</a></li>
                        <li><a href="#" data-content="setinterval"><i style="font-size: 8px;"></i> setInterval</a></li>
                        <li><a href="#" data-content="clear-timers"><i style="font-size: 8px;"></i> Clearing Timers</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>LocalStorage & SessionStorage</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="storage-basics"><i style="font-size: 8px;"></i> Storage Basics</a></li>
                        <li><a href="#" data-content="store-retrieve-data"><i style="font-size: 8px;"></i> Storing & Retrieving Data</a></li>
                        <li><a href="#" data-content="todo-app-example"><i style="font-size: 8px;"></i> Example: Todo App</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Error Handling</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="try-catch-finally"><i style="font-size: 8px;"></i> try...catch...finally</a></li>
                        <li><a href="#" data-content="throw-custom-errors"><i style="font-size: 8px;"></i> Throwing Custom Errors</a></li>
                        <li><a href="#" data-content="debugging-js"><i style="font-size: 8px;"></i> Debugging Techniques</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Regular Expressions</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="regex-patterns"><i style="font-size: 8px;"></i> Regex Patterns</a></li>
                        <li><a href="#" data-content="flags-character-sets"><i style="font-size: 8px;"></i> Flags & Character Sets</a></li>
                        <li><a href="#" data-content="regex-methods"><i style="font-size: 8px;"></i> test(), match(), replace()</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Functional Programming</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="pure-functions"><i style="font-size: 8px;"></i> Pure Functions</a></li>
                        <li><a href="#" data-content="immutability"><i style="font-size: 8px;"></i> Immutability</a></li>
                        <li><a href="#" data-content="higher-order-functions"><i style="font-size: 8px;"></i> Higher Order Functions</a></li>
                        <li><a href="#" data-content="currying-composition"><i style="font-size: 8px;"></i> Currying & Composition</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Closures & Scope Chain</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="closure-basics"><i style="font-size: 8px;"></i> Closure Basics</a></li>
                        <li><a href="#" data-content="private-data"><i style="font-size: 8px;"></i> Private Data with Closures</a></li>
                        <li><a href="#" data-content="module-pattern"><i style="font-size: 8px;"></i> Module Pattern</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Prototypes & Inheritance</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="prototype-chain"><i style="font-size: 8px;"></i> Prototype Chain</a></li>
                        <li><a href="#" data-content="constructor-functions"><i style="font-size: 8px;"></i> Constructor Functions</a></li>
                        <li><a href="#" data-content="es6-class-under-hood"><i style="font-size: 8px;"></i> ES6 Class Under the Hood</a></li>
                        <li><a href="#" data-content="extend-built-ins"><i style="font-size: 8px;"></i> Extending Built-in Objects</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Design Patterns</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="module-pattern"><i style="font-size: 8px;"></i> Module Pattern</a></li>
                        <li><a href="#" data-content="factory-pattern"><i style="font-size: 8px;"></i> Factory Pattern</a></li>
                        <li><a href="#" data-content="observer-pattern"><i style="font-size: 8px;"></i> Observer Pattern</a></li>
                        <li><a href="#" data-content="singleton-pattern"><i style="font-size: 8px;"></i> Singleton Pattern</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i>Performance Optimization</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="debounce-throttle"><i style="font-size: 8px;"></i> Debounce & Throttle</a></li>
                        <li><a href="#" data-content="memoization"><i style="font-size: 8px;"></i> Memoization</a></li>
                        <li><a href="#" data-content="lazy-loading"><i style="font-size: 8px;"></i> Lazy Loading</a></li>
                        <li><a href="#" data-content="efficient-dom"><i style="font-size: 8px;"></i> Efficient DOM Updates</a></li>
                        <li><a href="#" data-content="performance-tools"><i style="font-size: 8px;"></i> Performance Tools (Lighthouse)</a></li>
                    </ul>
                </li>
                
                
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Root Element Content -->
            <div id="root-content" class="content-section active">
                <h2>Root Element</h2>
                <p>The root element is the top-level container for all HTML elements.</p>
                <h3 style="margin-top: 30px;">Key Elements</h3>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <!-- Explains Doctype -->
                    <h4>&lt;!DOCTYPE html&gt;</h4>
                        <li>The document type declaration (not an HTML tag)</li>
                        <li>Must be the first line in an HTML document</li>
                        <li>Declares this as an HTML5 document (simplified from previous HTML versions)</li>
                        <li>Ensures the browser renders content in standards mode</li>

                    <!-- Explains html tag -->
                    <br><h4>&lt;html&gt; Element</h4>
                        <li>The root element wrapping all HTML content</li>
                        <li>Should include the lang attribute for accessibility and SEO</li>
                        <div class="code-display">
                            <div class="code-container">
                                <div class="code-block">
                                <pre>

&lt;html lang="en"&gt; &lt;!-- Specifies English language content --&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>

                    
                    <!-- body section -->
                    <br><h4>&lt;body&gt;  Section</h4>
                    <li>Contains all visible page content</li>
                    <li>Where you place headings, paragraphs, images, etc.
                        <div class="code-display">
                            <div class="code-container">                               
                                <div class="code-block">
                                    <pre>
&lt;body&gt;
    &lt;!-- Content goes here --&gt;
    &lt;h1&gt;Page heading goes here&lt;/h1&gt;
    &lt;p&gt;Visible content goes here &lt;/p&gt;
&lt;/body&gt;  
                                    </pre>
                                    <button class="copy-btn">Copy</button>
                                </div>
                            </div>                         
                        </div>
                
                <div class="code-display">
                    <div class="code-container">
                        <h3>Sample HTML Document Structure</h3>
                        <div class="code-block">
                            <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, <br>    initial-scale=1.0"&gt;
    &lt;title&gt;Digital Leap&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- Content goes here --&gt;
    &lt;h1&gt;Page heading goes here&lt;/h1&gt;
    &lt;p&gt;Visible content goes here &lt;/p&gt;
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
                        <h4>Image</h4>
                        <p>The content area is currently empty.</p>
                    </div>
                </div>
                

            </div>

            <!-- Head Section and tag Content -->
            <div id="head-content" class="content-section">
                <h2>&lt;head&gt;  Section (Document Metadata)</h2>
                <p>The head section contains metadata and links to external resources.</p>
                <p>Also contains non-visible page information </p>

                        <!-- Explains head tag -->
                        <h4>&lt;meta&gt;  tag</h4>
                            <li>Contains metadata about the HTML document, such as character set, 
                                description, keywords, author, and viewport settings.</li>
                            <li>Provides information to browsers and search engines, 
                                helping with page rendering and SEO.
                            </li>
                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Head Section Elements</h3>
                                    <div class="code-block">
                                        <pre>
    
    &lt;head&gt;
        &lt;meta charset="UFT-8"&gt; &lt;!-- Character encoding declaration--&gt;
        &lt;meta name="description" content="Brief description of the page"&gt;
        &lt;meta name="keywords" content="HTML, CSS, Javascript"&gt;
        &lt;meta name="auther" content="Evans Osumba"&gt;
        &lt;meta name="viewport" content="width=device-width, <br>         initial-scale=1.0"&gt;      
    &lt;/head&gt;
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>
                              
                            </div>

                        <h4>&lt;title&gt;  tag</h4>
                            <li>Defines the title of the HTML document, which
                                 is displayed in the browser's title bar or tab</li>
                            <li>Important for SEO as it provides a concise description of the page's content</li>
                        <div class="code-display">
                            <div class="code-container">                                  
                                <div class="code-block">
                                    <pre>

&lt;head&gt;
    &lt;title&gt;Digital Leap&lt;/title&gt; &lt;!-- Browser tab title --&gt;
&lt;/head&gt;
                                    </pre>
                                    <button class="copy-btn">Copy</button>
                                </div>
                            </div>
                            
                        </div>

                        <h4>&lt;link&gt;  tag</h4>
                            <li>Used to link external resources to the HTML document, such 
                                as stylesheets, icons, and other documents.</li>
                                <li>Helps in defining the relationship between the current 
                                    document and an external resource.</li>
                            <div class="code-display">
                                <div class="code-container">                                  
                                    <div class="code-block">
                                        <pre>
    
&lt;head&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
    &lt;link rel="icon" href="favicon.ico"&gt;
&lt;/head&gt;
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>
                                </div>
                                
                            </div>
                        <h4>&lt;style&gt;&lt;/style&gt;  tag</h4>
                            <li>Defines CSS styles within the HTML document, 
                                allowing for the styling of elements on the page.</li>
                            <li>Can be used to embed CSS directly within the HTML file, 
                                useful for small projects or inline styling.</li>
                                <div class="code-display">
                                    <div class="code-container">                                  
                                        <div class="code-block">
                                            <pre>
        
&lt;head&gt;
    &lt;style&gt;
        /* Inline CSS */
        body{
            font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        }
        h1 {
            color: #333;
        }
    &lt;/style&gt;
&lt;/head&gt;
                                            </pre>
                                            <button class="copy-btn">Copy</button>
                                        </div>
                                    </div>
                                    
                                </div>
                        <div class="code-display">
                            <div class="code-container">
                                <h3>Head Section Elements</h3>
                                <div class="code-block">
                                    <pre>

&lt;head&gt;
    &lt;meta charset="UFT-8"&gt; &lt;!-- Character encoding declaration--&gt;
    &lt;meta name="description" content="A brief description of the page"&gt;
    &lt;title&gt;Digital Leap&lt;/title&gt; &lt;!-- Browser tab title --&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
    &lt;style&gt;
        /* Inline CSS */
    &lt;/style&gt;
    &lt;base href="https://example.com/"&gt;
&lt;/head&gt;
                                    </pre>
                                    <button class="copy-btn">Copy</button>
                                </div>
                                <div class="preview-container">
                                    <h3>Result</h3>
                                    <div class="preview-frame">
                                        <h4>Image</h4>
                                        <p>The head section is not visible in the browser window but contains important metadata for the document.</p>
                                        
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div>
            </div>

            <!-- Body Section Content -->
            <div id="body-content" class="content-section">
                <h2>Body Section</h2>
                <p>The body section contains the visible content of the webpage.</p>
                
                <div class="code-display">
                    <div class="code-container">
                        <h3>Body Section Structure</h3>
                        <div class="code-block">
                            <pre>
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Website Header&lt;/h1&gt;
        &lt;nav&gt;
            &lt;a href="#"&gt;Home&lt;/a&gt;
            &lt;a href="#"&gt;About&lt;/a&gt;
        &lt;/nav&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &lt;article&gt;
            &lt;h2&gt;Article Title&lt;/h2&gt;
            &lt;p&gt;Article content...&lt;/p&gt;
        &lt;/article&gt;
        
        &lt;aside&gt;
            &lt;h3&gt;Related Links&lt;/h3&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;Link 1&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/aside&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt;© 2025 Website Footer&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>
                    </div>
                    
                    <div class="preview-container">
                        <h3>Result</h3>
                        <div class="preview-frame">
                            <header style="background: #f0f0f0; padding: 10px; margin-bottom: 15px;">
                                <h1 style="margin: 0; font-size: 1.5em;">Website Header</h1>
                                <nav style="margin-top: 10px;">
                                    <a href="#" style="margin-right: 10px; text-decoration: none; color: #065ccc;">Home</a>
                                    <a href="#" style="text-decoration: none; color: #065ccc;">About</a>
                                </nav>
                            </header>
                            
                            <main style="margin-bottom: 15px;">
                                <article style="background: #f9f9f9; padding: 10px; margin-bottom: 15px;">
                                    <h2 style="margin: 0 0 10px 0; font-size: 1.2em;">Article Title</h2>
                                    <p style="margin: 0;">Article content...</p>
                                </article>
                                
                                <aside style="background: #f9f9f9; padding: 10px;">
                                    <h3 style="margin: 0 0 10px 0; font-size: 1.1em;">Related Links</h3>
                                    <ul style="margin: 0; padding-left: 20px;">
                                        <li><a href="#" style="text-decoration: none; color: #065ccc;">Link 1</a></li>
                                    </ul>
                                </aside>
                            </main>
                            
                            <footer style="background: #f0f0f0; padding: 10px; text-align: center;">
                                <p style="margin: 0;">© 2025 Website Footer</p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>

        


            <!-- Content Sections -->
              <!-- Semantic Containers -->
            <div id="semantic-content" class="content-section active">
                <h2> Semantic Containers</h2>
                <p>HTML5 introduced a range of semantic elements to help structure web content more meaningfully.</p>
                <p>hese elements not only improve the readability of the HTML code 
                    but also enhance the accessibility and SEO of web pages.</p>
                <p>Below are the various semantic containers</p>

                        <!-- Explains header tag -->
                        <h4>&lt;header&gt;  (Introductory Content/Header)</h4>
                            <li>Represents a container for introductory content or a set of navigational links.</li>
                            <li>It typically contains the website's logo, navigation bar, and sometimes a search form
                            </li>

                            <h5>Accessibility</h5>
                            <li>Helps screen readers understand the structure of the page and 
                                navigate to the main content more easily</li>

                            <h5>Best Practices</h5>
                                <li>Use &lt;header&gt; at the top of the page to group introductory content.</li>
                                <li>Ensure that the navigation links are accessible, with proper aria-labels if necessary.</li>
                                <li>Avoid nesting multiple &lt;header&gt; elements within each other.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
    &lt;header&gt;
        &lt;h1&gt;Digital Leap &lt;/h1&gt;
            &lt;nav&gt;
            &lt;ul&gt;
                &lt;li&gt; &lt;a href="#Home"&gt;Home &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#about"&gt;About &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#services"&gt;Services &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#contact"&gt;Contact &lt;/a&gt; &lt;/li&gt;                
            &lt;/ul&gt;  
        &lt;/nav&gt;
    &lt;/header&gt;
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The head section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>


            <!-- Navigation bar -->
            <div id="nnav-content" class="content-section active">
                <h4>&lt;nav&gt;  (Navigation Links)</h4>
                <p>The &lt;nav&gt; element defines a section of the page that contains navigation links</p>
                <p>It is used to group links that help users navigate the website</p>               

                        <!-- Explains header tag -->
                            <br><h5>Accessibility</h5>
                            <li>Provides a clear navigation structure, which is beneficial 
                                for screen readers and keyboard navigation</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;nav&gt; for primary navigation menus.</li>
                                <li>Ensure that all links are accessible, with proper aria-labels and tabindex attributes.</li>
                                <li>Avoid nesting &lt;nav&gt; for secondary navigation or links that are not part of the main navigation..</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
   
&lt;nav&gt;
    &lt;ul&gt;
        &lt;li&gt; &lt;a href="#Home"&gt;Home &lt;/a&gt; &lt;/li&gt;
        &lt;li&gt; &lt;a href="#about"&gt;About &lt;/a&gt; &lt;/li&gt;
        &lt;li&gt; &lt;a href="#services"&gt;Services &lt;/a&gt; &lt;/li&gt;
        &lt;li&gt; &lt;a href="#contact"&gt;Contact &lt;/a&gt; &lt;/li&gt;                
    &lt;/ul&gt;  
&lt;/nav&gt;
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The head section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>


            <!-- Main Section -->           
            <div id="mmain-content" class="content-section active">
                <h4>&lt;main&gt;  (Main Content)</h4>
                <p>The &lt;main&gt;  element specifies the main content of the document</p>
                <p>There should be only one &lt;main&gt; element per page, and it should not 
                    be nested within &lt;article&gt;, &lt;aside&gt;, &lt;header&gt;, &lt;footer&gt;, or &lt;nav&gt; elements.</p>               

                        <!-- Explains header tag -->
                            <br><h5>Accessibility</h5>
                            <li> Helps screen readers and other assistive technologies 
                                identify the primary content of the page</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;main&gt; to wrap the primary content of the page.</li>
                                <li>Ensure that the content within &lt;main&gt; is accessible and properly structured.</li>
                                <li>Avoid nesting &lt;main&gt; elements with each other.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>   
   
&lt;main&gt;
    &lt;h2&gt; Welcome to Our Website&lt;/h2&gt;
    &lt;p&gt; This Is the main content of the page&lt;/p&gt;
&lt;/main&gt;               
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>


            <!-- Article Section -->           
            <div id="aarticle-content" class="content-section active">
                <h4>&lt;article&gt;  (Self-contained Content)</h4>
                <p>The &lt;article&gt;  element represents a self-contained composition in a document, page, application, or site</p>
                <p>It is suitable for content like blog posts, news articles, or forum posts.</p>               

                        <!-- Explains article tag -->
                            <br><h5>Accessibility</h5>
                            <li> Helps in structuring content that can be independently distributed or reused.</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;article&gt;  for content that can stand alone, such as blog posts or news articles..</li>
                                <li>Ensure that each &lt;article&gt; has a clear heading and proper structure.</li>
                                <li>Use &lt;section&gt; elements within &ltarticle&gt; to further structure the content if necessary.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
&lt;article&gt;
    &lt;h3&gt; Blog/ Post/ Article Tittle &lt;/h3&gt;
    &lt;p&gt; This is the content of the blog post&lt;/p&gt;                
&lt;/article&gt;  
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>



            <!-- Section Section -->           
            <div id="ssection-content" class="content-section">
                <h4>&lt;section&gt;  (Thematic Grouping)</h4>
                <p>The &lt;section&gt;  element represents a thematic grouping of content</p>
                <p>It is used to group related content together, such as sections of an article or different parts of a webpage.</p>               

                        <!-- Explains section tag -->
                            <br><h5>Accessibility</h5>
                            <li> Provides a clear structure for screen readers to navigate through different sections of the page.</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;section&gt; to group related content</li>
                                <li>Ensure that each &lt;section&gt; has a clear heading.</li>
                                <li>Avoid using &lt;section&gt; for styling purposes only; it should have a thematic grouping.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
&lt;section&gt;
    &lt;h3&gt; Section Tittle&lt;/h3&gt;
    &lt;p&gt; This is the content of the blog post&lt;/p&gt;                
&lt;/section&gt;  
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>



             <!-- Aside Section -->           
             <div id="aaside-content" class="content-section">
                <h4>&lt;aside&gt;  (Sidebar/Secondary Content)</h4>
                <p>The &lt;aside&gt;  element represents content that is tangentially related to the main content but can be considered separate</p>
                <p>It is often used for sidebars, advertisements, or related links.</p>               

                        <!-- Explains aside tag -->
                            <br><h5>Accessibility</h5>
                            <li> Helps in distinguishing between the main content and supplementary content.</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;aside&gt; for content that is related but not essential to the main content.t</li>
                                <li>Ensure that the content within &lt;aside&gt; is accessible and properly structured.</li>
                                <li>Avoid using &lt;aside&gt; for primary content.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
&lt;aside&gt;
    &lt;h3&gt; Content Sections&lt;/h3&gt;
    &lt;ul&gt;
        &lt;li&gt; &lt;a href="#section1"&gt; Header&lt;/a&gt;&lt;/li&gt;   
        &lt;li&gt; &lt;a href="#section2"&gt; Article&lt;/a&gt;&lt;/li&gt; 
        &lt;li&gt; &lt;a href="#section3"&gt; Sidebar&lt;/a&gt;&lt;/li&gt; 
    &lt;/ul&gt;
&lt;/aside&gt;  
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>


          
            <!-- Footer Section -->           
            <div id="ffooter-content" class="content-section">
                <h4>&lt;footer&gt;  (Footer Content)</h4>
                <p>The &lt;footer&gt;  element represents the footer of a document or section, usually at the bottom of a web page.</p>
                <p>It typically contains information about the author, copyright details, contact information, and links to related documents.</p>               

                        <!-- Explains footer tag -->
                            <br><h5>Accessibility</h5>
                            <li> Provides a clear indication of the end of the main content and additional information.</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;footer&gt; at the bottom of the page to group footer content.</li>
                                <li>Ensure that the content within &lt;footer&gt; is accessible and properly structured.</li>
                                <li>Avoid using multiple &lt;footer&gt; elements within each other.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
&lt;footer&gt;
    &lt;p&gt; &copy; 2024 Digital Leap&lt;/p&gt;
    &lt;p&gt; Contact: +254790****45&lt;/p&gt;
    &lt;p&gt; Email: info@example.com&lt;/p&gt;
&lt;/footer&gt;  
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>

 
            <!-- Search Section -->           
            <div id="ssearch-content" class="content-section">
                <h4>&lt;search&gt;   (Search Section – New in HTML5.3)</h4>
                <p>The &lt;search&gt;   element represents a search section of a document.</p>
                <p>It is used to define a search form or a search widget.</p>               

                        <!-- Explains search tag -->
                            <br><h5>Accessibility</h5>
                            <li> Helps in identifying the search functionality of the page, 
                                making it easier for users to find and use the search feature..</li>

                            <br><h5>Best Practices</h5>
                                <li>Use &lt;search&gt; to define search forms or widgets.</li>
                                <li>nsure that the search form is accessible, with proper labels and aria-labels if necessary.</li>
                                <li>Avoid using &lt;search&gt; for non-search related content..</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre>
    
&lt;search&gt;
    &lt;form action="/search" method="get"&gt;
        &lt;input type="search" name="q" placeholder="Search..."&gt;
        &lt;button type="submit"&gt;Search&lt;/button&gt;
    &lt;/form&gt;
&lt;/search&gt;  
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>    
                                                 
                            </div>   
                            <div class="preview-container">
                                <h3>Result</h3>
                                <div class="preview-frame">
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                       <!-- <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Character encoding declaration</li>
                                <li>Viewport settings for responsive design</li>
                                <li>Page description for search engines</li>
                                <li>Title that appears in browser tab</li>
                                <li>Links to external resources like CSS</li>
                            </ul>
                        </div> -->
            </div>

             <!-- Main Section -->           
             <div id="headings-content" class="content-section active">
                <h4>&lt;h1&gt; to &lt;h6&gt;  (Headings)</h4>
                <p>HTML headings are used to define the structure and hierarchy of the content on a webpage.</p>
                <p>They range from &lt;h1&gt; to &lt;h1&gt;, with &lt;h1&gt; being the highest level and &lt;h6&gt; being the lowest.</p>
                <p>Proper use of headings is crucial for both accessibility and SEO.</p>               

                        <!-- Explains h tags -->
                        <br><h5>Purpose</h5>
                        <li>&lt;h1&gt;: The most important heading, typically used for the main title of the page.</li>
                        <li>&lt;h2&gt;: Subheadings or secondary titles.</li>
                        <li>&lt;h3&gt; to &lt;h6&gt;: Further sub headings or nested sections.</li>

                  
                            <li>Avoid using headings for styling purposes only. Instead, use CSS for visual styling.</li>

                            <br><h5>Accessibility</h5>
                            <li> Headings should be used to provide a clear structure to the content.</li>
                            <li>Avoid using headings for styling purposes only. Instead, use CSS for visual styling.</li>


                            <br><h5>Best Practices</h5>
                                <li>Use only one &lt;h1&gt; per page, typically for the main title.</li>
                                <li>Ensure that headings are descriptive and relevant to the content they introduce.</li>
                                <li>Use headings to break up long blocks of text, making the content more readable.</li>

                            <div class="code-display">
                                <div class="code-container">
                                    <h3>Usage</h3>
                                    <div class="code-block">
                                        <pre> 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Example of Headings&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
            &lt;h1&gt;Welcome to Our Website&lt;/h1&gt;
        &lt;nav&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#services"&gt;Services&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/nav&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &lt;section&gt;
            &lt;h2&gt;About Us&lt;/h2&gt;
                &lt;p&gt;This section provides information about our community.&lt;/p&gt;
        &lt;/section&gt;

        &lt;section&gt;
            &lt;h2&gt;Our Services&lt;/h2&gt;
                &lt;article&gt;
                    &lt;h3&gt;Service 1&lt;/h3&gt;
                    &lt;p&gt;Details about Service 1.&lt;/p&gt;
                &lt;/article&gt;
                &lt;article&gt;
                    &lt;h3&gt;Service 2&lt;/h3&gt;
                    &lt;p&gt;Details about Service 2.&lt;/p&gt;
                &lt;/article&gt;
        &lt;/section&gt;

        &lt;section&gt;
            &lt;h2&gt;Contact Us&lt;/h2&gt;
            &lt;p&gt;Get in touch with us through the following methods.&lt;/p&gt;
        &lt;/section&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt;&amp;copy; 2025 Digital Leap&lt;/p&gt;
    &lt;/footer&gt;
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
                                    <h4>Image</h4>
                                    <p>The section is not visible in the browser window but contains important metadata for the document.</p>
                                    
                                </div>
                            </div>                   
                        <div class="preview-frame">
                            <h4>Key Elements</h4>
                            <ul>
                                <li>Use headings in a logical order. For example, an &lt;h2&gt; should not come before an &lt;h1&gt;.</li>
                                <li>Avoid skipping heading levels (e.g., using an &lt;h3&gt; after an &lt;h1&gt; without an &lt;h2&gt; in between).</li>
                                <li>Avoid using headings for styling purposes only. Instead, use CSS for visual styling.</li>
                                <li>Search engines use headings to understand the structure and content of a webpage.</li>
                                <li>Proper use of headings can improve search engine rankings.</li>
                            </ul>
                        </div> 
            </div>




            
        </div>

        <!-- Right Sidebar -->
        <div class="right-sidebar">
            <div class="sidebar-section">
                <h3>Learning Progress</h3>
                <div class="progress-container">
                    <div class="progress-title">
                        <span>HTML Basics</span>
                        <span id="progress-percent">0%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" id="progress-fill"></div>
                    </div>
                    <div class="progress-percent" id="completed-topics">0 of 18 topics completed</div>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h3>Quick Resources</h3>
                <div class="resource-item">
                    <div class="resource-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="resource-info">
                        <h4>HTML Documentation</h4>
                        <p>Official HTML reference</p>
                    </div>
                </div>
                <div class="resource-item">
                    <div class="resource-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="resource-info">
                        <h4>HTML Tutorials</h4>
                        <p>Video lessons for beginners</p>
                    </div>
                </div>
                <div class="resource-item">
                    <div class="resource-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="resource-info">
                        <h4>Code Playground</h4>
                        <p>Practice HTML online</p>
                    </div>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h3>Recent Activity</h3>
                <div class="resource-item">
                    <div class="resource-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="resource-info">
                        <h4>Started Learning</h4>
                        <p>Just now</p>
                    </div>
                </div>
            </div>
        </div>
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