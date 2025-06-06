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
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Leap - Javascript</h2>
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
                    <a href="#"><i class="fas fa-code me-2"></i> What is JavaScript?</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="js-definition"><i style="font-size: 8px;"></i> Definition and Purpose</a></li>                       
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Setup & Basics</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="code-editor"><i style="font-size: 8px;"></i>Basics and Introduction</a></li>
                        <!-- <li><a href="#" data-content="devtools-basics"><i style="font-size: 8px;"></i> DevTools Basics</a></li>
                        <li><a href="#" data-content="console-logging"><i style="font-size: 8px;"></i> Console Logging</a></li>
                        <li><a href="#" data-content="script-tag"><i style="font-size: 8px;"></i> Using Script Tag</a></li>
                        <li><a href="#" data-content="first-script"><i style="font-size: 8px;"></i> Your First JS Program</a></li> -->
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Variables & Data Types</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="var-let-const"><i style="font-size: 8px;"></i> var, let, const</a></li>
                        <li><a href="#" data-content="primitive-types"><i style="font-size: 8px;"></i> Primitive Data Types</a></li>
                        <li><a href="#" data-content="type-coercion"><i style="font-size: 8px;"></i> Type Coercion & Conversion</a></li>
                        <li><a href="#" data-content="typeof-operator"><i style="font-size: 8px;"></i> typeof Operator</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Operators</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="arithmetic-operators"><i style="font-size: 8px;"></i> Arithmetic Operators</a></li>
                        <li><a href="#" data-content="assignment-operators"><i style="font-size: 8px;"></i> Assignment Operators</a></li>
                        <li><a href="#" data-content="comparison-operators"><i style="font-size: 8px;"></i> Comparison Operators</a></li>
                        <li><a href="#" data-content="logical-operators"><i style="font-size: 8px;"></i> Logical Operators</a></li>
                        <li><a href="#" data-content="ternary-operator"><i style="font-size: 8px;"></i> Ternary Operator</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Conditionals</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="if-else"><i style="font-size: 8px;"></i> if, else if, else</a></li>
                        <li><a href="#" data-content="switch-statement"><i style="font-size: 8px;"></i> switch Statement</a></li>
                        <li><a href="#" data-content="truthy-falsy"><i style="font-size: 8px;"></i> Truthy and Falsy Values</a></li>
                        <li><a href="#" data-content="short-circuit"><i style="font-size: 8px;"></i> Short-Circuit Evaluation</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Loops</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="for-loop"><i style="font-size: 8px;"></i> for Loop</a></li>
                        <li><a href="#" data-content="while-loop"><i style="font-size: 8px;"></i> while Loop</a></li>
                        <li><a href="#" data-content="do-while"><i style="font-size: 8px;"></i> do...while Loop</a></li>
                        <li><a href="#" data-content="loop-control"><i style="font-size: 8px;"></i> break & continue</a></li>
                        <li><a href="#" data-content="for-of"><i style="font-size: 8px;"></i> for...of Loop</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Functions</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="function-declaration"><i style="font-size: 8px;"></i> Function Declaration</a></li>
                        <li><a href="#" data-content="function-expression"><i style="font-size: 8px;"></i> Function Expression</a></li>
                        <li><a href="#" data-content="arrow-functions"><i style="font-size: 8px;"></i> Arrow Functions</a></li>
                        <li><a href="#" data-content="parameters-arguments"><i style="font-size: 8px;"></i> Parameters & Arguments</a></li>
                        <li><a href="#" data-content="return-values"><i style="font-size: 8px;"></i> Return Values</a></li>
                        <li><a href="#" data-content="scope-js"><i style="font-size: 8px;"></i> Scope (Function, Block, Global)</a></li>
                        <li><a href="#" data-content="iife"><i style="font-size: 8px;"></i> IIFE</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Arrays</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="array-create-access"><i style="font-size: 8px;"></i> Creating and Accessing Arrays</a></li>
                        <li><a href="#" data-content="array-methods"><i style="font-size: 8px;"></i> push, pop, shift, unshift</a></li>
                        <li><a href="#" data-content="slice-splice"><i style="font-size: 8px;"></i> slice and splice</a></li>
                        <li><a href="#" data-content="map-filter-reduce"><i style="font-size: 8px;"></i> map, filter, reduce</a></li>
                        <li><a href="#" data-content="foreach-includes"><i style="font-size: 8px;"></i> forEach, includes</a></li>
                        <li><a href="#" data-content="spread-operator"><i style="font-size: 8px;"></i> Spread Operator</a></li>
                        <li><a href="#" data-content="array-destructuring"><i style="font-size: 8px;"></i> Array Destructuring</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Objects</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="object-literals"><i style="font-size: 8px;"></i> Object Literals</a></li>
                        <li><a href="#" data-content="access-object-properties"><i style="font-size: 8px;"></i> Accessing Properties</a></li>
                        <li><a href="#" data-content="methods-this"><i style="font-size: 8px;"></i> Methods and this Keyword</a></li>
                        <li><a href="#" data-content="constructor-objects"><i style="font-size: 8px;"></i> Constructor Functions</a></li>
                        <li><a href="#" data-content="object-destructuring"><i style="font-size: 8px;"></i> Object Destructuring</a></li>
                        <li><a href="#" data-content="optional-chaining"><i style="font-size: 8px;"></i> Optional Chaining</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Strings</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="string-basics"><i style="font-size: 8px;"></i> String Basics</a></li>
                        <li><a href="#" data-content="template-literals"><i style="font-size: 8px;"></i> Template Literals</a></li>
                        <li><a href="#" data-content="tagged-templates"><i style="font-size: 8px;"></i> Tagged Templates</a></li>
                        <li><a href="#" data-content="string-methods"><i style="font-size: 8px;"></i> Common String Methods</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Dates & Time</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="date-object"><i style="font-size: 8px;"></i> Date Object</a></li>
                        <li><a href="#" data-content="formatting-dates"><i style="font-size: 8px;"></i> Formatting Dates</a></li>
                        <li><a href="#" data-content="time-calculations"><i style="font-size: 8px;"></i> Time Calculations</a></li>
                        <li><a href="#" data-content="intl-api"><i style="font-size: 8px;"></i> Intl API</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> ES6+ Features</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="es6-let-const"><i style="font-size: 8px;"></i> Let and Const</a></li>
                        <li><a href="#" data-content="arrow-functions-es6"><i style="font-size: 8px;"></i> Arrow Functions</a></li>
                        <li><a href="#" data-content="enhanced-objects"><i style="font-size: 8px;"></i> Enhanced Object Literals</a></li>
                        <li><a href="#" data-content="default-parameters"><i style="font-size: 8px;"></i> Default Parameters</a></li>
                        <li><a href="#" data-content="rest-spread"><i style="font-size: 8px;"></i> Rest and Spread Operators</a></li>
                        <li><a href="#" data-content="destructuring-es6"><i style="font-size: 8px;"></i> Destructuring</a></li>
                        <li><a href="#" data-content="modules-intro"><i style="font-size: 8px;"></i> Modules (import/export)</a></li>
                        <li><a href="#" data-content="classes-es6"><i style="font-size: 8px;"></i> Classes</a></li>
                        <li><a href="#" data-content="static-get-set"><i style="font-size: 8px;"></i> Static, Getters, Setters</a></li>
                        <li><a href="#" data-content="private-class-fields"><i style="font-size: 8px;"></i> Private Class Fields</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Promises & Async</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="callbacks-promises"><i style="font-size: 8px;"></i> Callbacks → Promises</a></li>
                        <li><a href="#" data-content="async-await"><i style="font-size: 8px;"></i> async/await</a></li>
                        <li><a href="#" data-content="fetch-api"><i style="font-size: 8px;"></i> Fetch API Example</a></li>
                        <li><a href="#" data-content="error-handling"><i style="font-size: 8px;"></i> Error Handling</a></li>
                        <li><a href="#" data-content="promise-all-race"><i style="font-size: 8px;"></i> Promise.all, race</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Symbols & Iterators</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="symbol-type"><i style="font-size: 8px;"></i> Symbol Type</a></li>
                        <li><a href="#" data-content="iterable-symbol"><i style="font-size: 8px;"></i> Symbol.iterator</a></li>
                        <li><a href="#" data-content="custom-iterators"><i style="font-size: 8px;"></i> Custom Iterators</a></li>
                        <li><a href="#" data-content="generators"><i style="font-size: 8px;"></i> Generators</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Sets & Maps</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="set-structure"><i style="font-size: 8px;"></i> Set Structure</a></li>
                        <li><a href="#" data-content="map-structure"><i style="font-size: 8px;"></i> Map Structure</a></li>
                        <li><a href="#" data-content="weakmap-weakset"><i style="font-size: 8px;"></i> WeakMap / WeakSet</a></li>
                    </ul>
                </li>
                
                <li class="menu-item">
                    <a href="#"><i class="fas fa-code me-2"></i> Optional Chaining</a>
                    <ul class="submenu">
                        <li><a href="#" data-content="optional-chaining"><i style="font-size: 8px;"></i> Optional Chaining (?.)</a></li>
                        <li><a href="#" data-content="nullish-coalescing"><i style="font-size: 8px;"></i> Nullish Coalescing (??)</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Root Element Content -->
            <div id="js-definition-content" class="content-section active">
                <h2>What is JavaScript?</h2>
                <p>JavaScript is a high-level, interpreted programming language that runs in web 
                    browsers and allows developers to make web pages interactive. 
                    <br>It enables:</p>
                    <li>Dynamic updates to HTML and CSS</li>
                    <li>User interaction handling (e.g., form validation)</li>
                    <li>Communication with servers (via APIs)</li>
                    <li>Real-time data updates</li>
                <p>Unlike HTML (structure) and CSS (style), JavaScript adds behavior to websites.</p>

                <!-- Role of js -->
                <h4 style="margin-top: 30px;">Role of Javascript on Web Development:</h4>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <!-- Explains what js can do -->               
                        <li>Manipulate HTML/CSS dynamically</li>
                        <li>Respond to user events (clicks, keypresses, etc.)</li>
                        <li>Store and retrieve data using localStorage or cookies</li>
                        <li>Communicate with backend services using AJAX/fetch API</li>

                    <!-- Explains how js runs -->
                    <br>
                <h4>How JavaScript runs in a browser</h4>
                    <ol style="margin-left: 20px; margin-top: 10px;">
                        <li>The browser downloads an HTML file.</li>
                        <li>It reads &lt;script&gt; tags and loads the associated JavaScript.</li>
                        <li>A built-in engine like V8 (Chrome) or SpiderMonkey (Firefox) executes the code.</li>
                        <li>JS interacts with the DOM (Document Object Model) and BOM (Browser Object Model).</li>                            
                    </ol><br>

                    <h4>You can implement JavaScript in two main ways:</h4>
                    <ol>
                        <li><strong>Inline:</strong> Directly inside &lt;script&gt; tags</li>
                        <li><strong>External:</strong> In a .js file linked via &lt;script src="main.js"&gt;</li>
                                          
                    </ol>
                        <div class="code-display">
                            <div class="code-container">
                                <h5>Internal:</h5>
                                <div class="code-block">
                                <pre>

&lt;script&gt;
    alert("Welcome to Javascript")
&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>

                        <div class="code-display">
                            <div class="code-container">
                                <h5>External:</h5>
                                <div class="code-block">
                                <pre>

&lt;script src="main.js"&gt;&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>
                    
                    <!-- body section -->      
            
                <div class="preview-container">
                    <h3>Result</h3>
                    <div class="preview-frame">
                        <h4>Image</h4>
                        <p>The content area is currently empty.</p>
                    </div>
                </div>
                

            </div>




            <!-- Set ups and basics -->
            <div id="code-editor-content" class="content-section">
                <h3>Setup & Basics</h3>
                <h4>Code Editors</h4>
                <p>A code editor is a software used to write and edit code. It provides features that help developers write code more efficiently.</p>
                <p>✅ Popular Code Editors:</p>
                    <li><strong>Visual Studio Code (VS Code)</strong> – Free, powerful, supports extensions.</li>
                    <li><strong>Atom</strong> – Open-source from GitHub.</li>
                    <li><strong>Sublime Text</strong> – Lightweight and fast.</li>
                    <li><strong>Programiz</strong> - Online text editor.</li>

                        <!--Developer tools -->
                        <br><h4>Developer Tools (DevTools)</h4>
                        <p>Developer Tools are built into modern web browsers to help you debug and test your websites directly in the browser.</p>

                        <p><strong>🔍 How to Open DevTools:</strong></p>
                            <li><strong>Chrome:</strong>Right-click → Inspect or press F12 / Ctrl + Shift + I</li>
                            <li><strong>Firefox:</strong> Right-click → Inspect Element</li>
                            <li><strong>Edge:</strong> Same as Chrome</li>

                         <!--tabs in dev tools -->
                        <br><p><strong>📁 Key Tabs in DevTools:</strong></p>
                            <li><strong>Elements:</strong>Inspect and modify HTML/CSS live.</li>
                            <li><strong>Console:</strong> Run JavaScript and see output/errors.</li>
                            <li><strong>Sources:</strong> Debug JavaScript using breakpoints.</li>
                            <li><strong>Network:</strong> View loaded files, check performance, inspect XHR requests.</li>
                            <li><strong>Application:</strong>Check local storage, cookies, service workers, etc.</li>

                            <div class="code-display">
                                <div class="code-container">
                                 <h5>Example</h5>
                                    <div class="code-block">
                                        <pre>
    
console.log("Hello from DevTools Console!");
                                        </pre>
                                        <button class="copy-btn">Copy</button>
                                    </div>

                                </div>
                              
                            </div>

                                   <!--Console Logging -->
                        <br><h4>Console Logging</h4>
                        <p>The console is a tool in DevTools where developers can print messages, debug values, and track errors.</p>

                        <p><strong>📝 Common Methods::</strong></p>
                        <table style="width: 100%; border-collapse: collapse; background-color: #2b2b2b; color: #fff;">
                            <thead>
                                <tr>
                                    <th style="border-bottom: 2px solid #3f3f3f; padding: 10px 15px; text-align: left; font-weight: bold;">METHOD</th>
                                    <th style="border-bottom: 2px solid #3f3f3f; padding: 10px 15px; text-align: left; font-weight: bold;">DESCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">console.log()</td>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Outputs general messages</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">console.warn()</td>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Shows a warning message</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">console.error()</td>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Displays an error</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">console.info()</td>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Info-level logging</td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">console.table()</td>
                                    <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Displays data in table format</td>
                                </tr>
                            </tbody>
                        </table>
                 
                        <div class="code-display">
                            <div class="code-container"> <br>
                                <h5>💡 Usage:</h5>                                 
                                <div class="code-block">
                                    <pre>

console.log("This is a log message");
console.warn("This is a warning");
console.error("This is an error!");
                                    </pre>
                                    <button class="copy-btn">Copy</button>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Using the Script tag -->
                        <br><h4>📜 Using Script Tag</h4>
                        <p>JavaScript is typically embedded or linked in HTML using the &lt;script&gt; tag.</p>
                        <div class="code-display">
                            <div class="code-container">
                                <h5>Inline Script:</h5>
                                <div class="code-block">
                                <pre>

&lt;script&gt;
    alert("Welcome to DigitalLeap!")
&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>

                        <div class="code-display">
                            <div class="code-container">
                                <h5>External Script:</h5>
                                <div class="code-block">
                                <pre>

&lt;script src="main.js"&gt;&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div><br>

                        
                        <h5>Best Practices</h5>
                        <li>Avoid too much inline JavaScript.</li>
                        <li>Keep JS in separate .js files for better maintainability.</li>
                        <li>Use defer or async attributes when needed:</li>
                        <div class="code-display">
                            <div class="code-container">                       
                                <div class="code-block">
                                <pre>

&lt;script src="main.js" defer&gt;&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>

                        <!-- UFirst JS code -->
                         <!-- <div id="first-script-content"> -->
                        <br><h4>🧪 Your First JS Program</h4>
                        <p>Let’s create a simple program that shows an alert and logs a message to the console.</p><br>

                        <h5>Setps</h5>
                        <ol>
                            <li>Create a file named main.js</li>
                            <li>Write the following code:</li>
                       
                        <div class="code-display">
                            <div class="code-container">                             
                                <div class="code-block">
                                <pre>

// This is your first JavaScript program
alert("Welcome to DigitalLeap!");

console.log("DigitalLeap says hello from the console.");
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>
                        <li>Link it in your HTML:</li>
                        <div class="code-display">
                            <div class="code-container">                             
                                <div class="code-block">
                                <pre>

&lt;script src="main.js" &gt;&lt;/script&gt;
                                </pre>
                                <button class="copy-btn">Copy</button>                          
                                </div>
                            </div>
                        </div>
                    </ol>
                        
                <h5>✅ Expected Output:</h5>
                <li>An alert box with "Welcome to DigitalLeap!"</li>
                <li>A message in the browser console.</li><br>

                <h5>🧠 Concepts :</h5>
                <li>Aletr PopUps</li>
                <li>Console output.</li>
                <li>Basic Syntax</li>
                <li>Script Linking</li>    
            <!-- </div>                   -->
    

            </div>





            <!-- Variables and data types -->
             <!-- var, let, and const -->
            <div id="var-let-const-content" class="content-section">                
                <h4>var, let, and const</h4>
                <p>These are the three keywords used to declare variables in JavaScript. Each has different scope , hoisting , and reassignment behavior.</p>
                <p>In JavaScript, variables are used to store data values.</p><br>

                <!-- Var -->
                <h5>✅ var</h5>
                    <li>Function-scoped or globally scoped if declared outside of any function.</li>
                    <li>Hoisted (moved to the top of their scope).</li>
                    <li>Can be redeclared/re-assigned and updated.</li>
                    <div class="code-display">
                        <div class="code-container">
                         <h5>Example</h5>
                            <div class="code-block">
                                <pre>

var x = 10; // Number
var x = 20; // redeclaration allowed
var message = "Hello, world!"; // String
var number = 42; // Number
var isTrue = true; // Boolean
var list = [1, 2, 3]; // Array
var person = {name: "Evans", age: 22}; // Object
                                </pre>
                                <button class="copy-btn">Copy</button>
                            </div>

                        </div>
                      
                    </div>
                    <h5>Best Practice:</h5>
                    <li>💡 Not recommended for use in modern JS due to issues with scoping and hoisting. </li>
           

                <!-- Let -->
                <br><br>
                <h5>✅ let</h5>
                <li>Back-scoped.</li>
                <li>Not hoisted (inaccessible before declaration — Temporal Dead Zone).</li>
                <li>Can be redeclared/re-assigned and updated.</li>
                <div class="code-display">
                    <div class="code-container">
                     <h5>Example</h5>
                        <div class="code-block">
                            <pre>

let y = 10;
y = 20; // allowed
let y = 30; // error: Identifier 'y' has already been declared
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>

                    </div>
                  
                </div>
                <h5>Best Practice:</h5>
                <li>💡 Best choice when variable value needs to change.</li>

                
                <!-- const -->
                <br><br>
                <h5>✅ const</h5>
                <li>Back-scoped.</li>
                <li>Not hoisted (inaccessible before declaration — Temporal Dead Zone).</li>
                <li>Cannot be redeclared or re-assigned.</li>
                <div class="code-display">
                    <div class="code-container">
                     <h5>Example</h5>
                        <div class="code-block">
                            <pre>

const z = 10;
z = 20; // error: Assignment to constant variable
                            </pre>
                            <button class="copy-btn">Copy</button>
                        </div>

                    </div>
                  
                </div>
                <h5>Best Practice:</h5>
                <li>💡 Use this when the variable should not change (e.g., constants, references).</li>                      
    

            </div>


            <!-- Primitive Data types -->
            <div id="primitive-types-content" class="content-section">                
                <h4>Primitive Data Types</h4>
                <p>Primitive data types are the most basic data types and they include:</p>
                <table style="width: 100%; border-collapse: collapse; background-color: #2b2b2b; color: #fff;">
                    <thead>
                        <tr>
                            <th style="border-bottom: 2px solid #3f3f3f; padding: 10px 15px; text-align: left; font-weight: bold;">TYPE</th>
                            <th style="border-bottom: 2px solid #3f3f3f; padding: 10px 15px; text-align: left; font-weight: bold;">DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">string</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Represents textual data created with double quotes, single quotes
                                or backticks <br>(e.g.,"Hello", 'DigitalLeap', `JavaScript`)</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">number</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Represents numeric values including integers and floating-point numbers <br>(e.g., 25, 3.14)</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">boolean</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Represents logical entities with two values: true or false.</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">null</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Represents an intentional absence of any object value. Has one value: <br>Example: var y = null;</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">undefined</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;"> A type that has only one value, undefined, which is the value of variables that 
                                have been declared but not initialized. <br>Example: var x; console.log(x); // undefined</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">bigint</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">For representing very large integers with arbitrary precision <br>(e.g., 100n)</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">symbol</td>
                            <td style="padding: 10px 15px; border-top: 1px solid #3f3f3f; border-bottom: 1px solid #3f3f3f;">Unique identifiers for object properties (used internally by JS). <br>Example: var sym = Symbol('description');</td>
                        </tr>
                    </tbody>
                </table><br>           

         
                    <div class="code-display">
                        <div class="code-container">
                         <h5>Examples</h5>
                            <div class="code-block">
                                <pre>

let name = "DigitalLeap"; // string
let age = 25; // number
let isMember = true; // boolean
let user = null; // null
let value; // undefined
let bigNum = 9007199254740991n; // bigint
let sym = Symbol("id"); // symbol
                                </pre>
                                <button class="copy-btn">Copy</button>
                            </div>

                        </div>
                      
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