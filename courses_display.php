<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Structure - Notes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 280px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .menu-header {
            padding: 15px 20px;
            text-transform: uppercase;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }
        .submenu {
            list-style: none;
            padding-left: 20px;
        }
        .submenu a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }
        .submenu a:hover {
            background-color: rgba(6, 92, 204, 0.1);
            color: #065ccc;
        }
        .submenu li.active a {
            background-color: rgba(6, 92, 204, 0.1);
            color: #065ccc;
            border-left: 3px solid #065ccc;
        }
        .content-section {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }
        .code-block {
            position: relative;
            background: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            margin-top: 10px;
        }
        .code-block pre {
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
        }
        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #065ccc;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }
        .copy-btn:hover {
            background: #044caa;
        }
        .image-placeholder {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="menu-header">Document Structure</li>
                <li class="menu-item has-submenu active">
                    <a href="#"><i class="fas fa-code me-2"></i> Document Structure</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Root Element</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Head Section</a></li>
                        <li><a href="#" data-content="body"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Body Section</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i> Content Sections</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Semantic Containers</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i>Headings and Text</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Headings</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Text Elements</a></li>
                        
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i>Media</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Images</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Videos</a></li>
                        <li><a href="#" data-content="body"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Videos from other sites</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i>Lists</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Unordered List</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Ordered List</a></li>
                        <li><a href="#" data-content="body"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Description List</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i> Interactive Elements</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i> Links and  Buttons</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Forms</a></li>
                        <li><a href="#" data-content="body"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Advanced Forms</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i>Dividers</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Thematic Break</a></li>
                    </ul>
                    <a href="#"><i class="fas fa-code me-2"></i>Containers</a>
                    <ul class="submenu" style="display: block;">
                        <li class="active"><a href="#" data-content="root"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Div</a></li>
                        <li><a href="#" data-content="head"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Span</a></li>
                        <li><a href="#" data-content="body"><i class="fas fa-circle me-2" style="font-size: 8px;"></i>Others</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <div id="root-content" class="content-section">
                <h2>Root Element</h2>
                <p>The root element is the top-level container for all HTML elements.</p>
                <div class="code-block">
                    <pre>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Content goes here -->
    </body>
</html>
                    </pre>
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                </div>
                <img src="" alt="Root Element Example" class="image-placeholder">
            </div>

            <div id="head-content" class="content-section" style="display: none;">
                <h2>Head Section</h2>
                <p>The head section contains metadata and links to external resources.</p>
                <div class="code-block">
                    <pre>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A brief description of the page">
    <title>Page Title</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline CSS */
    </style>
    <base href="https://example.com/">
</head>
                    </pre>
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                </div>
                <img src="https://via.placeholder.com/600x200?text=Head+Section+Example" alt="Head Section Example" class="image-placeholder">
            </div>

            <div id="body-content" class="content-section" style="display: none;">
                <h2>Body Section</h2>
                <p>The body section contains the visible content of the webpage.</p>
                <div class="code-block">
                    <pre>
<body>
    <header></header>
    <nav></nav>
    <main>
        <p>This is the main content.</p>
    </main>
    <footer></footer>
</body>
                    </pre>
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                </div>
                <img src="https://via.placeholder.com/600x200?text=Body+Section+Example" alt="Body Section Example" class="image-placeholder">
            </div>
        </div>
    </div>

    <script>
        // Handle menu clicks
        document.querySelectorAll('.submenu a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                // Remove active class from all items
                document.querySelectorAll('.submenu li').forEach(li => li.classList.remove('active'));
                // Add active class to clicked item
                this.parentElement.classList.add('active');
                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => section.style.display = 'none');
                // Show the selected content
                const contentId = this.getAttribute('data-content');
                document.getElementById(`${contentId}-content`).style.display = 'block';
            });
        });

        // Copy code to clipboard
        function copyCode(button) {
            const codeBlock = button.parentElement.querySelector('pre');
            navigator.clipboard.writeText(codeBlock.innerText).then(() => {
                alert('Code copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy code: ', err);
            });
        }
    </script>
</body>
</html>