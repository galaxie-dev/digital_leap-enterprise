<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Leap - HTML</title>
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
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap - HTML</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">Blog</a>
                    <a href="courses.php" class="nav-item nav-link active">Courses</a>                         
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="join_now.php" class="nav-item nav-link">Join Now</a>
                    <a href="join_now.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
                
            </div>
        </nav>
        <!-- Navbar End -->
    <div class="app-container">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <select id="courseMenu" onchange="goToPage()">
                    <option value="">-- Select a Course --</option>
                    <option value="html-notes.html">HTML COURSE</option>
                    <option value="css-notes.html">CSS COURSE</option>
                    <option value="js-notes.html">JavaScript COURSE</option>
                </select>
                <li class="menu-item active">
                    <a href="#"><i class="fas fa-code me-2"></i> Document Structure</a>
                    <ul class="submenu active">
                        <li data-section-id="root"><a href="#" data-content="root"><i style="font-size: 8px;"></i> Root Element</a></li>
                        <li data-section-id="head"><a href="#" data-content="head"><i style="font-size: 8px;"></i> Head Section</a></li>
                        <li data-section-id="body"><a href="#" data-content="body"><i style="font-size: 8px;"></i> Body Section</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Content Sections</a>
                    <ul class="submenu">
                        <li data-section-id="semantic"><a href="#" data-content="semantic"><i style="font-size: 8px;"></i> Semantic Containers</a></li>
                        <li data-section-id="header-semantic"><a href="#" data-content="header-semantic"><i style="font-size: 8px;"></i> Header</a></li>
                        <li data-section-id="nnav"><a href="#" data-content="nnav"><i style="font-size: 8px;"></i> Navigation</a></li>
                        <li data-section-id="mmain"><a href="#" data-content="mmain"><i style="font-size: 8px;"></i> Main Section</a></li>
                        <li data-section-id="aarticle"><a href="#" data-content="aarticle"><i style="font-size: 8px;"></i> Article</a></li>
                        <li data-section-id="ssection"><a href="#" data-content="ssection"><i style="font-size: 8px;"></i> Section</a></li>
                        <li data-section-id="aaside"><a href="#" data-content="aaside"><i style="font-size: 8px;"></i> Sidebar</a></li>
                        <li data-section-id="ffooter"><a href="#" data-content="ffooter"><i style="font-size: 8px;"></i> Footer Content</a></li>
                        <li data-section-id="ssearch"><a href="#" data-content="ssearch"><i style="font-size: 8px;"></i> Search Section</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Headings and Text</a>
                    <ul class="submenu">
                        <li data-section-id="headings"><a href="#" data-content="headings"><i style="font-size: 8px;"></i> Headings</a></li>
                        <li data-section-id="text"><a href="#" data-content="text"><i style="font-size: 8px;"></i> Text Elements</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Media</a>
                    <ul class="submenu">
                        <li data-section-id="images"><a href="#" data-content="images"><i style="font-size: 8px;"></i> Images</a></li>
                        <li data-section-id="videos"><a href="#" data-content="videos"><i style="font-size: 8px;"></i> Videos</a></li>
                        <li data-section-id="external-videos"><a href="#" data-content="external-videos"><i style="font-size: 8px;"></i> Videos from other sites</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Lists</a>
                    <ul class="submenu">
                        <li data-section-id="unordered"><a href="#" data-content="unordered"><i style="font-size: 8px;"></i> Unordered List</a></li>
                        <li data-section-id="ordered"><a href="#" data-content="ordered"><i style="font-size: 8px;"></i> Ordered List</a></li>
                        <li data-section-id="description"><a href="#" data-content="description"><i style="font-size: 8px;"></i> Description List</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Interactive Elements</a>
                    <ul class="submenu">
                        <li data-section-id="links"><a href="#" data-content="links"><i style="font-size: 8px;"></i> Links and Buttons</a></li>
                        <li data-section-id="forms"><a href="#" data-content="forms"><i style="font-size: 8px;"></i> Forms</a></li>
                        <li data-section-id="advanced-forms"><a href="#" data-content="advanced-forms"><i style="font-size: 8px;"></i> Advanced Forms</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Dividers</a>
                    <ul class="submenu">
                        <li data-section-id="thematic"><a href="#" data-content="thematic"><i style="font-size: 8px;"></i> Thematic Break</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Generic Containers</a>
                    <ul class="submenu">
                        <li data-section-id="div"><a href="#" data-content="div"><i style="font-size: 8px;"></i> Div</a></li>
                        <li data-section-id="span"><a href="#" data-content="span"><i style="font-size: 8px;"></i> Span</a></li>
                        <li data-section-id="other-containers"><a href="#" data-content="other-containers"><i style="font-size: 8px;"></i> Others</a></li>
                    </ul>
                </li>
                <li class="menu-item" data-section-id="semantic-tags">
                    <a href="#" data-content="semantic-tags"><i class="fas fa-code me-2"></i> Semantic Tags (HTML5)</a>
                </li>
                <li class="menu-item" data-section-id="semantic-text">
                    <a href="#" data-content="semantic-text"><i class="fas fa-code me-2"></i> Semantic Text</a>
                </li>
                <li class="menu-item" data-section-id="tables">
                    <a href="#" data-content="tables"><i class="fas fa-code me-2"></i> Table Structures</a>
                </li>
                <li class="menu-item" data-section-id="scripting">
                    <a href="#" data-content="scripting"><i class="fas fa-code me-2"></i> Scripting</a>
                </li>
                <li class="menu-item" data-section-id="embedded">
                    <a href="#" data-content="embedded"><i class="fas fa-code me-2"></i> Embedded Content</a>
                </li>
                <li class="menu-item" data-section-id="deprecated">
                    <a href="#" data-content="deprecated"><i class="fas fa-code me-2"></i> Deprecated/Obsolete Tags</a>
                </li>
                <li class="menu-item" data-section-id="obscure">
                    <a href="#" data-content="obscure"><i class="fas fa-code me-2"></i> Obscure but Valid Tags</a>
                </li>
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Additional Semantic Elements</a>
                    <ul class="submenu">
                        <li data-section-id="figure"><a href="#" data-content="figure"><i style="font-size: 8px;"></i> Figure</a></li>
                        <li data-section-id="figcaption"><a href="#" data-content="figcaption"><i style="font-size: 8px;"></i> Figcaption</a></li>
                        <li data-section-id="time-element"><a href="#" data-content="time-element"><i style="font-size: 8px;"></i> Time</a></li>
                        <li data-section-id="mark-element"><a href="#" data-content="mark-element"><i style="font-size: 8px;"></i> Mark</a></li>
                        <li data-section-id="details-element"><a href="#" data-content="details-element"><i style="font-size: 8px;"></i> Details</a></li>
                        <li data-section-id="summary-element"><a href="#" data-content="summary-element"><i style="font-size: 8px;"></i> Summary</a></li>
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


            <!-- Text Elements -->
    <div id="text-content" class="content-section active">
        <h2>Text Elements</h2>
        <p>HTML provides various elements to format and emphasize text, enhancing readability and semantics.</p>
        <h4>Common Text Elements</h4>
        <ul>
            <li><strong>&lt;p&gt;</strong>: Defines a paragraph of text.</li>
            <li><strong>&lt;br&gt;</strong>: Inserts a line break within text.</li>
            <li><strong>&lt;strong&gt;</strong>: Indicates text of strong importance, typically rendered as bold.</li>
            <li><strong>&lt;em&gt;</strong>: Marks text with emphasis, typically rendered as italic.</li>
            <li><strong>&lt;b&gt;</strong>: Styles text as bold without semantic importance.</li>
            <li><strong>&lt;i&gt;</strong>: Styles text as italic without semantic emphasis.</li>
            <li><strong>&lt;small&gt;</strong>: Represents side comments or fine print, rendered in smaller font.</li>
            <li><strong>&lt;mark&gt;</strong>: Highlights text for reference or notation purposes.</li>
            <li><strong>&lt;ins&gt;</strong>: Indicates text that has been inserted into a document.</li>
            <li><strong>&lt;del&gt;</strong>: Indicates text that has been deleted from a document.</li>
            <li><strong>&lt;s&gt;</strong>: Renders text with a strikethrough, indicating it is no longer relevant.</li>
            <li><strong>&lt;u&gt;</strong>: Underlines text, used for semantic purposes like misspelled words.</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Use semantic elements like <strong>&lt;strong&gt;</strong> and <strong>&lt;em&gt;</strong> to convey meaning for screen readers.</li>
            <li>Avoid using <strong>&lt;b&gt;</strong> or <strong>&lt;i&gt;</strong> for emphasis; reserve them for stylistic purposes.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use <strong>&lt;p&gt;</strong> for blocks of text rather than multiple <strong>&lt;br&gt;</strong> tags.</li>
            <li>Ensure text elements are used semantically to improve SEO and accessibility.</li>
            <li>Avoid excessive use of formatting tags; rely on CSS for styling.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
<p>This is a &lt;strong&gt; strongly emphasized&lt;/strong&gt; paragraph.</p>
<p>This text includes &lt;em&gt;emphasized&lt;/em&gt; content and a &lt;br&gt;line break.&lt;/p&gt;
<p>Here is some &lt;b&gt;bold&lt;/b&gt; and &lt;i&gt;italic&lt;/i&gt; text.</p>
<p>&lt;small&gt;Small text&lt;/small&gt; and &lt;mark&gt;highlighted&lt;/mark&gt; content.</p>
<p>&lt;ins&gt;Inserted&lt;/ins&gt; and &lt;del&gt;deleted&lt;/del&gt; text examples.</p>
<p>&lt;s&gt;Strikethrough&lt;/s&gt; and &lt;u&gt;underlined&lt;/u&gt; text.</p>
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <p>This is a <strong>strongly emphasized</strong> paragraph.</p>
                <p>This text includes <em>emphasized</em> content and a <br>line break.</p>
                <p>Here is some <b>bold</b> and <i>italic</i> text.</p>
                <p><small>Small text</small> and <mark>highlighted</mark> content.</p>
                <p><ins>Inserted</ins> and <del>deleted</del> text examples.</p>
                <p><s>Strikethrough</s> and <u>underlined</u> text.</p>
            </div>
        </div>
    </div>

     <!-- Images -->
     <div id="images-content" class="content-section">
        <h2>Images</h2>
        <p>The <strong>&lt;img&gt;</strong> element is used to embed images in a webpage.</p>
        <h4>Key Attributes</h4>
        <ul>
            <li><strong>src</strong>: Specifies the path to the image file.</li>
            <li><strong>alt</strong>: Provides alternative text for accessibility and when the image fails to load.</li>
            <li><strong>width</strong> and <strong>height</strong>: Define the image dimensions for faster rendering.</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Always include a descriptive <strong>alt</strong> attribute for screen readers.</li>
            <li>Use empty <strong>alt=""</strong> for decorative images to avoid redundant narration.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use responsive images with <strong>&lt;picture&gt;</strong> or <strong>srcset</strong> for different screen sizes.</li>
            <li>Optimize images to reduce file size and improve page load times.</li>
            <li>Avoid using images for text content; use CSS or text instead.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
&lt;img src="example.jpg" alt="A descriptive image" width="300" height="200"&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <h4>Image</h4>
                <p>Displays an image with specified attributes.</p>
            </div>
        </div>
    </div>

    <!-- Videos -->
    <div id="videos-content" class="content-section">
        <h2>Videos</h2>
        <p>The <strong>&lt;video&gt;</strong> element embeds video content in a webpage.</p>
        <h4>Key Attributes</h4>
        <ul>
            <li><strong>src</strong>: Specifies the video file path.</li>
            <li><strong>controls</strong>: Adds playback controls (play, pause, volume).</li>
            <li><strong>autoplay</strong>: Automatically plays the video (use cautiously).</li>
            <li><strong>loop</strong>: Repeats the video indefinitely.</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Include <strong>&lt;track&gt;</strong> elements for captions or subtitles.</li>
            <li>Provide fallback content inside the <strong>&lt;video&gt;</strong> tag for unsupported browsers.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use multiple <strong>&lt;source&gt;</strong> elements for different video formats (e.g., MP4, WebM).</li>
            <li>Optimize video files for web delivery to reduce load times.</li>
            <li>Avoid autoplay unless user consent is clear to enhance user experience.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
&lt;video&gt;
&lt;video controls width="400"&gt;
&lt;source src="example.mp4" type="video/mp4"&gt;
&lt;source src="example.webm" type="video/webm"&gt;
Your browser does not support the video tag.
&lt;/video&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <h4>Video</h4>
                <p>Displays a video player with controls.</p>
            </div>
        </div>
    </div>

    <!-- External Videos -->
    <div id="external-videos-content" class="content-section">
        <h2>Videos from Other Sites</h2>
        <p>The <strong>&lt;iframe&gt;</strong> element is used to embed videos from external sites like YouTube or Vimeo.</p>
        <h4>Key Attributes</h4>
        <ul>
            <li><strong>src</strong>: Specifies the URL of the video embed.</li>
            <li><strong>width</strong> and <strong>height</strong>: Define the iframe dimensions.</li>
            <li><strong>allow</strong>: Controls permissions (e.g., fullscreen).</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Include a <strong>title</strong> attribute for screen readers.</li>
            <li>Ensure the embedded content is accessible on the source platform.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use responsive iframes with CSS to adapt to different screen sizes.</li>
            <li>Verify the embed URL is secure (HTTPS).</li>
            <li>Limit the number of iframes to maintain page performance.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/example" 
title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen&gt;&lt;/iframe&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <h4>Video</h4>
                <p>Embeds an external video player.</p>
            </div>
        </div>
    </div>

    <!-- Unordered List -->
    <div id="unordered-content" class="content-section">
        <h2>Unordered List</h2>
        <p>The <strong>&lt;ul&gt;</strong> element creates an unordered list, typically rendered with bullet points.</p>
        <h4>Key Elements</h4>
        <ul>
            <li><strong>&lt;ul&gt;</strong>: Defines the unordered list.</li>
            <li><strong>&lt;li&gt;</strong>: Represents each list item.</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Ensure list items are clear and concise for screen readers.</li>
            <li>Use semantic <strong>&lt;ul&gt;</strong> instead of styling divs to mimic lists.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use <strong>&lt;ul&gt;</strong> for items without a specific order.</li>
            <li>Customize bullet styles with CSS instead of images.</li>
            <li>Nest <strong>&lt;ul&gt;</strong> elements for hierarchical lists when needed.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
&lt;ul&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;l&gt;>Item 3&lt;/li&gt;
&lt;/ul&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Ordered List -->
    <div id="ordered-content" class="content-section">
        <h2>Ordered List</h2>
        <p>The <strong>&lt;ol&gt;</strong> element creates an ordered list, typically rendered with numbers.</p>
        <h4>Key Elements</h4>
        <ul>
            <li><strong>&lt;ol&gt;</strong>: Defines the ordered list.</li>
            <li><strong>&lt;li&gt;</strong>: Represents each list item.</li>
        </ul>
        <h5>Accessibility</h5>
        <ul>
            <li>Ensure the order is meaningful for screen readers to convey sequence.</li>
            <li>Use semantic <strong>&lt;ol&gt;</strong> for sequential content.</li>
        </ul>
        <h5>Best Practices</h5>
        <ul>
            <li>Use <strong>&lt;ol&gt;</strong> for items with a specific order, like steps or rankings.</li>
            <li>Customize numbering styles (e.g., roman numerals) with CSS.</li>
            <li>Use the <strong>start</strong> attribute to begin numbering at a specific value.</li>
        </ul>
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
&lt;ol&gt;
&lt;li&gt;First item&lt;/li&gt;
&lt;li&gt;Second item&lt;/li&gt;
&lt;li&gt;Third item&lt;/li&gt;
&lt;/ol&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <ol>
                    <li>First item</li>
                    <li>Second item</li>
                    <li>Third item</li>
                </ol>
            </div>
        </div>
    </div>

        <!-- Description List -->
        <div id="description-content" class="content-section">
            <h2>Description List</h2>
            <p>The <strong>&lt;dl&gt;</strong> element creates a description list for terms and their definitions.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;dl&gt;</strong>: Defines the description list.</li>
                <li><strong>&lt;dt&gt;</strong>: Specifies a term.</li>
                <li><strong>&lt;dd&gt;</strong>: Provides the description for the term.</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Ensure terms and descriptions are clearly associated for screen readers.</li>
                <li>Use semantic <strong>&lt;dl&gt;</strong> for glossaries or metadata lists.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;dl&gt;</strong> for key-value pairs like glossaries or FAQs.</li>
                <li>Keep terms and descriptions concise and relevant.</li>
                <li>Style with CSS to align terms and descriptions visually.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;dl&gt;
    &lt;dt&gt;HTML&lt;/dt&gt;
    &lt;dd&gt;HyperText Markup Language&lt;/dd&gt;
    &lt;dt&gt;CSS&lt;/dt&gt;
    &lt;dd&gt;Cascading Style Sheets&lt;/dd&gt;
    &lt;/dl&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <dl>
                        <dt>HTML</dt>
                        <dd>HyperText Markup Language</dd>
                        <dt>CSS</dt>
                        <dd>Cascading Style Sheets</dd>
                    </dl>
                </div>
            </div>
        </div>
    
        <!-- Links and Buttons -->
        <div id="links-content" class="content-section">
            <h2>Links and Buttons</h2>
            <p>HTML provides elements for creating hyperlinks and interactive buttons.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;a&gt;</strong>: Creates a hyperlink to other pages, files, or locations.</li>
                <li><strong>&lt;button&gt;</strong>: Defines a clickable button for user interaction.</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Use descriptive <strong>href</strong> values and <strong>title</strong> attributes for links.</li>
                <li>Ensure buttons have clear text or <strong>aria-label</strong> for screen readers.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;a&gt;</strong> for navigation and <strong>&lt;button&gt;</strong> for actions.</li>
                <li>Include <strong>target="_blank"</strong> for external links with caution.</li>
                <li>Style buttons and links with CSS to match the site’s design.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;a href="https://example.com" title="Visit Example"&gt;Go to Example&lt;/a&gt;
    <button onclick="myFunction()">Click Me</button>
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <a href="https://example.com" title="Visit Example">Go to Example</a><br><br>
                    <button>Click Me</button>
                </div>
            </div>
        </div>
    
        <!-- Forms -->
        <div id="forms-content" class="content-section">
            <h2>Forms</h2>
            <p>The <strong>&lt;form&gt;</strong> element creates interactive forms for user input.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;form&gt;</strong>: Defines the form container.</li>
                <li><strong>&lt;label&gt;</strong>: Associates a label with an input for accessibility.</li>
                <li><strong>&lt;input&gt;</strong>: Creates input fields (e.g., text, email, password).</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Use <strong>&lt;label&gt;</strong> with <strong>for</strong> attributes matching input IDs.</li>
                <li>Include <strong>required</strong> attributes and <strong>aria-required</strong> for mandatory fields.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>method="post"</strong> for sensitive data and <strong>method="get"</strong> for search forms.</li>
                <li>Validate input on both client and server sides.</li>
                <li>Provide clear error messages for invalid inputs.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;form action="/submit" method="post"&gt;
    &lt;label for="name"&gt;Name:&lt;/label&gt;
    &lt;input type="text" id="name" name="name" required&gt;
    &lt;input type="submit" value="Submit"&gt;
    &lt;/form&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <form action="/submit" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    
        <!-- Advanced Forms -->
        <div id="advanced-forms-content" class="content-section">
            <h2>Advanced Forms</h2>
            <p>Advanced form elements enhance user interaction with dropdowns, progress bars, and more.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;select&gt;</strong> and <strong>&lt;option&gt;</strong>: Create dropdown menus.</li>
                <li><strong>&lt;textarea&gt;</strong>: Allows multi-line text input.</li>
                <li><strong>&lt;progress&gt;</strong>: Displays a progress bar.</li>
                <li><strong>&lt;meter&gt;</strong>: Shows a scalar measurement within a range.</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Use <strong>&lt;optgroup&gt;</strong> to group related options in dropdowns.</li>
                <li>Ensure <strong>&lt;progress&gt;</strong> and <strong>&lt;meter&gt;</strong> have <strong>aria-label</strong> for clarity.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;datalist&gt;</strong> for autocomplete suggestions in inputs.</li>
                <li>Group related controls with <strong>&lt;fieldset&gt;</strong> and <strong>&lt;legend&gt;</strong>.</li>
                <li>Test forms across devices for responsiveness.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;form&gt;
    &lt;label for="country"&gt;Country:&lt;/label&gt;
    &lt;select id="country" name="country"&gt;
    &lt;option value="usa"&gt;USA&lt;/option&gt;
    &lt;option value="uk"&gt;UK&lt;/option&gt;
    &lt;/select&gt;
    &lt;label for="comments"&gt;Comments:&lt;/label&gt;
    &lt;textarea id="comments" name="comments"&gt;&lt;/textarea&gt;
    &lt;progress value="50" max="100"&gt;50%&lt;/progress&gt;
    &lt;/form&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <form>
                        <label for="country">Country:</label>
                        <select id="country" name="country">
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                        </select><br><br>
                        <label for="comments">Comments:</label>
                        <textarea id="comments" name="comments"></textarea><br><br>
                        <progress value="50" max="100">50%</progress>
                    </form>
                </div>
            </div>
        </div>
    
        <!-- Thematic Break -->
        <div id="thematic-content" class="content-section">
            <h2>Thematic Break</h2>
            <p>The <strong>&lt;hr&gt;</strong> element represents a thematic break between paragraph-level elements.</p>
            <h5>Accessibility</h5>
            <ul>
                <li>Use <strong>aria-hidden="true"</strong> for purely decorative breaks.</li>
                <li>Ensure thematic breaks are meaningful for content separation.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;hr&gt;</strong> to separate distinct sections or topics.</li>
                <li>Style with CSS to match the site’s design.</li>
                <li>Avoid using <strong>&lt;hr&gt;</strong> for purely visual separation; use CSS borders instead.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;p>First section content.&lt;/p&gt;
    &lt;hr&gt;
    &lt;p>Second section content.&lt;/p&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <p>First section content.</p>
                    <hr>
                    <p>Second section content.</p>
                </div>
            </div>
        </div>
    
        <!-- Div -->
        <div id="div-content" class="content-section">
            <h2>Div</h2>
            <p>The <strong>&lt;div&gt;</strong> element is a generic block-level container for grouping content.</p>
            <h5>Accessibility</h5>
            <ul>
                <li>Use semantic elements when possible instead of <strong>&lt;div&gt;</strong>.</li>
                <li>Add <strong>role</strong> attributes if <strong>&lt;div&gt;</strong> serves a specific purpose (e.g., <strong>role="region"</strong>).</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;div&gt;</strong> for layout purposes when semantic elements are not applicable.</li>
                <li>Avoid excessive nesting of <strong>&lt;div&gt;</strong> elements to maintain clean code.</li>
                <li>Apply CSS classes for styling and JavaScript interaction.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;div class="container"&gt;
    &lt;h2>Section Title&lt;/h2&gt;
    &lt;p>Content goes here.&gt;/p&gt;
    &lt;/div&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <div class="container">
                        <h2>Section Title</h2>
                        <p>Content goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Span -->
        <div id="span-content" class="content-section">
            <h2>Span</h2>
            <p>The <strong>&lt;span&gt;</strong> element is a generic inline container for styling or scripting small portions of text.</p>
            <h5>Accessibility</h5>
            <ul>
                <li>Avoid using <strong>&lt;span&gt;</strong> for semantic purposes; use elements like <strong>&lt;strong&gt;</strong> or <strong>&lt;em&gt;</strong>.</li>
                <li>Use <strong>aria-label</strong> if <strong>&lt;span&gt;</strong> contains interactive content.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;span&gt;</strong> for minor stylistic changes or JavaScript hooks.</li>
                <li>Keep <strong>&lt;span&gt;</strong> usage minimal to maintain clean HTML.</li>
                <li>Apply CSS classes for consistent styling.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;p&gt;This is a &lt;span class="highlight"&gt;highlighted&lt;/span&gt; word.&lt;/p&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <p>This is a <span style="background-color: yellow;">highlighted</span> word.</p>
                </div>
            </div>
        </div>
    
        <!-- Other Containers -->
        <div id="other-containers-content" class="content-section">
            <h2>Other Containers</h2>
            <p>HTML includes additional containers for specific purposes.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;figure&gt;</strong>: Groups self-contained content, like images or diagrams.</li>
                <li><strong>&lt;figcaption&gt;</strong>: Provides a caption for a <strong>&lt;figure&gt;</strong>.</li>
                <li><strong>&lt;template&gt;</strong>: Holds client-side content that is not rendered until activated via JavaScript.</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Ensure <strong>&lt;figcaption&gt;</strong> clearly describes the <strong>&lt;figure&gt;</strong> content.</li>
                <li>Use <strong>&lt;template&gt;</strong> for dynamic content with proper accessibility attributes when rendered.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;figure&gt;</strong> for content like images with captions.</li>
                <li>Keep <strong>&lt;template&gt;</strong> content semantic and accessible when instantiated.</li>
                <li>Style <strong>&lt;figure&gt;</strong> with CSS for consistent presentation.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;figure&gt;
    &lt;img src="example.jpg" alt="Example image"&gt;
    &lt;figcaption>Caption for the image&lt;/figcaption&gt;
    &lt;/figure&gt;
    &lt;template id="my-template"&gt;
    &lt;p&gt;Content to be added via JavaScript&lt;/p&gt;
    &lt;/template&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <figure>
                        <img src="example.jpg" alt="Example image">
                        <figcaption>Caption for the image</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    
        <!-- Semantic Tags (HTML5) -->
        <div id="semantic-tags-content" class="content-section">
            <h2>Semantic Tags (HTML5)</h2>
            <p>HTML5 semantic tags provide additional meaning to content structure.</p>
            <h4>Key Elements</h4>
            <ul>
                <li><strong>&lt;aside&gt;</strong>: Represents content tangentially related to the main content.</li>
                <li><strong>&lt;details&gt;</strong>: Creates an interactive widget that can be toggled open or closed.</li>
                <li><strong>&lt;summary&gt;</strong>: Defines the visible heading for a <strong>&lt;details&gt;</strong> element.</li>
                <li><strong>&lt;time&gt;</strong>: Represents a specific date or time.</li>
                <li><strong>&lt;dialog&gt;</strong>: Defines a dialog box or modal window.</li>
            </ul>
            <h5>Accessibility</h5>
            <ul>
                <li>Ensure <strong>&lt;details&gt;</strong> and <strong>&lt;dialog&gt;</strong> are keyboard-accessible.</li>
                <li>Use <strong>datetime</strong> attribute in <strong>&lt;time&gt;</strong> for machine-readable formats.</li>
            </ul>
            <h5>Best Practices</h5>
            <ul>
                <li>Use <strong>&lt;details&gt;</strong> for FAQs or collapsible content.</li>
                <li>Style <strong>&lt;dialog&gt;</strong> with CSS and manage with JavaScript for modals.</li>
                <li>Ensure <strong>&lt;aside&gt;</strong> content is relevant but not critical to the main content.</li>
            </ul>
            <div class="code-display">
                <div class="code-container">
                    <h3>Usage</h3>
                    <div class="code-block">
                        <pre>
    &lt;details&gt;
    &lt;summary>More Information&lt;/summary&gt;
    &lt;p>Additional details here.&lt;/p&gt;
    &lt;/details&gt;
    &lt;time datetime="2025-05-07">May 7, 2025&lt;/time&gt;
    &lt;dialog id="myDialog"&gt;
    &lt;p>This is a dialog box.&lt;/p&gt;
    &lt;button onclick="myDialog.close()">Close&lt;/button&gt;
    &lt;/dialog&gt;
                        </pre>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
            </div>
            <div class="preview-container">
                <h3>Result</h3>
                <div class="preview-frame">
                    <details>
                        <summary>More Information</summary>
                        <p>Additional details here.</p>
                    </details>
                    <time datetime="2025-05-07">May 7, 2025</time>
                </div>
            </div>
        </div>


        <div id="semantic-text-content" class="content-section active">
    <h2>Semantic Text</h2>
    <p>Semantic text elements in HTML provide meaning to text content, enhancing accessibility, SEO, and clarity for both users and machines.</p>
    <p>These elements are used to mark quotations, abbreviations, code snippets, and other specialized text formats.</p>
    <p>Proper use of semantic text elements ensures content is structured and meaningful, especially for screen readers and search engines.</p>

    <h4>Common Semantic Text Elements</h4>
    <ul>
        <li><strong>&lt;blockquote&gt;</strong>: Represents a block-level quotation from another source.</li>
        <li><strong>&lt;q&gt;</strong>: Marks a short, inline quotation.</li>
        <li><strong>&lt;cite&gt;</strong>: Indicates the title of a creative work or source.</li>
        <li><strong>&lt;abbr&gt;</strong>: Denotes an abbreviation or acronym with an optional full form.</li>
        <li><strong>&lt;dfn&gt;</strong>: Marks the term being defined.</li>
        <li><strong>&lt;data&gt;</strong>: Associates human-readable text with machine-readable data.</li>
        <li><strong>&lt;code&gt;</strong>: Represents an inline code snippet.</li>
        <li><strong>&lt;var&gt;</strong>: Denotes a variable in math or programming.</li>
        <li><strong>&lt;samp&gt;</strong>: Shows sample output from a program.</li>
        <li><strong>&lt;kbd&gt;</strong>: Represents keyboard or user input.</li>
        <li><strong>&lt;sub&gt;</strong>: Renders text as subscript.</li>
        <li><strong>&lt;sup&gt;</strong>: Renders text as superscript.</li>
        <li><strong>&lt;ruby&gt;</strong>: Provides annotations for East Asian text.</li>
        <li><strong>&lt;rt&gt;</strong>: Specifies ruby annotation text.</li>
        <li><strong>&lt;rp&gt;</strong>: Provides fallback parentheses for ruby annotations.</li>
        <li><strong>&lt;wbr&gt;</strong>: Suggests a word break opportunity.</li>
        <li><strong>&lt;bdi&gt;</strong>: Isolates text with different directionality.</li>
        <li><strong>&lt;bdo&gt;</strong>: Overrides text directionality.</li>
    </ul>

    <br><h5>Purpose</h5>
    <ul>
        <li><strong>&lt;blockquote&gt;</strong>: Used for extended quotes, typically styled with indentation.</li>
        <li><strong>&lt;q&gt;</strong>: Used for brief, inline quotes, often with automatic quotation marks.</li>
        <li><strong>&lt;cite&gt;</strong>: References titles of works like books or movies, often italicized.</li>
        <li><strong>&lt;abbr&gt;</strong>: Clarifies abbreviations for accessibility and SEO.</li>
        <li><strong>&lt;dfn&gt;</strong>: Highlights terms being defined in educational or technical content.</li>
        <li><strong>&lt;data&gt;</strong>: Links human-readable text to machine-readable values, useful for scripting.</li>
        <li><strong>&lt;code&gt;</strong>: Marks inline code fragments, typically in monospace font.</li>
        <li><strong>&lt;var&gt;</strong>: Represents variables in mathematical or programming contexts.</li>
        <li><strong>&lt;samp&gt;</strong>: Shows program output, such as console messages.</li>
        <li><strong>&lt;kbd&gt;</strong>: Indicates user input, like keyboard commands.</li>
        <li><strong>&lt;sub&gt;</strong>: Used for chemical formulas or footnotes.</li>
        <li><strong>&lt;sup&gt;</strong>: Used for exponents or ordinals.</li>
        <li><strong>&lt;ruby&gt;</strong>: Supports annotations for East Asian languages like Japanese or Chinese.</li>
        <li><strong>&lt;rt&gt;</strong>: Provides pronunciation or meaning for ruby text.</li>
        <li><strong>&lt;rp&gt;</strong>: Offers fallback for browsers not supporting ruby annotations.</li>
        <li><strong>&lt;wbr&gt;</strong>: Suggests break points in long words or URLs.</li>
        <li><strong>&lt;bdi&gt;</strong>: Ensures correct rendering of mixed-direction text.</li>
        <li><strong>&lt;bdo&gt;</strong>: Forces text direction for specific purposes.</li>
    </ul>

    <br><h5>Accessibility</h5>
    <ul>
        <li>Use semantic elements like <code>&lt;blockquote&gt;</code>, <code>&lt;q&gt;</code>, and <code>&lt;cite&gt;</code> to clearly convey quotations to screen readers.</li>
        <li>Always include the <code>title</code> attribute for <code>&lt;abbr&gt;</code> to provide the full form for assistive technologies.</li>
        <li>Ensure <code>&lt;bdi&gt;</code> and <code>&lt;bdo&gt;</code> are used correctly for multilingual content to avoid rendering issues.</li>
        <li>Use <code>&lt;ruby&gt;</code>, <code>&lt;rt&gt;</code>, and <code>&lt;rp&gt;</code> to support accessibility in East Asian languages.</li>
    </ul>

    <br><h5>Best Practices</h5>
    <ul>
        <li>Use elements semantically; avoid using <code>&lt;code&gt;</code> or <code>&lt;var&gt;</code> for styling alone.</li>
        <li>Combine elements like <code>&lt;blockquote&gt;</code> with <code>&lt;cite&gt;</code> for complete quotation context.</li>
        <li>Test <code>&lt;ruby&gt;</code> and related elements in browsers supporting East Asian text.</li>
        <li>Use <code>&lt;wbr&gt;</code> sparingly to avoid excessive text breaks.</li>
        <li>Ensure <code>&lt;data&gt;</code> values are consistent for programmatic use.</li>
    </ul>

    <div class="code-display">
        <div class="code-container">
            <h3>Usage</h3>
            <div class="code-block">
                <pre>
&lt;blockquote cite="https://example.com"&gt;
    &lt;p&gt;Not all those who wander are lost.&lt;/p&gt;
    &lt;cite&gt;J.R.R. Tolkien&lt;/cite&gt;
&lt;/blockquote&gt;
&lt;p&gt;She said, &lt;q cite="https://example.com"&gt;Be yourself.&lt;/q&gt;&lt;/p&gt;
&lt;p&gt;The &lt;abbr title="World Health Organization"&gt;WHO&lt;/abbr&gt; issued a report.&lt;/p&gt;
&lt;p&gt;A &lt;dfn&gt;pixel&lt;/dfn&gt; is the smallest unit of a digital image.&lt;/p&gt;
&lt;p&gt;Product: &lt;data value="12345"&gt;Widget Pro&lt;/data&gt;&lt;/p&gt;
&lt;p&gt;Use the &lt;code&gt;print()&lt;/code&gt; function.&lt;/p&gt;
&lt;p&gt;Formula: &lt;var&gt;x&lt;/var&gt; = &lt;var&gt;y&lt;/var&gt; + 2.&lt;/p&gt;
&lt;p&gt;Output: &lt;samp&gt;Error 404&lt;/samp&gt;.&lt;/p&gt;
&lt;p&gt;Press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;S&lt;/kbd&gt; to save.&lt;/p&gt;
&lt;p&gt;Water: H&lt;sub&gt;2&lt;/sub&gt;O, Energy: E = mc&lt;sup&gt;2&lt;/sup&gt;.&lt;/p&gt;
&lt;ruby&gt;漢&lt;rt&gt;kan&lt;/rt&gt;字&lt;rt&gt;ji&lt;/rt&gt;&lt;/ruby&gt;
&lt;p&gt;URL: https://example.com/thisisaverylongurl&lt;wbr&gt;thatmaybreak&lt;/p&gt;
&lt;p&gt;User: &lt;bdi dir="rtl"&gt;اسم&lt;/bdi&gt; commented.&lt;/p&gt;
&lt;p&gt;&lt;bdo dir="rtl"&gt;Reverse this text&lt;/bdo&gt;&lt;/p&gt;
                </pre>
                <button class="copy-btn">Copy</button>
            </div>
        </div>
    </div>

    <div class="preview-container">
        <h3>Result</h3>
        <div class="preview-frame">
            <blockquote cite="https://example.com">
                <p>Not all those who wander are lost.</p>
                <cite>J.R.R. Tolkien</cite>
            </blockquote>
            <p>She said, <q cite="https://example.com">Be yourself.</q></p>
            <p>The <abbr title="World Health Organization">WHO</abbr> issued a report.</p>
            <p>A <dfn>pixel</dfn> is the smallest unit of a digital image.</p>
            <p>Product: <data value="12345">Widget Pro</data></p>
            <p>Use the <code>print()</code> function.</p>
            <p>Formula: <var>x</var> = <var>y</var> + 2.</p>
            <p>Output: <samp>Error 404</samp>.</p>
            <p>Press <kbd>Ctrl</kbd> + <kbd>S</kbd> to save.</p>
            <p>Water: H<sub>2</sub>O, Energy: E = mc<sup>2</sup>.</p>
            <ruby>漢<rt>kan</rt>字<rt>ji</rt></ruby>
            <p>URL: https://example.com/thisisaverylongurl<wbr>thatmaybreak</p>
            <p>User: <bdi dir="rtl">اسم</bdi> commented.</p>
            <p><bdo dir="rtl">Reverse this text</bdo></p>
        </div>
    </div>

    <div class="preview-frame">
        <h4>Key Elements</h4>
        <ul>
            <li>Use <code>&lt;cite&gt;</code> with <code>&lt;blockquote&gt;</code> or <code>&lt;q&gt;</code> for proper attribution.</li>
            <li>Include <code>title</code> in <code>&lt;abbr&gt;</code> for accessibility.</li>
            <li>Use <code>&lt;ruby&gt;</code> with <code>&lt;rt&gt;</code> and <code>&lt;rp&gt;</code> for East Asian text support.</li>
            <li>Ensure <code>&lt;bdi&gt;</code> and <code>&lt;bdo&gt;</code> are tested with multilingual content.</li>
            <li>Use <code>&lt;data&gt;</code> for machine-readable values in dynamic applications.</li>
        </ul>
    </div>

    <div class="exercise-container">
        <h3>Practical Exercise</h3>
        <p>Create a webpage section that includes:</p>
        <ul>
            <li>A blockquote with a literary quote and its source using <code>&lt;cite&gt;</code>.</li>
            <li>An inline quote using <code>&lt;q&gt;</code> within a paragraph.</li>
            <li>An abbreviation with <code>&lt;abbr&gt;</code> and a <code>title</code> attribute.</li>
            <li>A chemical formula using <code>&lt;sub&gt;</code> and an equation with <code>&lt;sup&gt;</code>.</li>
            <li>A code snippet with <code>&lt;code&gt;</code> and a sample output with <code>&lt;samp&gt;</code>.</li>
        </ul>
        <p>Test the output in a browser and ensure accessibility with a screen reader.</p>
    </div>
</div>
        
    <!--Semantic text-->
    <div id="semantic-text-content" class="content-section active">
        <h2>Semantic Text</h2>
        <p>Semantic text elements in HTML provide meaning to text content, enhancing accessibility, SEO, and clarity for both users and machines.</p>
        <p>These elements are used to mark quotations, abbreviations, code snippets, and other specialized text formats.</p>
        <p>Proper use of semantic text elements ensures content is structured and meaningful, especially for screen readers and search engines.</p>
    
        <h4>Common Semantic Text Elements</h4>
        <ul>
            <li><strong>&lt;blockquote&gt;</strong>: Represents a block-level quotation from another source.</li>
            <li><strong>&lt;q&gt;</strong>: Marks a short, inline quotation.</li>
            <li><strong>&lt;cite&gt;</strong>: Indicates the title of a creative work or source.</li>
            <li><strong>&lt;abbr&gt;</strong>: Denotes an abbreviation or acronym with an optional full form.</li>
            <li><strong>&lt;dfn&gt;</strong>: Marks the term being defined.</li>
            <li><strong>&lt;data&gt;</strong>: Associates human-readable text with machine-readable data.</li>
            <li><strong>&lt;code&gt;</strong>: Represents an inline code snippet.</li>
            <li><strong>&lt;var&gt;</strong>: Denotes a variable in math or programming.</li>
            <li><strong>&lt;samp&gt;</strong>: Shows sample output from a program.</li>
            <li><strong>&lt;kbd&gt;</strong>: Represents keyboard or user input.</li>
            <li><strong>&lt;sub&gt;</strong>: Renders text as subscript.</li>
            <li><strong>&lt;sup&gt;</strong>: Renders text as superscript.</li>
            <li><strong>&lt;ruby&gt;</strong>: Provides annotations for East Asian text.</li>
            <li><strong>&lt;rt&gt;</strong>: Specifies ruby annotation text.</li>
            <li><strong>&lt;rp&gt;</strong>: Provides fallback parentheses for ruby annotations.</li>
            <li><strong>&lt;wbr&gt;</strong>: Suggests a word break opportunity.</li>
            <li><strong>&lt;bdi&gt;</strong>: Isolates text with different directionality.</li>
            <li><strong>&lt;bdo&gt;</strong>: Overrides text directionality.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li><strong>&lt;blockquote&gt;</strong>: Used for extended quotes, typically styled with indentation.</li>
            <li><strong>&lt;q&gt;</strong>: Used for brief, inline quotes, often with automatic quotation marks.</li>
            <li><strong>&lt;cite&gt;</strong>: References titles of works like books or movies, often italicized.</li>
            <li><strong>&lt;abbr&gt;</strong>: Clarifies abbreviations for accessibility and SEO.</li>
            <li><strong>&lt;dfn&gt;</strong>: Highlights terms being defined in educational or technical content.</li>
            <li><strong>&lt;data&gt;</strong>: Links human-readable text to machine-readable values, useful for scripting.</li>
            <li><strong>&lt;code&gt;</strong>: Marks inline code fragments, typically in monospace font.</li>
            <li><strong>&lt;var&gt;</strong>: Represents variables in mathematical or programming contexts.</li>
            <li><strong>&lt;samp&gt;</strong>: Shows program output, such as console messages.</li>
            <li><strong>&lt;kbd&gt;</strong>: Indicates user input, like keyboard commands.</li>
            <li><strong>&lt;sub&gt;</strong>: Used for chemical formulas or footnotes.</li>
            <li><strong>&lt;sup&gt;</strong>: Used for exponents or ordinals.</li>
            <li><strong>&lt;ruby&gt;</strong>: Supports annotations for East Asian languages like Japanese or Chinese.</li>
            <li><strong>&lt;rt&gt;</strong>: Provides pronunciation or meaning for ruby text.</li>
            <li><strong>&lt;rp&gt;</strong>: Offers fallback for browsers not supporting ruby annotations.</li>
            <li><strong>&lt;wbr&gt;</strong>: Suggests break points in long words or URLs.</li>
            <li><strong>&lt;bdi&gt;</strong>: Ensures correct rendering of mixed-direction text.</li>
            <li><strong>&lt;bdo&gt;</strong>: Forces text direction for specific purposes.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>Use semantic elements like <code>&lt;blockquote&gt;</code>, <code>&lt;q&gt;</code>, and <code>&lt;cite&gt;</code> to clearly convey quotations to screen readers.</li>
            <li>Always include the <code>title</code> attribute for <code>&lt;abbr&gt;</code> to provide the full form for assistive technologies.</li>
            <li>Ensure <code>&lt;bdi&gt;</code> and <code>&lt;bdo&gt;</code> are used correctly for multilingual content to avoid rendering issues.</li>
            <li>Use <code>&lt;ruby&gt;</code>, <code>&lt;rt&gt;</code>, and <code>&lt;rp&gt;</code> to support accessibility in East Asian languages.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Use elements semantically; avoid using <code>&lt;code&gt;</code> or <code>&lt;var&gt;</code> for styling alone.</li>
            <li>Combine elements like <code>&lt;blockquote&gt;</code> with <code>&lt;cite&gt;</code> for complete quotation context.</li>
            <li>Test <code>&lt;ruby&gt;</code> and related elements in browsers supporting East Asian text.</li>
            <li>Use <code>&lt;wbr&gt;</code> sparingly to avoid excessive text breaks.</li>
            <li>Ensure <code>&lt;data&gt;</code> values are consistent for programmatic use.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
    &lt;blockquote cite="https://example.com"&gt;
        &lt;p&gt;Not all those who wander are lost.&lt;/p&gt;
        &lt;cite&gt;J.R.R. Tolkien&lt;/cite&gt;
    &lt;/blockquote&gt;
    &lt;p&gt;She said, &lt;q cite="https://example.com"&gt;Be yourself.&lt;/q&gt;&lt;/p&gt;
    &lt;p&gt;The &lt;abbr title="World Health Organization"&gt;WHO&lt;/abbr&gt; issued a report.&lt;/p&gt;
    &lt;p&gt;A &lt;dfn&gt;pixel&lt;/dfn&gt; is the smallest unit of a digital image.&lt;/p&gt;
    &lt;p&gt;Product: &lt;data value="12345"&gt;Widget Pro&lt;/data&gt;&lt;/p&gt;
    &lt;p&gt;Use the &lt;code&gt;print()&lt;/code&gt; function.&lt;/p&gt;
    &lt;p&gt;Formula: &lt;var&gt;x&lt;/var&gt; = &lt;var&gt;y&lt;/var&gt; + 2.&lt;/p&gt;
    &lt;p&gt;Output: &lt;samp&gt;Error 404&lt;/samp&gt;.&lt;/p&gt;
    &lt;p&gt;Press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;S&lt;/kbd&gt; to save.&lt;/p&gt;
    &lt;p&gt;Water: H&lt;sub&gt;2&lt;/sub&gt;O, Energy: E = mc&lt;sup&gt;2&lt;/sup&gt;.&lt;/p&gt;
    &lt;ruby&gt;漢&lt;rt&gt;kan&lt;/rt&gt;字&lt;rt&gt;ji&lt;/rt&gt;&lt;/ruby&gt;
    &lt;p&gt;URL: https://example.com/thisisaverylongurl&lt;wbr&gt;thatmaybreak&lt;/p&gt;
    &lt;p&gt;User: &lt;bdi dir="rtl"&gt;اسم&lt;/bdi&gt; commented.&lt;/p&gt;
    &lt;p&gt;&lt;bdo dir="rtl"&gt;Reverse this text&lt;/bdo&gt;&lt;/p&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <blockquote cite="https://example.com">
                    <p>Not all those who wander are lost.</p>
                    <cite>J.R.R. Tolkien</cite>
                </blockquote>
                <p>She said, <q cite="https://example.com">Be yourself.</q></p>
                <p>The <abbr title="World Health Organization">WHO</abbr> issued a report.</p>
                <p>A <dfn>pixel</dfn> is the smallest unit of a digital image.</p>
                <p>Product: <data value="12345">Widget Pro</data></p>
                <p>Use the <code>print()</code> function.</p>
                <p>Formula: <var>x</var> = <var>y</var> + 2.</p>
                <p>Output: <samp>Error 404</samp>.</p>
                <p>Press <kbd>Ctrl</kbd> + <kbd>S</kbd> to save.</p>
                <p>Water: H<sub>2</sub>O, Energy: E = mc<sup>2</sup>.</p>
                <ruby>漢<rt>kan</rt>字<rt>ji</rt></ruby>
                <p>URL: https://example.com/thisisaverylongurl<wbr>thatmaybreak</p>
                <p>User: <bdi dir="rtl">اسم</bdi> commented.</p>
                <p><bdo dir="rtl">Reverse this text</bdo></p>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Use <code>&lt;cite&gt;</code> with <code>&lt;blockquote&gt;</code> or <code>&lt;q&gt;</code> for proper attribution.</li>
                <li>Include <code>title</code> in <code>&lt;abbr&gt;</code> for accessibility.</li>
                <li>Use <code>&lt;ruby&gt;</code> with <code>&lt;rt&gt;</code> and <code>&lt;rp&gt;</code> for East Asian text support.</li>
                <li>Ensure <code>&lt;bdi&gt;</code> and <code>&lt;bdo&gt;</code> are tested with multilingual content.</li>
                <li>Use <code>&lt;data&gt;</code> for machine-readable values in dynamic applications.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Create a webpage section that includes:</p>
            <ul>
                <li>A blockquote with a literary quote and its source using <code>&lt;cite&gt;</code>.</li>
                <li>An inline quote using <code>&lt;q&gt;</code> within a paragraph.</li>
                <li>An abbreviation with <code>&lt;abbr&gt;</code> and a <code>title</code> attribute.</li>
                <li>A chemical formula using <code>&lt;sub&gt;</code> and an equation with <code>&lt;sup&gt;</code>.</li>
                <li>A code snippet with <code>&lt;code&gt;</code> and a sample output with <code>&lt;samp&gt;</code>.</li>
            </ul>
            <p>Test the output in a browser and ensure accessibility with a screen reader.</p>
        </div>
    </div>

    <!--table structures-->
    <div id="tables-content" class="content-section active">
        <h2>Table Structures</h2>
        <p>HTML table elements are used to display data in a tabular format, organizing content into rows and columns.</p>
        <p>Tables are essential for presenting structured data like schedules, statistics, or comparisons.</p>
        <p>Proper table markup enhances accessibility and allows for better styling and scripting.</p>
    
        <h4>Common Table Elements</h4>
        <ul>
            <li><strong>&lt;table&gt;</strong>: Defines the table structure.</li>
            <li><strong>&lt;thead&gt;</strong>: Groups header content.</li>
            <li><strong>&lt;tbody&gt;</strong>: Groups the main data content.</li>
            <li><strong>&lt;tfoot&gt;</strong>: Groups footer content, like totals.</li>
            <li><strong>&lt;tr&gt;</strong>: Defines a table row.</li>
            <li><strong>&lt;th&gt;</strong>: Defines a header cell.</li>
            <li><strong>&lt;td&gt;</strong>: Defines a data cell.</li>
            <li><strong>&lt;caption&gt;</strong>: Provides a table title or description.</li>
            <li><strong>&lt;colgroup&gt;</strong>: Groups columns for styling or semantics.</li>
            <li><strong>&lt;col&gt;</strong>: Defines properties for a single column.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li><strong>&lt;table&gt;</strong>: Creates the overall structure for tabular data.</li>
            <li><strong>&lt;thead&gt;</strong>: Contains column headers, typically with <code>&lt;th&gt;</code>.</li>
            <li><strong>&lt;tbody&gt;</strong>: Holds the main data rows.</li>
            <li><strong>&lt;tfoot&gt;</strong>: Contains summary or footer rows, like totals.</li>
            <li><strong>&lt;tr&gt;</strong>: Organizes cells into rows.</li>
            <li><strong>&lt;th&gt;</strong>: Labels columns or rows, often bold and centered.</li>
            <li><strong>&lt;td&gt;</strong>: Contains individual data points.</li>
            <li><strong>&lt;caption&gt;</strong>: Summarizes the table’s purpose.</li>
            <li><strong>&lt;colgroup&gt;</strong>: Groups columns for consistent styling.</li>
            <li><strong>&lt;col&gt;</strong>: Applies properties to specific columns.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>Always include <code>&lt;caption&gt;</code> to describe the table’s purpose for screen readers.</li>
            <li>Use <code>scope</code> on <code>&lt;th&gt;</code> to clarify header relationships (<code>row</code> or <code>col</code>).</li>
            <li>Ensure tables are navigable via keyboard and screen readers.</li>
            <li>Avoid using tables for layout; use CSS Grid or Flexbox instead.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Use <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, and <code>&lt;tfoot&gt;</code> for semantic structure.</li>
            <li>Keep tables simple; avoid excessive merging with <code>colspan</code> or <code>rowspan</code>.</li>
            <li>Use CSS for styling instead of deprecated attributes like <code>border</code>.</li>
            <li>Ensure consistent column counts across rows.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
    &lt;table&gt;
        &lt;caption&gt;Monthly Sales Report&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="background-color: #f0f0f0;"&gt;
            &lt;col style="background-color: #e0e0e0;"&gt;
        &lt;/colgroup&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Month&lt;/th&gt;
                &lt;th scope="col"&gt;Sales&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;January&lt;/td&gt;
                &lt;td&gt;$1000&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;February&lt;/td&gt;
                &lt;td&gt;$1200&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot&gt;
            &lt;tr&gt;
                &lt;td&gt;Total&lt;/td&gt;
                &lt;td&gt;$2200&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <table>
                    <caption>Monthly Sales Report</caption>
                    <colgroup>
                        <col style="background-color: #f0f0f0;">
                        <col style="background-color: #e0e0e0;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">Month</th>
                            <th scope="col">Sales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>January</td>
                            <td>$1000</td>
                        </tr>
                        <tr>
                            <td>February</td>
                            <td>$1200</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td>$2200</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Use <code>&lt;caption&gt;</code> as the first child of <code>&lt;table&gt;</code> for accessibility.</li>
                <li>Apply <code>scope</code> to <code>&lt;th&gt;</code> for clear header associations.</li>
                <li>Use <code>&lt;colgroup&gt;</code> and <code>&lt;col&gt;</code> for consistent column styling.</li>
                <li>Ensure <code>&lt;tfoot&gt;</code> summarizes data effectively.</li>
                <li>Avoid empty cells or rows to maintain clarity.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Create a table for a class schedule that includes:</p>
            <ul>
                <li>A <code>&lt;caption&gt;</code> describing the table.</li>
                <li>A <code>&lt;thead&gt;</code> with headers for Day, Time, and Subject.</li>
                <li>A <code>&lt;tbody&gt;</code> with at least three rows of data.</li>
                <li>A <code>&lt;tfoot&gt;</code> summarizing total hours.</li>
                <li>Use <code>&lt;colgroup&gt;</code> to style the first column differently.</li>
            </ul>
            <p>Test the table in a browser and verify accessibility with a screen reader.</p>
        </div>
    </div>

    <!--scripting-->
    <div id="scripting-content" class="content-section active">
        <h2>Scripting</h2>
        <p>HTML scripting elements allow the inclusion of executable code, typically JavaScript, to add interactivity to webpages.</p>
        <p>These elements enable dynamic content, event handling, and fallback content for non-scripted environments.</p>
        <p>Proper use of scripting elements ensures functionality while maintaining accessibility.</p>
    
        <h4>Common Scripting Elements</h4>
        <ul>
            <li><strong>&lt;script&gt;</strong>: Embeds or references JavaScript code.</li>
            <li><strong>&lt;noscript&gt;</strong>: Provides fallback content when scripting is disabled.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li><strong>&lt;script&gt;</strong>: Executes JavaScript for interactivity, such as form validation or DOM manipulation.</li>
            <li><strong>&lt;noscript&gt;</strong>: Displays alternative content for users with JavaScript disabled or unsupported.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>Ensure critical functionality is available without JavaScript using <code>&lt;noscript&gt;</code>.</li>
            <li>Use progressive enhancement to layer JavaScript on top of functional HTML.</li>
            <li>Test <code>&lt;noscript&gt;</code> content with JavaScript disabled.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Place <code>&lt;script&gt;</code> at the end of <code>&lt;body&gt;</code> or use <code>defer</code> to avoid blocking rendering.</li>
            <li>Use <code>type="module"</code> for modern JavaScript modules.</li>
            <li>Validate external scripts for security and performance.</li>
            <li>Keep <code>&lt;noscript&gt;</code> content minimal and relevant.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
    &lt;script&gt;
        document.getElementById("demo").innerHTML = "Hello, JavaScript!";
    &lt;/script&gt;
    &lt;noscript&gt;
        &lt;p&gt;Please enable JavaScript for full functionality.&lt;/p&gt;
    &lt;/noscript&gt;
    &lt;p id="demo"&gt;&lt;/p&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <p id="demo">Hello, JavaScript!</p>
                <noscript>
                    <p>Please enable JavaScript for full functionality.</p>
                </noscript>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Use <code>defer</code> or <code>async</code> for external scripts to improve performance.</li>
                <li>Ensure <code>&lt;noscript&gt;</code> provides a functional fallback.</li>
                <li>Avoid inline scripts for maintainability; prefer external files.</li>
                <li>Test JavaScript functionality across browsers.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Create a webpage that includes:</p>
            <ul>
                <li>A <code>&lt;script&gt;</code> that changes the text of a paragraph when a button is clicked.</li>
                <li>A <code>&lt;noscript&gt;</code> section that displays a message if JavaScript is disabled.</li>
            </ul>
            <p>Test the page with JavaScript enabled and disabled to verify both states.</p>
        </div>
    </div>

    <!--embaded content-->
    <div id="embedded-content" class="content-section active">
        <h2>Embedded Content</h2>
        <p>HTML embedded content elements allow the inclusion of external resources or interactive regions, such as image maps.</p>
        <p>These elements enhance webpages by providing clickable areas within images.</p>
        <p>Proper use ensures accessibility and compatibility across devices.</p>
    
        <h4>Common Embedded Content Elements</h4>
        <ul>
            <li><strong>&lt;map&gt;</strong>: Defines a client-side image map.</li>
            <li><strong>&lt;area&gt;</strong>: Specifies clickable regions within an image map.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li><strong>&lt;map&gt;</strong>: Associates an image with clickable regions via <code>&lt;area&gt;</code>.</li>
            <li><strong>&lt;area&gt;</strong>: Defines specific shapes and links for interactive areas.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>Provide <code>alt</code> text for each <code>&lt;area&gt;</code> to describe its purpose.</li>
            <li>Ensure image maps are navigable via keyboard.</li>
            <li>Test with screen readers to verify link descriptions.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Use simple shapes (<code>rect</code>, <code>circle</code>, <code>poly</code>) for compatibility.</li>
            <li>Ensure <code>&lt;img&gt;</code> has a <code>usemap</code> attribute linking to <code>&lt;map&gt;</code>.</li>
            <li>Avoid overlapping <code>&lt;area&gt;</code> regions to prevent confusion.</li>
            <li>Optimize images for fast loading.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
    &lt;img src="map.png" alt="Navigation Map" usemap="#nav-map"&gt;
    &lt;map name="nav-map"&gt;
        &lt;area shape="rect" coords="0,0,100,100" href="home.html" alt="Home Link"&gt;
        &lt;area shape="circle" coords="150,150,50" href="about.html" alt="About Link"&gt;
    &lt;/map&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <h4>Image Map</h4>
                <p>Displays an image with clickable regions linking to different pages.</p>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Link <code>&lt;img&gt;</code> to <code>&lt;map&gt;</code> using <code>usemap</code>.</li>
                <li>Use precise <code>coords</code> for accurate region mapping.</li>
                <li>Include <code>alt</code> for each <code>&lt;area&gt;</code> for accessibility.</li>
                <li>Test interactivity on touch and desktop devices.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Create an image map for a webpage that includes:</p>
            <ul>
                <li>An <code>&lt;img&gt;</code> with a <code>usemap</code> attribute.</li>
                <li>A <code>&lt;map&gt;</code> with at least two <code>&lt;area&gt;</code> elements (one <code>rect</code> and one <code>circle</code>).</li>
                <li>Each <code>&lt;area&gt;</code> linking to a different URL with descriptive <code>alt</code> text.</li>
            </ul>
            <p>Test the map’s interactivity and accessibility in a browser.</p>
        </div>
    </div>

    <!--deprecated-->
    <div id="deprecated-content" class="content-section active">
        <h2>Deprecated/Obsolete Tags</h2>
        <p>Deprecated and obsolete HTML tags are no longer recommended for use in modern web development due to better alternatives.</p>
        <p>These tags were often presentational or lacked semantic value, and CSS or other HTML elements have replaced them.</p>
        <p>Avoiding these tags ensures compatibility, accessibility, and maintainability.</p>
    
        <h4>Common Deprecated/Obsolete Tags</h4>
        <ul>
            <li><strong>&lt;acronym&gt;</strong>: Replaced by <code>&lt;abbr&gt;</code>.</li>
            <li><strong>&lt;applet&gt;</strong>: Replaced by <code>&lt;object&gt;</code> or JavaScript.</li>
            <li><strong>&lt;basefont&gt;</strong>: Replaced by CSS font properties.</li>
            <li><strong>&lt;big&gt;</strong>: Replaced by CSS <code>font-size</code>.</li>
            <li><strong>&lt;blink&gt;</strong>: Replaced by CSS animations (rarely used).</li>
            <li><strong>&lt;center&gt;</strong>: Replaced by CSS <code>text-align</code> or <code>margin</code>.</li>
            <li><strong>&lt;dir&gt;</strong>: Replaced by <code>&lt;ul&gt;</code>.</li>
            <li><strong>&lt;font&gt;</strong>: Replaced by CSS font properties.</li>
            <li><strong>&lt;frame&gt;</strong>, <strong>&lt;frameset&gt;</strong>, <strong>&lt;noframes&gt;</strong>: Replaced by <code>&lt;iframe&gt;</code> or CSS layouts.</li>
            <li><strong>&lt;isindex&gt;</strong>: Replaced by <code>&lt;input type="search"&gt;</code>.</li>
            <li><strong>&lt;keygen&gt;</strong>: Replaced by modern cryptographic APIs.</li>
            <li><strong>&lt;marquee&gt;</strong>: Replaced by CSS animations (rarely used).</li>
            <li><strong>&lt;menuitem&gt;</strong>: Replaced by <code>&lt;li&gt;</code> in menus.</li>
            <li><strong>&lt;nobr&gt;</strong>: Replaced by CSS <code>white-space: nowrap</code>.</li>
            <li><strong>&lt;noembed&gt;</strong>: Replaced by fallback content in <code>&lt;object&gt;</code>.</li>
            <li><strong>&lt;param&gt;</strong>: Rarely used; replaced by data attributes.</li>
            <li><strong>&lt;plaintext&gt;</strong>: Replaced by <code>&lt;pre&gt;</code>.</li>
            <li><strong>&lt;spacer&gt;</strong>: Replaced by CSS <code>margin</code> or <code>padding</code>.</li>
            <li><strong>&lt;strike&gt;</strong>: Replaced by <code>&lt;del&gt;</code> or <code>&lt;s&gt;</code>.</li>
            <li><strong>&lt;tt&gt;</strong>: Replaced by <code>&lt;code&gt;</code> or CSS <code>font-family: monospace</code>.</li>
            <li><strong>&lt;xmp&gt;</strong>: Replaced by <code>&lt;pre&gt;</code> or <code>&lt;code&gt;</code>.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li>These tags were used for styling or functionality in older HTML versions but are now obsolete.</li>
            <li>They often lack semantic meaning or have been replaced by more accessible and flexible alternatives.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>Avoid deprecated tags like <code>&lt;center&gt;</code> or <code>&lt;font&gt;</code>, as they confuse screen readers.</li>
            <li>Use semantic alternatives like <code>&lt;del&gt;</code> or <code>&lt;abbr&gt;</code> to convey meaning.</li>
            <li>Ensure layouts avoid <code>&lt;frame&gt;</code> or <code>&lt;frameset&gt;</code> for better navigation.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Replace presentational tags with CSS for styling.</li>
            <li>Use semantic HTML elements for content structure.</li>
            <li>Avoid obsolete tags to ensure compatibility with modern browsers.</li>
            <li>Test pages with deprecated tags removed to verify functionality.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage (Modern Alternatives)</h3>
                <div class="code-block">
                    <pre>
    &lt;!-- Deprecated: &lt;center&gt; --&gt;
    &lt;div style="text-align: center;"&gt;Centered content&lt;/div&gt;
    
    &lt;!-- Deprecated: &lt;font&gt; --&gt;
    &lt;p style="font-family: Arial; color: blue;"&gt;Styled text&lt;/p&gt;
    
    &lt;!-- Deprecated: &lt;strike&gt; --&gt;
    &lt;del&gt;Deleted text&lt;/del&gt;
    
    &lt;!-- Deprecated: &lt;acronym&gt; --&gt;
    &lt;abbr title="National Aeronautics and Space Administration"&gt;NASA&lt;/abbr&gt;
    
    &lt;!-- Deprecated: &lt;tt&gt; --&gt;
    &lt;code&gt;Monospace text&lt;/code&gt;
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <div style="text-align: center;">Centered content</div>
                <p style="font-family: Arial; color: blue;">Styled text</p>
                <del>Deleted text</del>
                <p><abbr title="National Aeronautics and Space Administration">NASA</abbr></p>
                <code>Monospace text</code>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Replace <code>&lt;center&gt;</code> with CSS <code>text-align</code> or <code>margin</code>.</li>
                <li>Use <code>&lt;abbr&gt;</code> instead of <code>&lt;acronym&gt;</code> for abbreviations.</li>
                <li>Use <code>&lt;del&gt;</code> or <code>&lt;s&gt;</code> instead of <code>&lt;strike&gt;</code> for semantic clarity.</li>
                <li>Avoid <code>&lt;frame&gt;</code> or <code>&lt;frameset&gt;</code> for modern layouts.</li>
                <li>Use CSS for all styling needs to replace tags like <code>&lt;font&gt;</code> or <code>&lt;big&gt;</code>.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Refactor a webpage that uses deprecated tags:</p>
            <ul>
                <li>Replace <code>&lt;center&gt;</code> with CSS <code>text-align</code>.</li>
                <li>Replace <code>&lt;font&gt;</code> with CSS font properties.</li>
                <li>Replace <code>&lt;strike&gt;</code> with <code>&lt;del&gt;</code>.</li>
                <li>Replace <code>&lt;acronym&gt;</code> with <code>&lt;abbr&gt;</code>.</li>
            </ul>
            <p>Test the refactored page to ensure identical appearance and improved accessibility.</p>
        </div>
    </div>

    <!--obsecure-->
    <div id="obscure-content" class="content-section active">
        <h2>Obscure but Valid Tags</h2>
        <p>HTML includes some lesser-known but valid tags that serve specialized purposes, often related to emerging or experimental web technologies.</p>
        <p>These tags, such as <code>&lt;portal&gt;</code> and <code>&lt;slot&gt;</code>, are used in specific contexts like navigation transitions and web components.</p>
        <p>While not widely used, understanding these tags can enhance modern web development, especially for advanced or experimental applications.</p>
    
        <h4>Obscure but Valid Tags</h4>
        <ul>
            <li><strong>&lt;portal&gt;</strong>: An experimental element for embedding and navigating to another document context.</li>
            <li><strong>&lt;slot&gt;</strong>: A placeholder in web components for inserting content into a shadow DOM.</li>
        </ul>
    
        <br><h5>Purpose</h5>
        <ul>
            <li><strong>&lt;portal&gt;</strong>: Enables seamless navigation or preview of another page within the current context, often with smooth transitions. It is experimental and primarily used for advanced navigation scenarios.</li>
            <li><strong>&lt;slot&gt;</strong>: Part of the Web Components API, it acts as a placeholder in a shadow DOM, allowing developers to define where external content should be inserted.</li>
        </ul>
    
        <br><h5>Accessibility</h5>
        <ul>
            <li>For <code>&lt;portal&gt;</code>, ensure fallback content or alternative navigation methods (e.g., standard links) are available, as it is experimental and not universally supported.</li>
            <li>For <code>&lt;slot&gt;</code>, ensure slotted content is accessible by using semantic HTML and ARIA attributes where necessary.</li>
            <li>Test both elements with screen readers to ensure they do not disrupt the accessibility tree.</li>
        </ul>
    
        <br><h5>Best Practices</h5>
        <ul>
            <li>Use <code>&lt;portal&gt;</code> only in controlled environments with proper feature detection, as it is experimental and supported only in specific browsers (e.g., Chrome with flags enabled).</li>
            <li>Use <code>&lt;slot&gt;</code> within custom web components to create reusable, encapsulated UI elements.</li>
            <li>Provide fallbacks for browsers that do not support these tags, such as using standard links for <code>&lt;portal&gt;</code> or traditional DOM for <code>&lt;slot&gt;</code>.</li>
            <li>Test extensively across browsers due to limited or experimental support.</li>
        </ul>
    
        <div class="code-display">
            <div class="code-container">
                <h3>Usage</h3>
                <div class="code-block">
                    <pre>
    <!-- Example of &lt;portal&gt; (Note: Requires experimental browser support) -->
    <portal src="https://example.com" id="my-portal"></portal>
    <p>If the portal is not supported, use this <a href="https://example.com">link</a> instead.</p>
    
    <!-- Example of &lt;slot&gt; in a static template (simulating a web component without JS) -->
    <template id="my-component-template">
        <div style="border: 1px solid #ccc; padding: 10px;">
            <h3>Component Header</h3>
            <slot name="content">Default content</slot>
        </div>
    </template>
    
    <!-- Using the template content -->
    <div>
        <h3>Component Header</h3>
        <p slot="content">This is slotted content!</p>
    </div>
                    </pre>
                    <button class="copy-btn">Copy</button>
                </div>
            </div>
        </div>
    
        <div class="preview-container">
            <h3>Result</h3>
            <div class="preview-frame">
                <h4>Portal</h4>
                <p>The <code>&lt;portal&gt;</code> element, when supported, embeds a preview of another page (e.g., https://example.com) and allows navigation with transitions. In unsupported browsers, the fallback link is displayed: <a href="https://example.com">link</a>.</p>
                <h4>Slot</h4>
                <div style="border: 1px solid #ccc; padding: 10px;">
                    <h3>Component Header</h3>
                    <p>This is slotted content!</p>
                </div>
                <p>Note: The <code>&lt;slot&gt;</code> example simulates a web component’s output statically, as <code>&lt;slot&gt;</code> typically requires JavaScript for dynamic shadow DOM integration.</p>
            </div>
        </div>
    
        <div class="preview-frame">
            <h4>Key Elements</h4>
            <ul>
                <li>Provide a fallback for <code>&lt;portal&gt;</code> using a standard <code>&lt;a&gt;</code> link for unsupported browsers.</li>
                <li>Use the <code>name</code> attribute on <code>&lt;slot&gt;</code> to target specific content insertion.</li>
                <li>Ensure <code>&lt;slot&gt;</code> is used within a shadow DOM in real applications for encapsulation (simulated here without JS).</li>
                <li>Include default content inside <code>&lt;slot&gt;</code> for cases where no content is provided.</li>
                <li>Test <code>&lt;portal&gt;</code> with experimental browser flags and <code>&lt;slot&gt;</code> in contexts supporting Web Components.</li>
            </ul>
        </div>
    
        <div class="exercise-container">
            <h3>Practical Exercise</h3>
            <p>Create a webpage that demonstrates the use of obscure tags without JavaScript:</p>
            <ul>
                <li>Create a static template simulating a web component with a <code>&lt;slot&gt;</code> element, including a named slot for custom content and default content.</li>
                <li>Manually replicate the slotted content in the main document to show the intended output.</li>
                <li>Add a <code>&lt;portal&gt;</code> element pointing to an external URL, with a fallback <code>&lt;a&gt;</code> link for unsupported browsers.</li>
            </ul>
            <p>Test the webpage in modern browsers to verify the fallback link and static slot output, and check accessibility with a screen reader.</p>
        </div>
    </div>

        <!--more notes to continue here-->

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
