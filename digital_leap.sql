-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_leap`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `submit_date`) VALUES
(1, 'Michael Kingstone', '', 'laskCNMTURDASKD', 'dfcyfyvycsyc', '2025-01-21 12:04:46'),
(2, 'Wes Brown', '', 'Build me a website', 'yess, i need a website', '2025-01-21 12:08:49'),
(3, 'Joshua ', '', 'new querry', 'drxrxr', '2025-01-22 07:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration_hours` int(11) NOT NULL,
  `student_count` int(11) NOT NULL,
  `instructor_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_image`, `price`, `duration_hours`, `student_count`, `instructor_name`, `created_at`) VALUES
(5, 'Front-end Web Development', 'images/frontend.jpg', 5000.00, 40, 10, 'Evans Osumba', '2025-05-25 14:11:04'),
(6, 'Database Management', 'images/database.jpg', 4000.00, 30, 16, 'Tony Wangolo', '2025-05-25 14:11:04'),
(7, 'Back-end Web Development', 'images/backend.jpg', 6000.00, 50, 8, 'Collins Otieno', '2025-05-25 14:11:04'),
(8, 'Android Development', 'images/androiddd.png', 5500.00, 45, 12, 'NIkita Kering', '2025-05-25 14:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `course_notes`
--

CREATE TABLE `course_notes` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `note_title` varchar(255) NOT NULL,
  `note_content` longtext NOT NULL,
  `section_order` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_notes`
--

INSERT INTO `course_notes` (`id`, `course_id`, `note_title`, `note_content`, `section_order`, `created_at`) VALUES
(7, 5, 'Introduction to HTML', '\r\n    <div class=\"note-content\">\r\n        <h2>Introduction to HTML</h2>\r\n        <p>HTML (HyperText Markup Language) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>\r\n        <p>Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>\r\n        <h3>Key Concepts:</h3>\r\n        <ul>\r\n            <li><strong>Elements:</strong> The building blocks of HTML pages, represented by tags.</li>\r\n            <li><strong>Tags:</strong> Used to mark up the start and end of an element (e.g., <code>&lt;p&gt;</code> for paragraph).</li>\r\n            <li><strong>Attributes:</strong> Provide additional information about an element (e.g., <code>&lt;a href=\"url\"&gt;</code>).</li>\r\n            <li><strong>Document Structure:</strong> Every HTML document has a basic structure including <code>&lt;!DOCTYPE html&gt;</code>, <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, and <code>&lt;body&gt;</code>.</li>\r\n        </ul>\r\n        <h3>Basic HTML Document Structure:</h3>\r\n        <pre><code class=\"language-html\">\r\n&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n    &lt;meta charset=\"UTF-8\"&gt;\r\n    &lt;meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"&gt;\r\n    &lt;title&gt;Document Title&lt;/title&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n    &lt;!-- Content goes here --&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;\r\n        </code></pre>\r\n        <p>This structure is fundamental for any web page you create. The <code>&lt;head&gt;</code> contains meta-information, while the <code>&lt;body&gt;</code> contains the visible content.</p>\r\n    </div>\r\n', 1, '2025-05-29 08:08:14'),
(8, 5, 'HTML Elements and Attributes', '\r\n    <div class=\"note-content\">\r\n        <h2>HTML Elements and Attributes</h2>\r\n        <p>HTML elements are the building blocks of HTML pages. HTML elements are represented by tags. HTML tags normally come in pairs like <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code>.</p>\r\n        <p>The first tag in a pair is the start tag, and the second tag is the end tag. The end tag is written like the start tag, with a forward slash before the tag name.</p>\r\n        <h3>Common HTML Elements:</h3>\r\n        <ul>\r\n            <li><strong>Headings:</strong> <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> - define HTML headings.</li>\r\n            <li><strong>Paragraphs:</strong> <code>&lt;p&gt;</code> - defines a paragraph.</li>\r\n            <li><strong>Links:</strong> <code>&lt;a&gt;</code> - defines a hyperlink.</li>\r\n            <li><strong>Images:</strong> <code>&lt;img&gt;</code> - defines an image.</li>\r\n            <li><strong>Lists:</strong> <code>&lt;ul&gt;</code> (unordered list), <code>&lt;ol&gt;</code> (ordered list), <code>&lt;li&gt;</code> (list item).</li>\r\n            <li><strong>Divisions:</strong> <code>&lt;div&gt;</code> - a block-level container.</li>\r\n            <li><strong>Spans:</strong> <code>&lt;span&gt;</code> - an inline container.</li>\r\n        </ul>\r\n        <h3>HTML Attributes:</h3>\r\n        <p>Attributes provide additional information about HTML elements. Attributes are always specified in the start tag and usually come in name/value pairs like: <code>name=\"value\"</code>.</p>\r\n        <pre><code class=\"language-html\">\r\n&lt;a href=\"https://www.example.com\"&gt;Visit Example&lt;/a&gt;\r\n&lt;img src=\"image.jpg\" alt=\"Description of image\" width=\"500\" height=\"600\"&gt;\r\n        </code></pre>\r\n        <ul>\r\n            <li><code>href</code> attribute in <code>&lt;a&gt;</code> specifies the URL of the page the link goes to.</li>\r\n            <li><code>src</code> attribute in <code>&lt;img&gt;</code> specifies the path to the image.</li>\r\n            <li><code>alt</code> attribute in <code>&lt;img&gt;</code> provides an alternative text for an image.</li>\r\n            <li><code>width</code> and <code>height</code> attributes in <code>&lt;img&gt;</code> provide the size of the image.</li>\r\n        </ul>\r\n    </div>\r\n', 2, '2025-05-29 08:08:14'),
(9, 5, 'HTML Forms and Input', '\r\n    <div class=\"note-content\">\r\n        <h2>HTML Forms and Input</h2>\r\n        <p>HTML forms are used to collect user input. The input is most often sent to a server for processing.</p>\r\n        <p>The <code>&lt;form&gt;</code> element is a container for different types of input elements, such as text fields, checkboxes, radio buttons, submit buttons, etc.</p>\r\n        <h3>Basic Form Structure:</h3>\r\n        <pre><code class=\"language-html\">\r\n&lt;form action=\"/submit_form.php\" method=\"post\"&gt;\r\n    &lt;label for=\"fname\"&gt;First name:&lt;/label&gt;&lt;br&gt;\r\n    &lt;input type=\"text\" id=\"fname\" name=\"fname\" value=\"John\"&gt;&lt;br&gt;\r\n    &lt;label for=\"lname\"&gt;Last name:&lt;/label&gt;&lt;br&gt;\r\n    &lt;input type=\"text\" id=\"lname\" name=\"lname\" value=\"Doe\"&gt;&lt;br&gt;&lt;br&gt;\r\n    &lt;input type=\"submit\" value=\"Submit\"&gt;\r\n&lt;/form&gt;\r\n        </code></pre>\r\n        <h3>Input Types:</h3>\r\n        <ul>\r\n            <li><code>text</code>: for single-line text input.</li>\r\n            <li><code>password</code>: for password input.</li>\r\n            <li><code>submit</code>: for a submit button.</li>\r\n            <li><code>radio</code>: for selecting one of many choices.</li>\r\n            <li><code>checkbox</code>: for selecting zero or more of many choices.</li>\r\n            <li><code>button</code>: for a clickable button.</li>\r\n            <li><code>date</code>: for a date picker.</li>\r\n            <li><code>email</code>: for email addresses.</li>\r\n        </ul>\r\n        <h3>Form Attributes:</h3>\r\n        <ul>\r\n            <li><code>action</code>: specifies where to send the form-data when a form is submitted.</li>\r\n            <li><code>method</code>: specifies the HTTP method (GET or POST) to be used when submitting the form data.</li>\r\n            <li><code>name</code>: specifies the name of an input element (used to reference form data after submission).</li>\r\n            <li><code>id</code>: specifies a unique id for an input element (used by labels and for CSS/JavaScript).</li>\r\n        </ul>\r\n    </div>\r\n', 3, '2025-05-29 08:08:14'),
(10, 5, 'HTML Tables', '\r\n    <div class=\"note-content\">\r\n        <h2>HTML Tables</h2>\r\n        <p>HTML tables allow web developers to arrange data into rows and columns.</p>\r\n        <h3>Basic Table Structure:</h3>\r\n        <pre><code class=\"language-html\">\r\n&lt;table&gt;\r\n  &lt;tr&gt;\r\n    &lt;th&gt;Company&lt;/th&gt;\r\n    &lt;th&gt;Contact&lt;/th&gt;\r\n    &lt;th&gt;Country&lt;/th&gt;\r\n  &lt;/tr&gt;\r\n  &lt;tr&gt;\r\n    &lt;td&gt;Alfreds Futterkiste&lt;/td&gt;\r\n    &lt;td&gt;Maria Anders&lt;/td&gt;\r\n    &lt;td&gt;Germany&lt;/td&gt;\r\n  &lt;/tr&gt;\r\n  &lt;tr&gt;\r\n    &lt;td&gt;Centro comercial Moctezuma&lt;/td&gt;\r\n    &lt;td&gt;Francisco Chang&lt;/td&gt;\r\n    &lt;td&gt;Mexico&lt;/td&gt;\r\n  &lt;/tr&gt;\r\n&lt;/table&gt;\r\n        </code></pre>\r\n        <h3>Table Elements:</h3>\r\n        <ul>\r\n            <li><code>&lt;table&gt;</code>: defines an HTML table.</li>\r\n            <li><code>&lt;tr&gt;</code>: defines a table row.</li>\r\n            <li><code>&lt;th&gt;</code>: defines a table header.</li>\r\n            <li><code>&lt;td&gt;</code>: defines a table data (cell).</li>\r\n            <li><code>&lt;caption&gt;</code>: defines a table caption.</li>\r\n            <li><code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, <code>&lt;tfoot&gt;</code>: group header content, body content, and footer content in a table.</li>\r\n        </ul>\r\n        <h3>Table Attributes:</h3>\r\n        <ul>\r\n            <li><code>border</code>: specifies the width of the border around the table and cells (though usually handled by CSS).</li>\r\n            <li><code>colspan</code>: specifies the number of columns a cell should span.</li>\r\n            <li><code>rowspan</code>: specifies the number of rows a cell should span.</li>\r\n        </ul>\r\n    </div>\r\n', 4, '2025-05-29 08:08:14'),
(11, 5, 'HTML Lists', '\r\n    <div class=\"note-content\">\r\n        <h2>HTML Lists</h2>\r\n        <p>HTML lists allow web developers to group a set of related items in lists.</p>\r\n        <h3>Unordered HTML List:</h3>\r\n        <p>An unordered list starts with the <code>&lt;ul&gt;</code> tag. Each list item starts with the <code>&lt;li&gt;</code> tag. The list items are marked with bullets (small black circles) by default.</p>\r\n        <pre><code class=\"language-html\">\r\n&lt;ul&gt;\r\n  &lt;li&gt;Coffee&lt;/li&gt;\r\n  &lt;li&gt;Tea&lt;/li&gt;\r\n  &lt;li&gt;Milk&lt;/li&gt;\r\n&lt;/ul&gt;\r\n        </code></pre>\r\n        <h3>Ordered HTML List:</h3>\r\n        <p>An ordered list starts with the <code>&lt;ol&gt;</code> tag. Each list item starts with the <code>&lt;li&gt;</code> tag. The list items are marked with numbers by default.</p>\r\n        <pre><code class=\"language-html\">\r\n&lt;ol&gt;\r\n  &lt;li&gt;Coffee&lt;/li&gt;\r\n  &lt;li&gt;Tea&lt;/li&gt;\r\n  &lt;li&gt;Milk&lt;/li&gt;\r\n&lt;/ol&gt;\r\n        </code></pre>\r\n        <h3>Description Lists:</h3>\r\n        <p>HTML also supports description lists (or definition lists). The <code>&lt;dl&gt;</code> tag defines the description list, the <code>&lt;dt&gt;</code> tag defines the term (name), and the <code>&lt;dd&gt;</code> tag describes each term.</p>\r\n        <pre><code class=\"language-html\">\r\n&lt;dl&gt;\r\n  &lt;dt&gt;Coffee&lt;/dt&gt;\r\n  &lt;dd&gt;- black hot drink&lt;/dd&gt;\r\n  &lt;dt&gt;Milk&lt;/dt&gt;\r\n  &lt;dd&gt;- white cold drink&lt;/dd&gt;\r\n&lt;/dl&gt;\r\n        </code></pre>\r\n    </div>\r\n', 5, '2025-05-29 08:08:14'),
(12, 5, 'HTML Semantics', '\r\n    <div class=\"note-content\">\r\n        <h2>HTML Semantics</h2>\r\n        <p>Semantic HTML elements are those that clearly describe their meaning in a human- and machine-readable way.</p>\r\n        <p>They contribute to better accessibility, SEO, and maintainability of web pages, as they provide context about the content they contain.</p>\r\n        <h3>Why use Semantic Elements?</h3>\r\n        <ul>\r\n            <li><strong>Accessibility:</strong> Screen readers can better interpret the page structure.</li>\r\n            <li><strong>SEO:</strong> Search engines can better understand the content\'s hierarchy and relevance.</li>\r\n            <li><strong>Maintainability:</strong> Code becomes easier to read and understand for developers.</li>\r\n        </ul>\r\n        <h3>Common Semantic Elements:</h3>\r\n        <ul>\r\n            <li><code>&lt;header&gt;</code>: Represents introductory content or a set of navigational links.</li>\r\n            <li><code>&lt;nav&gt;</code>: Represents a section of navigation links.</li>\r\n            <li><code>&lt;main&gt;</code>: Represents the dominant content of the <code>&lt;body&gt;</code>.</li>\r\n            <li><code>&lt;article&gt;</code>: Represents self-contained content, like a blog post or news article.</li>\r\n            <li><code>&lt;section&gt;</code>: Represents a standalone section of content within a document.</li>\r\n            <li><code>&lt;aside&gt;</code>: Represents content that is tangentially related to the content around it (e.g., a sidebar).</li>\r\n            <li><code>&lt;footer&gt;</code>: Represents a footer for its nearest sectioning content or the root element (the <code>&lt;body&gt;</code>).</li>\r\n            <li><code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code>: Used for self-contained content, like images, diagrams, or code listings, with an optional caption.</li>\r\n        </ul>\r\n        <p>Instead of using generic <code>&lt;div&gt;</code> elements everywhere, leveraging semantic HTML provides meaningful structure to your web documents.</p>\r\n    </div>\r\n', 6, '2025-05-29 08:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `enrolled_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `user_id`, `course_id`, `enrolled_at`) VALUES
(1, 1, 6, '2025-05-25 14:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `program` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `name`, `email`, `phone`, `age`, `gender`, `program`, `reg_date`) VALUES
(0, 'Collins Otieno', 'otienocollins0549@gmail.com', '+254768581254', 21, 'male', 'Web Design', '2025-05-25 12:27:12'),
(1, 'Evans', 'osumbaevans@gmail.com', '+254707868194', 22, 'male', 'web_design', '2025-01-17 08:03:46'),
(2, 'Michael Kingstone', 'michaelkingstone@gmail.com', '+254740404040', 29, 'male', 'online_marketing', '2025-01-17 08:08:12'),
(3, 'Marion Shee', 'marionshee@gmail.com', '+254709443829', 29, '', 'Graphic Design', '2025-01-17 08:12:21'),
(4, 'Joshua ', 'joshua@gmail.com', '+254707868194', 44, 'male', 'Online Marketing', '2025-01-22 07:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `survey_completed` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_picture`, `password`, `survey_completed`, `created_at`) VALUES
(1, 'Collins Otieno', 'otienocollins0549@gmail.com', '+254768581254', NULL, '$2y$10$/I57QegmTce8avaBUqcfYuzBHjcdXD6MOVtuhUVhkF3QEofHV1HU6', 1, '2025-05-25 13:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_surveys`
--

CREATE TABLE `user_surveys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `skill_level` varchar(50) NOT NULL,
  `goals` text NOT NULL,
  `referral` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_surveys`
--

INSERT INTO `user_surveys` (`id`, `user_id`, `dob`, `program`, `skill_level`, `goals`, `referral`, `created_at`) VALUES
(1, 1, '2005-01-02', 'Web Design', 'Beginner', 'be a full stack', 'online', '2025-05-25 13:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_notes`
--
ALTER TABLE `course_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_notes`
--
ALTER TABLE `course_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_surveys`
--
ALTER TABLE `user_surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_notes`
--
ALTER TABLE `course_notes`
  ADD CONSTRAINT `course_notes_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD CONSTRAINT `user_surveys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
