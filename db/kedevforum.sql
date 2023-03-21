-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 12:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedevforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `commentid` varchar(500) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `userKdfId` varchar(500) NOT NULL,
  `devitcomment` text NOT NULL,
  `commenttime` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `commentid`, `devitid`, `userKdfId`, `devitcomment`, `commenttime`) VALUES
(11, '641795cdd7630', 'qc4ts8tdjcizhdryodi0', '9045815174', 'Nice article here', '2023-03-19 23:07:57'),
(12, '64180fd8f3bf8', '2624qlczdl05g9fcbkq4', '9045815174', 'Cool notes', '2023-03-20 07:48:41'),
(13, '6418258ee2e1b', 'qc4ts8tdjcizhdryodi0', '8965543680', 'Dope', '2023-03-20 09:21:18'),
(14, '64183287a1188', 'b4n3lqyr2smregpw8aza', '9045815174', 'cool stuf', '2023-03-20 10:16:39'),
(15, '64183f86ab1f3', 'b4n3lqyr2smregpw8aza', '9045815174', 'Yooh Post more update', '2023-03-20 11:12:06'),
(16, '64183f92db2a5', 'b4n3lqyr2smregpw8aza', '9045815174', 'Mpesa', '2023-03-20 11:12:18'),
(17, '64183ff8d684f', 'b4n3lqyr2smregpw8aza', '8965543680', 'yoh big up bro!', '2023-03-20 11:14:00'),
(18, '641847d99e389', 'b4n3lqyr2smregpw8aza', '9045815174', 'Mpesa', '2023-03-20 11:47:37'),
(19, '6418485a0f06e', '2624qlczdl05g9fcbkq4', '8965543680', 'this is my comment', '2023-03-20 11:49:46'),
(20, '641852d28738a', 'qc4ts8tdjcizhdryodi0', '8464497026', 'Great', '2023-03-20 12:34:26'),
(21, '641854c6cf768', 'zkvgphknojzs9qrbv4cv', '9045815174', 'Cool', '2023-03-20 12:42:46'),
(22, '64191fa1677d1', 'zodh3lefvoqyq48vezs7', '9045815174', 'Mpesa', '2023-03-21 03:08:17'),
(23, '64192c5ee6e24', 'zodh3lefvoqyq48vezs7', '9045815174', '<p>If you are seeing <code>[object HTMLDivElement]</code> instead of the expected value, it means that you are trying to display an HTML element object as a string. To fix this, you can use the <code>innerHTML</code> or <code>textContent</code> property of the HTML element to get the content that you want to display.</p><p>Here is an example of how to get the content of a CKEditor instance and display it in a textarea element:</p><p><br></p><div tabindex=\"-1\" contenteditable=\"false\" data-cke-widget-wrapper=\"1\" data-cke-filter=\"off\" class=\"cke_widget_wrapper cke_widget_block cke_widget_codeSnippet\" data-cke-display-name=\"code snippet\" data-cke-widget-id=\"0\" role=\"region\" aria-label=\"code snippet widget\"><pre class=\"cke_widget_element\" data-cke-widget-data=\"%7B%22classes%22%3Anull%2C%22lang%22%3A%22javascript%22%2C%22code%22%3A%22%3C!--%20Add%20a%20container%20element%20for%20the%20CKEditor%20--%3E%5Cn%3Cdiv%20id%3D%5C%22editor%5C%22%3E%3C%2Fdiv%3E%5Cn%5Cn%3C!--%20Add%20a%20textarea%20element%20to%20display%20the%20content%20--%3E%5Cn%3Ctextarea%20id%3D%5C%22comment%5C%22%20name%3D%5C%22comment%5C%22%3E%3C%2Ftextarea%3E%5Cn%5Cn%3C!--%20Include%20CKEditor%20from%20a%20CDN%20--%3E%5Cn%3Cscript%20src%3D%5C%22https%3A%2F%2Fcdn.ckeditor.com%2Fckeditor5%2F32.0.0%2Fclassic%2Fckeditor.js%5C%22%3E%3C%2Fscript%3E%5Cn%5Cn%3Cscript%3E%5Cn%20%20%20%20%2F%2F%20Initialize%20the%20CKEditor%20instance%5Cn%20%20%20%20ClassicEditor%5Cn%20%20%20%20%20%20%20%20.create(%20document.querySelector(%20\'%23editor\'%20)%20)%5Cn%20%20%20%20%20%20%20%20.then(%20editor%20%3D%3E%20%7B%5Cn%20%20%20%20%20%20%20%20%20%20%20%20console.log(%20editor%20)%3B%5Cn%20%20%20%20%20%20%20%20%7D%20)%5Cn%20%20%20%20%20%20%20%20.catch(%20error%20%3D%3E%20%7B%5Cn%20%20%20%20%20%20%20%20%20%20%20%20console.error(%20error%20)%3B%5Cn%20%20%20%20%20%20%20%20%7D%20)%3B%5Cn%5Cn%20%20%20%20%2F%2F%20Get%20the%20content%20of%20the%20CKEditor%20instance%20and%20display%20it%20in%20the%20textarea%5Cn%20%20%20%20var%20editor%20%3D%20document.querySelector(\'%23editor\')%3B%5Cn%20%20%20%20var%20comment%20%3D%20document.querySelector(\'%23comment\')%3B%5Cn%5Cn%20%20%20%20editor.addEventListener(\'blur\'%2C%20function()%20%7B%5Cn%20%20%20%20%20%20%20%20comment.value%20%3D%20editor.innerHTML%3B%5Cn%20%20%20%20%7D)%3B%5Cn%3C%2Fscript%3E%5Cn%22%7D\" data-cke-widget-keep-attr=\"0\" data-widget=\"codeSnippet\"><code class=\"hljs language-javascript\">&lt;!-- Add a container element <span class=\"hljs-keyword\">for</span> the CKEditor --&gt;\n<span class=\"xml\"><span class=\"hljs-tag\">&lt;<span class=\"hljs-title\">div</span> <span class=\"hljs-attribute\">id</span>=<span class=\"hljs-value\">\"editor\"</span>&gt;</span><span class=\"hljs-tag\">&lt;/<span class=\"hljs-title\">div</span>&gt;</span>\n\n<span class=\"hljs-comment\">&lt;!-- Add a textarea element to display the content --&gt;</span>\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-title\">textarea</span> <span class=\"hljs-attribute\">id</span>=<span class=\"hljs-value\">\"comment\"</span> <span class=\"hljs-attribute\">name</span>=<span class=\"hljs-value\">\"comment\"</span>&gt;</span><span class=\"hljs-tag\">&lt;/<span class=\"hljs-title\">textarea</span>&gt;</span>\n\n<span class=\"hljs-comment\">&lt;!-- Include CKEditor from a CDN --&gt;</span>\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-title\">script</span> <span class=\"hljs-attribute\">src</span>=<span class=\"hljs-value\">\"https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js\"</span>&gt;</span><span class=\"javascript\"></span><span class=\"hljs-tag\">&lt;/<span class=\"hljs-title\">script</span>&gt;</span>\n\n<span class=\"hljs-tag\">&lt;<span class=\"hljs-title\">script</span>&gt;</span><span class=\"javascript\">\n    <span class=\"hljs-comment\">// Initialize the CKEditor instance</span>\n    ClassicEditor\n        .create( document.querySelector( <span class=\"hljs-string\">\'#editor\'</span> ) )\n        .then( editor =&gt; {\n            console.log( editor );\n        } )\n        .catch( error =&gt; {\n            console.error( error );\n        } );\n\n    <span class=\"hljs-comment\">// Get the content of the CKEditor instance and display it in the textarea</span>\n    <span class=\"hljs-keyword\">var</span> editor = document.querySelector(<span class=\"hljs-string\">\'#editor\'</span>);\n    <span class=\"hljs-keyword\">var</span> comment = document.querySelector(<span class=\"hljs-string\">\'#comment\'</span>);\n\n    editor.addEventListener(<span class=\"hljs-string\">\'blur\'</span>, <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span><span class=\"hljs-params\">()</span> {</span>\n        comment.value = editor.innerHTML;\n    });\n</span><span class=\"hljs-tag\">&lt;/<span class=\"hljs-title\">script</span>&gt;</span>\n</span></code></pre><img src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" class=\"cke_reset cke_widget_mask\"><span class=\"cke_reset cke_widget_drag_handler_container\" style=\"background: url(&quot;http://127.0.0.1:8000/editor/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.5); top: -15px; left: 0px;\"><img class=\"cke_reset cke_widget_drag_handler\" data-cke-widget-drag-handler=\"1\" src=\"data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==\" width=\"15\" title=\"Click and drag to move\" height=\"15\" role=\"presentation\"></span></div><p>In this example, we are using the <code>innerHTML</code> property of the CKEditor instance to get the HTML content of the editor. We are then setting the <code>value</code> property of the textarea element to the same content. Note that we are using the <code>blur</code> event to update the textarea element whenever the CKEditor instance loses focus.</p><p>If you want to get the plain text content of the CKEditor instance without any HTML tags, you can use the <code>textContent</code> property instead of the <code>innerHTML</code> property:</p>', '2023-03-21 04:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `deviters`
--

CREATE TABLE `deviters` (
  `ID` int(11) NOT NULL,
  `userDevAdded` varchar(500) NOT NULL,
  `userDevAdder` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deviters`
--

INSERT INTO `deviters` (`ID`, `userDevAdded`, `userDevAdder`) VALUES
(6, '9045815174', '8965543680'),
(12, '8965543680', '9045815174'),
(13, '9045815174', '8464497026'),
(19, '8464497026', '9045815174');

-- --------------------------------------------------------

--
-- Table structure for table `devitupdown`
--

CREATE TABLE `devitupdown` (
  `ID` int(11) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `userKdfId` varchar(500) NOT NULL,
  `devitype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devitupdown`
--

INSERT INTO `devitupdown` (`ID`, `devitid`, `userKdfId`, `devitype`) VALUES
(55, 'qc4ts8tdjcizhdryodi0', '9045815174', 'divitup'),
(59, '2624qlczdl05g9fcbkq4', '9045815174', 'divitup'),
(60, 'b4n3lqyr2smregpw8aza', '8965543680', 'divitup'),
(63, 'qc4ts8tdjcizhdryodi0', '8965543680', 'divitup'),
(70, '2624qlczdl05g9fcbkq4', '8965543680', 'divitup'),
(76, 'b4n3lqyr2smregpw8aza', '8464497026', 'divitup'),
(80, '2624qlczdl05g9fcbkq4', '8464497026', 'divitup'),
(91, 'b4n3lqyr2smregpw8aza', '9045815174', 'divitup'),
(92, 'ebql6qamctae18tlw5q8', '9045815174', 'divitup'),
(97, 'zodh3lefvoqyq48vezs7', '9045815174', 'divitup');

-- --------------------------------------------------------

--
-- Table structure for table `devitviews`
--

CREATE TABLE `devitviews` (
  `ID` int(11) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `devkdfid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devitviews`
--

INSERT INTO `devitviews` (`ID`, `devitid`, `devkdfid`) VALUES
(4, 'qc4ts8tdjcizhdryodi0', '9045815174'),
(5, '2624qlczdl05g9fcbkq4', '9045815174'),
(8, 'qc4ts8tdjcizhdryodi0', '8965543680'),
(9, 'b4n3lqyr2smregpw8aza', '9045815174'),
(10, 'b4n3lqyr2smregpw8aza', '8965543680'),
(11, '2624qlczdl05g9fcbkq4', '8965543680'),
(12, 'qc4ts8tdjcizhdryodi0', '8464497026'),
(13, 'zkvgphknojzs9qrbv4cv', '9045815174'),
(14, 'ebql6qamctae18tlw5q8', '9045815174'),
(15, 'zodh3lefvoqyq48vezs7', '9045815174'),
(16, 'y8fr93gli0q3hugn6ust', '9045815174'),
(17, 'rk20zuv122o3ahqr54u6', '9045815174');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `ID` int(11) NOT NULL,
  `feedid` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `email` varchar(500) NOT NULL,
  `postedTime` varchar(500) NOT NULL,
  `views` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `devitup` int(11) NOT NULL,
  `devitdown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`ID`, `feedid`, `title`, `content`, `email`, `postedTime`, `views`, `comment`, `devitup`, `devitdown`) VALUES
(3, 'qc4ts8tdjcizhdryodi0', 'UMESKIA SOFTWARES  UMESKIA SOFTWARES   UMESKIA SOFTWARES UMESKIA SOFTWARES', '<p>UMESKIA SOFTWARES is a Software Development Solutions and Services company that is passionate about creating innovative solutions for Our clients. Our services and solutions are designed with a focus on secure, scalable, expandable and reliable business systems.<br>All of our customers have benefited from our careful and professional attention to detail, relieving them of most, and in some cases, all of the responsibility for their Information Technology. By understanding our clients’ Business Strategy and Objectives we are able to advise them on, plan for and implement the necessary changes to improve and then keep all of their systems up to date for maximum efficiency and performance. As an open and responsive company our ethos is simple: to be your trusted partner, ensuring that anything that we are responsible for runs as smoothly as possible – with minimum impact to your users and customers.</p>', 'alvo967@gmail.com', '2023-03-19 22:34:18', 0, 3, 2, 0),
(4, '2624qlczdl05g9fcbkq4', 'About keDevForum', '<p>keDevForum is a place where&nbsp;kenyan&nbsp;developers can share their thoughts about creating experiences by engaging in technical discussions. It is intended to be a vibrant community of developers: Backend developers, Front-End developers, UI/UX designers and Full-stack developers. The forums serve as a community for these developers to communicate and experience development.</p><p>keDevForum &nbsp;is &nbsp;Open source meaning any developer can contribute on the source code of the platform.</p><p>You can easily ask questions and get answers. Whether the case may be making a script more efficient or having a starting point for an idea, asking a question here is a great start. The best answers are weighted towards the top of the question and voted on by our keDevForum Community&nbsp;Algorthim. It is dedicated to the conversation of range of topics, within and out of the programming world.</p><p>keDevForum is easy to use, powerful and highly customizable granting members of the keDevForum , often referred to as the keDevForum developers the rights to use, study, change and distribute the software and its source code to anyone and for any purpose. keDevForum developers are volunteers committed to developing , supporting and managing the KeDev forum software hence responsible for the future of keDevForum . As an open source project, the keDevForum Team is pushing to open up its development process as much as possible to make it easier for community members to get involved with the project. keDevForum developers actively contributing to the keDevForum project are recruited to join the team in an official capacity.</p>', 'alvo967@gmail.com', '2023-03-19 23:12:28', 0, 2, 3, 0),
(5, 'b4n3lqyr2smregpw8aza', 'Rise of Ai', '<p>Despite its widespread lack of familiarity, AI is a technology that is transforming every walk of life. It is a wide-ranging tool that enables people to rethink how we integrate information, analyze data, and use the resulting insights to improve decisionmaking. Our hope through this comprehensive overview is to explain AI to an audience of policymakers, opinion leaders, and interested observers, and demonstrate how AI already is altering the world and raising important questions for society, the economy, and governance.</p><p>In this paper, we discuss novel applications in finance, national security, health care, criminal justice, transportation, and smart cities, and address issues such as data access problems, algorithmic bias, AI ethics and transparency, and legal liability for AI decisions. We contrast the regulatory approaches of the U.S. and European Union, and close by making a number of recommendations for getting the most out of AI while still protecting important human values.<a href=\"https://www.brookings.edu/research/how-artificial-intelligence-is-transforming-the-world/#footnote-2\">[2]</a></p>', 'bryancybertech@gmail.com', '2023-03-20 09:18:53', 0, 5, 3, 0),
(6, 'zkvgphknojzs9qrbv4cv', 'HTTP ERROR 500', '<p>enable app.UseDeveloperExceptionPage(); in startup.cs file. Now execption will show in broweser instead of \"Localhost is currently unable to handle the request\"</p>', 'mosesgrey20@gmail.com', '2023-03-20 12:35:34', 0, 1, 0, 0),
(7, 'ebql6qamctae18tlw5q8', 'Registration AUTH Controller with Laravel', '<ol><li>Create a new controller using the command <strong>php artisan make:controller AuthController</strong>. This will generate a new controller file named <strong>AuthController.php</strong> in the <strong>app/Http/Controllers</strong> directory.</li><li>Open the <strong>AuthController.php</strong> file and add the following code to define the class:</li></ol><p>namespace App\\Http\\Controllers;\r\n</p><p>\r\n</p><p>use Illuminate\\Http\\Request;\r\n</p><p>\r\n</p><p>class AuthController extends Controller\r\n</p><p>{\r\n</p><p>&nbsp; &nbsp; // Controller methods will go here\r\n</p><p>}\r\n</p><p>This code defines a new controller class called <strong>AuthController</strong> that extends the base <strong>Controller</strong> class and imports the <strong>Illuminate\\Http\\Request</strong> class to handle incoming requests.</p><ol><li>Add methods to the <strong>AuthController</strong> class to handle authentication requests. For example, you might add a <strong>login</strong> method to handle user login requests:</li></ol>', 'alvo967@gmail.com', '2023-03-20 23:32:45', 0, 0, 1, 0),
(8, 'zodh3lefvoqyq48vezs7', 'SOFTWARES DEVELOPMENT', '<pre><code class=\"language-php\">namespace App\\Http\\Controllers;\r\n\r\nuse Illuminate\\Http\\Request;\r\n\r\nclass AuthController extends Controller\r\n{\r\n    // Controller methods will go here\r\n}\r\n</code></pre>', 'alvo967@gmail.com', '2023-03-20 23:37:44', 0, 2, 1, 0),
(9, 'y8fr93gli0q3hugn6ust', 'Registration Form With C#', '<p>Here is an example of a simple registration form using C# programming language:</p>\r\n\r\n<pre>\r\n<code class=\"language-cs\">using System;\r\nusing System.Windows.Forms;\r\n\r\nnamespace RegistrationForm\r\n{\r\n    public partial class Form1 : Form\r\n    {\r\n        public Form1()\r\n        {\r\n            InitializeComponent();\r\n        }\r\n\r\n        private void submitBtn_Click(object sender, EventArgs e)\r\n        {\r\n            // Get input values from form controls\r\n            string firstName = firstNameTxtBox.Text;\r\n            string lastName = lastNameTxtBox.Text;\r\n            string email = emailTxtBox.Text;\r\n            string password = passwordTxtBox.Text;\r\n\r\n            // Validate input values\r\n            if (string.IsNullOrEmpty(firstName) || string.IsNullOrEmpty(lastName) || \r\n                string.IsNullOrEmpty(email) || string.IsNullOrEmpty(password))\r\n            {\r\n                MessageBox.Show(\"All fields are required!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            if (!IsValidEmail(email))\r\n            {\r\n                MessageBox.Show(\"Invalid email format!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            if (password.Length &lt; 6)\r\n            {\r\n                MessageBox.Show(\"Password must be at least 6 characters long!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            // Create a new user object and save to database\r\n            User newUser = new User(firstName, lastName, email, password);\r\n            // Save to database or API\r\n\r\n            // Display success message\r\n            MessageBox.Show(\"Registration successful!\", \"Success\", MessageBoxButtons.OK, MessageBoxIcon.Information);\r\n            // Clear form controls\r\n            firstNameTxtBox.Text = \"\";\r\n            lastNameTxtBox.Text = \"\";\r\n            emailTxtBox.Text = \"\";\r\n            passwordTxtBox.Text = \"\";\r\n        }\r\n\r\n        private bool IsValidEmail(string email)\r\n        {\r\n            try\r\n            {\r\n                var addr = new System.Net.Mail.MailAddress(email);\r\n                return addr.Address == email;\r\n            }\r\n            catch\r\n            {\r\n                return false;\r\n            }\r\n        }\r\n    }\r\n\r\n    public class User\r\n    {\r\n        public string FirstName { get; set; }\r\n        public string LastName { get; set; }\r\n        public string Email { get; set; }\r\n        public string Password { get; set; }\r\n\r\n        public User(string firstName, string lastName, string email, string password)\r\n        {\r\n            FirstName = firstName;\r\n            LastName = lastName;\r\n            Email = email;\r\n            Password = password;\r\n        }\r\n    }\r\n}\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This code creates a form with four text boxes for the user to input their first name, last name, email, and password, and a submit button. When the user clicks the submit button, the input values are validated and if they are all valid, a new user object is created and saved to a database or API. If any of the input values are invalid, an error message is displayed.</p>', 'alvo967@gmail.com', '2023-03-21 02:39:22', 0, 0, 0, 0),
(10, 'rk20zuv122o3ahqr54u6', 'Registration Form With C#', '<p>Here is an example of a simple registration form using C# programming language:</p>\r\n\r\n<pre>\r\n<code class=\"language-php\">using System;\r\nusing System.Windows.Forms;\r\n\r\nnamespace RegistrationForm\r\n{\r\n    public partial class Form1 : Form\r\n    {\r\n        public Form1()\r\n        {\r\n            InitializeComponent();\r\n        }\r\n\r\n        private void submitBtn_Click(object sender, EventArgs e)\r\n        {\r\n            // Get input values from form controls\r\n            string firstName = firstNameTxtBox.Text;\r\n            string lastName = lastNameTxtBox.Text;\r\n            string email = emailTxtBox.Text;\r\n            string password = passwordTxtBox.Text;\r\n\r\n            // Validate input values\r\n            if (string.IsNullOrEmpty(firstName) || string.IsNullOrEmpty(lastName) || \r\n                string.IsNullOrEmpty(email) || string.IsNullOrEmpty(password))\r\n            {\r\n                MessageBox.Show(\"All fields are required!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            if (!IsValidEmail(email))\r\n            {\r\n                MessageBox.Show(\"Invalid email format!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            if (password.Length &lt; 6)\r\n            {\r\n                MessageBox.Show(\"Password must be at least 6 characters long!\", \"Error\", MessageBoxButtons.OK, MessageBoxIcon.Error);\r\n                return;\r\n            }\r\n\r\n            // Create a new user object and save to database\r\n            User newUser = new User(firstName, lastName, email, password);\r\n            // Save to database or API\r\n\r\n            // Display success message\r\n            MessageBox.Show(\"Registration successful!\", \"Success\", MessageBoxButtons.OK, MessageBoxIcon.Information);\r\n            // Clear form controls\r\n            firstNameTxtBox.Text = \"\";\r\n            lastNameTxtBox.Text = \"\";\r\n            emailTxtBox.Text = \"\";\r\n            passwordTxtBox.Text = \"\";\r\n        }\r\n\r\n        private bool IsValidEmail(string email)\r\n        {\r\n            try\r\n            {\r\n                var addr = new System.Net.Mail.MailAddress(email);\r\n                return addr.Address == email;\r\n            }\r\n            catch\r\n            {\r\n                return false;\r\n            }\r\n        }\r\n    }\r\n\r\n    public class User\r\n    {\r\n        public string FirstName { get; set; }\r\n        public string LastName { get; set; }\r\n        public string Email { get; set; }\r\n        public string Password { get; set; }\r\n\r\n        public User(string firstName, string lastName, string email, string password)\r\n        {\r\n            FirstName = firstName;\r\n            LastName = lastName;\r\n            Email = email;\r\n            Password = password;\r\n        }\r\n    }\r\n}\r\n</code></pre>\r\n\r\n<p>This code creates a form with four text boxes for the user to input their first name, last name, email, and password, and a submit button. When the user clicks the submit button, the input values are validated and if they are all valid, a new user object is created and saved to a database or API. If any of the input values are invalid, an error message is displayed.</p>', 'alvo967@gmail.com', '2023-03-21 04:04:30', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `devkdfid` varchar(500) NOT NULL,
  `fulnames` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `Deviters` int(11) NOT NULL,
  `Devees` int(11) NOT NULL,
  `profilepic` varchar(500) NOT NULL,
  `resetpassword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `devkdfid`, `fulnames`, `email`, `username`, `password`, `Deviters`, `Devees`, `profilepic`, `resetpassword`) VALUES
(1, '9045815174', 'Alvin Kiveu', 'alvo967@gmail.com', 'ceoumeskiasoftwares', '$2y$10$tViC/YrmnmEVDqoDrA2qiezukVYcnOBG6M2a9o.CRKkweDXd7XpRa', 2, 2, '1679378149profile.jpeg', ''),
(2, '8965543680', 'Bryan scott', 'bryancybertech@gmail.com', 'scott', '$2y$10$EBU7HVXo64JNauMa3ox4reHM5voOtUV5dK8f0qQMoVJPeD0pdIG9O', 1, 1, '', ''),
(3, '8464497026', 'Moses Grey', 'mosesgrey20@gmail.com', 'Grey', '$2y$10$NCtZKYBpXBLClzbeXqFIKu0k0mkak3arVwa8nOKB03x2DUDKrbXK2', 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `ID` int(11) NOT NULL,
  `usernotified` varchar(500) NOT NULL,
  `usernotifer` varchar(500) NOT NULL,
  `notificatointype` varchar(500) NOT NULL,
  `notificationmessage` text NOT NULL,
  `notificationtime` varchar(500) NOT NULL,
  `notificationstatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `usernotified`, `usernotifer`, `notificatointype`, `notificationmessage`, `notificationtime`, `notificationstatus`) VALUES
(8, '8965543680', '9045815174', 'divitup', 'devitup your devit', '2023-03-20 12:29:24', 'unread'),
(9, '8965543680', '9045815174', 'deviter', 'added you as a deviter', '2023-03-20 12:29:59', 'unread'),
(10, '8965543680', '8464497026', 'divitup', 'devitup your devit', '2023-03-20 12:32:22', 'unread'),
(11, '9045815174', '8464497026', 'divitup', 'devitup your devit', '2023-03-20 12:32:26', 'read'),
(12, '9045815174', '8464497026', 'deviter', 'added you as a deviter', '2023-03-20 12:33:44', 'read'),
(13, '9045815174', '8464497026', 'comment', 'has commented on your devit', '2023-03-20 12:34:26', 'read'),
(14, '8464497026', '9045815174', 'divitup', 'devitup your devit', '2023-03-20 12:35:48', 'read'),
(15, '8464497026', '9045815174', 'deviter', 'added you as a deviter', '2023-03-20 12:36:15', 'read'),
(16, '8464497026', '9045815174', 'comment', 'has commented on your devit', '2023-03-20 12:42:46', 'read'),
(17, '9045815174', '9045815174', 'divitup', 'devitup your devit', '2023-03-20 23:35:44', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table kedevforum.users: #1932 - Table &#039;kedevforum.users&#039; doesn&#039;t exist in engine
-- Error reading data for table kedevforum.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `kedevforum`.`users`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deviters`
--
ALTER TABLE `deviters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `devitupdown`
--
ALTER TABLE `devitupdown`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `devitviews`
--
ALTER TABLE `devitviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `deviters`
--
ALTER TABLE `deviters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `devitupdown`
--
ALTER TABLE `devitupdown`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `devitviews`
--
ALTER TABLE `devitviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
